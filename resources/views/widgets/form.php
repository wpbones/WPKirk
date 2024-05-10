<h2>Widget Backend Form</h2>

<p>
  <label
    for="<?php echo $widget->get_field_name('title'); ?>">Title:</label>
  <input type="text" class="widefat"
    id="<?php echo $widget->get_field_name('title'); ?>"
    name="<?php echo $widget->get_field_name('title'); ?>"
    placeholder="Title in fromtend"
    value="<?php echo $instance['title']; ?>" />
</p>

<?php WPKirk::$plugin->log()->info('Widget args backend', $instance); ?>

<h3><?php echo $plugin->Name; ?>
</h3>
<?php echo WPKirk\Html::button('Click Me!');
