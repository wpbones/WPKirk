<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<div class="kirk">
  <h1>Hello, I'm the first WPKirk view</h1>
  <p>You may get variable from the controller. For example, the variable <code>kirk</code>is <?php echo $kirk ?></p>

  <h2>Configuration</h2>
  <p>Get the <code>custom</code> configuration by using <code>echo $plugin->config( 'custom.sample' )</code></p>
  <p><?php echo $plugin->config( 'custom.sample' ) ?></p>

</div>