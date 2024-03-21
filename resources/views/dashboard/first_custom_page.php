<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<div class="wp-kirk wrap">
  <h1>Hello, I'm a Custom Page without menu</h1>

  <hr />

  <h2>Handle the same page</h2>

  <p>Below an example of how to post some data to the same page</p>

  <pre><code class="language-php">Current Method <?php echo !isset($method) ?:
    strtoupper($method); ?></code></pre>

  <pre><code class="language-html">&lt;form method=&quot;post&quot;&gt;
  &lt;button class=&quot;button button-hero button-primary&quot;&gt;Post Here&lt;/button&gt;
&lt;/form&gt;</code></pre>

  <form method="post">
    <button class="button button-hero button-primary">Post Here</button>
  </form>

  <hr />

  <h2>Send data to a different custom page</h2>

  <p>Below, how to send a post message to a different custom page</p>

  <pre><code class="language-html">&lt;form method=&quot;post&quot; action=&quot;&lt;?php echo $plugin-&gt;getPageUrl('second_custom_page') ?&gt;&quot;&gt;
    &lt;button class=&quot;button button-hero button-primary&quot;&gt;Test Post&lt;/button&gt;
&lt;/form&gt;</code></pre>

  <form method="post"
    action="<?php echo $plugin->getPageUrl('second_custom_page'); ?>">
    <button class="button button-hero button-primary">Test Post</button>
  </form>

  <hr />

  <h2>Custom page from folder</h2>

  <p>You may also use the <code>pages</code> folder to create your own pages.</p>

  <pre><code class="language-html">&lt;a class=&quot;button button-hero button-primary&quot; href=&quot;&lt;?php echo $plugin-&gt;getPageUrl('custom_page') ?&gt;&quot;&gt;Load custom page&lt;/a&gt;</code></pre>

  <p><a class="button button-hero button-primary"
      href="<?php echo $plugin->getPageUrl('custom_page'); ?>">Load
      custom page</a></p>

</div>
