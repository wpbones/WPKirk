<?php

namespace WPKirk\Http\Controllers;

class ExampleAPIController extends Controller
{
  public function index()
  {
    return WPKirk()
      ->view('dashboard.api')
      ->withAdminStyles('prism')
      ->withAdminScripts('prism')
      ->withAdminStyles('wp-kirk-common');
  }
}
