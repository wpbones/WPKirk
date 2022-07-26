<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->
<?php

use WPKirk\Models\MyPluginProducts;

?>

<div class="wp-kirk wrap wp-kirk-sample">

  <h1>Model</h1>

  <div class="wp-kirk-toc clearfix">
    <ul>
      <li><a href="#">Model</a></li>
      <li><a href="#example">Example</a></li>
    </ul>
  </div>

  <div class="wp-kirk-toc-content">

    <p>In your Plugin you may use the Database Model class instead of the <a target="_blank"
                                                                             href="https://github.com/wpbones/WPBones/wiki/query-builder">Query
        Builder</a>.</p>
    <p>To use the Model convenction you need to extend the Model class:</p>

    <pre><code class="hljs"
               style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span>

<span class="hljs-keyword">namespace</span> <span class="hljs-title">WPKirk</span>\<span class="hljs-title">Models</span>;

<span class="hljs-keyword">use</span> <span class="hljs-title">WPKirk</span>\<span class="hljs-title">WPBones</span>\<span class="hljs-title">Database</span>\<span class="hljs-title">Model</span>;

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">MyPluginProducts</span> <span class="hljs-keyword">extends</span> <span class="hljs-title">Model</span>
</span>{
}</code></pre>

    <p>We don't support the automatic plurar naming of the table at the moment. Anyway, the default table name will be
      the "snake case" of the class name. For example, the class <code>Users</code> will be associated with the table
      <code>users</code>. The class <code>UsersLogged</code> will be associated with the table
      <code>users_logged</code>.
    </p>

    <p>If your model's corresponding database table does not fit this convention, you may manually specify the model's
      table name by defining a <code>table</code> property on the model:</p>

    <pre><code class="hljs"
               style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span>

<span class="hljs-keyword">namespace</span> <span class="hljs-title">WPKirk</span>\<span class="hljs-title">Http</span>\<span class="hljs-title">Models</span>;

<span class="hljs-keyword">use</span> <span class="hljs-title">WPKirk</span>\<span class="hljs-title">WPBones</span>\<span class="hljs-title">Database</span>\<span class="hljs-title">Model</span>;

<span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">MyPluginProducts</span> <span class="hljs-keyword">extends</span> <span class="hljs-title">Model</span>
</span>{

    <span class="hljs-comment">/**
     * The table associated with the model.
     * You may omit this property if you want to use the class name.
     *
     * <span class="hljs-doctag">@var</span> string
     */</span>
    <span class="hljs-keyword">protected</span> $table = <span class="hljs-string">'my_plugin_products’;

}</span></code></pre>

    <h2>Example</h2>

    <pre><code class="hljs"
               style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span> MyPluginProducts::all()</code></pre>

    <pre><code class="hljs"><details><?php
          echo MyPluginProducts::all()->dump();
          ?></details></code></pre>

    <p>You can find more <a target="_blank"
                            href="https://github.com/wpbones/WPBones/wiki/model">example
        here</a></>

  </div>
</div>