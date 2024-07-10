<?php

namespace WPKirk\CustomTaxonomyTypes;

use WPKirk\WPBones\Foundation\WordPressCustomTaxonomyTypeServiceProvider as ServiceProvider;

class MyCustomTaxonomy extends ServiceProvider
{
  protected $id = 'wp_kirk_tax';

  protected $name = 'Ship';

  protected $plural = 'Ships';

  protected $objectType = 'wp_kirk_cpt';

  protected $hierarchical = true;
}
