<?php

namespace WPKirk\Http\Controllers;

class ExampleModelNoPrefixController extends Controller
{
  public function index()
  {
    return WPKirk()
      ->view('dashboard.model-no-prefix')
      ->withAdminStyle('prism')
      ->withAdminScript('prism')
      ->withAdminStyle('wp-kirk-common');
  }
}
