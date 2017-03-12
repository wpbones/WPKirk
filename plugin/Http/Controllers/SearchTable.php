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
    // here you can everide the properties
    $this->title = 'My amazing list of Cakes';

    $this->name = 'cakes';
  }

  public function getColumnsAttribute()
  {
    return [
      'id'          => 'Name',
      'description' => 'Description',
      'ingredients' => 'Ingredients',
    ];
  }

  public function getItems( $args = [] )
  {

    $fakes = [];

    $ingredients = [
      'Cream',
      'Vodka',
      'Choccolate',
      'Milk',
    ];

    for ( $i = 0; $i < 10; $i++ ) {

      shuffle( $ingredients );

      $fakes[] = [
        'id'          => "Cake {$i}",
        'description' => 'Some description...',
        'ingredients' => $ingredients[ 0 ],
      ];
    }

    $currentView = $this->getCurrentView();

    if ( $currentView !== 'all' ) {

      $filtered = [];

      foreach ( $fakes as $fake ) {
        if ( strtolower( $fake[ 'ingredients' ] ) == $currentView ) {
          $filtered[] = $fake;
        }
      }

      $fakes = $filtered;
    }

    $search = $this->getSearchValue();

    if( $search ) {
      $filtered = [];

      foreach ( $fakes as $fake ) {
        if ( strtolower( $fake[ 'id' ] ) == strtolower( $search ) ) {
          $filtered[] = $fake;
        }
      }

      $fakes = $filtered;
    }

    return $fakes;

  }

  public function getSearchBoxButtonLabelAttribute()
  {
    return __( 'Search Cakes' );
  }

  public function getViews()
  {
    return [
      'cream' => 'Cream',
    ];
  }

  public function getCurrentView()
  {
    if ( isset( $_REQUEST[ 'ingredients' ] ) && ! empty( $_REQUEST[ 'ingredients' ] ) ) {
      return $_REQUEST[ 'ingredients' ];
    }

    return parent::getCurrentView();
  }

  public function getViewCountCream()
  {
    $count = 0;

    foreach ( $this->items as $item ) {
      if ( $item[ 'ingredients' ] == 'Cream' ) {
        $count++;
      }
    }

    return $count;
  }

  public function getViewQueryArgCream()
  {
    return [
      'ingredients' => 'cream',
    ];
  }

  public function getBulkActionsForView( $view )
  {
    return [
      'delete'              => __( 'Delete' ),
      'keep_on_trash'       => __( 'Keep Trash' ),
      'fill_withChoccolate' => __( 'Choccolate' ),
    ];
  }

  public function processBulkActionDelete( $items )
  {
    // TODO: delete items

    $this->successMessage = "Done, deleted " . implode( ',', $items );

    $this->warningMessage = "Calm! This is a demo";
  }
}
