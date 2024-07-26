<?php

if (!defined('ABSPATH')) {
    exit();
}

/*
|--------------------------------------------------------------------------
| Custom page routes
|--------------------------------------------------------------------------
|
| Here is where you can register all page routes for your custom view.
| Then you will use $plugin->getPageUrl( 'custom_page' ) to get the URL.
|
*/

return [
  'first_custom_page' => [
    'title' => 'Title of page',
    'capability' => 'read',
    'route' => [
      'get' => 'Dashboard\DashboardController@customPage',
      'post' => 'Dashboard\DashboardController@customPage',
    ],
  ],
  'second_custom_page' => [
    'title' => 'Second',
    'capability' => 'read',
    'route' => [
      'post' => 'Dashboard\DashboardController@secondCustomPage',
    ],
  ],
];
