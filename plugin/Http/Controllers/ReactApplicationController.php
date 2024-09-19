<?php

namespace WPKirk\Http\Controllers;

class ReactApplicationController extends Controller
{
    public function index()
    {
        return WPKirk()->view('dashboard.react-app')->withAdminAppsScript('app');
    }

    public function reactSettings()
    {
        return WPKirk()
          ->view('dashboard.react-app')
          ->withAdminAppsScript('app', true, 'ReactApp', [
            'tab' => 'settings',
          ]);
    }
}
