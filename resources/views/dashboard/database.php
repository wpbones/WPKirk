<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->
<?php use WPKirk\WPBones\Database\DB; ?>

<div class="wp-kirk wrap wp-kirk-sample">

  <h1><?php _e('Database', 'wp-kirk'); ?></h1>

  <div class="wp-kirk-toc clearfix">
    <ul>
      	<li><a href="#query-builder"><?php _e('Query Builder', 'wp-kirk'); ?></a></li>
      <li><a href="#example"><?php _e('Example', 'wp-kirk'); ?></a></li>
    </ul>
  </div>

  <div class="wp-kirk-toc-content">

    <h2 id="query-builder"><?php _e('Query Builder', 'wp-kirk'); ?></h2>

    <p><?php _e("WP Bones's database query builder provides a convenient, fluent interface to creating and running database queries. It can be used to perform most database operations in your WordPress instance.", 'wp-kirk'); ?></p>

    <pre><code class="language-php">DB::table('users')->all()</code></pre>

    <pre><code class="language-json"><?php echo DB::table('users')
      ->all()
      ->dump(); ?></code></pre>

    <h2 id="example"><?php _e('Example', 'wp-kirk'); ?></h2>

<pre><code class="language-php">foreach (DB::table('users')->get() as $user) {
  echo "{$user->user_login}\n";
}</code></pre>

    <pre><code class="language-"><?php foreach (
      DB::table('users')->get()
      as $user
    ) {
      echo "{$user->user_login}\n";
    } ?></code></pre>

    <p><?php _e("You can find more", 'wp-kirk'); ?> <a target="_blank" href="https://wpbones.vercel.app/docs/DatabaseORM/query-builder"><?php _e("example here", 'wp-kirk'); ?></a></p>

  </div>
</div>
