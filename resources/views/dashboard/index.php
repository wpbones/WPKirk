<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<div class="wp-kirk wrap wp-kirk-sample">

  <h1><?php printf(__('Hello, I\'m the first %s view', 'wp-kirk'), $plugin->Name); ?></h1>


  <div class="wp-kirk-toc clearfix">
    <ul>
      <li><a href="#passing-data"><?php _e('Passing data to view', 'wp-kirk'); ?></a></li>
      <li><a href="#configuration"><?php _e('Configuration', 'wp-kirk'); ?></a></li>
      <li><a href="#flags"><?php _e('Flags', 'wp-kirk'); ?></a></li>
      <li><a href="#plugin-info"><?php _e('Plugin information', 'wp-kirk'); ?></a></li>
      <li><a href="#custom-pages"><?php _e('Custom Pages', 'wp-kirk'); ?></a></li>
    </ul>
  </div>

  <div class="wp-kirk-toc-content">
    <h2><?php _e('Welcome to the WP Bones template WordPress plugin', 'wp-kirk'); ?></h2>
    <p><?php _e('This is a simple template plugin for WordPress. It is based on the WP Bones framework.', 'wp-kirk'); ?></p>
    <p><?php _e('It is a plugin that shows most of the features of the WP Bones framework. It is a good starting point for creating your own plugin.', 'wp-kirk'); ?></p>

    <hr />

    <h3>PHP Version <?php echo phpversion(); ?></h3>

    <hr />

    <p><?php _e('This view is displayed by a Controller connected to the menu you have selected.', 'wp-kirk'); ?></p>
    <p><?php _e('The menu is defined in the', 'wp-kirk'); ?> <code class="language- inline">config/menus.php</code> <?php _e('file.', 'wp-kirk'); ?></p>

    <pre><code class="language-php">return [
      'wp_kirk_slug_menu' => [
        'menu_title' => 'WP Kirk Menu',
        'capability' => 'read',
        'icon' => 'wpbones-logo-menu.png',
        'items' => [
          [
            'menu_title' => __('Main View', 'wp-kirk'),
            'route' => [
              'get' => 'Dashboard\DashboardController@firstMenu',
            ],
          ],
          ...</code></pre>


    <p><?php _e('The controller is located in the', 'wp-kirk'); ?> <code class="language- inline">/plugin/Http/Controllers/Dashboard/DashboardController.php</code> <?php _e('file.', 'wp-kirk'); ?></p>

    <pre><code class="language-php">class DashboardController extends Controller {
      public function firstMenu() {
        return WPKirk()
          ->view('dashboard.index')
          ->withAdminStyles('wp-kirk-common')
          ->withAdminStyles('prism')
          ->withAdminScripts('prism')
          ->with('my_inject_variable', 'Captain');
      }
  }</code></pre>

    <p><?php _e('The HTML part view is located in the', 'wp-kirk'); ?> <code class="language- inline">resources/views/dashboard/index.php</code> <?php _e('file.', 'wp-kirk'); ?></p>

    <h2 id="passing-data"><?php _e('Passing data to view', 'wp-kirk'); ?></h2>

    <p><?php _e('You may get variable from the controller. For example, the variable', 'wp-kirk'); ?> <code class="language- inline">my_inject_variable</code> <?php _e('is', 'wp-kirk'); ?> <?php echo $my_inject_variable; ?>
    </p>

    <hr />
    <h2 id="configuration"><?php _e('Configuration', 'wp-kirk'); ?></h2>
    <p><?php _e('Get the', 'wp-kirk'); ?> <code class="language- inline">custom</code> <?php _e('configuration by using', 'wp-kirk'); ?></p>

    <pre><code class="language-php">&lt;?php echo $plugin-&gt;config('custom.sample') ?&gt;</code></pre>

    <p><?php _e('It will return', 'wp-kirk'); ?></p>

    <pre><code class="language-"><?php echo $plugin->config("custom.sample"); ?></code></pre>

    <hr />
    <h2 id="flags"><?php _e('Flags', 'wp-kirk'); ?></h2>
    <p><?php _e('The new optional <code>flags.yaml</code> file is used to set flags for the plugin. The flags are used to enable or disable features in the plugin.', 'wp-kirk'); ?></p>
    <p><?php _e('Why use flags instead the PHP code?', 'wp-kirk'); ?></p>
    <ul>
      <li><?php _e('The flags file is specifically designed to be used by non-developers.', 'wp-kirk'); ?></li>
      <li><?php _e('It\'s easier to understand and modify.', 'wp-kirk'); ?></li>
      <li><?php _e('For this reason, it\'s recommended to use YAML flags instead of PHP code.', 'wp-kirk'); ?></li>
      <li><?php _e('You can provide this file to your clients or users, and they can easily change the behavior of the plugin.', 'wp-kirk'); ?></li>
      <li><?php _e('Remember that the flags file is optional. You can use it or not.', 'wp-kirk'); ?></li>
    </ul>

    <pre><code class="language-yaml"># The version of the file is 1.0.0
version: "1.0.0"
example:
  # Enable or disable the Example feature
  enabled: true
  # Throttle request time in minutes
  # By setting this value to 0, the feature will be disabled
  throttle: 5
  # Request timeout
  timeout: 0)</code></pre>

    <p><?php _e('You may get the flag by using', 'wp-kirk'); ?></p>

    <pre><code class="language-php">WPkirk()-&gt;flags('flag_name')</code></pre>

    <p><?php _e('You may use the dot notation to get the flag.', 'wp-kirk'); ?></p>
    <pre><code class="language-php">WPkirk()-&gt;flags('flag_name.sub_flag')</code></pre>

    <p><?php _e('For example', 'wp-kirk'); ?></p>
    <pre><code class="language-php">WPkirk()-&gt;flags('version'); // <?php echo WPkirk()->flags('version'); ?></code></pre>
    <pre><code class="language-php">WPkirk()-&gt;flags('example.throttle'); // <?php echo WPkirk()->flags('example.throttle'); ?></code></pre>
    <pre><code class="language-php">WPkirk()-&gt;flags('example.miss', 'default-value'); // <?php echo WPkirk()->flags('example.miss', 'default-value'); ?></code></pre>

    <hr />
    <h2 id="plugin-info"><?php _e('Plugin information', 'wp-kirk'); ?></h2>
    <p><?php _e('You may get the plugin information by using', 'wp-kirk'); ?></p>


    <pre><code class="language-php">&lt;?php echo $plugin-&gt;Author ?&gt; // <?php echo $plugin->Author; ?></code></pre>

    <pre><code class="language-php">&lt;?php echo $plugin-&gt;Description ?&gt; // <?php echo $plugin->Description; ?></code></pre>

    <pre><code class="language-php">&lt;?php echo $plugin-&gt;Version ?&gt; // <?php echo $plugin->Version; ?></code></pre>

    <pre><code class="language-php">&lt;?php echo $plugin-&gt;TextDomain ?&gt; // <?php echo $plugin->TextDomain; ?></code></pre>

    <hr />
    <h2 id="custom-pages"><?php _e('Custom Pages', 'wp-kirk'); ?></h2>

    <p><?php _e('To create a custom pages without a menu, you may config the', 'wp-kirk'); ?> <code class="language- inline">route.php</code> <?php _e('file in the', 'wp-kirk'); ?>
      <code class="language- inline">config</code>
      <?php _e('folder of the Plugin', 'wp-kirk'); ?>
    </p>

    <p><?php _e('For example, you may create a', 'wp-kirk'); ?> <code class="language- inline">route.php</code> <?php _e('file in the', 'wp-kirk'); ?> <code class="language- inline">config</code>
      <?php _e('folder of the plugin', 'wp-kirk'); ?></p>

    <p><?php _e('Here is an example of', 'wp-kirk'); ?> <code class="language- inline">route.php</code></p>

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


    <p><?php _e('You can get the custom page URL by using', 'wp-kirk'); ?></p>

    <?php $page_url = $plugin->getPageUrl("custom_page"); ?>

    <pre><code class="language-php">&lt;?php echo $plugin-&gt;getPageUrl( 'custom_page' ) ?&gt; // <?php echo $page_url ?></code></pre>

    <p><a
        href="<?php echo $plugin->getPageUrl("first_custom_page"); ?>"><?php _e('Custom Page', 'wp-kirk'); ?></a></p>

  </div>
</div>