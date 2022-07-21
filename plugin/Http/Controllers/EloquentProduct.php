<?php

namespace WPKirk\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

class EloquentProduct extends Model
{
  /**
   * Disable Illuminate timestamp columns.
   *
   * @var boolean
   */
  public bool $timestamps = false;
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected string $table = 'products';

  /**
   * Get the table associated with the model.
   *
   * @return string
   */
  public function getTable(): string
  {
    global $wpdb;

    return $wpdb->prefix . preg_replace('/[[:<:]]' . $wpdb->prefix . '/', '', parent::getTable(), 1);
  }
}
