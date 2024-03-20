<div class="wrap wp-kirk wp-kirk-sample">

  <h2>Package sample</h2>

  <div class="wp-kirk-toc clearfix">
    <ul>
      <li><a href="#pure-css-tabs">Pure CSS Tabs</a></li>
      <li><a href="#pure-css-switch">Pure CSS Switch Button</a></li>
      <li><a href="#user-agent">User Agent</a></li>
    </ul>
  </div>

  <div class="wp-kirk-toc-content">
    <h2>Overview</h2>

    <p>
      Let me show you some useful package that you can use as extension of main framework.
    </p>
    <p>
      You'll find the complete list and the documentation of all packages in the <a
        href="https://wpbones.vercel.app/docs/Packages/official-packages">official package repository</a>.
    </p>

    <hr />
    <a name="pure-css-tabs"></a>
    <h2>Pure CSS Tabs</h2>

    <p>
      Here we are using the <a href="https://github.com/wpbones/pure-css-tabs">Pure CSS Tabs</a> package.
      To install it, you cn use:
    </p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">$</span><span class="bash"> php bones require wpbones/pure-css-tabs</span></code></pre>

    <div class="wpbones-tabs">

      <!-- first tab -->
      <?php WPKirk\PureCSSTabs\PureCSSTabsProvider::openTab('Database', null, true) ?>

      <div>
        <h3>Content for Database</h3>
      </div>

      <?php WPKirk\PureCSSTabs\PureCSSTabsProvider::closeTab() ?>

      <!-- second tab -->
      <?php WPKirk\PureCSSTabs\PureCSSTabsProvider::openTab('Posts') ?>

      <div>
        <h3>Content for Posts</h3>
      </div>

      <?php WPKirk\PureCSSTabs\PureCSSTabsProvider::closeTab() ?>

      <!-- son on... -->

    </div>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"wpbones-tabs"</span>&gt;</span>
  <span class="hljs-comment">&lt;!-- first tab --&gt;</span>
  </span><span class="php"><span class="hljs-meta">&lt;?php</span> WPKirk\PureCSSTabs\PureCSSTabsProvider::openTab(<span class="hljs-string">'Database'</span>, <span class="hljs-literal">null</span>, <span class="hljs-literal">true</span>) <span class="hljs-meta">?&gt;</span></span><span class="xml">
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Content for Database<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  </span><span class="php"><span class="hljs-meta">&lt;?php</span> WPKirk\PureCSSTabs\PureCSSTabsProvider::closeTab() <span class="hljs-meta">?&gt;</span></span><span class="xml">
  <span class="hljs-comment">&lt;!-- second tab --&gt;</span>
  </span><span class="php"><span class="hljs-meta">&lt;?php</span> WPKirk\PureCSSTabs\PureCSSTabsProvider::openTab(<span class="hljs-string">'Posts'</span>) <span class="hljs-meta">?&gt;</span></span><span class="xml">
  <span class="hljs-tag">&lt;<span class="hljs-name">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">h3</span>&gt;</span>Content for Posts<span class="hljs-tag">&lt;/<span class="hljs-name">h3</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
  </span><span class="php"><span class="hljs-meta">&lt;?php</span> WPKirk\PureCSSTabs\PureCSSTabsProvider::closeTab() <span class="hljs-meta">?&gt;</span></span><span class="xml">
  <span class="hljs-comment">&lt;!-- son on... --&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span></span></code></pre>

    <p>* The tabs are <strong>responsive</strong>, try to resize your browser and you'll see them switch to accordion
      layout</p>

    <hr />

    <a name="pure-css-switch"></a>
    <h2>Pure CSS Switch Button</h2>

    <p>
      Here we are using the <a href="https://github.com/wpbones/pure-css-switch">Pure CSS Switch</a> package.
      To install it, you cn use:
    </p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">$</span><span class="bash"> php bones require wpbones/pure-css-switch</span></code></pre>

    <p>The you may use</p>

    <pre><code
      class="hljs"><span class="hljs-keyword">echo</span> WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( <span class="hljs-string">'test-switch-1'</span> )</code></pre>
    <p>
      <?php echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name('test-switch-1') ?>
    </p>

    <p>You may add a left label</p>

    <pre><code class="hljs"
      style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( <span class="hljs-string">'test-switch-2'</span> )-&gt;left_label( <span class="hljs-string">'Swipe me'</span> )</code></pre>
    <?php echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name('test-switch-2')->left_label('Swipe me') ?>
    </p>

    <p>as well as a right label</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name(<span class="hljs-string">'test-switch-3'</span>)-&gt;right_label(<span class="hljs-string">'Swipe me'</span>)</code></pre>
    <p>
      <?php echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name('test-switch-3')->right_label('Swipe me') ?>
    </p>

    <p>Of course, you may use both left and right <code>label</code></p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( <span class="hljs-string">'test-switch-4'</span> )
			-&gt;left_label( <span class="hljs-string">'Swipe me'</span> )
			-&gt;right_label( <span class="hljs-string">'Swipe me'</span> )</code></pre>
    <p>
      <?php echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name('test-switch-4')->left_label('Swipe me')->right_label('Swipe me') ?>
    </p>

    <p>You may preselect the default status by <code>checked</code></p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( <span class="hljs-string">'test-switch-5'</span> )
		-&gt;left_label( <span class="hljs-string">'Swipe me'</span> )
		-&gt;checked( <span class="hljs-literal">true</span> )</code></pre>
    <div>
      <form method="post" action="">
        <?php echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name('test-switch-5')->left_label('Swipe me')->checked(true) ?>
        <div style="text-align: right;">
          <button type="submit" class="button button-primary">Send Post
          </button>
        </div>
      </form>

      <?php if (isset($_POST) && ! empty($_POST)) : ?>

      <pre>
        <?php var_dump($_POST) ?>
      </pre>

      <?php endif; ?>

    </div>

    <p>as well as the <code>disabled</code> of the component</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( <span class="hljs-string">'test-switch-6'</span> )
		-&gt;left_label( <span class="hljs-string">'Swipe me'</span> )
		-&gt;disabled( <span class="hljs-literal">true</span> )</code></pre>
    <p>
      <?php echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name('test-switch-6')->left_label('Swipe me')->disabled(true) ?>
    </p>

    <p>You may change the appearance by <code>theme</code></p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( <span class="hljs-string">'test-switch-7'</span> )-&gt;theme( <span class="hljs-string">'flat-square'</span> )</code></pre>
    <p>
      <?php echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name('test-switch-7')->theme('flat-square') ?>
    </p>

    <p>Mode <code>select</code> (default is <code>switch</code>)</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">echo</span> WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name( <span class="hljs-string">'test-switch-8'</span> )
		-&gt;left_label( <span class="hljs-string">'Turn left'</span> )
		-&gt;right_label( <span class="hljs-string">'Turn right'</span> )
		-&gt;mode( <span class="hljs-string">'select'</span> )</code></pre>
    <p>
      <?php echo WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::name('test-switch-8')->left_label('Turn left')->right_label('Turn right')->mode('select') ?>
    </p>

    <hr>
    <a name="user-agent"></a>

    <h2>User Aganet</h2>

    <p>You may use this package to extend WP Bones with a Mobile Detect Library.</p>

    <h2>Installation</h2>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">$</span><span class="bash"> php bones require wpbones/useragent</span></code></pre>

    <p>I advise to use this command instead of <code>composer require</code> because doing this an automatic renaming
      will done.</p>

    You can use composer to install this package:

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">$</span><span class="bash"> composer require wpbones/useragent</span></code></pre>

    <p>You may also to add <code>"wpbones/useragent": "^1.0"</code> in the <code>composer.json</code> file of your
      plugin:</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px">…
