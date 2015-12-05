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
    'myShortocde'
  ];


  /**
   * Example of shortcode.
   *
   * @param array $atts    Optional.Attribute into the shortcode
   * @param null  $content Optional. HTML content
   *
   * @return string
   */
  public function myShortocde( $atts = [ ], $content = null )
  {
    // Default values for shortcode
    $defaults = array(
      'compuer' => false,
    );

    $atts = shortcode_atts( $defaults, $atts, 'wp_kirk' );

    return 'Computer, engage';
  }

}