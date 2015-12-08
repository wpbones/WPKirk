<?php

namespace WPKirk\plugin\CustomTaxonomies;

use WPKirk\WPBones\Foundation\WordPressCustomTaxonomy;

class MyCustomTaxonomy extends WordPressCustomTaxonomy {

  protected $id     = 'wp_kirk_tax';
  protected $name   = 'Ship';
  protected $plural = 'Ships';

  protected $objectType = 'wp_kirk_cpt';

}