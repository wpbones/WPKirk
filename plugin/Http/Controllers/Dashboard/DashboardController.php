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
          ->withAdminStyle('wp-kirk-common')
          ->withAdminStyle('prism')
          ->withAdminScript('prism')
          ->with('my_inject_variable', 'Captain');
    }

    public function secondMenu()
    {
        return WPKirk()->view('dashboard.second')->withAdminStyle('wp-kirk-common')->withAdminScript('wp-kirk-main');
    }

    public function optionsMenu()
    {
        return WPKirk()
          ->view('dashboard.options')
          ->withAdminStyle('prism')
          ->withAdminScript('prism')
          ->withAdminStyle('wp-kirk-common');
    }

    public function optionsView()
    {
        return WPKirk()
          ->view('dashboard.optionsview')
          ->withAdminStyle('prism')
          ->withAdminScript('prism')
          ->withAdminStyle('wp-kirk-common');
    }

    public function html()
    {
        return WPKirk()
          ->view('dashboard.html')
          ->withAdminStyle('wp-kirk-common')
          ->withAdminStyle('prism')
          ->withAdminScript('prism')
          ->withAdminStyle('wp-kirk-dashboard');
    }

    public function package()
    {
        PureCSSTabsProvider::enqueueStyles();

        PureCSSSwitchProvider::enqueueStyles();

        return WPKirk()
          ->view('dashboard.package')
          ->withAdminStyle('wp-kirk-common')
          ->withAdminStyle('prism')
          ->withAdminScript('prism');
    }

    public function packagePost()
    {
        PureCSSTabsProvider::enqueueStyles();

        PureCSSSwitchProvider::enqueueStyles();

        return WPKirk()
                    ->view('dashboard.package')
                    ->withAdminStyle('wp-kirk-common')
                    ->withAdminStyle('prism')
          ->withAdminScript('prism');
    }

    public function saveOptions()
    {
        if ($this->request->verifyNonce('Options')) {
            WPKirk()->options->update($this->request->getAsOptions());

            return WPKirk()
              ->view('dashboard.optionsview')
              ->withAdminStyle('wp-kirk-common')
              ->withAdminStyle('prism')
              ->withAdminScript('prism')
              ->with('feedback', 'Options updated!');
        } else {
            return WPKirk()
              ->view('dashboard.optionsview')
              ->withAdminStyle('wp-kirk-common')
              ->withAdminStyle('prism')
              ->withAdminScript('prism')
              ->with('feedback', 'Action Not Allowed!');
        }
    }

    public function customPage()
    {
        return WPKirk()
          ->view('dashboard.first_custom_page')
          ->withAdminStyle('wp-kirk-common')
          ->withAdminStyle('prism')
          ->withAdminScript('prism')
          ->with('method', $this->request->method);
    }

    public function secondCustomPage()
    {
        return WPKirk()
          ->view('dashboard.second_custom_page')
          ->withAdminStyle('wp-kirk-common')
          ->withAdminStyle('prism')
          ->withAdminScript('prism')
          ->with('method', $this->request->method);
    }
}
