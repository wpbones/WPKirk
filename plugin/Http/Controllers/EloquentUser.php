<?php

namespace WPKirk\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

class EloquentUser extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected string $table = 'users';

  /**
   * The primary key for the model.
   *
   * @var string
   */
  protected string $primaryKey = 'ID';

  /**
   * Get the table associated with the model.
   *
   * @return string
   */
  public function getTable()
  {
    global $wpdb;

    return $wpdb->prefix . preg_replace('/[[:<:]]' . $wpdb->prefix . '/', '', parent::getTable(), 1);
  }
}
