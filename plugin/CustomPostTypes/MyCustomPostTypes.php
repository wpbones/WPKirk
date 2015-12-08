<?php

namespace WPKirk\plugin\CustomPostTypes;

use WPKirk\WPBones\Foundation\WordPressCustomPostType;

class MyCustomPostType extends WordPressCustomPostType {

  protected $id     = 'wp_kirk_cpt';
  protected $name   = 'Captain';
  protected $plural = 'Captains';

  /**
   * You may override this method in order to register your own actions and filters.
   *
   */
  public function boot()
  {
    // You may override this method
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