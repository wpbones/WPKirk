<?php

namespace WPKirk\Http\Controllers;

class ExampleModelController extends Controller
{
  public function index()
  {
    return WPKirk()
      ->view('dashboard.model')
      ->withAdminStyles('prism')
      ->withAdminScripts('prism')
      ->withAdminStyles('wp-kirk-common');
  }
}
