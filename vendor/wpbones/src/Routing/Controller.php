<?php

namespace WPKirk\WPBones\Routing;

use WPKirk\WPBones\View\View;

abstract class Controller {

  public function render( $method )
  {
    $view = $this->{$method}();

    if ( $view instanceof View ) {
      return $view->render();
    }
  }
}