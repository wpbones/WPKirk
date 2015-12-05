<?php

namespace WPKirk\plugin\CusomPostTypes;

use WPKirk\WPBones\Foundation\WordPressCustomPostType;

class MyCustomPostType extends WordPressCustomPostType {

  protected $id     = 'wp-kirk';
  protected $name   = 'Captain';
  protected $plural = 'Captains';

  //
  public function boot()
  {

  }

  /**
   * Override this method to save/update your custom data.
   * This method is called by hook action save_post_{post_type}`
   *
   * @param int|string $post_id Post ID
   * @param object     $post    Optional. Post object
   *
   */
  public function update( $post_id, $post )
  {
    // You can override this method to save your own data
  }

}