<?php

namespace WPKirk\Http\Controllers\Dashboard;

use WPKirk\Http\Controllers\Controller;
use WPKirk\PureCSSTabs\PureCSSTabsProvider;
use WPKirk\PureCSSSwitch\PureCSSSwitchProvider;
use WPKirk\WPBones\Foundation\Log\Log;

class DashboardController extends Controller
{
  public function firstMenu()
  {
    Log::debug('Log::debug sample');
    Log::info('Log::info sample');
    Log::notice('Log::notice sample');
    Log::warning('Log::warning sample');
    Log::error('Log::error sample');
    Log::critical('Log::critical sample');
    Log::alert('Log::alert sample');
    Log::emergency('Log::emergency sample');

    return WPKirk()
      ->view('dashboard.index')
      ->withAdminStyles('wp-kirk-common')
      ->withAdminStyles('prism')
      ->withAdminScripts('prism')
      ->with('my_inject_variable', 'Captain');
  }

  public function secondMenu()
  {
    return WPKirk()->view('dashboard.second')->withAdminStyles('wp-kirk-common')->withAdminScripts('wp-kirk-main');
  }

  public function optionsMenu()
  {
    return WPKirk()
      ->view('dashboard.options')
      ->withAdminStyles('prism')
      ->withAdminScripts('prism')
      ->withAdminStyles('wp-kirk-common');
  }

  public function optionsView()
  {
    return WPKirk()
      ->view('dashboard.optionsview')
      ->withAdminStyles('prism')
      ->withAdminScripts('prism')
      ->withAdminStyles('wp-kirk-common');
  }

  public function html()
  {
    return WPKirk()
      ->view('dashboard.html')
      ->withAdminStyles('wp-kirk-common')
      ->withAdminStyles('prism')
      ->withAdminScripts('prism')
      ->withAdminStyles('wp-kirk-dashboard');
  }

  public function package()
  {
    PureCSSTabsProvider::enqueueStyles();

    PureCSSSwitchProvider::enqueueStyles();

    return WPKirk()
      ->view('dashboard.package')
      ->withAdminStyles('wp-kirk-common')
      ->withAdminStyles('prism')
      ->withAdminScripts('prism');
  }

  public function packagePost()
  {
    PureCSSTabsProvider::enqueueStyles();

    PureCSSSwitchProvider::enqueueStyles();

    return WPKirk()->view('dashboard.package')->withAdminStyles('wp-kirk-common');
  }

  public function saveOptions()
  {
    if ($this->request->verifyNonce('Options')) {
      WPKirk()->options->update($this->request->getAsOptions());

      return WPKirk()
        ->view('dashboard.optionsview')
        ->withAdminStyles('wp-kirk-common')
        ->withAdminStyles('prism')
        ->withAdminScripts('prism')
        ->with('feedback', 'Options updated!');
    } else {
      return WPKirk()
        ->view('dashboard.optionsview')
        ->withAdminStyles('wp-kirk-common')
        ->withAdminStyles('prism')
        ->withAdminScripts('prism')
        ->with('feedback', 'Action Not Allowed!');
    }
  }

  public function customPage()
  {
    return WPKirk()
      ->view('dashboard.first_custom_page')
      ->withAdminStyles('wp-kirk-common')
      ->withAdminStyles('prism')
      ->withAdminScripts('prism')
      ->with('method', $this->request->method);
  }

  public function secondCustomPage()
  {
    return WPKirk()
      ->view('dashboard.second_custom_page')
      ->withAdminStyles('wp-kirk-common')
      ->withAdminStyles('prism')
      ->withAdminScripts('prism')
      ->with('method', $this->request->method);
  }
}
