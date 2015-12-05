<?php

/*
|--------------------------------------------------------------------------
| Plugin init
|--------------------------------------------------------------------------
|
| Here is where you can register all actions or filters for your plugin.
| This file is included on `init` action of WordPress.
| You can use this file to add shortcode, for example.
|
*/

// add_action( 'init' , [] );


return [

  /*
  |--------------------------------------------------------------------------
  | Custom Post Types
  |--------------------------------------------------------------------------
  |
  | Here is where you can register the Custom Post Types.
  |
  */

  'custom_post_types' => [ \WPKirk\plugin\CusomPostTypes\MyCustomPostType::class ],

  /*
  |--------------------------------------------------------------------------
  | Custom Taxonomies
  |--------------------------------------------------------------------------
  |
  | Here is where you can register the Custom Post Types.
  |
  */

  'custom_taxonomies' => [],


  /*
  |--------------------------------------------------------------------------
  | Shortcodes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register the Custom Post Types.
  |
  */

  'shortcodes' => []

];