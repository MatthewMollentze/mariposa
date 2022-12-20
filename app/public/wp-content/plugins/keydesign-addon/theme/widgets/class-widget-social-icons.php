<?php
class KD_Widget_Social_Icons extends WP_Widget {

	public function __construct() {
		$widget_ops = array(
			'classname' => 'redux-social-icons-display',
			'description' => __( 'Display social media links.' ),
			'customize_selective_refresh' => true,
		);
		$control_ops = array(
			'width' => 250,
			'height' => 200,
			'id_base' => 'redux-social-icons-display'
		);

		parent::__construct( 'redux-social-icons-display', __( 'Social Icons' ), $widget_ops, $control_ops );
	}

	public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : '';

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		$social_items = '';

		if ( function_exists( 'leadengine_get_option' ) ) {
			$social_items = leadengine_get_option( 'tek-social-profiles' );
		}
		?>

		<?php echo $args['before_widget'];

		if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		} ?>
			<ul class="redux-social-media-list clearfix">
			<?php if ( is_array( $social_items ) ) {
				 foreach ( $social_items as $key => $social_item ) {
					 if ( $social_item[ 'enabled' ] ) {
						 $icon = $social_item[ 'icon' ];
						 $base_url = $social_item[ 'url' ]; ?>

						<li>
							<a target="_blank" href="<?php echo $base_url; ?>">
								<i class="fab <?php echo $icon; ?>"></i>
							</a>
						</li>
					<?php }
				 }
			 } ?>
			</ul>
		<?php
		echo $args['after_widget'];
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );

		return $instance;
	}

	public function form( $instance ) {
		$title = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';

		?>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>

		<?php
	}
}
