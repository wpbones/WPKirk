<?php

namespace WPKirk\Http\Controllers;

class ExampleEloquentController extends Controller
{
    public function index()
    {
        return WPKirk()
          ->view('dashboard.eloquent')
          ->withAdminStyle('prism')
          ->withAdminScript('prism')
          ->withAdminStyle('wp-kirk-common');
    }
}
