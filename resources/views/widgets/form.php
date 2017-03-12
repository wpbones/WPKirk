<h2>Widget Backend</h2>

<p>
  <label for="<?php echo $widget->get_field_name( 'title' ) ?>">Title:</label>
  <input type="text"
         class="widefat"
         id="<?php echo $widget->get_field_name( 'title' ) ?>"
         name="<?php echo $widget->get_field_name( 'title' ) ?>"
         placeholder="Title in fromtend"
         value="<?php echo $instance[ 'title' ] ?>"/>
</p>

<h2><?php var_dump( $instance ) ?></h2>
<h3><?php echo $plugin->Name ?></h3>
<?php echo WPKirk\Html::button( 'Click Me!' ) ?>