<?php

namespace WPKirk\Http\Controllers;

use WPKirk\Http\Controllers\EloquentUser as User;

class ExampleBladeController extends Controller
{
    public function index()
    {

        $controller = <<<'EOT'
    <?php
    namespace WPKirk\Http\Controllers;

    use WPKirk\Http\Controllers\EloquentUser as User;

    class ExampleBladeController extends Controller
    {
        public function index()
        {
            return WPKirk()
              ->view('blade.demo', ['users' => User::all()])
              ->withAdminStyle('prism')
              ->withAdminScript('prism')
              ->withAdminStyle('wp-kirk-common');
        }
    }
    EOT;

        $code = '@foreach ($users as $user)
      <p>user_nicename: {{ $user->user_nicename }}</p>
      <p>user_email: {{ $user->user_email }}</p>
 @endforeach';


        return WPKirk()
          ->view('blade.demo', ['users' => User::all(), 'code' => $code, 'controller' => $controller])
          ->withAdminStyle('prism')
          ->withAdminScript('prism')
          ->withAdminStyle('wp-kirk-common');
    }
}
