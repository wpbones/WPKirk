<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<div class="wp-kirk wrap">
  <h1>Hello, I'm a the second Custom Page without menu</h1>

  <pre><code class="language-php">Current Method <?php echo !isset($method) ?:
    strtoupper($method); ?></code></pre>

  <pre><code class="language-html">&lt;form method=&quot;post&quot; action=&quot;&lt;?php echo $plugin-&gt;getPageUrl('first_custom_page') ?&gt;&quot;&gt;
    &lt;button class=&quot;button button-hero button-primary&quot;&gt;Back&lt;/button&gt;
&lt;/form&gt;</code></pre>

  <form method="post"
    action="<?php echo $plugin->getPageUrl('first_custom_page'); ?>">
    <button class="button button-hero button-primary">Back</button>
  </form>

</div>
