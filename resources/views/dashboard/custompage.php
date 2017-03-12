<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<div class="wp-kirk wrap">
  <h1>Hello, I'm a Custom Page without menu</h1>

  <h3>Current Method <?php echo ! isset( $method ) ? : strtoupper( $method ) ?></h3>

  <hr/>

  <form method="post">
    <button class="button button-hero button-primary">Test Post</button>
  </form>

</div>