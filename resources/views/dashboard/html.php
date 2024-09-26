<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<div class="wp-kirk wrap wp-kirk-sample">

  <h1>HTML Tags Support</h1>

  <div class="wp-kirk-toc clearfix">
    <ul>
      <li><a href="#facade">Html facade</a></li>
      <li><a href="#fluent">Fluent Example</a></li>
      <li><a href="#styles">Styles</a></li>
      <li><a href="#a">Available HTML tags</a></li>
      <li><a href="#button">button</a></li>
      <li><a href="#form">form</a></li>
      <li><a href="#input">input</a></li>
      <li><a href="#checkbox">checkbox</a></li>
      <li><a href="#select">select</a></li>
      <li><a href="#textarea">textarea</a></li>
      <li><a href="#datetime">datetime</a></li>
      <li><a href="#custom-attributes">Custom attributes</a></li>
    </ul>
  </div>

  <div class="wp-kirk-toc-content">

    <p>Here you'll find some example about HTML support.</p>

    <h2 id="facade">Html facade</h2>

    <p>You can render a HTML component in different ways</p>

    <pre><code class="language-php">echo WPKirk\Html::button( "Hello, world!" );</code></pre>

    <div>
      <?php echo WPKirk\Html::button('Hello, world!'); ?>
    </div>

    <hr />

    <h2 id="fluent">Fluent Example</h2>

    <pre><code class="language-php">$html = WPKirk\Html::button( "Hello, world!" )->html();
echo $html;</code></pre>


    <div>
      <?php
      $html = WPKirk\Html::button('Hello, world!')->html();
      echo $html;
      ?>
    </div>

    <p>By explicit <code class="language-php inline">render()</code> method</p>

    <pre><code class="language-php">WPKirk\Html::button( "Hello, world!" )->render();</code></pre>

    <div>
      <?php WPKirk\Html::button('Hello, world!')->render(); ?>
    </div>

    <hr />

    <h2>Attributes</h2>
    <p>You can use the attributes in several ways</p>

    <pre><code class="language-php">$button = WPKirk\Html::button( "Hello, world!" );
