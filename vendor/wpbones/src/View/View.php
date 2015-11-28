<?php

namespace WPKirk\WPBones\View;

use WPKirk\WPBones\Container\Container;

class View {

  /**
   * Description
   *
   * @var Container
   */
  protected $container;
  protected $key;
  protected $data;


  //
  public function __construct( $container, $key = null, $data = null )
  {

    $this->container = $container;
    $this->key       = $key;
    $this->data      = $data;

  }

  //
  protected function variables()
  {
    $variables = [ ];

    if ( ! is_null( $this->data ) && is_array( $this->data ) ) {
      foreach ( $this->data as $k => $v ) {
        $variables[] = sprintf( '$%s=unserialize( \'%s\' );', $k, serialize( $v ) );
      }
    }

    return $variables;
  }

  //
  protected function filename()
  {
    $filename = str_replace( '.', '/', $this->key ) . '.php';

    return $filename;
  }

  //
  public function render()
  {
    $func = create_function( '$this',
                             sprintf( "%s include_once '%s';",
                                      implode( "", $this->variables() ),
                                      $this->container->basePath() . '/resources/views/' . $this->filename() ) );

    return $func( $this->container );
  }

  //
  public function with( $data )
  {
    $this->data = $data;

    return $this;
  }

}