<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Logging Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log settings for your plugin.
    |
    | Available Settings: "single", "daily", "errorlog".
    |
    | Set to false or 'none' to stop logging.
    |
    */

    'log' => 'errorlog',

    'log_level' => 'debug',

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

  'screen_options' => [ ],

  /*
  |--------------------------------------------------------------------------
  | Custom Post Types
  |--------------------------------------------------------------------------
  |
  | Here is where you can register the Custom Post Types.
  |
  */

  'custom_post_types' => [ ],

  /*
  |--------------------------------------------------------------------------
  | Custom Taxonomies
  |--------------------------------------------------------------------------
  |
  | Here is where you can register the Custom Taxonomy Types.
  |
  */

  'custom_taxonomy_types' => [ ],


  /*
  |--------------------------------------------------------------------------
  | Shortcodes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register the Shortcodes.
  |
  */

  'shortcodes' => [ ],

  /*
  |--------------------------------------------------------------------------
  | Widgets
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the Widget for a plugin.
  |
  */

  'widgets' => [ ],


  /*
  |--------------------------------------------------------------------------
  | Ajax
  |--------------------------------------------------------------------------
  |
  | Here is where you can register your own Ajax actions.
  |
  */

  'ajax' => [ ],

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