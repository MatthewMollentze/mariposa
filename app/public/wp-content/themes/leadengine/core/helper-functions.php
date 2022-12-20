<?php
/**
 * Helper functions for LeadEngine Theme.
 *
 * @package LeadEngine
 * @since 2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Fire the wp_body_open action. Backward compatibility for WordPress versions < 5.2
 */
if ( ! function_exists( 'wp_body_open' ) ) {
	function wp_body_open() {
		do_action( 'wp_body_open' );
  }
}

/**
 * Return Theme options.
 */
 if ( ! function_exists( 'leadengine_get_option' ) ) {
   function leadengine_get_option( $option, $default = '' ) {
  	 global $redux_ThemeTek;

  	 if ( empty( $redux_ThemeTek ) ) {
  		 if ( is_multisite() ) {
  			 $redux_ThemeTek = get_blog_option( get_current_blog_id(), 'redux_ThemeTek' );
  		 } else {
  			 $redux_ThemeTek = get_option( 'redux_ThemeTek' );
  		 }
  	 }

  	 if ( ( isset( $redux_ThemeTek[$option] ) && $redux_ThemeTek[$option] === '0') || !empty( $redux_ThemeTek[$option] ) ) {
  		 return $redux_ThemeTek[$option];
  	 } else {
  		 return $default;
  	 }

   }
  }

/**
 * Compress CSS
 */
if ( ! function_exists( 'leadengine_compress_css' ) ) {
	function leadengine_compress_css( $css = '' ) {
			if ( ! empty( $css ) ) {
				$css = preg_replace( '!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css );
				$css = str_replace( array( "\r\n", "\r", "\n", "\t", '  ', '    ', '    ' ), '', $css );
				$css = str_replace( ', ', ',', $css );
			}
			return $css;
	}
}

/**
 * Theme activation option
 */
if ( ! function_exists( 'leadengine_activation_option' ) ) {
	function leadengine_activation_option() {
		add_option( 'keydesign-verify', 'no', '', false );
		add_option( 'envato_purchase_code_21514338', '', '', false );
	}
}
add_action( 'admin_init', 'leadengine_activation_option' );

/**
 * Display search form
 */

if ( ! function_exists( 'leadengine_get_search_form' ) ) {
	function leadengine_get_search_form( $echo = true ) {
		$form = '<form role="search" method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
		<label>
			<span class="screen-reader-text">' . _x( 'Search for:', 'label', 'leadengine' ) . '</span>
			<input type="search" class="search-field" placeholder="' . apply_filters( 'leadengine_search_field_placeholder', esc_attr_x( 'Search &hellip;', 'placeholder', 'leadengine' ) ) . '" value="' . get_search_query() . '" name="s" />';
			if ( 'search-all' != leadengine_get_option( 'tek-search-form-content' ) && '' != leadengine_get_option( 'tek-search-form-content' ) ) {
				$form .= '<input type="hidden" name="post_type" value="' . leadengine_get_option( 'tek-search-form-content' ) . '">';
			}
		$form .= '</label>
		<input type="submit" class="search-submit">
	</form>';

	$result_escaped = apply_filters( 'leadengine_get_search_form', $form );

	if ( null === $result_escaped ) {
		$result_escaped = $form;
	}

	// The $result_escaped variable has been safely escaped

	if ( $echo ) {
		echo "" . $result_escaped;
	} else {
		return $result_escaped;
	}

	}
}

/**
* Display social icons
*/

if ( ! function_exists( 'leadengine_social_icons' ) ) {
 	function leadengine_social_icons( $echo = true ) {
	 	$social_items = leadengine_get_option( 'tek-social-profiles' );
	 	$output = $output_escaped = '';
	 	if ( class_exists( 'ReduxFramework' ) ) {
		 	$output = '<ul class="redux-social-media-list clearfix">';
		 	if ( is_array( $social_items ) ) {
			 	foreach ( $social_items as $key => $social_item ) {
				 	if ( $social_item[ 'enabled' ] ) {
					 	$icon = $social_item[ 'icon' ];
					 	$base_url = $social_item[ 'url' ];

					 	$output .= '<li>';
					 	$output .= '<a target="_blank" href="'. $base_url . '">';
					 	$output .= '<i class="fab ' . $icon . '"></i>';
					 	$output .= "</a>";
					 	$output .= "</li>";
				 	}
			 	}
		 	}
		 	$output .= '</ul>';
		 	$output_escaped = $output;
	 	}

	 	// The $output_escaped variable has been safely escaped
	 	if ( $echo ) {
		 	echo "" . $output_escaped;
	 	} else {
		 	return $output_escaped;
	 	}
 	}
}

/**
 * Allowed HTML tags
 */
if ( ! function_exists( 'leadengine_allowed_html_tags' ) ) {
	function leadengine_allowed_html_tags() {
		$allowed_tags = array(
			 'a' => array(
				 'class' => array(),
				 'href'  => array(),
				 'rel'   => array(),
				 'title' => array(),
				 'target' => array(),
			 ),
			 'b' => array(),
			 'br' => array(),
			 'div' => array(
				 'class' => array(),
				 'title' => array(),
				 'style' => array(),
			 ),
			 'em' => array(),
			 'h1' => array(),
			 'h2' => array(),
			 'h3' => array(),
			 'h4' => array(),
			 'h5' => array(),
			 'h6' => array(),
			 'i' => array(),
			 'img' => array(
				 'alt'    => array(),
				 'class'  => array(),
				 'height' => array(),
				 'src'    => array(),
				 'width'  => array(),
			 ),
			 'p' => array(
				 'class' => array(),
			 ),
			 'span' => array(
				 'class' => array(),
				 'title' => array(),
				 'style' => array(),
			 ),
			 'strong' => array(),
		 );

		 return $allowed_tags;
	 }
 }

 /**
 * Render footer copyright markup
 */
 if ( ! function_exists( 'leadengine_footer_copyright' ) ) {
	 function leadengine_footer_copyright() {
		 $content = leadengine_get_option( 'tek-footer-text' );
		 if ( $content ) {
			 $content = str_replace( '[copyright]', '&copy;', $content );
			 $content = str_replace( '[current_year]', gmdate( 'Y' ), $content );
			 $content = str_replace( '[site_title]', get_bloginfo( 'name' ), $content );
			 $output = wp_kses( $content, leadengine_allowed_html_tags() );
			 echo apply_filters( 'leadengine_footer_copyright_output', $output );
		 } else {
			 if ( ! class_exists( 'ReduxFramework' ) ) {
				 echo esc_html__( 'LeadEngine by KeyDesign. All rights reserved.', 'leadengine' );
			 }
		 }
	 }
 }
