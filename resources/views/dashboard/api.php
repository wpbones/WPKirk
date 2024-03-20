<?php
if (!defined('ABSPATH')) {
  exit();
}
?>

<!--
|
| In $plugin you'll find an instance of Plugin class.
| If you'd like can pass variable to this view, for example:
|
| return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
|
-->

<div class="wp-kirk wrap wp-kirk-sample">

  <h1>API</h1>

  <div class="wp-kirk-toc clearfix">
    <ul>
      <li><a href="#rest-api">REST API</a></li>
      <li><a href="#routing">Routing</a></li>
      <li><a href="#http-methods">HTTP Methods</a></li>
    </ul>
  </div>

  <div class="wp-kirk-toc-content">

    <!-- Current options -->
    <hr />
    <a name="rest-api"></a>
    <h2>REST API</h2>

    <p>From release v0.13+ WPBones provides a simple way to handle the WordPress Rest API.</p>
    <p>To create your custom API, you have to create a new folder into <code>/api</code> in the root of your plugin. The
      main folder
      will be the vendor. Usually, into the vendor folder you'll create the version folder as well. For example, you may
      create</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px">/api/vendor/v1</code></pre>

    <a name="routing"></a>
    <h2>Routing</h2>

    <p>Now, we can start to create the Rest API route by adding a new file in the our structure. For example, we'll use
      <code>route.php</code>
    </p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px">/api/vendor/v1/route.php</code></pre>

    <p>Let's see a simple implementation of <code>route.php</code></p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">use</span> <span class="hljs-title">WPKirk</span>\<span class="hljs-title">WPBones</span>\<span class="hljs-title">Routing</span>\<span class="hljs-title">API</span>\<span class="hljs-title">Route</span>;

Route::get(<span class="hljs-string">'/example'</span>, <span class="hljs-function"><span class="hljs-keyword">function</span> (<span class="hljs-params"></span>) </span>{
    <span class="hljs-keyword">return</span> <span class="hljs-string">'Hello World!'</span>;
});</code></pre>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px">Hello, World!</code></pre>

    <p>You can try the API <code>/wp-json/wpkirk/v1/example</code> <a target="_blank"
        href="/wp-json/wpkirk/v1/example">here</a></p>

    <a name="http-methods"></a>
    <h2>HTTP Methods</h2>
    <p>The Route class supports the following HTTP methods: <code>get</code>, <code>post</code>, <code>put</code>,
      <code>patch</code>, <code>delete</code> In short, the same supported by the WordPress REST API and defined in the
      <code>WP_REST_Server</code> class.
    </p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">use</span> <span class="hljs-title">WPKirk</span>\<span class="hljs-title">WPBones</span>\<span class="hljs-title">Routing</span>\<span class="hljs-title">API</span>\<span class="hljs-title">Route</span>;

Route::post(<span class="hljs-string">'/example'</span>, <span class="hljs-function"><span class="hljs-keyword">function</span> (<span class="hljs-params"></span>) </span>{
    <span class="hljs-keyword">return</span> <span class="hljs-string">'Hello World!'</span>;
});</code></pre>

    <p>Instead of use the static method <code>Route::get()</code>, <code>Route::post()</code>, and so on, you can use
      the <code>::request()</code> instead. You will be able to use multiple HTTP verbs at the same time.</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">use</span> <span class="hljs-title">WPKirk</span>\<span class="hljs-title">WPBones</span>\<span class="hljs-title">Routing</span>\<span class="hljs-title">API</span>\<span class="hljs-title">Route</span>;

Route::request(<span class="hljs-string">'get'</span>, <span class="hljs-string">'/get_request'</span>, <span class="hljs-function"><span class="hljs-keyword">function</span> (<span class="hljs-params"></span>) </span>{
    <span class="hljs-keyword">return</span> <span class="hljs-string">'Hello World!'</span>;
});

<span class="hljs-comment">// HTTP verb is case insensitive</span>
Route::request(<span class="hljs-string">'GET'</span>, <span class="hljs-string">'/get_request'</span>, <span class="hljs-function"><span class="hljs-keyword">function</span> (<span class="hljs-params"></span>) </span>{
    <span class="hljs-keyword">return</span> <span class="hljs-string">'Hello World!'</span>;
});

<span class="hljs-comment">// you may use both strings and arrays</span>
Route::request([<span class="hljs-string">'get'</span>], <span class="hljs-string">'/get_request'</span>, <span class="hljs-function"><span class="hljs-keyword">function</span> (<span class="hljs-params"></span>) </span>{
    <span class="hljs-keyword">return</span> <span class="hljs-string">'Hello World!'</span>;
});

<span class="hljs-comment">// you may use multiple HTTP verbs</span>
Route::request([<span class="hljs-string">'get'</span>, <span class="hljs-string">'POST'</span>], <span class="hljs-string">'/multiple'</span>, <span class="hljs-function"><span class="hljs-keyword">function</span> (<span class="hljs-params"></span>) </span>{
    <span class="hljs-keyword">return</span> <span class="hljs-string">'Hello World!'</span>;
});</code></pre>

    <p>You will find further information and details in the <a target="_blank"
        href="https://wpbones.vercel.app/docs/ServicesProvider/rest-api">Official WP Bones docs</a></p>


  </div>

</div>