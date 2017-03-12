<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<div class="wp-kirk wrap">

  <h1>Html Tags Support</h1>

  <div class="wp-kirk-toc clearfix">
    <ul>
      <li><a href="#facade">Html facade</a></li>
      <li><a href="#fluent">Fluent Example</a></li>
      <li><a href="#styles">Styles</a></li>
      <li><a href="#a">Currently Html tags</a></li>
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

    <p>Here you'll find some example about Html support.</p>

    <a name="facade"></a>
    <h2>Html facade</h2>
    <pre>echo WPKirk\Html::button( "Hello, world!" )</pre>
    <div>

      <?php echo WPKirk\Html::button( "Hello, world!" ) ?>
    </div>

    <a name="fluent"></a>
    <hr/>

    <h2>Fluent Example</h2>
    <pre>
$html = WPKirk\Html::button( "Hello, world!" )->html();
echo $html;</pre>
    <div>

      <?php $html = WPKirk\Html::button( "Hello, world!" )->html();
      echo $html; ?>
    </div>

    <pre>WPKirk\Html::button( "Hello, world!" )->render()</pre>
    <div>

      <?php WPKirk\Html::button( "Hello, world!" )->render() ?>
    </div>

    <hr/>

    <h2>You can use the attributes in several way</h2>
    <pre>
$button = WPKirk\Html::button( "Hello, world!" );
$button->class = 'button button-primary';
echo $button;
  </pre>
    <div>

      <?php
      $button        = WPKirk\Html::button( "Hello, world!" );
      $button->class = 'button button-primary';
      echo $button;
      ?>
    </div>

    <pre>echo WPKirk\Html::button( "Hello, world!" )->class( 'button')</pre>
    <div>

      <?php echo WPKirk\Html::button( "Hello, world!" )->class( 'button' ) ?>
    </div>

    <pre>echo WPKirk\Html::button( "Hello, world!" )->class( 'button button-primary')</pre>
    <div>
      <?php echo WPKirk\Html::button( "Hello, world!" )->class( 'button button-primary' ) ?>
    </div>

    <pre>echo WPKirk\Html::button( "Hello, world!" )->class( [ 'button', 'button-primary' ] )</pre>
    <div>

      <?php echo WPKirk\Html::button( "Hello, world!" )->class( [ 'button', 'button-primary' ] ) ?>
    </div>

    <pre>echo WPKirk\Html::button( [ 'content' => "Hello, world!", 'class' => 'button button-hero' ] )</pre>
    <div>

      <?php echo WPKirk\Html::button( [ 'content' => "Hello, world!", 'class' => 'button button-hero' ] ) ?>
    </div>

    <a name="styles"></a>
    <hr/>

    <h2>Styles</h2>

    <pre>WPKirk\Html::button( "Hello, world!" )->style( 'color', 'red' )</pre>
    <div>

      <?php echo WPKirk\Html::button( "Hello, world!" )->style( 'color', 'red' ) ?>
    </div>

    <pre>WPKirk\Html::button( "Hello, world!" )->style( 'color', 'red', 'font-weight', 'bold' )</pre>
    <div>

      <?php echo WPKirk\Html::button( "Hello, world!" )->style( 'color', 'red', 'font-weight', 'bold' ) ?>
    </div>

    <pre>WPKirk\Html::button( "Hello, world!" )->style( [ 'background-color' => 'red', 'color' => 'white' ] )</pre>
    <div>

      <?php echo WPKirk\Html::button( "Hello, world!" )->style( [ 'background-color' => 'red', 'color' => 'white' ] ) ?>
    </div>

    <a name="a"></a>
    <hr/>

    <h2>Currently Html tags</h2>

    <h3>a</h3>
    <pre>echo WPKirk\Html::a( "Click me" )->href( 'http://undolog.com' )</pre>
    <div>
      <?php echo WPKirk\Html::a( "Click me" )->href( 'http://undolog.com' ) ?>
    </div>

    <a name="button"></a>
    <hr/>
    <h3>button</h3>
    <pre>echo WPKirk\Html::button( "Hello, world!" )->class( 'button button-primary')</pre>
    <div>
      <?php echo WPKirk\Html::button( "Hello, world!" )->class( 'button button-primary' ) ?>
    </div>

    <a name="form"></a>
    <hr/>
    <h3>Form</h3>
    <pre>echo WPKirk\Html::form()->acceptcharset( 'ISO-8859-1' )</pre>
    <div>

      <?php echo WPKirk\Html::form()->acceptcharset( 'ISO-8859-1' ) ?>
    </div>

    <a name="input"></a>
    <hr/>
    <h3>Input</h3>

    <pre>echo WPKirk\Html::input()->type( 'text' )->value( 'Hello' )</pre>
    <div>

      <?php echo WPKirk\Html::input()->type( 'text' )->value( 'Hello' ) ?>
    </div>

    <a name="checkbox"></a>
    <hr/>
    <h3>Checkbox</h3>

    <pre>echo WPKirk\Html::checkbox()->name( 'myname' )->value( 'Hello' )</pre>
    <div>

      <?php echo WPKirk\Html::checkbox()->name( 'myname' )->value( 'Hello' ) ?>
      <pre>
