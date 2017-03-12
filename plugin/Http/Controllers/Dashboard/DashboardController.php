<?php

namespace WPKirk\Http\Controllers\Dashboard;

use WPKirk\Http\Controllers\Controller;
use WPKirk\PureCSSTabs\PureCSSTabsProvider;
use WPKirk\PureCSSSwitch\PureCSSSwitchProvider;

class DashboardController extends Controller
{

  public function firstMenu()
  {
    return WPKirk()
      ->view( 'dashboard.index' )
      ->withAdminStyles( 'wp-kirk-common' )
      ->with( 'kirk', 'Captain' );
  }

  public function secondMenu()
  {
    return WPKirk()->view( 'dashboard.second' )
                   ->withAdminStyles( 'wp-kirk-common' )
                   ->withAdminScripts( 'wp-kirk-main' );
  }

  public function optionsMenu()
  {
    return WPKirk()->view( 'dashboard.options' )
                   ->withAdminStyles( 'wp-kirk-common' );
  }

  public function optionsView()
  {
    return WPKirk()->view( 'dashboard.optionsview' )
                   ->withAdminStyles( 'wp-kirk-common' );
  }

  public function html()
  {
    return WPKirk()
      ->view( 'dashboard.html' )
      ->withAdminStyles( 'wp-kirk-common' )
      ->withAdminStyles( 'wp-kirk-dashboard' );
  }

  public function package()
  {

    PureCSSTabsProvider::enqueueStyles();

    PureCSSSwitchProvider::enqueueStyles();

    return WPKirk()
      ->view( 'dashboard.package' )
      ->withAdminStyles( 'wp-kirk-common' );
  }

  public function packagePost()
  {

    PureCSSTabsProvider::enqueueStyles();

    PureCSSSwitchProvider::enqueueStyles();

    return WPKirk()
      ->view( 'dashboard.package' )
      ->withAdminStyles( 'wp-kirk-common' );
  }

  public function saveOptions()
  {
    if ( $this->request->verifyNonce( 'Options' ) ) {

      WPKirk()->options->update( $this->request->getAsOptions() );

      return WPKirk()->view( 'dashboard.optionsview' )
                     ->withAdminStyles( 'wp-kirk-common' )
                     ->with( 'feedback', 'Options updated!' );
    }
    else {
      return WPKirk()->view( 'dashboard.optionsview' )
                     ->withAdminStyles( 'wp-kirk-common' )
                     ->with( 'feedback', 'Action Not Allowed!' );
    }
  }

  public function customPage()
  {
    return WPKirk()->view( 'dashboard.custompage' )
                   ->withAdminStyles( 'wp-kirk-common' )
                   ->with( 'method', $this->request->method );
  }

}