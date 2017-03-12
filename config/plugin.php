<?php

return [
  
  /*
  |--------------------------------------------------------------------------
  | Use minified styles and scripts
  |--------------------------------------------------------------------------
  |
  | If you like gulp to compile and compress your styles and scripts,
  | the filenames in `public/css` will have `.min` as postfix. If this
  | setting is TRUE then it will be used the minified version.
  |
  */

  'minified' => false,

  /*
  |--------------------------------------------------------------------------
  | Screen options
  |--------------------------------------------------------------------------
  |
  | Here is where you can register the screen options for List Table.
  |
  */

  'screen_options' => [],

  /*
  |--------------------------------------------------------------------------
  | Custom Post Types
  |--------------------------------------------------------------------------
  |
  | Here is where you can register the Custom Post Types.
  |
  */

  'custom_post_types' => [ '\WPKirk\CustomPostTypes\MyCustomPostType' ],

  /*
  |--------------------------------------------------------------------------
  | Custom Taxonomies
  |--------------------------------------------------------------------------
  |
  | Here is where you can register the Custom Taxonomy Types.
  |
  */

  'custom_taxonomy_types' => [ '\WPKirk\CustomTaxonomyTypes\MyCustomTaxonomy' ],

  /*
  |--------------------------------------------------------------------------
  | Shortcodes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register the Shortcodes.
  |
  */

  'shortcodes' => [ '\WPKirk\Shortcodes\MyShortcodes' ],

  /*
  |--------------------------------------------------------------------------
  | Widgets
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the Widget for a plugin.
  |
  */

  'widgets' => [ '\WPKirk\Widgets\MyWidget' ],


  /*
  |--------------------------------------------------------------------------
  | Ajax
  |--------------------------------------------------------------------------
  |
  | Here is where you can register your own Ajax actions.
  |
  */

  'ajax' => [ '\WPKirk\Ajax\MyAjax' ],

  /*
  |--------------------------------------------------------------------------
  | Autoloaded Service Providers
  |--------------------------------------------------------------------------
  |
  | The service providers listed here will be automatically loaded on the
  | init to your plugin. Feel free to add your own services to
  | this array to grant expanded functionality to your applications.
  |
  */

  'providers' => [ ]

];