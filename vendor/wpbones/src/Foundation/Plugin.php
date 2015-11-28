<?php

namespace WPKirk\WPBones\Foundation;

use WPKirk\WPBones\Container\Container;
use WPKirk\WPBones\View\View;
use WPKirk\WPBones\Contracts\Foundation\Plugin as PluginContract;


class Plugin extends Container implements PluginContract{

  /**
   * The Bones framework version.
   *
   * @var string
   */
  const VERSION = '0.1.0';

  /**
   * The current globally available container (if any).
   *
   * @var static
   */
  protected static $instance;


  /**
   * The base path for the Laravel installation.
   *
   * @var string
   */
  protected $basePath;

  //
  public function __construct( $basePath )
  {
    $this->basePath = rtrim( $basePath, '\/' );

    // Fires before the administration menu loads in the admin.
    add_action( 'admin_menu', array( $this, 'admin_menu' ) );


    static::$instance = $this;

  }

  /**
   * Get the version number of the plugin.
   *
   * @return string
   */
  public function version()
  {
    return static::VERSION;
  }

  /**
   * Get the base path of the Laravel installation.
   *
   * @return string
   */
  public function basePath()
  {
      return $this->basePath;
  }

  /**
   * Get / set the specified configuration value.
   *
   * If an array is passed as the key, we will assume you want to set an array of values.
   *
   * @param  array|string $key
   * @param  mixed        $default
   *
   * @return mixed
   */
  public function config( $key = null, $default = null )
  {
    $parts = explode( ".", $key );

    $filename = $parts[ 0 ] . ".php";

    $array = include_once $this->basePath . '/config/' . $filename;

    if ( is_null( $key ) ) {
      return $array;
    }

    if ( isset( $array[ $key ] ) ) {
      return $array[ $key ];
    }

    unset( $parts[ 0 ] );

    foreach ( $parts as $segment ) {
      if ( ! is_array( $array ) || ! array_key_exists( $segment, $array ) ) {
        return wpbones_value( $default );
      }

      $array = $array[ $segment ];
    }

    return $array;
  }

  /**
   * Gets the value of an environment variable. Supports boolean, empty and null.
   *
   * @param  string $key
   * @param  mixed  $default
   *
   * @return mixed
   */
  public function env( $key, $default = null )
  {
    return wpbones_env( $key, $default );
  }

  //
  public function view( $key = null, $data = null )
  {

    $view = new View( $this, $key, $data );

    return $view;

  }

  /**
   * Fires before the administration menu loads in the admin.
   */

  public function admin_menu()
  {
    $menus = include_once $this->basePath . '/plugin/menus.php';

    if ( ! empty( $menus ) && is_array( $menus ) ) {

      foreach ( $menus as $menuKey => $menu ) {

        // TODO sanitize array keys
        $menu[ 'position' ]   = isset( $menu[ 'position' ] ) ? $menu[ 'position' ] : null;
        $menu[ 'capability' ] = isset( $menu[ 'capability' ] ) ? $menu[ 'capability' ] : 'read';

        $menuHook = add_menu_page( $menu[ 'page_title' ], $menu[ 'menu_title' ], $menu[ 'capability' ], $menuKey, '', $menu[ 'icon' ], $menu[ 'position' ] );

        foreach ( $menu[ 'items' ] as $subMenu ) {

          $submenuKey = isset( $submenuKey ) ? sanitize_key( $subMenu[ 'page_title' ] ) : $menuKey;
          //
          $hookParts = explode( "@", $subMenu[ 'view' ] );

          $hook = create_function( '', sprintf( '$instance = new %s; return( $instance->render( "%s" ) );',
                                        'WPKirk\\Http\\Controllers\\' . $hookParts[ 0 ],
                                        $hookParts[ 1 ] ) );

          //$hook      = [ 'WPKirk\\Http\\Controllers\\' . $hookParts[ 0 ], $hookParts[ 1 ] ];

          // TODO sanitize array keys
          $subMenu[ 'capability' ] = isset( $subMenu[ 'capability' ] ) ? $subMenu[ 'capability' ] : 'read';

          $submenuHook = add_submenu_page( $menuKey, $subMenu[ 'page_title' ], $subMenu[ 'menu_title' ], $subMenu[ 'capability' ], $submenuKey, $hook );

        }
      }
    }
  }

}