<?php echo htmlspecialchars( '<input type="hidden" name="myname" value="off" />' ) . "\n" ?>
<?php echo htmlspecialchars( '<input type="checkbox" name="myname" value="Hello" />' ) ?>
     </pre>
    </div>

    <a name="select"></a>
    <hr/>

    <h3>Select</h3>
    <pre>echo WPKirk\Html::select( WPKirk\Html::option( 'Item' )->html() )</pre>
    <div>

      <?php echo WPKirk\Html::select( WPKirk\Html::option( 'Item' )->html() ) ?>
    </div>

    <pre>echo WPKirk\Html::select()->options( [ 'Item 1', 'Item 2'] )</pre>
    <div>

      <?php echo WPKirk\Html::select()->options( [ 'Item 1', 'Item 2' ] ) ?>
      <pre>
<?php echo htmlspecialchars( "<select>" ) . "\n" ?>
<?php echo htmlspecialchars( "  <option>Item 1</option>" ) . "\n" ?>
<?php echo htmlspecialchars( "  <option>Item 2</option>" ) . "\n" ?>
<?php echo htmlspecialchars( "</select>" ) ?>
    </pre>
    </div>

    <pre>echo WPKirk\Html::select()->options( [ 'item-1' => 'Item 1', 'item-2' => 'Item 2'] )</pre>
    <div>

      <?php echo WPKirk\Html::select()->options( [ 'item-1' => 'Item 1', 'item-2' => 'Item 2' ] ) ?>
      <pre>
<?php echo htmlspecialchars( '<select>' ) . "\n" ?>
<?php echo htmlspecialchars( '  <option value="item-1">Item 1</option>' ) . "\n" ?>
<?php echo htmlspecialchars( '  <option value="item-2">Item 2</option>' ) . "\n" ?>
<?php echo htmlspecialchars( '</select>' ) ?>
    </pre>
    </div>

    <pre>echo WPKirk\Html::select()->options( [ 'item-4' => 'Item 4', 'item-5' => 'Item 5'] )->selected( 'item-5' )</pre>
    <div>

      <?php echo WPKirk\Html::select()->options( [ 'item-4' => 'Item 4', 'item-5' => 'Item 5'] )->selected( 'item-5' ) ?>
    </div>

    <div>

    <a name="textarea"></a>
    <hr/>

    <h3>Textarea</h3>
    <pre>echo WPKirk\Html::textarea( 'Hi there, How are you?' )</pre>
    <div>

      <?php echo WPKirk\Html::textarea( 'Hi there, How are you?' ) ?>
    </div>

    <a name="datetime"></a>
    <hr/>
    <h3>Datetime</h3>

    <div>
      <pre>echo WPKirk\Html::datetime()</pre>
      <?php echo WPKirk\Html::datetime( [ 'name' => 'finalStart' ] ) ?>

      <pre>echo WPKirk\Html::datetime()->complete( true )</pre>
      <?php echo WPKirk\Html::datetime()->complete( true ) ?>

      <pre>echo WPKirk\Html::datetime()->value( 'now' )</pre>
      <?php echo WPKirk\Html::datetime()->value( 'now' ) ?>

      <pre>echo WPKirk\Html::datetime()->now( true )</pre>
      <?php echo WPKirk\Html::datetime()->now( true ) ?>

      <pre>echo WPKirk\Html::datetime()->now( true )->clear( true )</pre>
      <?php echo WPKirk\Html::datetime()->now( true )->clear( true ) ?>

      <pre>echo WPKirk\Html::datetime()->value( time() + ( 60*60 ) )</pre>
      <?php echo WPKirk\Html::datetime()->value( time() + ( 60 * 60 ) ) ?>

      <pre>echo WPKirk\Html::datetime()->value( "2015-11-10 12:13" )</pre>
      <?php echo WPKirk\Html::datetime()->value( "2015-11-10 12:13" ) ?>
    </div>

    <a name="custom-attributes"></a>
    <hr/>

    <h2>Custom attributes</h2>
    <pre>echo WPKirk\Html::button( 'Click me!' )->attribtes( 'hello', 'world' )</pre>
    <div>
      <?php echo WPKirk\Html::button( 'Click me!' )->attributes( 'hello', 'world' ) ?>
      <p>You'll see looks like </p>
      <pre><?php echo htmlspecialchars( '<button hello="world">Click me!</button>' ) ?></pre>
    </div>

  </div>

</div>