<div class="wrap wp-kirk wp-kirk-sample">

  <h2>Package sample</h2>

  <div class="wp-kirk-toc clearfix">
    <ul>
      <li><a href="#your-package">Create Your Package</a></li>
      <li><a href="#pure-css-tabs">Pure CSS Tabs</a></li>
      <li><a href="#pure-css-switch">Pure CSS Switch Button</a></li>
      <li><a href="#user-agent">User Agent</a></li>
      <li><a href="#flags">Flags</a></li>
    </ul>
  </div>

  <div class="wp-kirk-toc-content">
    <h2>Overview</h2>

    <p>
      Let me show you some useful package that you can use as extension of main framework.
    </p>
    <p>
      You'll find the complete list and the documentation of all packages in the <a
        href="https://wpbones.com/docs/Packages/official-packages">official package repository</a>.
    </p>

    <hr />
    <h2 id="your-package">Create your Package</h2>

    <pre><code class="language-php">&lt;?php WPKirk\YourPackage\YourPackageProvider::yourPackageMethod(); ?&gt;</code></pre>

    <?php WPKirk\YourPackage\YourPackageProvider::yourPackageMethod(); ?>

    <hr />
    <h2 id="pure-css-tabs">Pure CSS Tabs</h2>

    <p>
      Here we are using the <a href="https://github.com/wpbones/pure-css-tabs">Pure CSS Tabs</a> package.
      To install it, you cn use:
    </p>

    <pre><code class="language-bash">php bones require wpbones/pure-css-tabs</code></pre>

    <div class="wpbones-tabs">

      <!-- first tab -->
      <?php WPKirk\PureCSSTabs\PureCSSTabsProvider::openTab(
          'Database',
          null,
          true
      ); ?>

      <div>
        <h3>Content for Database</h3>
      </div>

      <?php WPKirk\PureCSSTabs\PureCSSTabsProvider::closeTab(); ?>

      <!-- second tab -->
      <?php WPKirk\PureCSSTabs\PureCSSTabsProvider::openTab('Posts'); ?>

      <div>
        <h3>Content for Posts</h3>
      </div>

      <?php WPKirk\PureCSSTabs\PureCSSTabsProvider::closeTab(); ?>

      <!-- son on... -->

    </div>

    <pre><code class="language-php"><?php
                                                                                                                                                                                                                                                                                                                                                      $code = <<<'EOT'
<div class="wpbones-tabs">

  <!-- first tab -->
  <?php WPKirk\PureCSSTabs\PureCSSTabsProvider::openTab(
    'Database',
    null,
    true
  ); ?>

  <div>
    <h3>Content for Database</h3>
  </div>

  <?php WPKirk\PureCSSTabs\PureCSSTabsProvider::closeTab(); ?>

  <!-- second tab -->
  <?php WPKirk\PureCSSTabs\PureCSSTabsProvider::openTab('Posts'); ?>

  <div>
    <h3>Content for Posts</h3>
  </div>

  <?php WPKirk\PureCSSTabs\PureCSSTabsProvider::closeTab(); ?>

  <!-- son on... -->

</div>
EOT;
    echo htmlspecialchars($code);
    ?>
    </code></pre>

    <p>* The tabs are <strong>responsive</strong>, try to resize your browser and you'll see them switch to accordion
      layout</p>

    <hr />

    <h2 id="pure-css-switch">Pure CSS Switch Button</h2>

    <p>
      Here we are using the <a href="https://github.com/wpbones/pure-css-switch">Pure CSS Switch</a> package.
      To install it, you cn use:
    </p>

    <pre><code class="language-bash">php bones require wpbones/pure-css-switch</code></pre>

    <p>The you may use</p>

    <pre><code class="language-php">echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( 'test-switch-1' ); </code></pre>

    <p>You may add a left label</p>

    <p>
    <pre><code class="language-php">echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( 'test-switch-2' )
			->left_label( 'Swipe me' ); </code></pre>
    <?php echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name(
        'test-switch-2'
    )->left_label('Swipe me'); ?>
    </p>

    <p>as well as a right label</p>

    <p>
    <pre><code class="language-php">echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( 'test-switch-3' )
			->right_label( 'Swipe me' ); </code></pre>
    <?php echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name(
        'test-switch-3'
    )->right_label('Swipe me'); ?>
    </p>


    <p>Of course, you may use both left and right <code class="language- inline">label</code></p>

    <p>
    <pre><code class="language-php">echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( 'test-switch-4' )
			->left_label( 'Swipe me' )
			->right_label( 'Swipe me' );</code></pre>
    <?php echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name(
        'test-switch-4'
    )
      ->left_label('Swipe me')
      ->right_label('Swipe me'); ?>
    </p>

    <p>You may preselect the default status by <code class="language- inline">checked</code></p>

    <pre><code class="language-php">echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( 'test-switch-5' )
			->left_label( 'Swipe me' )
			->checked( true );</code></pre>

		<fieldset style="margin-top: 20px;border: 1px solid #ddd; padding: 20px;">
			<legend><?php _e('Switch Button Post Test', 'wp-kirk'); ?></legend>
			<form method="post" action="">
		    <div style="padding: 20px; display:flex; gap: 20px;">
		        <?php
                        $value = empty($_POST['test-switch-5']) ? false : true;
    echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name('test-switch-5')
                  ->left_label('Swipe me')
                  ->checked($value); ?>
		        <div style="text-align: right;">
		          <button type="submit" class="button button-primary">
								Send Post
		          </button>
		        </div>
				</div>
			</form>
<?php if (isset($_POST) && !empty($_POST)): ?>
<fieldset style="margin-top: 20px;border: 1px solid #ddd; padding: 20px;">
		<legend><?php _e('Getting Post', 'wp-kirk'); ?></legend>
