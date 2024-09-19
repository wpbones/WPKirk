<?php

namespace WPKirk\Http\Controllers;

class ExampleModelController extends Controller
{
    public function index()
    {
        return WPKirk()
          ->view('dashboard.model')
          ->withAdminStyle('prism')
          ->withAdminScript('prism')
          ->withAdminStyle('wp-kirk-common');
    }
}
