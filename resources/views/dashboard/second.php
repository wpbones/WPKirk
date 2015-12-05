<!--
 |
 | In $this you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<div class="pippo">
  <h1>Hello, I'm a second view</h1>
  <h2><?php _e( 'You can localize me', 'wp-kirk' ) ?></h2>

  <button class="button-primary" id="ajax-trusted">Click me for Ajax trusted</button>
  <button class="button-secondary" id="ajax-logged">Click me for Ajax logged</button>
</div>