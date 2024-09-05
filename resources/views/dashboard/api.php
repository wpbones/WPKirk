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
      <li><a href="#rest-api"><?php _e('REST API', 'wp-kirk'); ?></a></li>
      <li><a href="#routing"><?php _e('Routing', 'wp-kirk'); ?></a></li>
      <li><a href="#http-methods"><?php _e('HTTP Methods', 'wp-kirk'); ?></a></li>
    </ul>
  </div>

  <div class="wp-kirk-toc-content">

    <!-- Current options -->
    <hr />
    <h2 id="rest-api">REST API</h2>

		<p><?php _e('From release v0.13+ WPBones provides a simple way to handle the WordPress Rest API.', 'wp-kirk'); ?></p>
    <p><?php _e('To create your custom API, you have to create a new folder into', 'wp-kirk'); ?> <code class="language- inline">/api</code> <?php _e('in the root of your plugin. The main folder will be the vendor. Usually, into the vendor folder you\'ll create the version folder as well. For example, you may create', 'wp-kirk'); ?></p>


    <pre><code class="language-sh">/api/vendor/v1</code></pre>

		<h2 id="routing"><?php _e('Routing', 'wp-kirk'); ?></h2>

    <p><?php _e('Now, we can start to create the Rest API route by adding a new file in the our structure. For example, we\'ll use', 'wp-kirk'); ?>
      <code class="language-sh inline">route.php</code>
    </p>

    <pre><code class="language-sh">/api/vendor/v1/route.php</code></pre>

    <p><?php _e('Let\'s see a simple implementation of', 'wp-kirk'); ?> <code class="language- inline">route.php</code></p>

    <pre><code class="language-php">&lt;?php
    use WPKirk\WPBones\Routing\API\Route;

    Route::get('/example', function () {
        return 'Hello World!';
    });</code></pre>


    <p><?php _e('You can try the API', 'wp-kirk'); ?> <code class="language- inline">/wp-json/wpkirk/v1/example</code> <a target="_blank"
        href="<?php echo get_site_url(); ?>/wp-json/wpkirk/v1/example"><?php _e('here', 'wp-kirk'); ?></a></p>

    <h2 id="http-methods"><?php _e('HTTP Methods', 'wp-kirk'); ?></h2>

    <p><?php _e('The Route class supports the following HTTP methods:', 'wp-kirk'); ?> <code class="language- inline">get</code>, <code class="language- inline">post</code>, <code class="language- inline">put</code>,
      <code class="language- inline">patch</code>, <code class="language- inline">delete</code> <?php _e('In short, the same supported by the WordPress REST API and defined in the', 'wp-kirk'); ?>
      <code class="language- inline">WP_REST_Server</code> class.
    </p>

    <p><?php _e('Let\'s see a simple implementation of', 'wp-kirk'); ?> <code class="language- inline">route.php</code> <?php _e('using the', 'wp-kirk'); ?> <code class="language- inline">post</code> <?php _e('method', 'wp-kirk'); ?></p>

    <pre><code class="language-php">&lt;?php
    use WPKirk\WPBones\Routing\API\Route;

    Route::post('/example', function () {
        return 'Hello World!';
    });</code></pre>



    <p><?php _e('Instead of use the static method', 'wp-kirk'); ?> <code class="language-php inline">Route::get()</code>, <code class="language-php inline">Route::post()</code>, <?php _e('and so on, you can use the', 'wp-kirk'); ?> <code class="language-php inline">::request()</code> <?php _e('instead. You will be able to use multiple HTTP verbs at the same time.', 'wp-kirk'); ?></p>

    <p><?php _e('Let\'s see a simple implementation of', 'wp-kirk'); ?> <code class="language- inline">route.php</code> <?php _e('using the', 'wp-kirk'); ?> <code class="language- inline">::request()</code> <?php _e('method', 'wp-kirk'); ?></p>

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

    <p><?php _e('You will find further information and details in the', 'wp-kirk'); ?> <a target="_blank"
        href="https://wpbones.vercel.app/docs/ServicesProvider/rest-api"><?php _e('Official WP Bones docs', 'wp-kirk'); ?></a></p>
  </div>
</div>
