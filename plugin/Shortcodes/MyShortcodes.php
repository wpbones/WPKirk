<?php

namespace WPKirk\plugin\Shortcodes;

use WPKirk\WPBones\Foundation\WordPressShortcodesServiceProvider;

class MyShortcodes extends WordPressShortcodesServiceProvider {

  /**
   * List of registred shortcodes.
   *
   * @var array
   */
  protected $shortcodes = [
    'my-shortcode' => 'myShortcodeMethod'
  ];


  /**
   * Example of shortcode.
   *
   * @param array $atts    Optional.Attribute into the shortcode
   * @param null  $content Optional. HTML content
   *
   * @return string
   */
  public function myShortcodeMethod( $atts = [ ], $content = null )
  {
    // Default values for shortcode
    $defaults = array(
      'computer' => false,
    );

    $atts = shortcode_atts( $defaults, $atts, 'wp_kirk' );

    return 'Computer, engage';
  }

}