<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<div class="wp-kirk wrap wp-kirk-sample">

  <h1><?php _e('Assets', 'wp-kirk'); ?></h1>

  <div class="wp-kirk-toc clearfix">
    <ul>
      <li><a href="#styles"><?php _e('Styles', 'wp-kirk'); ?></a></li>
      <li><a href="#javascript"><?php _e('Javascript', 'wp-kirk'); ?></a></li>
      <li><a href="#react"><?php _e('ReactJS and Typescript', 'wp-kirk'); ?></a></li>
    </ul>
  </div>

  <div class="wp-kirk-toc-content">
    <h2><?php _e('Assets', 'wp-kirk'); ?></h2>

    <p><?php _e('WP Bones provides a simple way to include assets in your plugin. You can include styles and scripts in the admin area and in the public area.', 'wp-kirk'); ?></p>

    <h3 id="styles">Styles</h3>

    <p><?php _e('Currently, WP Bones supports the following styles: standard CSS files, SCSS files, and LESS files. You may create your styles in the <code class="language-bash inline">resources/assets/css</code> directory.', 'wp-kirk'); ?></p>
    <p><?php _e('The files <code class="language-bash inline">.css</code>, <code class="language-bash inline">.scss</code>, and <code class="language-bash inline">.less</code> will be compiled and you will find the css compiled in the <code class="language-html inline">public/css</code> directory.', 'wp-kirk'); ?></p>
    <p><?php _e('Next, you can include your styles by using the usual way', 'wp-kirk'); ?></p>

    <pre><code class="language-php">public function assets()
{
  return WPKirk()
    ->view('dashboard.assets')
    ->withAdminStyle('my-styles');
  }</code></pre>

  <h3 id="javascript">Javascript</h3>

  <p><?php _e('Javascript files work in the same way as styles. You can create your javascript files in the <code class="language-bash inline">resources/assets/js</code> directory.', 'wp-kirk'); ?></p>
  <p><?php _e('You can find more details in the <a href="https://wpbones.com/docs/GettingStarted/assets">Assets documentation</a>.', 'wp-kirk'); ?></p>

  <h3 id="react"><?php _e('ReactJS and Typescript', 'wp-kirk'); ?></h3>

  <p><?php _e('You may use gulp to compile simple React components. you will be able to compile .jsx files and .tsx files. The compiled files will be in the <code class="language-html inline">public/js</code> directory.', 'wp-kirk'); ?></p>

  	<p><?php _e('React component is a JavaScript file that contains a component. It can be a simple component or a complex one. You can use it to create a custom page or a custom widget. Now it\'s available to use in your WordPress environment.', 'wp-kirk'); ?></p>

  <h3><?php _e('Step 1 - create a placeholder', 'wp-kirk'); ?></h3>

  <p><?php _e('We create a placeholder <code class="language-html inline">div</code> with an <code class="language-html inline">id</code>.', 'wp-kirk'); ?></p>

  <pre><code class="language-html">&lt;div id="react-test"&gt;&lt;/div&gt;</code></pre>

  <h3><?php _e('Step 2 - include the JavaScript file', 'wp-kirk'); ?></h3>

  <p><?php _e('In the Dashboard controller we include the JavaScript file. It\'s a simple example, but you can include it in a more complex way.', 'wp-kirk'); ?></p>

  <pre><code class="language-php">public function assets()
{
return WPKirk()
  ->view('dashboard.assets')
  ->withAdminStyle('wp-kirk-common')
  ->withAdminStyle('prism')
  ->withAdminScript('prism')
  ->withAdminScript('wp-react-component', ['wp-element']); // wp-element is a dependency
}</code></pre>

<h3><?php _e('Step 3 - create the React component', 'wp-kirk'); ?></h3>

<p><?php _e('In the', 'wp-kirk'); ?> <code class="language-js">resources/assets/js/</code> <?php _e('directory we create a new file', 'wp-kirk'); ?> <code class="language-js">wp-react-component.js</code> <?php _e('with the following content:', 'wp-kirk'); ?></p>

<pre><code class="language-php">const { render, useState } = wp.element;

const WordPressButton = ({ children, primary, ...others }) =&gt; {
return (
  &lt;button className={`button ${primary ? "button-primary" : ""}`} {...others}>
    {children}
  &lt;/button>
);
};

const FlexContainer = ({ children, justifyContent, alignItems, gap }) =&gt; {
return &lt;div style={{ display: "flex", justifyContent: "alignItems", gap }}>{children}&lt;/div>;
};

const MyComponent = () =&gt; {
const [count, setCount] = useState(0);

return (
  &lt;div>
    &lt;h2&gt;Hello, React World!&lt;/h2>
    &lt;p&gt;
      This is a simple React component rendered in a WordPress plugin. It is a counter that increments every time you
      click the button.
    &lt;/p>

    &lt;FlexContainer gap={14} alignItems="center">
      &lt;WordPressButton onClick={() => setCount(count + 1)}>Click me&lt;/WordPressButton>
      &lt;span>{count}&lt;/span>
    &lt;/FlexContainer>
  &lt;/div>
);
};

render(&lt;MyComponent />, document.getElementById("react-test"));</code></pre>


<h3><?php _e('Step 4 - compile', 'wp-kirk'); ?></h3>

<p><?php _e('Run the following command to compile the JavaScript file:', 'wp-kirk'); ?></p>

<pre><code class="language-bash">npm run build</code></pre>

<h3><?php _e('Step 5 - check the result below', 'wp-kirk'); ?></h3>

<hr/>
    <div id="react-test"></div>

  </div>
</div>
