<?php

if (!class_exists('KD_ELEM_IMAGE_COMPARISON')) {

    class KD_ELEM_IMAGE_COMPARISON extends KEYDESIGN_ADDON_CLASS {

        function __construct() {
            add_action('init', array($this, 'kd_image_comparison_init'));
            add_shortcode('tek_image_comparison', array($this, 'kd_image_comparison_shrt'));
        }

        // Element configuration in admin

        function kd_image_comparison_init() {
            if ( function_exists( 'vc_map' ) ) {
                vc_map( array(
                    "name" => esc_html__( "Image Comparison", "keydesign" ),
                    "description" => esc_html__( "Compare before and after images.", "keydesign" ),
                    "base" => "tek_image_comparison",
                    "class" => "",
                    "icon" => plugins_url('assets/element_icons/image-comparison.png', dirname(__FILE__)),
                    "category" => esc_html__( "KeyDesign Elements", "keydesign" ),
                    "params" => array(
                        array(
							"type" => "dropdown",
							"class" => "",
							"heading" => esc_html__( "Original image source", "keydesign" ),
							"param_name" => "original_image_source",
							"value" => array(
								"Media library" => "media_library",
								"External link" => "external_link",
							),
							"description" => esc_html__( "Select original image source.", "keydesign" ),
							"save_always" => true,
						),
						array(
							"type" => "attach_image",
							"class" => "",
							"heading" => esc_html__( "Original image", "keydesign" ),
							"param_name" => "original_image_ml",
							"value" => "",
							"description" => esc_html__( "Select or upload the original image using the media library.", "keydesign" ),
							"dependency" =>	array(
								"element" => "original_image_source",
								"value" => array( "media_library" ),
							),
						),
						array(
							"type" => "textfield",
							"class" => "",
							"heading" => esc_html__( "Original image", "keydesign" ),
							"param_name" => "original_image_ext",
							"value" => "",
							"description" => esc_html__( "Enter external link for the original image.", "keydesign" ),
							"dependency" =>	array(
								"element" => "original_image_source",
								"value" => array( "external_link" ),
							),
						),

						array(
							"type" => "textfield",
							"class" => "",
							"heading" => esc_html__( "Original image size", "keydesign" ),
							"param_name" => "original_image_size",
							"value" => "",
							"description" => esc_html__( "Enter image size in pixels. Example: 650x450 (Width x Height).", "keydesign" ),
							"dependency" =>	array(
								"element" => "original_image_source",
								"value" => array( "external_link" ),
							),
						),

						array(
							"type" => "textfield",
							"class" => "",
							"heading" => esc_html__( "Original image label", "keydesign" ),
							"param_name" => "original_image_label",
							"value" => "",
							"description" => esc_html__( "Enter the label text for the original image.", "keydesign" ),
						),

						array(
							"type" => "dropdown",
							"class" => "",
							"heading" => esc_html__( "Modified image source", "keydesign" ),
							"param_name" => "modified_image_source",
							"value" => array(
								"Media library" => "media_library",
								"External link" => "external_link",
							),
							"description" => esc_html__( "Select modified image source.", "keydesign" ),
							"save_always" => true,
						),
						array(
							"type" => "attach_image",
							"class" => "",
							"heading" => esc_html__( "Modified image", "keydesign" ),
							"param_name" => "modified_image_ml",
							"value" => "",
							"description" => esc_html__( "Select or upload the modified image using the media library.", "keydesign" ),
							"dependency" =>	array(
								"element" => "modified_image_source",
								"value" => array( "media_library" ),
							),
						),
						array(
							"type" => "textfield",
							"class" => "",
							"heading" => esc_html__( "Modified image", "keydesign" ),
							"param_name" => "modified_image_ext",
							"value" => "",
							"description" => esc_html__( "Enter external link for the modified image.", "keydesign" ),
							"dependency" =>	array(
								"element" => "modified_image_source",
								"value" => array( "external_link" ),
							),
						),

						array(
							"type" => "textfield",
							"class" => "",
							"heading" => esc_html__( "Modified image size", "keydesign" ),
							"param_name" => "modified_image_size",
							"value" => "",
							"description" => esc_html__( "Enter image size in pixels. Example: 650x450 (Width x Height).", "keydesign" ),
							"dependency" =>	array(
								"element" => "modified_image_source",
								"value" => array( "external_link" ),
							),
						),

						array(
							"type" => "textfield",
							"class" => "",
							"heading" => esc_html__( "Modified image label", "keydesign" ),
							"param_name" => "modified_image_label",
							"value" => "",
							"description" => esc_html__( "Enter the label text for the modified image.", "keydesign" ),
						),

						array(
							"type" => "dropdown",
							"class" => "",
							"heading" => esc_html__( "CSS Animation", "keydesign" ),
							"param_name" => "css_animation",
							"value" => array(
								"None"              => "",
								"Fade In"         => "kd-animated fadeIn",
								"Fade In Down"    => "kd-animated fadeInDown",
								"Fade In Left"    => "kd-animated fadeInLeft",
								"Fade In Right"   => "kd-animated fadeInRight",
								"Fade In Up"      => "kd-animated fadeInUp",
								"Zoom In"         => "kd-animated zoomIn",
							),
							"save_always" => true,
							"admin_label" => true,
							"description" => esc_html__( "Select type of animation for element to be animated when it enters the browsers viewport (Note: works only in modern browsers).", "keydesign" ),
							"group" => esc_html__( "Extras", "keydesign" ),
						),

						array(
							"type" => "dropdown",
							"class" => "",
							"heading" => esc_html__( "Animation delay", "keydesign" ),
							"param_name" => "animation_delay",
							"value" => array(
								"0 ms" => "",
								"200 ms" => "200",
								"400 ms" => "400",
								"600 ms" => "600",
								"800 ms" => "800",
								"1000 ms" => "1000",
							),
							"dependency" =>	array(
								"element" => "css_animation",
								"value" => array( "kd-animated fadeIn", "kd-animated fadeInDown", "kd-animated fadeInLeft", "kd-animated fadeInRight", "kd-animated fadeInUp", "kd-animated zoomIn" )
							),
							"save_always" => true,
							"admin_label" => true,
							"description" => esc_html__( "Enter animation delay in ms.", "keydesign" ),
							"group" => esc_html__( "Extras", "keydesign" ),
						),

						array(
							"type" => "textfield",
							"class" => "",
							"heading" => esc_html__( "Extra class name", "keydesign" ),
							"param_name" => "extra_class",
							"value" => "",
							"description" => esc_html__( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "keydesign" ),
							"group" => esc_html__( "Extras", "keydesign" ),
						),
                    )
                ));
            }
        }



		// Render the element on front-end

    public function kd_image_comparison_shrt( $atts, $content = null ) {

      // Include required JS files
      wp_enqueue_script( 'jquery_mobile_vmouse' );
      wp_enqueue_script( 'kd_image_comparison' );

			// Declare empty vars
			$output = $default_src = $no_image_output = $original_image = $modified_image = $width_original_image = $height_original_image = $width_modified_image = $height_modified_image = $wrapper_class = '';

      extract( shortcode_atts( array(
        'original_image_source' => '',
				'original_image_ml' => '',
				'original_image_ext' => '',
				'original_image_size' => '',
				'original_image_label' => '',
				'modified_image_source' => '',
				'modified_image_ml' => '',
				'modified_image_ext' => '',
				'modified_image_size' => '',
				'modified_image_label' => '',
				'css_animation' => '',
				'animation_delay' => '',
				'extra_class' => '',
      ), $atts ) );

			$default_src = vc_asset_url( 'vc/no_image.png' );
      $no_image_output = '<img class="default-image" alt="" src="'.$default_src.'" />';

			// Original image source
      if ( $original_image_source == 'media_library' ) {
        if ( '' != $original_image_ml ) {
          $original_image  = wpb_getImageBySize($params = array(
              'post_id' => NULL,
              'attach_id' => $original_image_ml,
              'thumb_size' => 'full',
              'class' => ""
          ));
        }
      }

      // Modified image source
      if ( $modified_image_source == 'media_library' ) {
        if ( '' != $modified_image_ml ) {
          $modified_image  = wpb_getImageBySize($params = array(
              'post_id' => NULL,
              'attach_id' => $modified_image_ml,
              'thumb_size' => 'full',
              'class' => ""
          ));
        }
      }

			// Image size
      if ( $original_image_source == 'external_link' ) {
        if ( '' != $original_image_ext ) {
          list( $width_original_image, $height_original_image ) = getimagesize( $original_image_ext );
        }
      }

      if ( $modified_image_source == 'external_link' ) {
        if ( '' != $modified_image_ext ) {
          list( $width_modified_image, $height_modified_image ) = getimagesize( $modified_image_ext );
        }
      }

			// Animation delay
      if ( $animation_delay ) {
          $animation_delay = 'data-animation-delay='.$animation_delay;
      }

			$wrapper_class = implode( ' ', array( 'kd-image-comparison', $extra_class, $css_animation ));

			$output = '<div class="'.trim($wrapper_class).'" '.$animation_delay.'>
				<figure class="cd-image-container">';

					if ( $original_image_source == 'media_library' ) {
						if ( '' != $original_image_ml ) {
							$output .= $original_image['thumbnail'];
						} else {
							$output .= $no_image_output;
						}
          } elseif ( $original_image_source == 'external_link' ) {
						if ( '' != $original_image_ext ) {
							$output .= '<img class="image-comparison-original-img" src="'.$original_image_ext.'" alt="" loading="lazy" width="'.$width_original_image.'" height="'.$height_original_image.'" />';
						} else {
							$output .= $no_image_output;
						}
                    }

					if ( '' != $original_image_label ) {
						$output .= '<span class="cd-image-label" data-type="original">' . esc_html( $original_image_label ) . '</span>';
					}

					$output .= '<div class="cd-resize-img">';

						if ( $modified_image_source == 'media_library' ) {
							if ( '' != $modified_image_ml ) {
								$output .= $modified_image['thumbnail'];
							} else {
								$output .= $no_image_output;
							}
						} elseif ( $modified_image_source == 'external_link' ) {
							if ( '' != $modified_image_ext ) {
								$output .= '<img class="image-comparison-modified-img" src="'.$modified_image_ext.'" alt="" loading="lazy" width="'.$width_modified_image.'" height="'.$height_modified_image.'" />';
							} else {
								$output .= $no_image_output;
							}
						}

						if ( '' != $modified_image_label ) {
							$output .= '<span class="cd-image-label" data-type="modified">' . esc_html( $modified_image_label ) . '</span>';
						}
					$output .= '</div>

					<span class="cd-handle"></span>
				</figure>
			</div>';

      return $output;

    }
  }
}

if (class_exists('KD_ELEM_IMAGE_COMPARISON')) {
  $KD_ELEM_IMAGE_COMPARISON = new KD_ELEM_IMAGE_COMPARISON;
}

?>
