<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->
<?php

use WPKirk\WPBones\Database\DB;

?>

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

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> DB::table(<span class="hljs-string">'users'</span>)-&gt;all()</code></pre>

    <pre><code class="hljs"><details><?php
    echo DB::table('users')->all()->dump();
  ?></details></code></pre>

    <a name="example"></a>
    <h2>Example</h2>


    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> 
<span class="hljs-keyword">foreach</span> (DB::table(<span class="hljs-string">'users'</span>)-&gt;get() <span class="hljs-keyword">as</span> $user) {
  <span class="hljs-keyword">echo</span> $user-&gt;user_login;
}</code></pre>

    <pre><code class="hljs"><ul><?php
    foreach (DB::table('users')->get() as $user) {
        echo "<li>{$user->user_login}</li>";
    }
  ?></ul></code></pre>

    <p>You can find more <a target="_blank" href="https://wpbones.vercel.app/docs/DatabaseORM/query-builder">example
        here</a></>

  </div>
</div>