<?php

namespace WPKirk\Http\Controllers;

class ReactApplicationController extends Controller
{
  public function index()
  {
    return WPKirk()->view('dashboard.react-app')->withAdminAppsScripts('app');
  }

  public function reactSettings()
  {
    return WPKirk()
      ->view('dashboard.react-app')
      ->withAdminAppsScripts('app', true, 'ReactApp', [
        'tab' => 'settings',
      ]);
  }
}
