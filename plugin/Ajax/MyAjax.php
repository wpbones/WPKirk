<?php

namespace WPKirk\plugin\Ajax;

use WPKirk\WPBones\Foundation\WordPressAjax;

class MyAjax extends WordPressAjax {

  /**
   * List of the ajax actions executed by both logged and not logged users.
   * Here you will used a methods list.
   *
   * @var array
   */
  protected $trusted = [
    'trusted'
  ];

  /**
   * List of the ajax actions executed only by logged in users.
   * Here you will used a methods list.
   *
   * @var array
   */
  protected $logged = [
    'logged'
  ];

  /**
   * List of the ajax actions executed only by not logged in user, usually from frontend.
   * Here you will used a methods list.
   *
   * @var array
   */
  protected $notLogged = [
    'notLogged'
  ];

  public function trusted()
  {
    $response = "trusted";

    wp_send_json( $response );
  }

  public function logged()
  {
    $response = "logged";

    wp_send_json( $response );
  }

  public function notLogged()
  {
    $response = "notLogged";

    wp_send_json( $response );
  }

}