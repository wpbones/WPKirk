<?php

namespace WPKirk\Http\Controllers\Dashboard;

use WPKirk\Http\Controllers\Controller;

class DashboardController extends Controller
{

  public function index()
  {
    return WPKirk()->view( 'dashboard.index' );
  }
}