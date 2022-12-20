<?php
// ------------------------------------------------------------------------
// Create metaboxes in pages
// ------------------------------------------------------------------------
// Adds meta boxes to the main column on the Page edit screens.
	function themetek_add_meta_box() {
		$redux_ThemeTek = get_option( 'redux_ThemeTek' );
		$screens = array( 'page', 'portfolio' );
		foreach ( $screens as $screen ) {
			// Header
			add_meta_box(
				'themetek_pageheader',
				esc_html__( 'Header', 'leadengine' ), 'themetek_meta_box_page_header', $screen, 'normal', 'high' );

			// Page title
			add_meta_box(
				'themetek_pagetitle',
				esc_html__( 'Title Section', 'leadengine' ), 'themetek_meta_box_title_section', $screen, 'normal', 'high' );

			// Page settings
			add_meta_box(
				'themetek_pagesettings',
				esc_html__( 'Page Settings', 'leadengine' ), 'themetek_meta_box_pagesettings', $screen, 'normal', 'high' );
		}

	}
	add_action( 'add_meta_boxes', 'themetek_add_meta_box' );

	// Print page header meta box content.
	function themetek_meta_box_page_header($post) {
		// Add an nonce field so we can check for it later
		wp_nonce_field( 'themetek_meta_box_page_header', 'themetek_meta_box_page_header_nonce' );
		// Retrieve an existing value from the database and use the value for the form.
		$themetek_page_transparent_navbar = get_post_meta( $post->ID, '_themetek_page_transparent_navbar', true );

		// Show/hide title on pages
		echo '<div class="kd_meta_block_prim meta_block_bottom">';
			echo '<label for="page_transparent_navbar">';
				esc_html_e( 'Transparent navbar', 'leadengine' );
			echo '</label>';
			$page_transparent_navbar_checked = '';
			if ($themetek_page_transparent_navbar == "yes") {
				$page_transparent_navbar_checked = 'checked="checked"';
			}
			echo '<input type="checkbox" id="page_transparent_navbar" name="page_transparent_navbar" value="yes" ' . esc_attr($page_transparent_navbar_checked) . ' />';
			echo '<span class="kd-meta-desc">';
				esc_html_e( 'If checked, the navbar section will take a transparent color. This option is linked with the homepage transparent settings.', 'leadengine' );
			echo '</span>';
		echo '</div>';
	}

	// Print page title meta box content.
	function themetek_meta_box_title_section($post) {
		// Add an nonce field so we can check for it later
		wp_nonce_field( 'themetek_meta_box_title_section', 'themetek_meta_box_title_section_nonce' );
		// Retrieve an existing value from the database and use the value for the form.
		$themetek_page_showhide_title_section = get_post_meta( $post->ID, '_themetek_page_showhide_title_section', true );
		$themetek_page_showhide_breadcrumbs = get_post_meta( $post->ID, '_themetek_page_showhide_breadcrumbs', true );
		$themetek_page_particles = get_post_meta( $post->ID, '_themetek_page_particles', true );
		$themetek_page_subtitle = get_post_meta( $post->ID, '_themetek_page_subtitle', true );
		$themetek_page_title_color = get_post_meta( $post->ID, '_themetek_page_title_color', true );
		$themetek_page_titlebar_background = get_post_meta( $post->ID, '_themetek_page_titlebar_background', true );
		$themetek_title_bar_top_padding = get_post_meta( $post->ID, '_themetek_title_bar_top_padding', true );
		$themetek_title_bar_bottom_padding = get_post_meta( $post->ID, '_themetek_title_bar_bottom_padding', true );

		// Show/hide title on pages
		echo '<div class="kd_meta_block_prim meta_block_top">';
			echo '<label for="page_showhide_title_section">';
				esc_html_e( 'Hide page title section', 'leadengine' );
			echo '</label>';
			$page_showhide_title_section_checked = '';
			if ($themetek_page_showhide_title_section == "yes") {
				$page_showhide_title_section_checked = 'checked="checked"';
			}
			echo '<input type="checkbox" id="page_showhide_title_section" name="page_showhide_title_section" value="yes" ' . esc_attr($page_showhide_title_section_checked) . ' />';
			echo '<span class="kd-meta-desc">';
				esc_html_e( 'If checked, title section will be hidden.', 'leadengine' );
			echo '</span>';
		echo '</div>';
		// Show/hide breadcrumbs on pages
		echo '<div class="kd_meta_block_prim">';
			echo '<label for="page_showhide_breadcrumbs">';
				esc_html_e( 'Hide breadcrumbs', 'leadengine' );
			echo '</label>';
			$page_showhide_breadcrumbs_checked = '';
			if ($themetek_page_showhide_breadcrumbs == "yes") {
				$page_showhide_breadcrumbs_checked = 'checked="checked"';
			}
			echo '<input type="checkbox" id="page_showhide_breadcrumbs" name="page_showhide_breadcrumbs" value="yes" ' . esc_attr($page_showhide_breadcrumbs_checked) . ' />';
			echo '<span class="kd-meta-desc">';
				esc_html_e( 'If checked, breadcrumbs will be hidden.', 'leadengine' );
			echo '</span>';
		echo '</div>';
		// Enable particles
		echo '<div class="kd_meta_block_prim">';
			echo '<label for="page_particles">';
				esc_html_e( 'Enable particles', 'leadengine' );
			echo '</label>';
			$page_particles_checked = '';
			if ($themetek_page_particles == "yes") {
				$page_particles_checked = 'checked="checked"';
			}
			echo '<input type="checkbox" id="page_particles" name="page_particles" value="yes" ' . esc_attr($page_particles_checked) . ' />';
			echo '<span class="kd-meta-desc">';
				esc_html_e( 'Check to load a particles effect in the title bar area.', 'leadengine' );
			echo '</span>';
		echo '</div>';
		// Page subtitle text
		echo '<div class="kd_meta_block_prim">';
			echo '<label for="page_subtitle">';
				esc_html_e( 'Page subtitle', 'leadengine' );
			echo '</label>';
			echo '<input type="text" class="page_subtitle_box" id="page_subtitle" name="page_subtitle" value="' . esc_attr( $themetek_page_subtitle ) . '"/>';
			echo '<span class="kd-meta-desc">';
				esc_html_e( 'Write the section subtitle. Displayed under the main page title.', 'leadengine' );
			echo '</span>';
		echo '</div>';
		// Text align
		$values_text_align = get_post_custom( $post->ID );
		$selected_text_align = isset( $values_text_align['page_title_align'] ) ? esc_attr( $values_text_align['page_title_align'][0] ) :'';

		echo '<div class="kd_meta_block_prim">';
			echo '<label for="page_title_align">';
				esc_html_e( 'Title text align', 'leadengine' );
			echo '</label>';
			echo '<select name="page_title_align" id="page_title_align">';
				echo '<option value="left-align" '.esc_attr(selected( $selected_text_align, 'left-align' )).'>Left</option>';
				echo '<option value="center-align" '.esc_attr(selected( $selected_text_align, 'center-align' )).'>Center</option>';
				echo '<option value="right-align" '.esc_attr(selected( $selected_text_align, 'right-align' )).'>Right</option>';
			echo '</select>';
		echo '</div>';
		// Page title and subtitle text color
		echo '<div class="kd_meta_block_prim">';
			echo '<label for="page_title_color">';
				esc_html_e( 'Title and subtitle color', 'leadengine' );
			echo '</label>';
			echo '<input type="text" class="page_title_color_box" id="page_title_color" name="page_title_color" value="' . esc_attr( $themetek_page_title_color ) . '"/>';
			echo '<span class="kd-meta-desc">';
				esc_html_e( 'Specify the page title and subtitle color. Eg. #FFFFFF', 'leadengine' );
			echo '</span>';
		echo '</div>';
		// Title bar background color
		echo '<div class="kd_meta_block_prim">';
			echo '<label for="page_titlebar_background">';
				esc_html_e( 'Title bar background color', 'leadengine' );
			echo '</label>';
			echo '<input type="text" class="page_titlebar_background_box" id="page_titlebar_background" name="page_titlebar_background" value="' . esc_attr( $themetek_page_titlebar_background ) . '"/>';
			echo '<span class="kd-meta-desc">';
				esc_html_e( 'Specify the title bar background color. Eg. #FFFFFF', 'leadengine' );
			echo '</span>';
		echo '</div>';
		// Title bar top padding
		echo '<div class="kd_meta_block_prim">';
			echo '<label for="title_bar_top_padding">';
				esc_html_e( 'Title bar top padding', 'leadengine' );
			echo '</label>';
			echo '<input type="text" id="title_bar_top_padding" name="title_bar_top_padding" value="' . esc_attr( $themetek_title_bar_top_padding ) . '" />';
			echo '<span class="kd-meta-desc">';
				esc_html_e( 'Specify the title bar top padding value (Default: 200px). Used to adjust the title bar height.', 'leadengine' );
			echo '</span>';
		echo '</div>';
		// Title bar bottom padding
		echo '<div class="kd_meta_block_prim meta_block_bottom">';
			echo '<label for="title_bar_bottom_padding">';
				esc_html_e( 'Title bar bottom padding', 'leadengine' );
			echo '</label>';
			echo '<input type="text" id="title_bar_bottom_padding" name="title_bar_bottom_padding" value="' . esc_attr( $themetek_title_bar_bottom_padding ) . '" />';
			echo '<span class="kd-meta-desc">';
				esc_html_e( 'Specify the title bar bottom padding value (Default: 100px). Used to adjust the title bar height.', 'leadengine' );
			echo '</span>';
		echo '</div>';
	}

	// Print page settings meta box content.
	function themetek_meta_box_pagesettings($post) {
		// Add an nonce field so we can check for it later
		wp_nonce_field( 'themetek_meta_box_pagesettings', 'themetek_meta_box_pagesettings_nonce' );
		// Retrieve an existing value from the database and use the value for the form.
		$themetek_page_bgcolor = get_post_meta( $post->ID, '_themetek_page_bgcolor', true );
		$themetek_page_top_padding = get_post_meta( $post->ID, '_themetek_page_top_padding', true );
		$themetek_page_bottom_padding =	get_post_meta( $post->ID, '_themetek_page_bottom_padding', true );

		// Get page background color
		echo '<div class="kd_meta_block_prim meta_block">';
			echo '<label for="page_bgcolor">';
				esc_html_e( 'Background color', 'leadengine' );
			echo '</label>';
			echo '<input class="themetek-meta-color" type="text" id="page_bgcolor" name="page_bgcolor" value="' . esc_attr( $themetek_page_bgcolor ) . '" />';
			echo '<span class="kd-meta-desc">';
				esc_html_e( 'Specify the page background color. Eg. #FFFFFF', 'leadengine' );
			echo '</span>';
		echo '</div>';
		// Get page top padding
		echo '<div class="kd_meta_block_prim">';
			echo '<label for="page_top_padding">';
				esc_html_e( 'Top padding', 'leadengine' );
			echo '</label>';
			echo '<input type="text" id="page_top_padding" name="page_top_padding" value="' . esc_attr( $themetek_page_top_padding ) . '" />';
			echo '<span class="kd-meta-desc">';
				esc_html_e( 'Specify the page top padding value. Eg. 10px', 'leadengine' );
			echo '</span>';
		echo '</div>';
	  // Get page bottom padding
		echo '<div class="kd_meta_block_prim meta_block_bottom">';
			echo '<label for="page_bottom_padding">';
				esc_html_e( 'Bottom padding', 'leadengine' );
			echo '</label>';
			echo '<input type="text" id="page_bottom_padding" name="page_bottom_padding" value="' . esc_attr( $themetek_page_bottom_padding ) . '" />';
			echo '<span class="kd-meta-desc">';
				esc_html_e( 'Specify the page bottom padding value. Eg. 10px', 'leadengine' );
			echo '</span>';
		echo '</div>';

	}


	// When the post is saved, saves our custom data. (Regular pages)
	function themetek_save_meta_box_data( $post_id ) {
		// Check if our nonce is set.
		if ( ! isset( $_POST['themetek_meta_box_page_header_nonce'] ) ) {
			return $post_id;
		}
		if ( ! isset( $_POST['themetek_meta_box_title_section_nonce'] ) ) {
			return $post_id;
		}
		if ( ! isset( $_POST['themetek_meta_box_pagesettings_nonce'] ) ) {
			return $post_id;
		}

		$nonce_pageheader = $_POST['themetek_meta_box_page_header_nonce'];
		$nonce_pagesettings = $_POST['themetek_meta_box_pagesettings_nonce'];
		$nonce_pagetitle = $_POST['themetek_meta_box_title_section_nonce'];
		// Verify that the nonce is valid.
		if ( ! wp_verify_nonce( $nonce_pageheader, 'themetek_meta_box_page_header' ) ) {
			return $post_id;
		}
		if ( ! wp_verify_nonce( $nonce_pagetitle, 'themetek_meta_box_title_section' ) ) {
			return $post_id;
		}
		if ( ! wp_verify_nonce( $nonce_pagesettings, 'themetek_meta_box_pagesettings' ) ) {
			return $post_id;
		}
		// If this is an autosave, our form has not been submitted, so we don't want to do anything.
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return $post_id;
		}
		// Check the user's permissions.
		if ( 'page' == $_POST['post_type'] ) {
			if ( ! current_user_can( 'edit_page', $post_id ) )
			return $post_id;
		} else {
			if ( ! current_user_can( 'edit_post', $post_id ) )
			return $post_id;
		}
		/* OK, it's safe for us to save the data now. */
		// Sanitize user input and update the meta field in the database.
		if( isset( $_POST[ 'page_transparent_navbar' ] ) ) {
		    update_post_meta( $post_id, '_themetek_page_transparent_navbar', 'yes' );
		} else {
		    update_post_meta( $post_id, '_themetek_page_transparent_navbar', '' );
		}
		if( isset( $_POST[ 'page_bgcolor' ] ) ) {
        	update_post_meta( $post_id, '_themetek_page_bgcolor', sanitize_text_field( $_POST[ 'page_bgcolor' ] ) );
  	}
  	if( isset( $_POST[ 'page_top_padding' ] ) ) {
      	update_post_meta( $post_id, '_themetek_page_top_padding', sanitize_text_field( $_POST[ 'page_top_padding' ] ) );
  	}
  	if( isset( $_POST[ 'page_bottom_padding' ] ) ) {
      	update_post_meta( $post_id, '_themetek_page_bottom_padding', sanitize_text_field( $_POST[ 'page_bottom_padding' ] ) );
  	}
		if( isset( $_POST[ 'page_showhide_title_section' ] ) ) {
		    update_post_meta( $post_id, '_themetek_page_showhide_title_section', 'yes' );
		} else {
		    update_post_meta( $post_id, '_themetek_page_showhide_title_section', '' );
		}
		if( isset( $_POST[ 'page_showhide_breadcrumbs' ] ) ) {
		    update_post_meta( $post_id, '_themetek_page_showhide_breadcrumbs', 'yes' );
		} else {
		    update_post_meta( $post_id, '_themetek_page_showhide_breadcrumbs', '' );
		}
		if( isset( $_POST[ 'page_particles' ] ) ) {
		    update_post_meta( $post_id, '_themetek_page_particles', 'yes' );
		} else {
		    update_post_meta( $post_id, '_themetek_page_particles', '' );
		}
  	if( isset( $_POST[ 'page_subtitle' ] ) ) {
      	update_post_meta( $post_id, '_themetek_page_subtitle', sanitize_text_field( $_POST[ 'page_subtitle' ] ) );
  	}
		if( isset( $_POST['page_title_align'] ) ) {
    	update_post_meta( $post_id, 'page_title_align', esc_attr( $_POST['page_title_align'] ) );
		}
		if( isset( $_POST[ 'page_title_color' ] ) ) {
      	update_post_meta( $post_id, '_themetek_page_title_color', sanitize_text_field( $_POST[ 'page_title_color' ] ) );
  	}
		if( isset( $_POST[ 'page_titlebar_background' ] ) ) {
      	update_post_meta( $post_id, '_themetek_page_titlebar_background', sanitize_text_field( $_POST[ 'page_titlebar_background' ] ) );
  	}
		if( isset( $_POST[ 'title_bar_top_padding' ] ) ) {
      	update_post_meta( $post_id, '_themetek_title_bar_top_padding', sanitize_text_field( $_POST[ 'title_bar_top_padding' ] ) );
  	}
		if( isset( $_POST[ 'title_bar_bottom_padding' ] ) ) {
      	update_post_meta( $post_id, '_themetek_title_bar_bottom_padding', sanitize_text_field( $_POST[ 'title_bar_bottom_padding' ] ) );
  	}
	}
	add_action( 'save_post', 'themetek_save_meta_box_data' );

?>
