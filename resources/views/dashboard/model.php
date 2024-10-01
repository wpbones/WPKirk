<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->
<?php use WPKirk\Models\MyPluginProducts;

?>

<div class="wp-kirk wrap wp-kirk-sample">

  <h1 id="model">Model</h1>

  <div class="wp-kirk-toc clearfix">
    <ul>
      <li><a href="#model">Model</a></li>
      <li><a href="#example">Example</a></li>
    </ul>
  </div>

  <div class="wp-kirk-toc-content">

    <p>In your Plugin you may use the Database Model class instead of the <a target="_blank"
                                                                             href="https://wpbones.com/docs/DatabaseORM/query-builder">Query
        Builder</a>.</p>
    <p>To use the Model convection you need to extend the Model class:</p>

    <pre><code class="language-php">&lt;?php
namespace WPKirk\Models;

use WPKirk\WPBones\Database\Model;

class MyPluginProducts extends Model
{
}
</code></pre>

    <p>We don't support the automatic plural naming of the table at the moment. Anyway, the default table name will be
      the "snake case" of the class name. For example, the class <code class="language-php inline">Users</code> will be associated with the table
      <code class="language-php inline">users</code>. The class <code class="language-php inline">UsersLogged</code> will be associated with the table
      <code class="language-php inline">users_logged</code>.
    </p>

    <p>If your model's corresponding database table does not fit this convention, you may manually specify the model's
      table name by defining a <code class="language-php inline">table</code> property on the model:</p>

    <pre><code class="language-php">&lt;?php
namespace WPKirk\Models;

use WPKirk\WPBones\Database\Model;

class MyPluginProducts extends Model
{
  protected $table = 'my_plugin_products';
}</code></pre>

    <h2 id="example">Example</h2>

    <pre><code class="language-php">&lt;?php MyPluginProducts::all()</code></pre>



    <pre><code class="language-json">
  <?php echo MyPluginProducts::all()->dump(); ?>
  </code></pre>


    <p>You can find more <a target="_blank"
                            href="https://wpbones.com/docs/DatabaseORM/model">example
        here</a></>

  </div>
</div>
