<?php

/**
 * Initialize portfolio custom post type
 */

 // ------------------------------------------------------------------------
 // Register portfolio custom post type
 // ------------------------------------------------------------------------

	$labels = array(
		'name'               => esc_html_x( 'Portfolio', 'Post type general name', 'keydesign' ),
		'singular_name'      => esc_html_x( 'Portfolio', 'Post type singular name', 'keydesign' ),
		'menu_name'          => esc_html_x( 'Portfolio', 'keydesign' ),
		'name_admin_bar'     => esc_html_x( 'Portfolio', 'keydesign' ),
		'add_new'            => esc_html_x( 'Add New', 'portfolio', 'keydesign' ),
		'add_new_item'       => esc_html__( 'Add New Portfolio Item', 'keydesign' ),
		'new_item'           => esc_html__( 'New Portfolio Item', 'keydesign' ),
		'edit_item'          => esc_html__( 'Edit Portfolio Item', 'keydesign' ),
		'view_item'          => esc_html__( 'View Portfolio Item', 'keydesign' ),
		'all_items'          => esc_html__( 'All Portfolio Items', 'keydesign' ),
		'search_items'       => esc_html__( 'Search Portfolio Items', 'keydesign' ),
		'parent_item_colon'  => esc_html__( 'Parent Portfolios:', 'keydesign' ),
		'not_found'          => esc_html__( 'No portfolio items found.', 'keydesign' ),
		'not_found_in_trash' => esc_html__( 'No portfolio items found in Trash.', 'keydesign' )
	);

  $labels = apply_filters( 'keydesign_portfolio_item_labels', $labels ); // allow filtering

	$args = array(
		'labels' => $labels,
    'description' => esc_html__( 'Description.', 'keydesign' ),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
		'menu_icon' => 'dashicons-schedule',
		'query_var' => 'portfolios',
    'exclude_from_search' => false,
		'rewrite' => array( 'slug' => 'portfolio', 'with_front' => false, 'pages' => true, 'feeds' => false, ),
		'capability_type' => 'page',
		'has_archive' => false,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'page-attributes', 'comments' ),
    'taxonomies' => array('portfolio-tag','portfolio-category')
	);



  $args = apply_filters( 'keydesign_portfolio_item_args', $args ); // allow filtering

	register_post_type( 'portfolio', $args );

  // Create portfolio categories taxonomy
		register_taxonomy( 'portfolio-category', array('portfolio'),
			array(
				'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
      	'show_admin_column' => true,
      	'show_in_nav_menus' => false,
      	'show_tagcloud' => true,
        'query_var' => 'portfolio-category',
				'label' => esc_html__( 'Categories','keydesign' ),
				'rewrite' => array(
        'slug' => 'portfolio-category',
        'with_front' => true,
        'hierarchical' => false,
        ),
			)
		);

  add_action('after_theme_switch', 'keydesign_custom_flush_rules');
  function keydesign_custom_flush_rules() {
  	//defines the post type so the rules can be flushed.
  	keydesign_portfolio_post_type();
  	//flush the rules.
  	flush_rewrite_rules();
  }
?>
