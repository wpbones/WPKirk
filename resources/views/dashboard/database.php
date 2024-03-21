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

  <h1>Database</h1>

  <div class="wp-kirk-toc clearfix">
    <ul>
      <li><a href="#">Query Builder</a></li>
      <li><a href="#example">Example</a></li>
    </ul>
  </div>

  <div class="wp-kirk-toc-content">

    <p>WP Bones's database query builder provides a convenient, fluent interface to creating and running database
      queries. It can be used to perform most database operations in your WordPress instance.</p>

    <pre><code class="language-php">DB::table('users')->all()</code></pre>

    <pre><code class="language-json"><?php echo DB::table('users')
      ->all()
      ->dump(); ?></code></pre>

    <a name="example"></a>
    <h2>Example</h2>

<pre><code class="language-php">foreach (DB::table('users')->get() as $user) {
  echo "{$user->user_login}\n";
}</code></pre>

    <pre><code class="language-"><?php foreach (
      DB::table('users')->get()
      as $user
    ) {
      echo "{$user->user_login}\n";
    } ?></code></pre>

    <p>You can find more <a target="_blank" href="https://wpbones.vercel.app/docs/DatabaseORM/query-builder">example
        here</a></>

  </div>
</div>
