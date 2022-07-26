<?php

use WPKirk\WPBones\Database\Seeder;
use WPKirk\Models\MyPluginProducts;



return new class extends Seeder 
{
  /**
   * Usually, you should use the model name as the table name.
   * It will be converted to lowercase and with the WordPress prefix.
   *
   * @var string The table name.
   */
  protected $tablename = "my_plugin_products";

  // Run the database seeds just once
  protected $runOnce = true;

  public function run()
  {

    MyPluginProducts::insert([
      ['name' => 'iMac', 'price' => '100000'],
      ['name' => 'iPhone', 'price' => '20000'],
      ['name' => 'iPad', 'price' => '30000'],
      ['name' => 'iPod', 'price' => '10000']        
    ]
    );

  }
};
