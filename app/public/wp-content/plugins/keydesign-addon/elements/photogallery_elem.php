<?php

if (!class_exists('KD_ELEM_PHOTO_GALLERY')) {

    class KD_ELEM_PHOTO_GALLERY extends KEYDESIGN_ADDON_CLASS {

        function __construct() {
            add_action('init', array($this, 'kd_photogallery_init'));
            add_shortcode('tek_photogallery', array($this, 'kd_photogallery_shrt'));
        }

        // Element configuration in admin

        function kd_photogallery_init() {
            if (function_exists('vc_map')) {
                vc_map(array(
                    "name" => esc_html__("Photo gallery", "keydesign"),
                    "description" => esc_html__("Responsive image gallery.", "keydesign"),
                    "base" => "tek_photogallery",
                    "class" => "",
                    "icon" => plugins_url('assets/element_icons/photo-gallery.png', dirname(__FILE__)),
                    "category" => esc_html__("KeyDesign Elements", "keydesign"),
                    "params" => array(
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("Image source", "keydesign"),
                            "param_name" => "pg_image_source",
                            "value" => array(
                                "Media library" => "media_library",
                                "External link" => "external_link",
                            ),
                            "description" => esc_html__("Select image source.", "keydesign"),
                            "save_always" => true,
                        ),
                        array(
                            "type" => "attach_images",
                            "class" => "",
                            "heading" => esc_html__("Images", "keydesign"),
                            "param_name" => "pg_images",
                            "value" => "",
                            "description" => esc_html__("Select images from media library.", "keydesign"),
                            "dependency" => array(
                                "element" => "pg_image_source",
                                "value" => array("media_library"),
                            ),
                            "save_always" => true,
                        ),
                        array(
                            "type" => "exploded_textarea_safe",
                            "class" => "",
                            "heading" => esc_html__("External links", "keydesign"),
                            "param_name" => "pg_images_external",
                            "value" => "",
                            "description" => esc_html__("Enter external link for each gallery image (Note: divide links with linebreaks (Enter)).", "keydesign"),
                            "dependency" =>	array(
                                "element" => "pg_image_source",
                                "value" => array("external_link")
                            ),
                        ),
                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Image size", "keydesign"),
                            "param_name" => "pg_image_size",
                            "value" => "",
                            "description" => esc_html__("Enter image size in pixels. Example: 650x450 (Width x Height).", "keydesign"),
                            "dependency" =>	array(
                                "element" => "pg_image_source",
                                "value" => array("external_link")
                            ),
                        ),
                        array(
                            "type"          =>  "dropdown",
                            "class"         =>  "",
                            "heading"       =>  esc_html__("On click action","keydesign"),
                            "param_name"    =>  "pg_click_action",
                            "value"         =>  array(
                                    "None" => "click-action-none",
                                    "Open PhotoSwipe" => "click-action-photoswipe",
                                ),
                            "save_always" => true,
                            "description"   =>  esc_html__("Select action for click action.", "keydesign"),
                        ),
                        array(
                            "type"          =>  "dropdown",
                            "class"         =>  "",
                            "heading"       =>  esc_html__("Enable loop","keydesign"),
                            "param_name"    =>  "enable_loop",
                            "value"         =>  array(
                                    "Off" => "loop_off",
                                    "On" => "loop_on",
                                ),
                            "save_always" => true,
                            "description"   =>  esc_html__("Infinity loop. Duplicate last and first items to get loop illusion.", "keydesign"),
                        ),
                        array(
                            "type"          =>  "dropdown",
                            "class"         =>  "",
                            "heading"       =>  esc_html__("Navigation style","keydesign"),
                            "param_name"    =>  "nav_style",
                            "value"         =>  array(
                                    "Arrows" => "nav-arrows",
                                    "Dots" => "nav-dots",
                                    "Arrows and dots" => "nav-arrows-dots",
                                ),
                            "save_always" => true,
                            "description"   =>  esc_html__("Select navigation style.", "keydesign"),
                        ),
                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Extra class name", "keydesign"),
                            "param_name" => "extra_class",
                            "value" => "",
                            "description" => esc_html__("If you wish to style this particular content element differently, then use this field to add a class name and then refer to it in your css file.", "keydesign"),
                        ),
                        array(
                            'type' => 'css_editor',
                            'heading' => esc_html__( 'Css', 'keydesign' ),
                            'param_name' => 'css',
                            'group' => esc_html__( 'Design options', 'keydesign' ),
                        ),
                    )
                ));
            }
        }



		    // Render the element on front-end
        public function kd_photogallery_shrt($atts, $content = null) {

            // Declare empty vars
            $output = $image = $images = $img = $thumbnail = $gal_images = $photo_gallery_id = $default_src = $dimensions = $hwstring = $css_class  = '';
            extract(shortcode_atts(array(
                'pg_image_source' => '',
                'pg_images' => '',
                'pg_images_external' => '',
                'pg_image_size' => '',
                'pg_click_action' => '',
                'enable_loop' => '',
                'nav_style' => '',
                'extra_class' => '',
                'css' => '',
            ), $atts));

            $css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ) );

            if ($pg_image_source == 'external_link') {
              $images = vc_value_from_safe( $pg_images_external );
              $images = explode( ',', $images );
            } else {
              $images = explode( ',', $pg_images );
            }

            if ( '' === $images ) {
            	$images = '-1,-2,-3';
            }

            $default_src = vc_asset_url( 'vc/no_image.png' );

            foreach ( $images as $i => $image ) {
              if ( $pg_image_source == 'external_link' ) {
                if ( $pg_images_external != '' ) {
                  $image = esc_attr( $image );
                  if (!$pg_image_size) {
                    list($width_ext, $height_ext) = getimagesize($image);
                  } else {
                    $dimensions = vc_extract_dimensions( $pg_image_size );
              			$hwstring = $dimensions ? image_hwstring( $dimensions[0], $dimensions[1] ) : '';
                  }

                  if ($pg_click_action == 'click-action-photoswipe') {
                    if (!$pg_image_size) {
                      $thumbnail = '<a data-size="' . $width_ext. 'x' .$height_ext .'" href="' . $image . '"><img width="'.$width_ext.'" height="'.$height_ext.'" src="' . $image . '" /></a>';
                    } else {
                      $thumbnail = '<a data-size="' . $dimensions[0]. 'x' .$dimensions[1] .'" href="' . $image . '"><img ' . $hwstring . ' src="' . $image . '" /></a>';
                    }
                  } else {
                    $thumbnail = '<img ' . $hwstring . ' src="' . $image . '" />';
                  }

                } else {
                  $thumbnail = '<img width="800" height="600" src="'.$default_src.'" class="vc_img-placeholder" />';
                }
              } else {
          			if ( $image > 0 ) {
          				$img = wpb_getImageBySize( $params = array(
                      'post_id' => NULL,
                      'attach_id' => $image,
                      'thumb_size' => 'full'
                  ));

                  if ($pg_click_action == 'click-action-photoswipe') {
                    $pattern = '/src="([^"]*)"/';
                    preg_match($pattern, $img['thumbnail'], $matches);
                    $src = $matches[1];
                    unset($matches);
                    list($width, $height) = getimagesize($src);
                    $thumbnail = '<a data-size="' . $width. 'x' .$height .'" href="' . $src. '">'.$img['thumbnail'].'</a>';
                  } else {
                    $thumbnail = $img['thumbnail'];
                  }

                } else {
                  $thumbnail = '<img width="800" height="600" src="'.$default_src.'" class="vc_img-placeholder" />';
                }
              }
              $gal_images .= $thumbnail;
            }

            $photo_gallery_id = "kd-photo-gallery-".uniqid();

            $output .= '<script type="text/javascript">
              jQuery(document).ready(function($){
                if ($(".'.$photo_gallery_id.' .gallery-items").length) {
                  $(".'.$photo_gallery_id.' .gallery-items").owlCarousel({
                    stageClass: "owl-wrapper",
                    stageOuterClass: "owl-wrapper-outer",
                    loadedClass: "owl-carousel",
                    items: 1,
                    rewind: true,';

                    if($nav_style == "nav-arrows") {
                      $output .= 'nav: true,
                      navSpeed: 500,
                      dots: false,';
                    } elseif ($nav_style == "nav-dots") {
                      $output .='dots: true,
                      nav: false,
                      dotsSpeed: 500,';
                    } elseif ($nav_style == "nav-arrows-dots") {
                      $output .= 'nav: true,
                      navSpeed: 500,
                      dots: true,
                      dotsSpeed: 500,';
                    }

                    if($enable_loop == "loop_on") {
                      $output .= 'loop: true,';
                    }

                    $output .='
                    addClassActive: true,
                  });
                }
              });
            </script>';

            $output .= '<div class="photo-gallery-wrapper '.$photo_gallery_id.' '.$extra_class.' '.esc_attr( $css_class ).'">
              <div class="gallery-items">'.$gal_images.'</div>
            </div>';

            return $output;
        }
    }
}

if (class_exists('KD_ELEM_PHOTO_GALLERY')) {
    $KD_ELEM_PHOTO_GALLERY = new KD_ELEM_PHOTO_GALLERY;
}

?>
