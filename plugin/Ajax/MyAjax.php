<?php

namespace WPKirk\plugin\Ajax;

use WPKirk\WPBones\Foundation\WordPressAjax;

class MyAjax extends WordPressAjax {

  protected $trusted = [
    'loggedIn'
  ];

  protected $logged = [
    'notLoggedIn'
  ];

  //
  public function loggedIn()
  {

    $resposne = "loggedIn";

    wp_send_json( $reponse );
  }

  //
  public function notLoggedIn()
  {
    $resposne = "notLoggedIn";


    wp_send_json( $reponse );
  }

}