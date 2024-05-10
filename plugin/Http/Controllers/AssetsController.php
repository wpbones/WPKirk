<?php

namespace WPKirk\Http\Controllers;

class AssetsController extends Controller
{
  public function index()
  {
    return WPKirk()
      ->view('dashboard.assets')
      ->withAdminStyles('wp-kirk-common')
      ->withAdminStyles('prism')
      ->withAdminScripts('prism')
      ->withAdminScripts('wp-react-component', ['wp-element']);
  }
}
