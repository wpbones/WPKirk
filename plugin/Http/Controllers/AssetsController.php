<?php

namespace WPKirk\Http\Controllers;

class AssetsController extends Controller
{
    public function index()
    {
        return WPKirk()
          ->view('dashboard.assets')
          ->withAdminStyle('wp-kirk-common')
          ->withAdminStyle('prism')
          ->withAdminScript('prism')
          ->withAdminScript('wp-react-component', ['wp-element']);
    }
}
