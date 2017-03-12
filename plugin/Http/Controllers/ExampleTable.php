<?php

namespace WPKirk\Http\Controllers;

use WPKirk\WPTables\Html\WPTable;

class ExampleTable extends WPTable
{

  protected $title = 'List of Discos';

  public function getColumnsAttribute()
  {
    return [
      'id'          => 'Name',
      'description' => 'Description',
    ];
  }

  public function getItems( $args = [] )
  {

    $fake = [];

    for( $i = 0; $i < 20; $i++ ) {
      $fake[] = [
        'id' => "Disco {$i}",
        'description' => 'Some description...'
      ];
    }

    return $fake;

  }
}
