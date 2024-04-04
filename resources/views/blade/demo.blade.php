<div class="wp-kirk wrap wp-kirk-sample">

  <h1>Demo Blade</h1>

  <img alt="BladeOne ogo" src="https://raw.githubusercontent.com/EFTEC/BladeOne/gh-pages/images/bladelogo.png" />

  <p>Starting from version 1.4.0, you can use blade templates in your plugin.</p>
  <p>We're using the <a href="https://github.com/EFTEC/BladeOne">BladeOne</a> template engine. BladeOne is a standalone version of Blade Template Engine that uses a single PHP file and can be ported and used in different projects. It allows you to use blade template outside Laravel.</p>

  <p>In this example, we have created a classic Controller. The same one used in the other examples.</p>

  <pre><code class="language-php">{{ $controller }}</code></pre>

  <p>We created a folder <code class="language-sh inline">/resources/views/blade</code> for clarity, but any other folder would be fine. In the example, we passed the WordPress <code class="language-sh inline">User</code> model as a parameter</p>

  <p>Finally, we have inserted the Blade directives into our file <code class="language-sh inline">/resources/views/blade/demo.blade.php</code></p>

  <pre><code class="language-php">{{ $code }}</code></pre>

  <p>The result is:</p>

  @foreach ($users as $user)
  <p>user_nicename: {{ $user->user_nicename }}</p>
  <p>user_email: {{ $user->user_email }}</p>
  @endforeach

    <p>For more information, please visit the <a href="https://github.com/EFTEC/BladeOne/wiki">BladeOne</a> Wiki pages.</p>

</div>
