<!--
|
| In $plugin you'll find an instance of Plugin class.
| If you'd like can pass variable to this view, for example:
|
| return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
|
-->

<div class="wp-kirk wrap wp-kirk-sample">

  <h1>Options</h1>

  <div class="wp-kirk-toc clearfix">
    <ul>
      <li><a href="#current-options">Current Option</a></li>
      <li><a href="#update">Update Options</a></li>
      <li><a href="#add">Add Options</a></li>
      <li><a href="#mass-update">Mass Update</a></li>
      <li><a href="#mass-insert">Mass Insert</a></li>
      <li><a href="#delete">Delete Options</a></li>
      <li><a href="#reset">Reset Options</a></li>
    </ul>
  </div>

  <div class="wp-kirk-toc-content">

    <!-- Current options -->
    <hr />
    <a name="current-options"></a>
    <h2>Current option</h2>

    <p>Here you can see he current options are:</p>

    <pre><code class="language-php">echo $plugin->options;</code></pre>

    <pre><code class="language-json"><?php echo $plugin->options; ?></code></pre>

    <h3>Get option</h3>
    <p>As you can see you'll be able to get the options by using the <strong>dot</strong> notation</p>

    <pre><code class="language-php">echo $plugin->options->get( 'General.option_2'); // <?php echo $plugin->options->get(
        'General.option_2'
    ); ?></code></pre>

    <h3>Get option by an array</h3>
    <p>You may also retrieve an option sub-branch as an <code>Array</code></p>

    <pre><code class="language-php">echo $plugin->options['General'];</code></pre>

    <pre><code class="language-php"><?php echo var_export(
        $plugin->options['General'],
        true
    ); ?></code></pre>

    <p>as well as</p>

    <pre><code class="language-php">echo $plugin->options->get( 'General.option_3');</code></pre>

    <pre><code class="language-php"><?php echo var_export(
        $plugin->options->get('General.option_3')
    ); ?></code></pre>

    <h3>Get option</h3>
    <p>You may also avoid to use the <code class="language-php inline">get()</code> method, instead of use</p>

    <pre><code class="language-php">echo $plugin->options->get( 'General.option_3.sub_option_of_3'); // <?php echo $plugin->options->get(
        'General.option_3.sub_option_of_3'
    ); ?></code></pre>

    <p>you may use</p>

    <pre><code class="language-php">echo $plugin->options[ 'General.option_3.sub_option_of_3' ]; // <?php echo $plugin
      ->options['General.option_3.sub_option_of_3']; ?></code></pre>

    <h3>Get default option </h3>
    <p>Of course, you'll be able to define any default value if the branch/key doesn't exists</p>

    <pre><code class="language-php">echo $plugin->options->get( 'General.doNotExists', 'default' ); // <?php echo $plugin->options->get(
        'General.doNotExists',
        'default'
    ); ?></code></pre>

    <!-- Update -->
    <hr />
    <a name="update"></a>
    <h2>Update</h2>
    <p>You may update any options and branch tree in the same way, by using the dot notation</p>

    <pre><code class="language-php">$plugin->options->set( 'Special.Name', 'John' );</code></pre>

    <?php $plugin->options->set('Special.Name', 'John'); ?>
    <pre><code class="language-json"><?php echo $plugin->options; ?></code></pre>

    <?php $plugin->options->set(
        'General.option_3.sub_option_of_3',
        'FooBar'
    ); ?>

    <pre><code class="language-php">$plugin->options->set( 'General.option_3.sub_option_of_3', 'FooBar' );</code></pre>

    <pre><code class="language-json"><?php echo $plugin->options; ?></code></pre>

    <h3>Change with mixed value</h3>
    <p>Of course, you may also change the type of the stored key. Below, we're going to use and <code>Array</code>
      instead of the previous <code>string</code></p>

    <?php $plugin->options->set('Special.Name', ['John', 'Good']); ?>

    <pre><code class="language-php">$plugin->options->set( 'Special.Name', [ 'John', 'Good' ] );</code></pre>

    <pre><code class="language-json"><?php echo $plugin->options; ?></code></pre>

    <p>and again...</p>

    <?php $plugin->options['Special.Name'] = ['Robin', 'Hood']; ?>

    <pre><code class="language-php">$plugin->options[ 'Special.Name' ] = [ 'Robin', 'Hood' ];</code></pre>

    <pre><code class="language-json"><?php echo $plugin->options; ?></code></pre>

    <!-- Add -->
    <hr />
    <a name="add"></a>
    <h2>Add</h2>
    <p>Of course, adding new options will work in the same way by using the dot notation</p>

    <?php $plugin->options->set('Special.time', time()); ?>

    <pre><code class="language-php">$plugin->options->set( 'Special.time', time() );</code></pre>

    <pre><code class="language-json"><?php echo $plugin->options; ?></code></pre>

    <?php $plugin->options['Special.timeZone'] = time(); ?>

    <pre><code class="language-php">$plugin->options[ 'Special.timeZone' ] = time();</code></pre>

    <pre><code class="language-json"><?php echo $plugin->options; ?></code></pre>

    <?php $plugin->options['what-you-like'] = 'Simply is best'; ?>

    <pre><code class="language-php">$plugin->options[ 'what-you-like' ] = 'Simply is best';</code></pre>

    <pre><code class="language-json"><?php echo $plugin->options; ?></code></pre>

    <!-- Mass Update -->
    <hr />
    <a name="mass-update"></a>
    <h3>Mass update</h3>
    <p>In according with the options structure, you may also update a whole sub set of options instead of change them
      individually</p>

    <?php $plugin->options->update([
      'General' => [
        'option_4' => [
          'color' => 'red',
          'background' => 'transparent',
        ],
      ],
    ]); ?>