$button->class = 'button button-primary';
echo $button;</code></pre>

    <div>
      <?php
      $button = WPKirk\Html::button('Hello, world!');
      $button->class = 'button button-primary';
      echo $button;
      ?>
    </div>

    <p>Of course, you may use the fluent way</p>

    <pre><code class="language-php">echo WPKirk\Html::button( "Hello, world!" )->class( 'button' );</code></pre>

    <div>
      <?php echo WPKirk\Html::button('Hello, world!')->class('button'); ?>
    </div>

    <pre><code class="language-php">echo WPKirk\Html::button( "Hello, world!" )->class( 'button button-primary’);</code></pre>

    <div>
      <?php echo WPKirk\Html::button('Hello, world!')->class(
        'button button-primary'
      ); ?>
    </div>

    <pre><code class="language-php">echo WPKirk\Html::button( "Hello, world!" )->class( [ 'button', 'button-primary' ] );</code></pre>

    <div>
      <?php echo WPKirk\Html::button('Hello, world!')->class([
        'button',
        'button-primary',
      ]); ?>
    </div>

    <pre><code class="language-php">echo WPKirk\Html::button( [ 'content' => "Hello, world!", 'class' => 'button button-hero' ] );</code></pre>

    <div>
      <?php echo WPKirk\Html::button([
        'content' => 'Hello, world!',
        'class' => 'button button-hero',
      ]); ?>
    </div>

    <hr />

    <h2 id="styles">Styles</h2>

    <p>You may change the HTML component styles immediately by using <code class="language-php inline">style()</code></p>

    <pre><code class="language-php">echo WPKirk\Html::button("Hello, world!")->style('color', 'red')</code></pre>

    <div>
      <?php echo WPKirk\Html::button('Hello, world!')->style('color', 'red'); ?>
    </div>

    <pre><code class="language-php">echo WPKirk\Html::button("Hello, world!")->style('color', 'red', 'font-weight', 'bold')</code></pre>

    <div>
      <?php echo WPKirk\Html::button('Hello, world!')->style(
        'color',
        'red',
        'font-weight',
        'bold'
      ); ?>
    </div>

    <pre><code class="language-php">echo WPKirk\Html::button("Hello, world!")->style([ 'background-color' => 'red', 'color' => 'white' ])</code></pre>

    <div>
      <?php echo WPKirk\Html::button('Hello, world!')->style([
        'background-color' => 'red',
        'color' => 'white',
      ]); ?>
    </div>

    <hr />

    <h2 id="a">Available HTML tags</h2>

    <h3>a</h3>

    <pre><code class="language-php">echo WPKirk\Html::a('Click me')->href('http://undolog.com')</code></pre>

    <div>
      <?php echo WPKirk\Html::a('Click me')->href('http://undolog.com'); ?>
    </div>

    <hr />

    <h3 id="button">button</h3>

    <pre><code class="language-php">echo WPKirk\Html::button('Hello, world!')->class('button button-primary')</code></pre>

    <div>
      <?php echo WPKirk\Html::button('Hello, world!')->class(
        'button button-primary'
      ); ?>
    </div>

    <hr />

    <h3 id="form">Form</h3>

    <pre><code class="language-php">echo WPKirk\Html::form()->acceptcharset('ISO-8859-1')</code></pre>

    <div>
      <?php echo WPKirk\Html::form()->acceptcharset('ISO-8859-1'); ?>
    </div>

    <hr />

    <h3 id="input">Input</h3>

    <pre><code class="language-php">echo WPKirk\Html::input()->type('text')->value('Hello')</code></pre>

    <div>
      <?php echo WPKirk\Html::input()->type('text')->value('Hello'); ?>
    </div>

    <hr />

    <h3 id="checkbox">Checkbox</h3>

    <pre><code class="language-php">echo WPKirk\Html::checkbox()->name('myname')->value('Hello')</code></pre>

    <div>
      <?php echo WPKirk\Html::checkbox()->name('myname')->value('Hello'); ?>
    </div>

    <p>The HTML markup output consists in two input fields in order to support the unchecked value as well</p>

    <pre><code class="language-html">&lt;input type=&quot;hidden&quot; name=&quot;myname&quot; value=&quot;off&quot; /&gt;
&lt;input type=&quot;checkbox&quot; name=&quot;myname&quot; value=&quot;Hello&quot; /&gt;
</code></pre>

    <hr />

    <h3 id="select">Select</h3>

    <p>To use a <code class="language-html inline">select</code> you have to define the options as well. Below, you'll see different ways to do that.
      The first
      one is using the <code class="language-html inline">option</code> component</p>

    <pre><code class="language-php">echo WPKirk\Html::select(WPKirk\Html::option('Item')->html())</code></pre>

    <div>
      <?php echo WPKirk\Html::select(WPKirk\Html::option('Item')->html()); ?>
    </div>

    <p>You may use also <code class="language-html inline">options</code> fluent way</p>

    <pre><code class="language-php">echo WPKirk\Html::select()->options([ 'Item 1', 'Item 2' ])</code></pre>

    <div>
      <?php echo WPKirk\Html::select()->options(['Item 1', 'Item 2']); ?>
    </div>

    <pre><code class="language-html">&lt;select&gt;
  &lt;option selected=&quot;selected&quot;&gt;Item 1&lt;/option&gt;
  &lt;option&gt;Item 2&lt;/option&gt;
&lt;/select&gt;</code></pre>

    <p>Options with array keys</p>

    <pre><code class="language-php">echo WPKirk\Html::select()->options([ 'item-1' => 'Item 1', 'item-2' => 'Item 2' ])</code></pre>

    <div>
      <?php echo WPKirk\Html::select()->options([
        'item-1' => 'Item 1',
        'item-2' => 'Item 2',
      ]); ?>
    </div>

    <pre><code class="language-html">&lt;select&gt;
  &lt;option value=&quot;item-1&quot;&gt;Item 1&lt;/option&gt;
  &lt;option value=&quot;item-2&quot;&gt;Item 2&lt;/option&gt;
&lt;/select&gt;
</code></pre>

    <p>Preselect an option</p>

    <pre><code class="language-php">echo WPKirk\Html::select()->options([ 'item-4' => 'Item 4', 'item-5' => 'Item 5'])->selected('item-5')</code></pre>

    <div>
      <?php echo WPKirk\Html::select()
        ->options(['item-4' => 'Item 4', 'item-5' => 'Item 5'])
        ->selected('item-5'); ?>
    </div>

    <p>Multiple select</p>

    <p><?php _e('You may use the <code>multiple</code> method to enable multiple selection', 'wp-kirk') ?></p>

    <pre><code class="language-php">echo WPKirk\Html::select()
      ->multiple(true)
      ->options([
        'item-1' => 'Item 1',
        'item-2' => 'Item 2',
        'item-3' => 'Item 3',
        'item-4' => 'Item 4',
        'item-5' => 'Item 5'
      ])
      ->selected('item-2,item-1');</code></pre>

    <p><?php _e('You may also pass an array of selected values', 'wp-kirk') ?></p>

    <div>
      <?php echo WPKirk\Html::select()
        ->multiple(true)
        ->options([
          'item-1' => 'Item 1',
          'item-2' => 'Item 2',
          'item-3' => 'Item 3',
          'item-4' => 'Item 4',
          'item-5' => 'Item 5'
        ])
        ->selected('item-2,item-1'); ?>
    </div>

    <pre><code class="language-php">echo WPKirk\Html::select()
      ->multiple(true)
      ->options([
        'item-1' => 'Item 1',
        'item-2' => 'Item 2',
        'item-3' => 'Item 3',
        'item-4' => 'Item 4',
        'item-5' => 'Item 5'
      ])
      ->selected(['item-2', 'item-4']);</code></pre>

    <div>
      <?php echo WPKirk\Html::select()
        ->multiple(true)
        ->options([
          'item-1' => 'Item 1',
          'item-2' => 'Item 2',
          'item-3' => 'Item 3',
          'item-4' => 'Item 4',
          'item-5' => 'Item 5'
        ])
        ->selected(['item-2', 'item-4']); ?>
    </div>

    <hr />

    <h3 id="textarea">Textarea</h3>

    <pre><code class="language-php">echo WPKirk\Html::textarea('Hi there, How are you?')</code></pre>

    <div>
      <?php echo WPKirk\Html::textarea('Hi there, How are you?'); ?>
    </div>

    <hr />

    <h3 id="datetime">Datetime</h3>

    <div>

      <pre><code class="language-php">echo WPKirk\Html::datetime([ 'name' => 'finalStart' ])</code></pre>

      <?php echo WPKirk\Html::datetime(['name' => 'finalStart']); ?>

      <pre><code class="language-php">echo WPKirk\Html::datetime()->complete(true)</code></pre>
      <?php echo WPKirk\Html::datetime()->complete(true); ?>

      <pre><code class="language-php">echo WPKirk\Html::datetime()->value('now')</code></pre>
      <?php echo WPKirk\Html::datetime()->value('now'); ?>

      <pre><code class="language-php">echo WPKirk\Html::datetime()->now(true)</code></pre>
      <?php echo WPKirk\Html::datetime()->now(true); ?>

      <pre><code class="language-php">echo WPKirk\Html::datetime()->now(true)->clear(true)</code></pre>
      <?php echo WPKirk\Html::datetime()->now(true)->clear(true); ?>

      <pre><code class="language-php">echo WPKirk\Html::datetime()->value(time() + (60 * 60))</code></pre>
      <?php echo WPKirk\Html::datetime()->value(time() + 60 * 60); ?>

      <pre><code class="language-php">echo WPKirk\Html::datetime()->value("2015-11-10 12:13")</code></pre>
      <?php echo WPKirk\Html::datetime()->value('2015-11-10 12:13'); ?>
    </div>

    <hr />

    <h2 id="custom-attributes">Custom attributes</h2>

    <p>You may also set any custom attributes in the HTML component</p>

    <pre><code class="language-php">echo WPKirk\Html::button('Click me!')->attributes('hello', 'world')</code></pre>

    <div>
      <?php echo WPKirk\Html::button('Click me!')->attributes(
        'hello',
        'world'
      ); ?>
    </div>

    <p>The HTM