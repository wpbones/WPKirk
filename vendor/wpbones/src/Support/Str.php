<?php

namespace WPKirk\WPBones\Support;

class Str {

  /**
   * Determine if a given string ends with a given substring.
   *
   * @param  string       $haystack
   * @param  string|array $needles
   *
   * @return bool
   */
  public static function endsWith( $haystack, $needles )
  {
    foreach ( (array) $needles as $needle ) {
      if ( (string) $needle === substr( $haystack, -strlen( $needle ) ) ) {
        return true;
      }
    }

    return false;
  }


  /**
   * Determine if a given string starts with a given substring.
   *
   * @param  string       $haystack
   * @param  string|array $needles
   *
   * @return bool
   */
  public static function startsWith( $haystack, $needles )
  {
    foreach ( (array) $needles as $needle ) {
      if ( $needle != '' && strpos( $haystack, $needle ) === 0 ) {
        return true;
      }
    }

    return false;
  }
}
