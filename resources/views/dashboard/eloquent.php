<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->
<?php
use WPKirk\Http\Controllers\EloquentProduct as Product;
use WPKirk\Http\Controllers\EloquentUser as User;
?>

<div class="wp-kirk wrap wp-kirk-sample">

  <h1>Eloquent ORM</h1>
  <p>You may include the Eloquent ORM to provide a beautiful, simple ActiveRecord implementation for working with your
    database. Each database table has a corresponding "Model" which is used to interact with that table. Models allow
    you to query for data in your tables, as well as insert new records into the table.
  </p>

  <p>You may install Eloquent ORM in your plugin by using</p>

  <pre><code class="language-sh">composer install illuminate/database</code></pre>

  <p>A we are using the complete illuminate database package, for further documentation on using the various
    database facilities this library provides, consult the <a href="https://laravel.com/docs/8.x/eloquent">Laravel
      framework documentation</a></p>

  <h2>Query WordPress users table</h2>

  <pre><code class="language-php">&lt;?php
  use WPKirk\Http\Controllers\User;

  var_dump(User::all());</code></pre>

  <details>
  <summary>Output</summary>
    <pre><code class="language-json">
  <?php var_dump(User::all()); ?>
  </code></pre>
  </details>

  <h2>Find</h2>

  <p>Of course, you'll be able to use all eloquent features</p>

  <pre><code class="language-php">&lt;?php
  use WPKirk\Http\Controllers\User;

  var_dump(User::find(1)->user_email);</code></pre>

<pre><code class="language-json"><?php var_dump(
  User::find(1)->user_email
); ?></code></pre>

  <h2>Custom Table</h2>

  <p>Alongside the WordPress table you may use eloquent for your custom database table</p>

  <pre><code class="language-php">&lt;?php
  use WPKirk\Http\Controllers\Product;

  var_dump(Product::find([3,4]));</code></pre>

  <details>
  <summary>Output</summary>
    <pre><code class="language-json">
  <?php var_dump(Product::find([3, 4])); ?>
  </code></pre>
  </details>

  <p>and get single column value</p>

  <pre><code class="language-php">&lt;?php
  use WPKirk\Http\Controllers\Product;

  var_dump(Product::find(3)->name);</code></pre>

  <pre><code class="language-json"><?php var_dump(
    Product::find(3)->name
  ); ?></code></pre>

  <h2>Loop into</h2>

  <pre><code class="language-php">&lt;?php
  use WPKirk\Http\Controllers\Product;

  Product::all()->each(function ($e) {
    var_dump($e->id);
  });</code></pre>


  <pre><code class="language-json"><?php Product::all()->each(function ($e) {
    var_dump($e->id);
  }); ?></code></pre>

  <p>For further documentation on using the various database facilities this library provides, consult the <a
      target="_blank" href="https://laravel.com/docs/5.8/eloquent">Laravel framework documentation</a></p>
</div>
