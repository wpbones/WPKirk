<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<div class="wp-kirk wrap">

  <h1>Options Resource View</h1>

  <h3>Current Method <?php echo ! isset( $method ) ? : $method ?></h3>

  <form action="" method="post">

    <button class="button">POST</button>

  </form>

  <hr/>

  <form action="" method="post">
    <input type="hidden" name="_method" value="PUT">
    <button class="button">PUT</button>

  </form>

  <hr/>

  <form action="" method="post">
    <input type="hidden" name="_method" value="patch">
    <button class="button">PATCH</button>

  </form>

  <hr/>

  <form action="" method="post">
    <input type="hidden" name="_method" value="DELETE">
    <button class="button">DELETE</button>

  </form>

  <hr/>

  <form action="" method="post">
    <input type="hidden" name="_redirect" value="http://undolog.com">
    <button class="button">POST with redirect</button>

  </form>


</div>