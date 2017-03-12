<div class="wrap wp-kirk">

  <h2>Package sample</h2>

  <p>
    Let me show you some useful package that you can use as extension of main framework.
  </p>

  <h3>Pure CSS Tabs</h3>

  <p>
    Here we are using the <a href="https://github.com/wpbones/pure-css-tabs">Pure CSS Tabs</a> package.
    To install it, you cn use:
  </p>

  <pre>
$ php bones require wpbones/pure-css-tabs
  </pre>

  <div class="wpbones-tabs">

    <!-- first tab -->
    <?php WPKirk\PureCSSTabs\PureCSSTabsProvider::openTab( 'Database', null, true ) ?>

    <div>
      <h3>Content for Database</h3>
    </div>

    <?php WPKirk\PureCSSTabs\PureCSSTabsProvider::closeTab() ?>

    <!-- second tab -->
    <?php WPKirk\PureCSSTabs\PureCSSTabsProvider::openTab( 'Posts' ) ?>

    <div>
      <h3>Content for Posts</h3>
    </div>

    <?php WPKirk\PureCSSTabs\PureCSSTabsProvider::closeTab() ?>

    <!-- son on... -->

  </div>

  <p>* The tabs are <strong>responsive</strong>, try to resize your browser and you'll see them switch to accordion layout</p>

  <hr/>

  <h2>Pure CSS Switch Button</h2>

  <p>
    Here we are using the <a href="https://github.com/wpbones/pure-css-switch">Pure CSS Switch</a> package.
    To install it, you cn use:
  </p>

  <pre>
$ php bones require wpbones/pure-css-switch
  </pre>

  <pre>echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( 'test-switch-1' )</pre>
  <p>
    <?php echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( 'test-switch-1' ) ?>
  </p>

  <pre>echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( 'test-switch-2' )->left_label( 'Swipe me' )</pre>
  <p>
    <?php echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( 'test-switch-2' )->left_label( 'Swipe me' ) ?>
  </p>

  <pre>echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( 'test-switch-3' )->right_label( 'Swipe me' )</pre>
  <p>
    <?php echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( 'test-switch-3' )->right_label( 'Swipe me' ) ?>
  </p>

  <pre>echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( 'test-switch-4' )->left_label( 'Swipe me' )->right_label( 'Swipe me' )</pre>
  <p>
    <?php echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( 'test-switch-4' )->left_label( 'Swipe me' )->right_label( 'Swipe me' ) ?>
  </p>

  <pre>echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( 'test-switch-5' )->left_label( 'Swipe me' )->checked( true )</pre>
  <div>
    <form method="post"
          action="">
      <?php echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( 'test-switch-5' )->left_label( 'Swipe me' )->checked( true ) ?>
      <div style="text-align: right;">
        <button type="submit"
                class="button button-primary">Send Post
        </button>
      </div>
    </form>

    <?php if( isset( $_POST ) && ! empty( $_POST ) ) : ?>

      <pre>
        <?php var_dump( $_POST ) ?>
      </pre>

    <?php endif; ?>

  </div>

  <pre>echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( 'test-switch-6' )->left_label( 'Swipe me' )->disabled( true )</pre>
  <p>
    <?php echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( 'test-switch-6' )->left_label( 'Swipe me' )->disabled( true ) ?>
  </p>

  <pre>echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( 'test-switch-7' )->theme( 'flat-square' )</pre>
  <p>
    <?php echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( 'test-switch-7' )->theme( 'flat-square' ) ?>
  </p>

  <p>Mode select (default is <code>switch</code>)</p>
  <pre>echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( 'test-switch-8' )->left_label( 'Turn left' )->right_label( 'Turn right' )->mode( 'select' )</pre>
  <p>
    <?php echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( 'test-switch-8' )->left_label( 'Turn left' )->right_label( 'Turn right' )->mode( 'select' ) ?>
  </p>


</div>

