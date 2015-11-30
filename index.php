<?php

/**
 * Plugin Name: WPKirk
 * Plugin URI: http://undolog.com
 * Description: Testing namespace
 * Version: 1.0.0
 * Author: wpXtreme, Inc.
 * Author URI: http://undolog.com
 * Text Domain: wpkirk_slug
 * Domain Path: localization
 *
 */

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels nice to relax.
|
*/
use WPKirk\WPBones\Foundation\Plugin;

require_once __DIR__ . '/bootstrap/autoload.php';


/*
|--------------------------------------------------------------------------
| Bootstrap the plugin
|--------------------------------------------------------------------------
|
| We need to bootstrap the plugin.
|
*/

$GLOBALS[ 'WPKirk' ] = require_once __DIR__ . '/bootstrap/plugin.php';

if ( ! function_exists( 'WPKirk' ) ) {

  /**
   * Return the instance of plugin.
   *
   * @return Plugin
   */
  function WPKirk()
  {
    return $GLOBALS[ 'WPKirk' ];
  }
}