<pre><code class="language-php">$plugin->options->update(
  [ 'General' =&gt;
    [ 'option_4' =&gt;
      [ 'color' =&gt; 'red', 'background' =&gt; 'transparent' ]
    ]
  ]
);</code></pre>

    <pre><code class="language-json"><?php echo $plugin->options; ?></code></pre>

    <!-- Mass Insert -->
    <hr />
    <a name="mass-insert"></a>
    <h3>Mass insert</h3>
    <p>Of course, you may use the mass feature for the insert as well</p>

    <?php $plugin->options->update([
      'General' => [
        'option_5' => [
          'color' => 'red',
          'background' => 'transparent',
        ],
      ],
    ]); ?>

    <pre><code class="language-php">$plugin->options-&gt;update(
  [ 'General' =&gt;
    [ 'option_5' =&gt;
      [ 'color' =&gt; 'red', 'background' =&gt; 'transparent' ]
    ]
  ]
);</code></pre>


    <pre><code class="language-json"><?php echo $plugin->options; ?></code></pre>


    <!-- Delete -->
    <hr />
    <a name="delete"></a>
    <h2>Delete</h2>
    <p>You may delete an option or a set of options by using the <code>set()</code> method along with <code>null</code>
    </p>

    <?php $plugin->options->set('General.option_1', null); ?>

    <pre><code class="language-php">$plugin->options-&gt;set( 'General.option_1', null );</code></pre>

    <pre><code class="language-json"><?php echo $plugin->options; ?></code></pre>

    <p>Alternatively, you may use the <code>delete()</code> method</p>

    <?php $plugin->options->delete('General.option_4'); ?>

    <pre><code class="language-php">$plugin->options-&gt;delete( 'General.option_4' );</code></pre>

    <pre><code class="language-json"><?php echo $plugin->options; ?></code></pre>

    <h2>Delete all</h2>
    <p>Finally, you may delete <strong>all</strong></p>

    <?php $plugin->options->delete(); ?>

    <pre><code class="language-php">$plugin->options-&gt;delete();</code></pre>

    <pre><code class="language-json"><?php echo $plugin->options; ?></code></pre>

    <!-- Reset -->
    <hr />
    <a name="reset"></a>
    <h2>Reset to default</h2>
    <p>Don't worry, we can reset everything by using the original file</p>

    <?php $plugin->options->reset(); ?>

    <pre><code class="language-php">$plugin->options-&gt;reset();</code></pre>

    <pre><code class="language-json"><?php echo $plugin->options; ?></code></pre>

  </div>

</div>
