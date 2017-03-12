<?php

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

  'custom_page' => [
    'title'      => 'Title of page',
    'capability' => 'read',
    'route'      => [
      'get' => 'Dashboard\DashboardController@customPage',
      'post' => 'Dashboard\DashboardController@customPage',
    ]
  ]

];