<span class="hljs-string">"require"</span>: {
    <span class="hljs-attr">"php"</span>: <span class="hljs-string">"&gt;=7.2"</span>,
    <span class="hljs-attr">"wpbones/wpbones"</span>: <span class="hljs-string">"~0.8"</span>,
    <span class="hljs-attr">"wpbones/useragent"</span>: <span class="hljs-string">"~1.0"</span>
  },</code></pre>

    <p>and run</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">$</span><span class="bash"> composer install</span></code></pre>

    <h2>Function</h2>

    <p>You will be able to use <code>wpbones_user_agent()</code> function to get an istance of Mobile Detect.</p>
    <p>For exampe</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-keyword">if</span>(wpbones_user_agent()-&gt;isMobile()) {
<span class="hljs-keyword">echo</span> <span class="hljs-string">"You're by Mobile"</span>;
} <span class="hljs-keyword">else</span> {
<span class="hljs-keyword">echo</span> <span class="hljs-string">"You're by Desktop"</span>;
}</code></pre>


    <?php if (wpbones_user_agent()->isMobile()) : ?>
    <p><code>You're by Mobile</code></p>
    <?php else : ?>
    <p><code>You're by Desktop</code></p>
    <?php endif; ?>

    <h2>Some examples</h2>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span>

<span class="hljs-comment">// Basic detection.</span>
wpbones_user_agent()-&gt;isMobile();
wpbones_user_agent()-&gt;isTablet();

<span class="hljs-comment">// Magic methods.</span>
wpbones_user_agent()-&gt;isIphone();
wpbones_user_agent()-&gt;isSamsung();
<span class="hljs-comment">// [...]</span>

<span class="hljs-comment">// Alternative to magic methods.</span>
wpbones_user_agent()-&gt;is(<span class="hljs-string">'iphone'</span>);

<span class="hljs-comment">// Find the version of component.</span>
wpbones_user_agent()-&gt;version(<span class="hljs-string">'Android'</span>);</code></pre>

    <p>You may also</p>

    <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="hljs-meta">&lt;?php</span>

<span class="hljs-comment">// Any mobile device (phones or tablets).</span>
<span class="hljs-keyword">if</span> ( wpbones_user_agent()-&gt;isMobile() ) {

}

<span class="hljs-comment">// Any tablet device.</span>
<span class="hljs-keyword">if</span>( wpbones_user_agent()-&gt;isTablet() ){

}

<span class="hljs-comment">// Exclude tablets.</span>
<span class="hljs-keyword">if</span>( wpbones_user_agent()-&gt;isMobile() &amp;&amp; !wpbones_user_agent()-&gt;isTablet() ){

}

<span class="hljs-comment">// Check for a specific platform with the help of the magic methods:</span>
<span class="hljs-keyword">if</span>( wpbones_user_agent()-&gt;isiOS() ){

}

<span class="hljs-keyword">if</span>( wpbones_user_agent()-&gt;isAndroidOS() ){

}

<span class="hljs-comment">// Alternative method is() for checking specific properties.</span>
<span class="hljs-comment">// WARNING: this method is in BETA, some keyword properties will change in the future.</span>
wpbones_user_agent()-&gt;is(<span class="hljs-string">'Chrome'</span>)
wpbones_user_agent()-&gt;is(<span class="hljs-string">'iOS'</span>)
wpbones_user_agent()-&gt;is(<span class="hljs-string">'UCBrowser'</span>)
wpbones_user_agent()-&gt;is(<span class="hljs-string">'Opera'</span>)
<span class="hljs-comment">// [...]</span></code></pre>

  </div>
</div>