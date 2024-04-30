<?php

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
    'menu_title' => 'WP Kirk Menu title',
    'capability' => 'read',
    'icon' => 'dashicons-lightbulb',
    'items' => [
      [
        'menu_title' => 'Main View',
        'route' => [
          'get' => 'Dashboard\DashboardController@firstMenu',
        ],
      ],
      [
        'menu_title' => 'Assets',
        'route' => [
          'get' => 'AssetsController@index',
        ],
      ],
      [
        'menu_title' => 'React Application',
        'route' => [
          'get' => 'ReactApplicationController@index',
        ],
      ],
      [
        'menu_title' => 'Application Settings',
        'route' => [
          'get' => 'ReactApplicationController@reactSettings',
        ],
      ],
      [
        'menu_title' => 'Ajax Example',
        'route' => [
          'get' => 'Dashboard\DashboardController@secondMenu',
        ],
      ],
      'options_submenu' => [
        'menu_title' => 'Options',
        'route' => [
          'get' => 'Dashboard\DashboardController@optionsMenu',
        ],
      ],
      [
        'menu_title' => 'Options View',
        'route' => [
          'get' => 'Dashboard\DashboardController@optionsView',
          'post' => 'Dashboard\DashboardController@saveOptions',
        ],
      ],
      [
        'menu_title' => 'Options View Resource',
        'route' => [
          'load' => 'Dashboard\DashboardResourceController@load',
          'resource' => 'Dashboard\DashboardResourceController',
        ],
      ],
      [
        'menu_title' => 'Html Tags',
        'route' => [
          'get' => 'Dashboard\DashboardController@html',
        ],
      ],
      [
        'menu_title' => 'Official Packages',
        'route' => [
          'get' => 'Dashboard\DashboardController@package',
          'post' => 'Dashboard\DashboardController@packagePost',
        ],
      ],
      [
        'menu_title' => 'Tables Example #1',
        'route' => [
          'load' => 'ExampleTableController@load',
          'get' => 'ExampleTableController@index',
        ],
      ],
      [
        'menu_title' => 'Tables Example #2',
        'route' => [
          'load' => 'ExampleTableController@loadFluentExample',
          'get' => 'ExampleTableController@indexFluentExample',
        ],
      ],
      [
        'menu_title' => 'Tables Example #3',
        'route' => [
          'load' => 'ExampleTableController@loadSearchExample',
          'get' => 'ExampleTableController@indexSearchExample',
        ],
      ],
      [
        'menu_title' => 'API',
        'route' => [
          'get' => 'ExampleAPIController@index',
        ],
      ],
      [
        'menu_title' => 'Database',
        'route' => [
          'get' => 'ExampleDatabaseController@index',
        ],
      ],
      [
        'menu_title' => 'Model',
        'route' => [
          'get' => 'ExampleModelController@index',
        ],
      ],
      [
        'menu_title' => 'Eloquent ORM',
        'route' => [
          'get' => 'ExampleEloquentController@index',
        ],
      ],
      [
        'menu_title' => 'Blade',
        'route' => [
          'get' => 'ExampleBladeController@index',
        ],
      ],
    ],
  ],
];
