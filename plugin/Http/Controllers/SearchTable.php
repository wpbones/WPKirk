<?php

namespace WPKirk\Http\Controllers;

use WPKirk\WPTables\Html\WPTable;

class SearchTable extends WPTable
{
  // check the boot() method
  protected $title = 'List of Cakes';

  protected $searchBox = true;

  public function boot()
  {
    // here you can override the properties
    $this->title = __('My amazing list of Cakes', 'wp-kirk');

    $this->name = 'cakes';
  }

  public function getColumnsAttribute(): array
  {
    return [
      'id' => 'Name',
      'description' => __('Description', 'wp-kirk'),
      'ingredients' => __('Ingredients', 'wp-kirk'),
    ];
  }

  public function getItems($args = [])
  {
    $fakes = [];

    $ingredients = ['Cream', 'Vodka', 'Choccolate', 'Milk'];

    for ($i = 0; $i < 10; $i++) {
      shuffle($ingredients);

      $fakes[] = [
        'id' => "Cake {$i}",
        'description' => 'Some description...',
        'ingredients' => $ingredients[0],
      ];
    }

    $currentView = $this->getCurrentView();

    if ($currentView !== 'all') {
      $filtered = [];

      foreach ($fakes as $fake) {
        if (strtolower($fake['ingredients']) == $currentView) {
          $filtered[] = $fake;
        }
      }

      $fakes = $filtered;
    }

    $search = $this->getSearchValue();

    if ($search) {
      $filtered = [];

      foreach ($fakes as $fake) {
        if (strtolower($fake['id']) == strtolower($search)) {
          $filtered[] = $fake;
        }
      }

      $fakes = $filtered;
    }

    return $fakes;
  }

  public function getCurrentView()
  {
    if (isset($_REQUEST['ingredients']) && !empty($_REQUEST['ingredients'])) {
      return $_REQUEST['ingredients'];
    }

    return parent::getCurrentView();
  }

  public function getSearchBoxButtonLabelAttribute()
  {
    return __('Search Cakes');
  }

  public function getViews()
  {
    return [
      'cream' => 'Cream',
    ];
  }

  public function getViewCountCream(): int
  {
    $count = 0;

    foreach ($this->items as $item) {
      if ($item['ingredients'] == 'Cream') {
        $count++;
      }
    }

    return $count;
  }

  public function getViewQueryArgCream(): array
  {
    return [
      'ingredients' => 'cream',
    ];
  }

  public function getBulkActionsForView($view)
  {
    return [
      'delete' => __('Delete'),
      'keep_on_trash' => __('Keep Trash'),
      'fill_withChoccolate' => __('Choccolate'),
    ];
  }

  public function processBulkActionDelete($items)
  {
    // TODO: delete items

    $this->successMessage = 'Done, deleted ' . implode(',', $items);

    $this->warningMessage = 'Calm! This is a demo';
  }
}
