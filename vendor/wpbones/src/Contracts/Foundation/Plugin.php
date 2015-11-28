<?php

namespace WPKirk\WPBones\Contracts\Foundation;

use WPKirk\WPBones\Contracts\Container\Container;

interface Plugin extends Container {
  /**
   * Get the version number of the application.
   *
   * @return string
   */
  public function version();

  /**
   * Get the base path of the Laravel installation.
   *
   * @return string
   */
  public function basePath();
}