<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<div class="wp-kirk wrap">

  <h1><?php _e('Hello, I\'m a second view', 'wp-kirk'); ?></h1>

  <h2><?php _e('You can localize me', 'wp-kirk'); ?></h2>

  <button class="button-primary" id="ajax-logged"><?php _e('Click me for Ajax logged', 'wp-kirk'); ?></button>
  <button class="button-primary" id="ajax-trusted"><?php _e('Click me for Ajax trusted', 'wp-kirk'); ?></button>
  <button class="button-secondary" id="ajax-notLogged"><?php _e('Click me for Ajax notLogged', 'wp-kirk'); ?></button>

</div>
