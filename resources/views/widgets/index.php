<div>
  <?php
//echo $args['before_title']
?>
  <h1>Widget Output</h1>
  <?php
//echo $args['after_title']
?>
  <h3 class="wp-kirk-widget-title"><?php echo $plugin->Name; ?>
  </h3>

  <?php WPKirk::$plugin->log()->info('Widget args frontend', $args); ?>

  </pre>
  <?php echo WPKirk\Html::button('Click Me!'); ?>
</div>
