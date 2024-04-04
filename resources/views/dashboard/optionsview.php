<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<div class="wp-kirk wrap wp-kirk-sample">

  <h1>Options View</h1>
  <p>Here you can try the ability to handle a form for the options.</p>

  <p>The current options are:</p>

  <pre><code class="language-php">echo $plugin->options;</code></pre>

  <pre><code class="language-json"><?php echo $plugin->options; ?></code></pre>

  <?php if (isset($feedback)): ?>
  <div id="message" class="updated notice is-dismissible">
    <p>
      <?php echo $feedback; ?>
    </p>
  </div>
  <?php endif; ?>

  <p>Here we're using a very useful HTML markup to display and handle the form fields.</p>
  <p>First of all we may use the nonce in this way</p>

  <pre><code class="language-php">wp_nonce_field('Options');</code></pre>

  <p>The we may use special form fields</p>

  <pre><code class="language-php">&lt;form action="" method="post"&gt;
  &lt;?php wp_nonce_field('Options'); ?&gt;
  &lt;div&gt;
    &lt;label for="General/option_1"&gt;General.option_1&lt;/label&gt;
    &lt;input type="hidden" name="General/option_1" value="false" /&gt;
    &lt;input type="checkbox" name="General/option_1" id="General/option_1" &lt;?php
    checked('true', $plugin->options->get('General.option_1')) ?&gt;
    value="true"/&gt;
  &lt;/div&gt;
  &lt;div&gt;
    &lt;label for="General/option_2"&gt;General.option_2&lt;/label&gt;
    &lt;input type="hidden" name="General/option_2" value="false" /&gt;
    &lt;input type="checkbox" name="General/option_2" id="General/option_2" &lt;?php
    checked('true', $plugin->options->get('General.option_2')) ?&gt;
    value="true"/&gt;
  &lt;/div&gt;
  &lt;div&gt;
    &lt;label for="Special/Name"&gt;Special.Name&lt;/label&gt;
    &lt;input type="text" name="Special/Name" id="Special/Name"
      value="&lt;?php echo $plugin->options->get('Special.Name') ?&gt;" /&gt;
  &lt;/div&gt;
  &lt;div&gt;
    &lt;label for="General/option_3/sub_option_of_3"&gt;General/option_3/sub_option_of_3&lt;/label&gt;
    &lt;input type="text" name="General/option_3/sub_option_of_3" id="General/option_3/
sub_option_of_3"
      value="&lt;?php echo $plugin->options->get('General.option_3.sub_option_of_3') ?&gt;" /&gt;
  &lt;/div&gt;
  &lt;button class="button button-primary"&gt;Update&lt;/button&gt;
&lt;/form&gt;</code></pre>


  <form action="" method="post">

    <?php wp_nonce_field('Options'); ?>

    <p>
      <label for="General/option_1">General.option_1</label>
      <input type="hidden" name="General/option_1" value="false" />
      <input type="checkbox" name="General/option_1" id="General/option_1" <?php checked(
          'true',
          $plugin->options->get('General.option_1')
      ); ?>
      value="true"/>
    </p>

    <p>
      <label for="General/option_2">General.option_2</label>
      <input type="hidden" name="General/option_2" value="false" />
      <input type="checkbox" name="General/option_2" id="General/option_2" <?php checked(
          'true',
          $plugin->options->get('General.option_2')
      ); ?>
      value="true"/>
    </p>

    <p>
      <label for="Special/Name">Special.Name</label>
      <input type="text" name="Special/Name" id="Special/Name"
        value="<?php echo $plugin->options->get('Special.Name'); ?>" />

    </p>

    <p>
      <label for="General/option_3/sub_option_of_3">General/option_3/sub_option_of_3</label>
      <input type="text" name="General/option_3/sub_option_of_3" id="General/option_3/sub_option_of_3"
        value="<?php echo $plugin->options->get(
            'General.option_3.sub_option_of_3'
        ); ?>" />

    </p>

    <button class="button button-primary">Update</button>

  </form>

</div>
