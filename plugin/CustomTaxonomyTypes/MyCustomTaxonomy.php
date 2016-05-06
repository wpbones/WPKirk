<?php

namespace WPKirk\plugin\CustomTaxonomyTypes;

use WPKirk\WPBones\Foundation\WordPressCustomTaxonomyTypeServiceProvider;

class MyCustomTaxonomy extends WordPressCustomTaxonomyTypeServiceProvider {

  protected $id     = 'wp_kirk_tax';
  protected $name   = 'Ship';
  protected $plural = 'Ships';

  protected $objectType = 'wp_kirk_cpt';

}