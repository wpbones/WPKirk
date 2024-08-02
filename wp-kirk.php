<?php

/**
 * Plugin Name: WP Kirk
 * Plugin URI: https://github.com/wpbones/WPKirk
 * Description: WP Bones Demo WordPress plugin
 * Version: 1.5.9
 * Requires at least: 6.2
 * Requires PHP: 7.4
 * Author: Giovambattista Fazioli
 * Author URI: http://undolog.com
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wp-kirk
 * Domain Path: localization
 *
 */

if (!defined('ABSPATH')) {
    exit();
}

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

require_once __DIR__ . '/bootstrap/autoload.php';
