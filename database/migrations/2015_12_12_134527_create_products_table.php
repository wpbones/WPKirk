<?php

use WPKirk\WPBones\Database\Migrations\Migration;

class Products extends Migration {

  public function up()
  {

    $this->create( "CREATE TABLE {$this->tablename} (
              log_id bigint(20) unsigned NOT NULL auto_increment,
              user_id bigint(20) unsigned NOT NULL default '0',
              activity varchar(20) NOT NULL default 'updated',
              object_id bigint(20) unsigned NOT NULL default '0',
              object_type varchar(20) NOT NULL default 'post',
              activity_date datetime NOT NULL default '0000-00-00 00:00:00',
              PRIMARY KEY  (log_id),
              KEY user_id (user_id)
         ) {$this->charsetCollate};" );


  }

}
