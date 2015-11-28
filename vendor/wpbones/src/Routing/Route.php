<?php

namespace WPKirk\WPBones\Routing;

class Route {

  static $menu = [];


  public static function get( $path )
  {
    self::$menu[] = $path;
  }

}