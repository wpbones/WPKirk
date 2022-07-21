<?php

namespace WPKirk\Console\Commands;

use WPKirk\WPBones\Console\Command;

class SampleCommand extends Command
{

  protected string $signature = 'wpkirk:sample {--name= : Display your name}';

  protected string $description = 'Example of bones command';

  /**
   * Description
   *
   * @return void
   */
  public function handle(): void
  {
    if ($this->options('name')) {
      $this->line('Hello, ' . $this->options('name'));
    } else {
      $this->line('Hello, World!');
    }
  }
}