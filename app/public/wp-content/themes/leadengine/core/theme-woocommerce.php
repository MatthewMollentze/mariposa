<?php

	if ( ! class_exists( 'WooCommerce' ) ) {
		return;
	}

	// Remove WooCommerce enqueued styles
	add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

	// Remove WooCommerce prettyPhoto
	if( ! function_exists( 'leadengine_remove_woo_scripts' ) ) {
		function keydesign_remove_woo_scripts() {
		    wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
		    wp_dequeue_script( 'prettyPhoto' );
		    wp_dequeue_script( 'prettyPhoto-init' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'keydesign_remove_woo_scripts', 99 );

	if( ! function_exists( 'leadengine_remove_customizer' ) ) {
		function leadengine_remove_customizer($wp_customize) {
		  $wp_customize->remove_control('woocommerce_catalog_columns');
		}
	}
	add_action('customize_register', 'leadengine_remove_customizer', 20, 1);

	// Add wrappers for product listing
	if( ! function_exists( 'leadengine_woo_start_image_wrapper' ) ) {
		function leadengine_woo_start_image_wrapper() {
		   echo '<div class="woo-entry-image">';
		}
	}
	add_action( 'woocommerce_before_shop_loop_item_title', 'leadengine_woo_start_image_wrapper', 5, 2 );

	if( ! function_exists( 'leadengine_woo_end_image_wrapper' ) ) {
		function leadengine_woo_end_image_wrapper() {
		    echo '</div><div class="woo-entry-wrapper">';
		}
	}
	add_action( 'woocommerce_before_shop_loop_item_title', 'leadengine_woo_end_image_wrapper', 12, 2 );

	if( ! function_exists( 'leadengine_woo_end_entry_wrapper' ) ) {
		function leadengine_woo_end_entry_wrapper() {
		    echo '</div>';
		}
	}
	add_action( 'woocommerce_after_shop_loop_item', 'leadengine_woo_end_entry_wrapper', 12, 2 );


	// Return related products
	if( ! function_exists( 'leadengine_woo_related_products' ) ) {
		function leadengine_woo_related_products( $args ) {
			$related_number = leadengine_get_option( 'tek-woo-related-products-number' );
			if ( $related_number == '' ) {
				$related_number = 0;
			}
			$args['posts_per_page'] = $related_number;
			$args['columns'] = $related_number;
			return $args;
		}
	}
	add_filter( 'woocommerce_output_related_products_args', 'leadengine_woo_related_products' );

	// Return number of products in shop page
	if( ! function_exists( 'leadengine_loop_shop_per_page' ) ) {
		function leadengine_loop_shop_per_page( $product_number ) {
	    $product_number = leadengine_get_option( 'tek-woo-products-number' );
		  return $product_number;
		}
	}
	add_filter( 'loop_shop_per_page', 'leadengine_loop_shop_per_page' );

	// Move position of related and upsells products
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );

	add_action ( 'woocommerce_after_main_content', 'woocommerce_output_related_products', 2);
	add_action ( 'woocommerce_after_main_content', 'woocommerce_upsell_display', 5);

	if( ! function_exists( 'leadengine_enqueue_woocommerce' ) ) {
		function leadengine_enqueue_woocommerce() {
			wp_enqueue_style( 'keydesign-woocommerce', get_template_directory_uri() . '/core/assets/css/woocommerce.css', array(), null, 'all' );
			wp_register_script( 'keydesign-ajaxcart', get_template_directory_uri() . '/core/assets/js/woocommerce-keydesign.js', array() , null );

			wp_localize_script(
				'keydesign-ajaxcart',
				'keydesign_menucart_ajax',array('nonce' => wp_create_nonce('keydesign-ajaxcart'))
			);
			wp_enqueue_script( 'keydesign-ajaxcart' );
		}
	}
	add_action('wp_enqueue_scripts', 'leadengine_enqueue_woocommerce', 98 );

	if( ! function_exists( 'leadengine_get_cart_items' ) ) {
		function leadengine_get_cart_items() {
			global $woocommerce;
			$articles = sizeof( $woocommerce->cart->get_cart() );
			$cart = $items_total = '';

			if (  $articles > 0 ) {
				$items_total = $woocommerce->cart->cart_contents_count;
				foreach ( $woocommerce->cart->get_cart() as $cart_item_key => $cart_item ) {
					$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
					$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
					if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
						$product_name  = apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key );
						$thumbnail     = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
						$product_price = apply_filters( 'woocommerce_cart_item_price', $woocommerce->cart->get_product_price( $_product ), $cart_item, $cart_item_key );

						$cart .= '<li class="cart-item-list clearfix">';
						if ( ! $_product->is_visible() ) {
							$cart .= str_replace( array( 'http:', 'https:' ), '', $thumbnail );
						} else {
							$cart .= '<a class="cart-thumb" href="'.esc_url(get_permalink( $product_id )).'">
										'.str_replace( array( 'http:', 'https:' ), '', $thumbnail ) . '
									</a>';
						}

						$cart .= '<div class="cart-desc"><a class="cart-item" href="'.esc_url(get_permalink( $product_id )).'">' . $product_name . '</a>';
						$cart .= '<span class="product-quantity">'. apply_filters( 'woocommerce_widget_cart_item_quantity',  '<span class="quantity-container">' . sprintf( '%s &times; %s',$cart_item['quantity'] , '</span>' . $product_price ) , $cart_item, $cart_item_key ) . '</span>';
						$cart .= '</div>';
						$cart .= '</li>';
					}
				}

				$cart .= '<li class="subtotal"><span><strong>' . esc_html__('Subtotal:', 'leadengine') . '</strong> ' . $woocommerce->cart->get_cart_total() . '</span></li>';
				$cart .= '<li class="buttons clearfix">
							<a href="'.wc_get_cart_url().'" class="wc-forward btn btn-link"><i class="fa fa-bag"></i>'.esc_html__( 'View Cart', 'leadengine' ).'</a>
							<a href="'.wc_get_checkout_url().'" class="checkout wc-forward btn btn-link"><i class="fa fa-square-check"></i>'.esc_html__( 'Checkout', 'leadengine' ).'</a>
						  </li>';
			} else {
				$cart .= '<li><span class="empty-cart">' . apply_filters( 'leadengine_mini_cart_empty_text', esc_html__("Your cart is currently empty.", "leadengine") ) . '</span></li>';
			}
			return array('cart' => $cart, 'articles' => $items_total);
		}
	}

	if ( ! function_exists( 'leadengine_woomenucart_ajax' ) ) {
		function leadengine_woomenucart_ajax() {
			$cart = leadengine_get_cart_items();
			echo json_encode($cart);
			die();
		}
	}
	add_action( 'wp_ajax_woomenucart_ajax', 'leadengine_woomenucart_ajax');
	add_action( 'wp_ajax_nopriv_woomenucart_ajax', 'leadengine_woomenucart_ajax' );

	if ( ! function_exists( 'leadengine_woomenucart_remove_ajax' ) ) {
		function leadengine_woomenucart_remove_ajax( $return ) {
			$cart = WC()->cart;
			$item_key = $_POST['item_key'] ? $_POST['item_key'] : 0;

			if($item_key){
				$cart->remove_cart_item( $item_key );
			}

			die();
		}
	}
	add_action( 'wp_ajax_woomenucart_remove_ajax', 'leadengine_woomenucart_remove_ajax');
	add_action( 'wp_ajax_nopriv_woomenucart_remove_ajax', 'leadengine_woomenucart_remove_ajax' );

	if( ! function_exists( 'leadengine_add_cart_in_menu' ) ) {
		function leadengine_add_cart_in_menu() {
			global $woocommerce;
			$items_total = $woocommerce->cart->cart_contents_count;
			$get_cart_items = leadengine_get_cart_items();

			$cart_container = '<ul role="menu" class="drop-menu cart_list product_list_widget keydesign-cart-dropdown">'.((isset($get_cart_items['cart']) && $get_cart_items['cart'] !=='') ? $get_cart_items['cart'] : '<li><span class="empty-cart">' . apply_filters( 'leadengine_mini_cart_empty_text', esc_html__("Your cart is currently empty.", "leadengine") ) . '</span></li>').'</ul>';
			$cart_items = '<div class="keydesign-cart menu-item menu-item-has-children dropdown">
				<a href="'.wc_get_cart_url().'" class="dropdown-toggle" title="cart">
				<span class="cart-icon-container">
					<i class="cart-icon fas fa-shopping-cart"></i>';
			$cart_items .= (( $items_total !== 0 ) ? '<span class="badge">'.$items_total.'</span>' : '<span class="badge" style="display: none;"></span>').'</span></a>'. $cart_container.'</div>';
					return $cart_items;
		}
	}
