<?php

use WPKirk\WPBones\Database\Seeder;

class WPMyPluginProductsSeeder extends Seeder
{
  /**
   * Usually, you should use the model name as the table name.
   * It will be converted to lowercase and with the WordPress prefix.
   *
   * @var string The table name.
   */
  protected $tablename = "WPMyPluginProducts";

  // Run the database seeds just once
  protected $runOnce = true;

  public function run()
  {
    $this->insert(
      "(name) VALUES 
            ('iMac'),
            ('iPod'),
            ('iPhone'),
            ('iPad')
            "
    );
  }
}
