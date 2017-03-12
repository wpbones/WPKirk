<!--
|
| In $plugin you'll find an instance of Plugin class.
| If you'd like can pass variable to this view, for example:
|
| return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
|
-->

<div class="wp-kirk wrap">

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
    <a name="current-options"></a>
    <hr/>
    <h2>Current option</h2>

    <p>The current options are:</p>

    <pre>
  echo $plugin->options;

<?php echo $plugin->options; ?>
    </pre>

    <h3>Get option</h3>
    <pre>
  echo $plugin->options->get( 'General.option_2');
  // <?php echo $plugin->options->get( 'General.option_2' ) ?>
  </pre>

    <h3>Get option by an array</h3>
    <pre>
  echo $plugin->options['General.option_2'];
  // <?php echo $plugin->options[ 'General.option_2' ] ?>
  </pre>

    <h3>Get branch option</h3>
    <pre>
  echo $plugin->options->get( 'General.option_3');
<?php echo var_export( $plugin->options->get( 'General.option_3' ) ) ?>
  </pre>

    <h3>Get option</h3>
    <pre>
  echo $plugin->options->get( 'General.option_3.sub_option_of_3');
  // <?php echo $plugin->options->get( 'General.option_3.sub_option_of_3' ) ?>
    </pre>
    <pre>
  echo $plugin->options[ 'General.option_3.sub_option_of_3' ];
  // <?php echo $plugin->options[ 'General.option_3.sub_option_of_3' ] ?>
    </pre>

    <h3>Get default option </h3>
    <pre>
  echo $plugin->options->get( 'General.doNotExists', 'default' );
  // <?php echo $plugin->options->get( 'General.doNotExists', 'default' ) ?>
    </pre>

    <!-- Update -->
    <a name="update"></a>
    <hr/>
    <h2>Update</h2>

    <?php $plugin->options->set( 'Special.Name', 'John' ) ?>
    <pre>
  $plugin->options->set( 'Special.Name', 'John' );

<?php echo $plugin->options ?>
    </pre>

    <h3>Change with mixed value</h3>
    <?php $plugin->options->set( 'Special.Name', [ 'John', 'Good' ] ) ?>
    <pre>
  $plugin->options->set( 'Special.Name', [ 'John', 'Good' ] )

<?php echo $plugin->options ?>
    </pre>

    <?php $plugin->options[ 'Special.Name' ] = [ 'Robin', 'Hood' ];?>
    <pre>
  $plugin->options[ 'Special.Name' ] = [ 'Robin', 'Hood' ];

<?php echo $plugin->options ?>
    </pre>

    <!-- Add -->
    <a name="add"></a>
    <hr/>
    <h2>Add</h2>

    <?php $plugin->options->set( 'Special.time', time() ) ?>
    <pre>
  $plugin->options->set( 'Special.time', time() );

<?php echo $plugin->options ?>
    </pre>

    <?php $plugin->options[ 'Special.timeZone' ] = time() ?>
    <pre>
  $plugin->options[ 'Special.timeZone' ] = time();

<?php echo $plugin->options ?>
    </pre>

    <?php $plugin->options[ 'what-you-like' ] = 'Simply is best' ?>
    <pre>
  $plugin->options[ 'what-you-like' ] = 'Simply is best';

<?php echo $plugin->options ?>
    </pre>

    <!-- Mass Update -->
    <a name="mass-update"></a>
    <hr/>
    <h3>Mass update</h3>
    <?php $plugin->options->update(
      [
        'General' => [
          'option_4' => [
            'color'      => 'red',
            'background' => 'transparent',
          ],
        ],
      ]
    )
    ?>
    <pre>
  $plugin->options->update(
    [ 'General' =>
      [ 'option_4' =>
        [ 'color' => 'red', 'background' => 'transparent' ]
      ]
    ]
  );

<?php echo $plugin->options ?>
</pre>

    <!-- Mass Insert -->
    <a name="mass-insert"></a>
    <hr/>
    <h3>Mass insert</h3>

    <?php $plugin->options->update(
      [
        'General' => [
          'option_5' => [
            'color'      => 'red',
            'background' => 'transparent',
          ],
        ],
      ]
    )
    ?>

    <pre>
  $plugin->options->update(
    [ 'General' =>
      [ 'option_5' =>
        [ 'color' => 'red', 'background' => 'transparent' ]
      ]
    ]
  );

<?php echo $plugin->options ?>
    </pre>


    <!-- Delete -->
    <a name="delete"></a>
    <hr/>
    <h2>Delete</h2>

    <?php $plugin->options->set( 'General.option_1', null ) ?>
    <pre>
  $plugin->options->set( 'General.option_1', null );

<?php echo $plugin->options ?>
    </pre>

      <?php $plugin->options->delete( 'General.option_4' ) ?>
    <pre>
  $plugin->options->delete( 'General.option_4' );

<?php echo $plugin->options ?>
    </pre>

    <h2>Delete all</h2>

    <?php $plugin->options->delete() ?>
    <pre>
  $plugin->options->delete();

<?php echo $plugin->options ?>
    </pre>

    <!-- Reset -->
    <a name="reset"></a>
    <hr/>
    <h2>Reset to default</h2>
    <?php $plugin->options->reset() ?>
    <pre>
  $plugin->options->reset();

<?php echo $plugin->options ?>
    </pre>

  </div>

</div>