<?php

namespace WPKirk\Http\Controllers;

use WPKirk\WPTables\Html\WPTable;

class ExampleTable extends WPTable
{
  protected $title = 'List of Discos';

  /**
   * Description
   *
   * @return string[]
   */
  public function getColumnsAttribute(): array
  {
    return [
      'id' => 'Name',
      'description' => 'Description',
    ];
  }

  public function getItems($args = []): array
  {
    $fake = [];

    for ($i = 0; $i < 20; $i++) {
      $fake[] = [
        'id' => "Disco {$i}",
        'description' => 'Some description...',
      ];
    }

    return $fake;
  }
}
