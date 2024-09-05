<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<div class="wp-kirk wrap">
  <h1><?php _e('Hello, I\'m a Custom Page defined in', 'wp-kirk'); ?> <code class="language- inline">pages</code> <?php _e('folder', 'wp-kirk'); ?></h1>

  <p><?php _e('You may create a PHP file in', 'wp-kirk'); ?> <code class="language- inline">pages</code> <?php _e('folder and name it', 'wp-kirk'); ?> <code class="language- inline">custom_page.php</code>.</p>

  <pre><code class="language-php">&lt;?php

use WPKirk\WPBones\Routing\Pages\Support\Page;

class CustomPage extends Page
{
    public function title(): string
    {
        return "Hello, Custom Page!";
    }

    public function render()
    {
        return $this->plugin
        ->view('dashboard.custom_page')
        ->withAdminStyles('prism')
        ->withAdminScripts('prism')
        ->withAdminStyles('wp-kirk-common');
    }
}</code></pre>

  <form method="post"
    action="<?php echo $plugin->getPageUrl('first_custom_page'); ?>">
    <button class="button button-hero button-primary"><?php _e('Back', 'wp-kirk'); ?></button>
  </form>
</div>