<pre><?php var_dump($_POST); ?></pre>
<?php endif; ?>
</fieldset>
		</fieldset>

    <p>as well as the <code class="language- inline">disabled</code> of the component</p>

    <pre><code class="language-php">echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( 'test-switch-6' )
			->left_label( 'Swipe me' )
			->disabled( true );</code></pre>

    <p>
      <?php echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name(
          'test-switch-6'
      )
        ->left_label('Swipe me')
        ->disabled(true); ?>
    </p>

    <p>You may change the appearance by <code class="language- inline">theme</code></p>

    <pre><code class="language-php">echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( 'test-switch-7' )
			->theme( 'flat-square' );</code></pre>

    <p>
      <?php echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name(
          'test-switch-7'
      )->theme('flat-square'); ?>
    </p>

    <p>Mode <code class="language- inline">select</code> (default is <code class="language- inline">switch</code>)</p>

    <pre><code class="language-php">echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( 'test-switch-8' )
			->left_label( 'Turn left' )
			->right_label( 'Turn right' )
			->mode( 'select' );</code></pre>

    <p>
      <?php echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name(
          'test-switch-8'
      )
      ->left_label('Turn left')
      ->right_label('Turn right')
      ->mode('select'); ?>
    </p>

    <hr>

    <h2 id="user-agent">User Agent</h2>

    <p>You may use this package to extend WP Bones with a Mobile Detect Library.</p>

    <h2>Installation</h2>

    <pre><code class="language-sh">php bones require wpbones/useragent</code></pre>

    <p>I advise to use this command instead of <code class="language-sh inline">composer require</code> because doing this an automatic renaming
      will done.</p>

    You can use composer to install this package:

    <pre><code class="language-sh">composer require wpbones/useragent</code></pre>

    <p>You may also to add <code class="language-json inline">"wpbones/useragent": "^1.0"</code> in the <code class="language- inline">composer.json</code> file of your
      plugin:</p>

    <pre><code class="language-json">{
  "require": {
    "php": "&gt;=7.2",
    "wpbones/wpbones": "~0.8",
    "wpbones/useragent": "~1.0"
  },
}</code></pre>

    <p>and run</p>

    <pre><code class="language-sh">composer install</code></pre>

    <h2>Function</h2>

    <p>You will be able to use <code class="language-php inline">wpbones_user_agent()</code> function to get an instance of Mobile Detect.</p>
    <p>For example</p>

    <pre><code class="language-php">
if (wpbones_user_agent()->isMobile()) {
    echo "You're by Mobile";
  } else {
    echo "You're by Desktop";
  }</code></pre>

    <?php if (wpbones_user_agent()->isMobile()): ?>
      <p><code>You're by Mobile</code></p>
    <?php else: ?>
      <p><code>You're by Desktop</code></p>
    <?php endif; ?>

    <h2>Some examples</h2>

    <p>Here are some examples of what you can do with this package.</p>

    <p>For example, you can use the following methods:</p>

    <pre><code class="language-php">
// Basic detection.
wpbones_user_agent()->isMobile();
wpbones_user_agent()->isTablet();

// Magic methods.
wpbones_user_agent()->isIphone();
wpbones_user_agent()->isSamsung();
// [...]

// Alternative to magic methods.
wpbones_user_agent()->is('iphone');

// Find the version of component.
wpbones_user_agent()->version('Android');
</code></pre>

    <p>You may also</p>

    <pre><code class="language-php">
// Any mobile device (phones or tablets).
if ( wpbones_user_agent()->isMobile() ) {

}

// Any tablet device.
if( wpbones_user_agent()->isTablet() ){

}

// Exclude tablets.
if( wpbones_user_agent()->isMobile() && !wpbones_user_agent()->isTablet() ){

}

// Check for a specific platform with the help of the magic methods:
if( wpbones_user_agent()->isiOS() ){

}

if( wpbones_user_agent()->isAndroidOS() ){

}

// Alternative method is() for checking specific properties.
// WARNING: this method is in BETA, some keyword properties will change in the future.
wpbones_user_agent()->is('Chrome')
wpbones_user_agent()->is('iOS')
wpbones_user_agent()->is('UCBrowser')
wpbones_user_agent()->is('Opera')
// [...]
</code></pre>

    <hr />
    <h2 id="flags"><?php _e('Flags', 'wp-kirk'); ?></h2>
    <p><?php _e('Flags for WP Bones is a PHP package designed for the WP Bones framework, allowing you to enable or disable features in plugins using YAML configuration files. This approach simplifies feature management and makes the plugin more flexible and easy to configure, even for non-technical users.', 'wp-kirk'); ?></p>
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

    <pre><code class="language-php">wpbones_flags()-&gt;flags('flag_name')</code></pre>

    <p><?php _e('You may use the dot notation to get the flag.', 'wp-kirk'); ?></p>
    <pre><code class="language-php">wpbones_flags()-&gt;flags('flag_name.sub_flag')</code></pre>

    <p><?php _e('For example', 'wp-kirk'); ?></p>
    <pre><code class="language-php">WPkirk()-&gt;flags('version'); // <?php echo wpbones_flags()->flags('version'); ?></code></pre>
    <pre><code class="language-php">WPkirk()-&gt;flags('example.throttle'); // <?php echo wpbones_flags()->flags('example.throttle'); ?></code></pre>
    <pre><code class="language-php">WPkirk()-&gt;flags('example.miss', 'default-value'); // <?php echo wpbones_flags()->flags('example.miss', 'default-value'); ?></code></pre>

    <a href="https://github.com/wpbones/flags"><?php _e('More information', 'wp-kirk'); ?></a>

  </div>
</div>
