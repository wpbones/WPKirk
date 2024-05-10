<?php

use WPKirk\Models\MyPluginProducts;
use WPKirk\WPBones\Database\Seeder;

return new class extends Seeder {
  /**
   * It will be converted to lowercase and with the WordPress prefix.
   *
   * @var string The table name.
   */
  protected $tablename = 'my_plugin_products';

  // Run the database seeds just once
  protected $runOnce = true;

  public function run()
  {
    // insert by using the model class
    MyPluginProducts::insert([
      ['name' => 'iMac', 'price' => '100000'],
      ['name' => 'iPhone', 'price' => '20000'],
      ['name' => 'iPad', 'price' => '30000'],
      ['name' => 'iPod', 'price' => '10000'],
    ]);

    // insert by using the Seeder class
    // $this->insert(
    //   "(name) VALUES
    //         ('iMac'),
    //         ('iPod'),
    //         ('iPhone'),
    //         ('iPad')
    //         "
    // );
  }
};
