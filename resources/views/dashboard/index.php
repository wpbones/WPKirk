<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<div class="wp-kirk wrap wp-kirk-sample">

  <h1>Hello, I'm the first <?php echo $plugin->Name; ?> view</h1>

  <div class="wp-kirk-toc clearfix">
    <ul>
      <li><a href="#passing-data">Passing data to view</a></li>
      <li><a href="#configuration">Configuration</a></li>
      <li><a href="#plugin-information">Plugin information</a></li>
      <li><a href="#custom-pages">Custom Pages</a></li>
    </ul>
  </div>

  <div class="wp-kirk-toc-content">
    <h2>Welcome to the WP Bones template WordPress plugin</h2>
    <p>This is a simple template plugin for WordPress. It is based on the WP Bones framework.</p>
    <p>It is a  plugin that shows most of the features of the WP Bones framework. It is a good starting point for creating your own plugin.</p>

    <hr />

    <h3>PHP Version <?php echo phpversion(); ?></h3>

    <hr />
    <a name="passing-data"></a>
    <h2>Passing data to view</h2>

    <p>You may get variable from the controller. For example, the variable <code class="language- inline">kirk</code> is <?php echo $kirk; ?>
    </p>

    <hr />
    <a name="configuration"></a>
    <h2>Configuration</h2>
    <p>Get the <code class="language- inline">custom</code> configuration by using</p>

    <pre><code class="language-php">&lt;?php echo $plugin-&gt;config('custom.sample') ?&gt;</code></pre>

    <p>It will return</p>

    <pre><code class="language-"><?php echo $plugin->config("custom.sample"); ?></code></pre>

    <hr />
    <a name="plugin-information"></a>
    <h2>Plugin information</h2>
    <p>You may get the plugin information by using</p>


    <pre><code class="language-php">&lt;?php echo $plugin-&gt;Author ?&gt; // <?php echo $plugin->Author; ?></code></pre>

    <pre><code class="language-php">&lt;?php echo $plugin-&gt;Description ?&gt; // <?php echo $plugin->Description; ?></code></pre>

    <pre><code class="language-php">&lt;?php echo $plugin-&gt;Version ?&gt; // <?php echo $plugin->Version; ?></code></pre>

    <pre><code class="language-php">&lt;?php echo $plugin-&gt;TextDomain ?&gt; // <?php echo $plugin->TextDomain; ?></code></pre>

    <hr />
    <a name="custom-pages"></a>
    <h2>Custom Pages</h2>

    <p>To create a custom pages without a menu, you may config the <code class="language- inline">route.php</code> file in the
      <code class="language- inline">config</code>
      folder of the Plugin
    </p>

    <p>For example, you may create a <code class="language- inline">route.php</code> file in the <code class="language- inline">config</code>
      folder of the plugin</p>

    <p>Here is an example of <code class="language- inline">route.php</code></p>

    <pre><code class="language-php">&lt;?php
/*
|--------------------------------------------------------------------------
| Custom page routes
|--------------------------------------------------------------------------
|
| Here is where you can register all page routes for your custom view.
| Then you will use $plugin->getPageUrl( 'custom_page' ) to get the URL.
|
*/

return [

  'custom_page' => [
    'title'      => 'Title of page',
    'capability' => 'read',
    'route'      => [
      'get' => 'Dashboard\DashboardController@customPage',
      'post' => 'Dashboard\DashboardController@customPage',
    ]
  ],
  'second_custom_page' => [
    'title'      => 'Second',
    'capability' => 'read',
    'route'      => [
      'post' => 'Dashboard\DashboardController@secondCustomPage',
    ]
  ],
];</code></pre>


    <p>You can get the custom page URL by using</p>

    <pre><code class="language-php">&lt;?php echo $plugin-&gt;getPageUrl( 'custom_page' ) ?&gt; // <?php echo $plugin->getPageUrl(
      "custom_page"
    ); ?></code></pre>

    <p><a
        href="<?php echo $plugin->getPageUrl("first_custom_page"); ?>">Custom
        Page</a></p>

  </div>
</div>
