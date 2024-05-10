<?php

namespace WPKirk\Console;

use WPKirk\WPBones\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
  protected $commands = ['WPKirk\Console\Commands\SampleCommand'];
}
