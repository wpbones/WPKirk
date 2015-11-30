#!/usr/bin/env php
<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
  require __DIR__ . '/vendor/autoload.php';
}

/*
|--------------------------------------------------------------------------
| Load WordPress
|--------------------------------------------------------------------------
|
| We have to load the WordPress environment.
|
*/
require __DIR__ . '/../../../wp-load.php';

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
  $plugin = require_once __DIR__ . '/bootstrap/plugin.php';
}


/**
 * @class BonesCommandLine
 */
class BonesCommandLine {

  const VERSION = '0.1.1';

  //
  public function __construct()
  {
    $this->handle();
  }

  //
  public static function run()
  {
    $instance = new self;

    return $instance;
  }

  //
  protected function help()
  {
    $this->info( "\nBones Version" . self::VERSION . "\n" );
    $this->info( "Usage:\n" );
    $this->line( "\tcommand [options] [arguments]" );

    echo "\n\n";
  }

  //
  protected function line( $str )
  {
    echo "\033[38;5;82m" . $str;
    echo "\033[0m\n";
  }

  //
  protected function info( $str )
  {
    echo "\033[38;5;213m" . $str;
    echo "\033[0m\n";
  }

  //
  protected function ask( $str )
  {
    echo "\n\e[38;5;88m$str\e[0m ";

    $handle = fopen( "php://stdin", "r" );
    $line   = fgets( $handle );

    fclose( $handle );

    return $line;
  }

  //
  protected function option( $option )
  {
    $argv = $_SERVER[ 'argv' ];

    // strip the application name
    array_shift( $argv );

    return in_array( $option, $argv );
  }

  //

  /**
   * Return an array with all matched files from root folder. This method release the follow filters:
   *
   *     wpdk_rglob_find_dir( true, $file ) - when find a dir
   *     wpdk_rglob_find_file( true, $file ) - when find a a file
   *     wpdk_rglob_matched( $regexp_result, $file, $match ) - after preg_match() done
   *
   * @brief get all matched files
   * @since 1.0.0.b4
   *
   * @param string $path    Folder root
   * @param string $match   Optional. Regex to apply on file name. For example use '/^.*\.(php)$/i' to get only php
   *                        file. Default is empty
   *
   * @return array
   */
  protected function recursiveScan( $path, $match = '' )
  {
    /**
     * Return an array with all matched files from root folder.
     *
     * @brief get all matched files
     * @note  Internal recursive use only
     *
     * @param string $path    Folder root
     * @param string $match   Optional. Regex to apply on file name. For example use '/^.*\.(php)$/i' to get only php file
     * @param array  &$result Optional. Result array. Empty form first call
     *
     * @return array
     */
    function _rglob( $path, $match = '', &$result = array() )
    {
      $files = glob( trailingslashit( $path ) . '*', GLOB_MARK );
      if ( false !== $files ) {
        foreach ( $files as $file ) {
          if ( is_dir( $file ) ) {
            $continue = true; //apply_filters( 'wpdk_rglob_find_dir', true, $file );
            if ( $continue ) {
              _rglob( $file, $match, $result );
            }
          }
          elseif ( ! empty( $match ) ) {
            $continue = true; //apply_filters( 'wpdk_rglob_find_file', true, $file );
            if ( false == $continue ) {
              break;
            }
            $regexp_result = array();
            $error         = preg_match( $match, $file, $regexp_result );
            if ( 0 !== $error || false !== $error ) {
              $regexp_result = true; //apply_filters( 'wpdk_rglob_matched', $regexp_result, $file, $match );
              if ( ! empty( $regexp_result ) ) {
                $result[] = $regexp_result[ 0 ];
              }
            }
          }
          else {
            $result[] = $file;
          }
        }

        return $result;
      }
    }

    $result = array();

    return _rglob( $path, $match, $result );
  }

  //
  protected function setNamespace( $namespace )
  {

    // previous namespace
    $previousNamespace = file_get_contents( 'namespace' );

    // check the same?
    if ( $previousNamespace == $namespace ) {
      $this->info( "\nThe new namespace is equal. Nothing to change\n" );
      exit( 0 );
    }

    // remove all composer
    $files = array_filter( array_map( function ( $e ) {
      if ( false === strpos( $e, "vendor/composer/" ) ) {
        return $e;
      }

      return false;
    }, recursiveScan( "*" ) ) );

    // merge
    $files = array_merge( $files, [
      'index.php',
      'composer.json',
    ] );


    // change namespace
    foreach ( $files as $file ) {

      $this->line( "Loading and process " . $file . "..." );

      //
      $content = file_get_contents( $file );

      //
      $replace = str_replace( $previousNamespace, $namespace, $content );

      // save new namespace
      file_put_contents( $file, $replace );
    }

    // save new namespace
    file_put_contents( 'namespace', $namespace );

    // run composer
    `composer dump-autoload --optimize`;
  }

  //
  protected function install()
  {
    // TODO check if the first time or if is time to install

    $res = `git clone https://github.com/gfazioli/WPBones.git vendor/wpbones`;

    $namespace = $this->ask( 'Enter name of your plugin (namespace):' );

    $this->setNamespace( $namespace );

  }

  //
  protected function handle()
  {
    $argv = $_SERVER[ 'argv' ];

    // strip the application name
    array_shift( $argv );

    if ( empty( $argv ) ) {
      $this->help();
    }
    elseif ( $this->option( 'namespace' ) ) {
      if ( ! empty( $argv[ 1 ] ) ) {
        $this->setNamespace( $argv[ 1 ] );
      }
    }
    elseif ( $this->option( 'install' ) ) {
      $this->install();
    }
  }
}

BonesCommandLine::run();