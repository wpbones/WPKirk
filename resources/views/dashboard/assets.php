<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<div class="wp-kirk wrap wp-kirk-sample">

  <h1>Assets</h1>

  <div class="wp-kirk-toc clearfix">
    <ul>
      <li><a href="#styles">Styles</a></li>
      <li><a href="#javascript">Javascript</a></li>
      <li><a href="#react">ReactJS and Typescript</a></li>
    </ul>
  </div>

  <div class="wp-kirk-toc-content">
    <h2>Assets</h2>

    <p>WP Bones provides a simple way to include assets in your plugin. You can include styles and scripts in the admin area and in the public area.</p>

    <a name="styles"></a>
    <h3>Styles</h3>

    <p>Currently, WP Bones supports the following styles: standard CSS files, SCSS files, and LESS files.
    You may create your styles in the <code class="language-bash inline">resources/assets/css</code> directory.</p>
    <p>The files <code class="language-bash inline">.css</code>, <code class="language-bash inline">.scss</code>, and <code class="language-bash inline">.less</code> will be compiled and you will find the css compiled in the <code class="language-html inline">public/css</code> directory.</p>
    <p>Next, you can include your styles by using the usual way</p>

    <pre><code class="language-php">public function assets()
{
  return WPKirk()
    ->view('dashboard.assets')
    ->withAdminStyles('my-styles');
  }</code></pre>

  <a name="javascript"></a>
  <h3>Javascript</h3>

  <p>Javascript files work in the same way as styles. You can create your javascript files in the <code class="language-bash inline">resources/assets/js</code> directory.</p>
  <p>You can find more details in the <a href="https://wpbones.vercel.app/docs/GettingStarted/assets">Assets documentation</a>.</p>

  <a name="react"></a>
  <h3>ReactJS and Typescript</h3>

  <p>You may use gulp to compile simple React components. you will be able to compile .jsx files and .tsx files. The compiled files will be in the <code class="language-html inline">public/js</code> directory.</p>

  <p>React component is a JavaScript file that contains a component. It can be a simple component or a complex one. You can use it to create a custom page or a custom widget. Now it's available to use in your WordPress environment.</p>

  <h3>Step 1 - create a placeholder</h3>

  <p>We create a placeholder <code class="language-html inline">div</code> with an <code class="language-html inline">id</code>.</p>

  <pre><code class="language-html">&lt;div id="react-test"&gt;&lt;/div&gt;</code></pre>

  <h3>Step 2 - include the JavaScript file</h3>

  <p>In the Dashboard controller we include the JavaScript file. It's a simple example, but you can include it in a more complex way.</p>

  <pre><code class="language-php">public function assets()
{
return WPKirk()
  ->view('dashboard.assets')
  ->withAdminStyles('wp-kirk-common')
  ->withAdminStyles('prism')
  ->withAdminScripts('prism')
  ->withAdminScripts('wp-react-component', ['wp-element']); // wp-element is a dependency
}</code></pre>

<h3>Step 3 - create the React component</h3>

<p>In the <code class="language-js">resources/assets/js/</code> directory we create a new file <code class="language-js">wp-react-component.js</code> with the following content:</p>

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


<h3>Step 4 - compile</h3>

<p>Run the following command to compile the JavaScript file:</p>

<pre><code class="language-bash">npm run build</code></pre>

<h3>Step 5 - check the result below</h3>

<hr/>
    <div id="react-test"></div>

  </div>
</div>
