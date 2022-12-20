<?php
	if( ! function_exists( 'keydesign_register_widgets' ) ) {
		function keydesign_register_widgets() {
			require_once dirname( __FILE__ ) . '/class-widget-social-icons.php';
			register_widget( 'KD_Widget_Social_Icons' );
		}
	}

	add_action( 'widgets_init', 'keydesign_register_widgets' );
