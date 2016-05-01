<?php

namespace WPKirk\plugin\Shortcodes;

use WPKirk\WPBones\Foundation\WordPressShortcodes;

class MyShortcodes extends WordPressShortcodes {

  /**
   * List of registred shortcodes.
   *
   * @var array
   */
  protected $shortcodes = [
    'myShortocode'
  ];


  /**
   * Example of shortcode.
   *
   * @param array $atts    Optional.Attribute into the shortcode
   * @param null  $content Optional. HTML content
   *
   * @return string
   */
  public function myShortocode( $atts = [ ], $content = null )
  {
    // Default values for shortcode
    $defaults = array(
      'computer' => false,
    );

    $atts = shortcode_atts( $defaults, $atts, 'wp_kirk' );

    return 'Computer, engage';
  }

}