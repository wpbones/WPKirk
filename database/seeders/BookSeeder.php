<?php

use WPKirk\Models\MyPluginBooks;
use WPKirk\WPBones\Database\Seeder;

return new class extends Seeder {
  /**
   * It will be converted to lowercase and with the WordPress prefix.
   *
   * @var string The table name.
   */
  protected $tablename = 'my_plugin_books';

  /**
   * Will use the WordPress prefix of the database.
   *
   * @since 1.7.0
   * @var bool
   */
  protected $usePrefix = false;

  // Run the database seeds just once
  protected $runOnce = true;

  public function run()
  {
    // insert by using the model class
    MyPluginBooks::insert([
      ['name' => 'Book iMac', 'price' => '100000'],
      ['name' => 'Book iPhone', 'price' => '20000'],
      ['name' => 'Book iPad', 'price' => '30000'],
      ['name' => 'Book iPod', 'price' => '10000'],
    ]);

    // insert by using the Seeder class
    // $this->insert(
    //   "(name) VALUES
    //         ('Book iMac'),
    //         ('Book iPod'),
    //         ('Book iPhone'),
    //         ('Book iPad')
    //         "
    // );
  }
};
