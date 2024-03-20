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

  <pre><code class="hljs" style="background:#282C34;border-radius:8px">Current Method <?php echo esc_attr( ! isset($method) ? : strtoupper($method)) ?>
  </code></pre>

  <pre><code class="hljs" style="background:#282C34;border-radius:8px"><span class="xml">  <span class="hljs-tag">&lt;<span class="hljs-name">form</span> <span class="hljs-attr">method</span>=<span class="hljs-string">"post"</span>
    <span class="hljs-attr">action</span>=<span class="hljs-string">"</span></span></span><span class="php"><span class="hljs-meta">&lt;?php</span> <span class="hljs-keyword">echo</span> $plugin-&gt;getPageUrl(<span class="hljs-string">'first_custom_page'</span>) <span class="hljs-meta">?&gt;</span></span><span class="xml"><span class="hljs-tag"><span class="hljs-string">"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">button</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"button button-hero button-primary"</span>&gt;</span>Back<span class="hljs-tag">&lt;/<span class="hljs-name">button</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">form</span>&gt;</span></span></code></pre>

  <form method="post"
    action="<?php echo $plugin->getPageUrl('first_custom_page') ?>">
    <button class="button button-hero button-primary">Back</button>
  </form>

</div>