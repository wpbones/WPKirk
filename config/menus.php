<?php

/*
|--------------------------------------------------------------------------
| Plugin Menus routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the menu routes for a plugin.
| In this context the route are the menu link or hidden image.
|
*/

return [
  'wp_kirk_slug_menu' => [
    "page_title" => "WP Kirk Page title",
    "menu_title" => "WP Kirk Menu title",
    'capability' => 'read',
    'icon'       => '',
    'items'      => [
      [
        "page_title" => "First sub menu title",
        "menu_title" => "First sub menu Menu title",
        'capability' => 'read',
        'icon'       => '',
        'view'       => 'Dashboard\DashboardController@firstMenu',
      ],
      [
        "page_title" => "Second sub menu title",
        "menu_title" => "Second sub menu Menu title",
        'capability' => 'read',
        'icon'       => '',
        'view'       => 'Dashboard\DashboardController@secondMenu',
      ]

    ]
  ]
];
