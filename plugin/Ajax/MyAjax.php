<?php

namespace WPKirk\Ajax;

use WPKirk\WPBones\Foundation\WordPressAjaxServiceProvider as ServiceProvider;

class MyAjax extends ServiceProvider
{
  /**
   * List of the ajax actions executed by both logged and not logged users.
   * Here you will use a methods list.
   *
   * @var array
   */
  protected $trusted = ['trusted'];

  /**
   * List of the ajax actions executed only by logged-in users.
   * Here you will use a methods list.
   *
   * @var array
   */
  protected $logged = ['logged'];

  /**
   * List of the ajax actions executed only by not logged-in user, usually from frontend.
   * Here you will use a methods list.
   *
   * @var array
   */
  protected $notLogged = ['notLogged'];

  public function trusted()
  {
    $response = __('You have clicked Ajax Trusted', 'wp-kirk');

    wp_send_json($response);
  }

  public function logged()
  {
    $response = __('You have clicked Ajax Logged', 'wp-kirk');

    wp_send_json($response);
  }

  public function notLogged()
  {
    $response = __('You have clicked Ajax notLogged', 'wp-kirk');

    wp_send_json($response);
  }
}
