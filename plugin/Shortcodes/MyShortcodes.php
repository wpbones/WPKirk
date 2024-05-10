<?php

namespace WPKirk\Shortcodes;

use WPKirk\WPBones\Foundation\WordPressShortcodesServiceProvider as ServiceProvider;

class MyShortcodes extends ServiceProvider
{
  /**
   * List of registred shortcodes. {shortcode}/method
   *
   * @var array
   */
  protected $shortcodes = [
    'my-shortcode' => 'myShortcodeMethod',
    'wpbones_is_category' => 'wpBonesIsCategory',
  ];

  /**
   * Example of shortcode.
   *
   * @param array $atts    Optional.Attribute into the shortcode
   * @param null  $content Optional. HTML content
   *
   * @return string
   */
  public function myShortcodeMethod($atts = [], $content = null)
  {
    // Default values for shortcode
    $defaults = [
      'computer' => false,
    ];

    $atts = shortcode_atts($defaults, $atts, 'wp_kirk');

    return 'Computer, engage';
  }

  public function wpBonesIsCategory($atts = [], $content = null)
  {
    global $post;

    $defaults = [
      'post_type' => false,
      'taxonomy' => false,
      'category' => false,
    ];

    $atts = shortcode_atts($defaults, $atts, 'wpBonesIsCategory');

    if (
      empty($atts['post_type']) ||
      empty($atts['taxonomy']) ||
      empty($atts['category'])
    ) {
      return $content;
    }

    if (
      $post->post_type === $atts['post_type'] &&
      has_term($atts['category'], $atts['taxonomy'])
    ) {
      return $content;
    }

    return '';
  }
}
