<?php

if (!defined('ABSPATH')) {
  exit();
}

/*
|--------------------------------------------------------------------------
| Plugin Menus routes
|--------------------------------------------------------------------------
|
| Here is where you can register all the menu routes for a plugin.
| In this context, the route are the menu link.
|
*/

return [
  'wp_kirk_slug_menu' => [
    'menu_title' => 'WP Kirk Menu',
    'capability' => 'read',
    'icon' => 'wpbones-logo-menu.png',
    'items' => [
      [
        'menu_title' => __('Main View', 'wp-kirk'),
        'route' => [
          'get' => 'Dashboard\DashboardController@firstMenu',
        ],
      ],
      [
        'menu_title' => __('Assets', 'wp-kirk'),
        'route' => [
          'get' => 'AssetsController@index',
        ],
      ],
      [
        'menu_title' => __('React Application', 'wp-kirk'),
        'route' => [
          'get' => 'ReactApplicationController@index',
        ],
      ],
      [
        'menu_title' => __('React Settings', 'wp-kirk'),
        'route' => [
          'get' => 'ReactApplicationController@reactSettings',
        ],
      ],
      [
        'menu_title' => __('Ajax Example', 'wp-kirk'),
        'route' => [
          'get' => 'Dashboard\DashboardController@secondMenu',
        ],
      ],
      'options_submenu' => [
        'menu_title' => __('Options', 'wp-kirk'),
        'route' => [
          'get' => 'Dashboard\DashboardController@optionsMenu',
        ],
      ],
      [
        'menu_title' => __('Options View', 'wp-kirk'),
        'route' => [
          'get' => 'Dashboard\DashboardController@optionsView',
          'post' => 'Dashboard\DashboardController@saveOptions',
        ],
      ],
      [
        'menu_title' => __('Options Resource', 'wp-kirk'),
        'route' => [
          'load' => 'Dashboard\DashboardResourceController@load',
          'resource' => 'Dashboard\DashboardResourceController',
        ],
      ],
      [
        'menu_title' => __('HTML', 'wp-kirk'),
        'route' => [
          'get' => 'Dashboard\DashboardController@html',
        ],
      ],
      [
        'menu_title' => __('Official Packages', 'wp-kirk'),
        'route' => [
          'get' => 'Dashboard\DashboardController@package',
          'post' => 'Dashboard\DashboardController@packagePost',
        ],
      ],
      [
        'menu_title' => __('Tables Example #1', 'wp-kirk'),
        'route' => [
          'load' => 'ExampleTableController@load',
          'get' => 'ExampleTableController@index',
        ],
      ],
      [
        'menu_title' => __('Tables Example #2', 'wp-kirk'),
        'route' => [
          'load' => 'ExampleTableController@loadFluentExample',
          'get' => 'ExampleTableController@indexFluentExample',
        ],
      ],
      [
        'menu_title' => __('Tables Example #3', 'wp-kirk'),
        'route' => [
          'load' => 'ExampleTableController@loadSearchExample',
          'get' => 'ExampleTableController@indexSearchExample',
        ],
      ],
      [
        'menu_title' => __('API', 'wp-kirk'),
        'route' => [
          'get' => 'ExampleAPIController@index',
        ],
      ],
      [
        'menu_title' => __('Database', 'wp-kirk'),
        'route' => [
          'get' => 'ExampleDatabaseController@index',
        ],
      ],
      [
        'menu_title' => __('Model', 'wp-kirk'),
        'route' => [
          'get' => 'ExampleModelController@index',
        ],
      ],
      [
        'menu_title' => __('Eloquent ORM', 'wp-kirk'),
        'route' => [
          'get' => 'ExampleEloquentController@index',
        ],
      ],
      [
        'menu_title' => __('Blade', 'wp-kirk'),
        'route' => [
          'get' => 'ExampleBladeController@index',
        ],
      ],
    ],
  ],
];
