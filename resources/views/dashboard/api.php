<?php
if (!defined('ABSPATH')) {
    exit();
} ?>

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
    <h2 id="rest-api">REST API</h2>

    <p>From release v0.13+ WPBones provides a simple way to handle the WordPress Rest API.</p>
    <p>To create your custom API, you have to create a new folder into <code class="language- inline">/api</code> in the root of your plugin. The
      main folder
      will be the vendor. Usually, into the vendor folder you'll create the version folder as well. For example, you may
      create</p>

      <pre><code class="language-sh">/api/vendor/v1</code></pre>


    <h2 id="routing">Routing</h2>

    <p>Now, we can start to create the Rest API route by adding a new file in the our structure. For example, we'll use
      <code class="language-sh inline">route.php</code>
    </p>

    <pre><code class="language-sh">/api/vendor/v1/route.php</code></pre>

    <p>Let's see a simple implementation of <code class="language- inline">route.php</code></p>

    <pre><code class="language-php">&lt;?php
    use WPKirk\WPBones\Routing\API\Route;

    Route::get('/example', function () {
        return 'Hello World!';
    });</code></pre>


    <p>You can try the API <code class="language- inline">/wp-json/wpkirk/v1/example</code> <a target="_blank"
        href="<?php echo get_site_url(); ?>/wp-json/wpkirk/v1/example">here</a></p>

    <h2 id="http-methods">HTTP Methods</h2>
    <p>The Route class supports the following HTTP methods: <code class="language- inline">get</code>, <code class="language- inline">post</code>, <code class="language- inline">put</code>,
      <code class="language- inline">patch</code>, <code class="language- inline">delete</code> In short, the same supported by the WordPress REST API and defined in the
      <code class="language- inline">WP_REST_Server</code> class.
    </p>

    <p>Let's see a simple implementation of <code class="language- inline">route.php</code> using the <code class="language- inline">post</code> method</p>

    <pre><code class="language-php">&lt;?php
    use WPKirk\WPBones\Routing\API\Route;

    Route::post('/example', function () {
        return 'Hello World!';
    });</code></pre>



    <p>Instead of use the static method <code class="language-php inline">Route::get()</code>, <code class="language-php inline">Route::post()</code>, and so on, you can use
      the <code class="language-php inline">::request()</code> instead. You will be able to use multiple HTTP verbs at the same time.</p>

    <p>Let's see a simple implementation of <code class="language- inline">route.php</code> using the <code class="language- inline">::request()</code> method</p>

    <pre><code class="language-php">&lt;?php
    use WPKirk\WPBones\Routing\API\Route;

    Route::request('get', '/get_request', function () {
        return 'Hello World!';
    });

    // HTTP verb is case insensitive
    Route::request('GET', '/get_request', function () {
        return 'Hello World!';
    });

    // you may use both strings and arrays
    Route::request(['get'], '/get_request', function () {
        return 'Hello World!';
    });

    // you may use multiple HTTP verbs
    Route::request(['get', 'POST'], '/multiple', function () {
        return 'Hello World!';
    });</code></pre>

    <p>You will find further information and details in the <a target="_blank"
        href="https://wpbones.vercel.app/docs/ServicesProvider/rest-api">Official WP Bones docs</a></p>
  </div>
</div>
