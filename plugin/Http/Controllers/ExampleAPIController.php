<?php

namespace WPKirk\Http\Controllers;

class ExampleAPIController extends Controller
{
    public function index()
    {
        return WPKirk()
          ->view('dashboard.api')
          ->withAdminStyle('prism')
          ->withAdminScript('prism')
          ->withAdminStyle('wp-kirk-common');
    }
}
