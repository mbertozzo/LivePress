<?php
/* --------Custom-------- */
class mb_Title_Widget extends WP_Widget {


  // Set up the widget name and description.
  public function __construct() {
    $widget_options = array( 'classname' => 'title_widget', 'description' => 'This is the widget to manage header title' );
    parent::__construct( 'title_widget', 'Title Widget', $widget_options );
  }


  // Create the widget output.
  public function widget( $args, $instance ) {
    $event_title = $instance[ 'title' ];
    $event_details = $instance[ 'details' ];
    $event_tagline = $instance[ 'tagline' ];

    echo $args['before_widget']; ?>

    <h2><?php echo $event_title ?></h2>
    <h3><span><?php echo $event_details ?></span></h3>
    <h3><?php echo $event_tagline ?></h3>

    <?php echo $args['after_widget'];
  }


  // Create the admin area widget settings form.
  public function form( $instance ) {
    $event_title = ! empty( $instance['title'] ) ? $instance['title'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
      <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $event_title ); ?>" />
    </p><?php

    $event_details = ! empty( $instance['details'] ) ? $instance['details'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'details' ); ?>">Details:</label>
      <input type="text" id="<?php echo $this->get_field_id( 'details' ); ?>" name="<?php echo $this->get_field_name( 'details' ); ?>" value="<?php echo esc_attr( $event_details ); ?>" />
    </p><?php

    $event_tagline = ! empty( $instance['tagline'] ) ? $instance['tagline'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'tagline' ); ?>">Tagline:</label>
      <input type="text" id="<?php echo $this->get_field_id( 'tagline' ); ?>" name="<?php echo $this->get_field_name( 'tagline' ); ?>" value="<?php echo esc_attr( $event_tagline ); ?>" />
    </p><?php
  }


  // Apply settings to the widget instance.
  public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
    $instance[ 'details' ] = strip_tags( $new_instance[ 'details' ] );
    $instance[ 'tagline' ] = strip_tags( $new_instance[ 'tagline' ] );
    return $instance;
  }

}

// Register the widget.
function mb_register_title_widget() {
  register_widget( 'mb_Title_Widget' );
}
add_action( 'widgets_init', 'mb_register_title_widget' );
?>
