<?php

use WPKirk\WPBones\Support\Str;

if ( ! function_exists( 'wpbones_value' ) ) {
  /**
   * Return the default value of the given value.
   *
   * @param  mixed $value
   *
   * @return mixed
   */
  function wpbones_value( $value )
  {
    return $value instanceof Closure ? $value() : $value;
  }
}

if ( ! function_exists( "wpbones_env" ) ) {

  /**
   * Gets the value of an environment variable. Supports boolean, empty and null.
   *
   * @param  string $key
   * @param  mixed  $default
   *
   * @return mixed
   */
  function wpbones_env( $key, $default = null )
  {

    $value = getenv( $key );

    if ( $value === false ) {
      return wpbones_value( $default );
    }

    switch ( strtolower( $value ) ) {
      case 'true':
      case '(true)':
        return true;

      case 'false':
      case '(false)':
        return false;

      case 'empty':
      case '(empty)':
        return '';

      case 'null':
      case '(null)':
        return;
    }

    if ( Str::startsWith( $value, '"' ) && Str::endsWith( $value, '"' ) ) {
      return substr( $value, 1, -1 );
    }

    return $value;
  }
}