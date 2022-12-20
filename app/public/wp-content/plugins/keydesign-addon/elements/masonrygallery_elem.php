<?php
if (class_exists('WPBakeryShortCodesContainer')) {
    class WPBakeryShortCode_tek_masonrygallery_elem extends WPBakeryShortCodesContainer {
    }
}
if (class_exists('WPBakeryShortCode')) {
    class WPBakeryShortCode_tek_masonrygallery_elem_single extends WPBakeryShortCode {
    }
}
if (!class_exists('tek_masonrygallery_elem')) {
    class tek_masonrygallery_elem extends KEYDESIGN_ADDON_CLASS
    {
        function __construct() {
            add_action('init', array( $this, 'kd_featured_init' ));
            add_shortcode('tek_masonrygallery_elem', array( $this, 'kd_masonrygallery_container' ));
            add_shortcode('tek_masonrygallery_elem_single', array( $this, 'kd_masonrygallery_single' ));
            add_action('wp_enqueue_scripts', array( $this, 'masonrygallery_scripts' ));
        }

        function masonrygallery_scripts() {
            wp_enqueue_style('photoswipe');
            wp_enqueue_style('photoswipe-skin');
            wp_enqueue_script('photoswipejs', array('jquery'), '', true );
            wp_enqueue_script('photoswipejs-ui', array('jquery'), '', true );
		}

        // Element configuration in admin
        function kd_featured_init() {
            // Container element configuration
            if (function_exists('vc_map')) {
                vc_map(array(
                    "name" => esc_html__("Masonry gallery", "keydesign"),
                    "description" => esc_html__("Display a gallery with masonry effect.", "keydesign"),
                    "base" => "tek_masonrygallery_elem",
                    "class" => "",
                    "show_settings_on_create" => false,
                    "content_element" => true,
                    "as_parent" => array('only' => 'tek_masonrygallery_elem_single'),
                    "icon" => plugins_url('assets/element_icons/masonry-gallery.png', dirname(__FILE__)),
                    "category" => esc_html__("KeyDesign Elements", "keydesign"),
                    "js_view" => 'VcColumnView',
                    "params" => array(
                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Extra class name", "keydesign"),
                            "param_name" => "mg_extra_class",
                            "value" => "",
                            "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "keydesign")
                        ),
                    )
                ));
                // Shortcode configuration
                vc_map(array(
                    "name" => esc_html__("Gallery single image", "keydesign"),
                    "base" => "tek_masonrygallery_elem_single",
                    "content_element" => true,
                    "as_child" => array('only' => 'tek_masonrygallery_elem'),
                    "icon" => plugins_url('assets/element_icons/child-image.png', dirname(__FILE__)),
                    "params" => array(
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__("Image source", "keydesign"),
                            "param_name" => "image_source",
                            "value" => array(
                                "Media library" => "media_library",
                                "External link" => "external_link",
                            ),
                            "description" => esc_html__("Select image source.", "keydesign"),
                            "save_always" => true,
                        ),
                        array(
                            "type" => "attach_image",
                            "class" => "",
                            "heading" => esc_html__("Image", "keydesign"),
                            "param_name" => "mg_image",
                            "value" => "",
                            "description" => esc_html__("Select or upload a image using the media library.", "keydesign"),
                            "dependency" =>	array(
                                "element" => "image_source",
                                "value" => array("media_library"),
                            ),
                        ),
                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Image external source", "keydesign"),
                            "param_name" => "ext_image",
                            "value" => "",
                            "description" => esc_html__("Enter image external link.", "keydesign"),
                            "dependency" =>	array(
                                "element" => "image_source",
                                "value" => array("external_link"),
                            ),
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Image size", "keydesign"),
                            "param_name" => "mg_thumb_size",
                            "value" => "",
                            "description" => esc_html__("Enter image size (Example: \"thumbnail\", \"medium\", \"large\", \"full\" or other sizes defined by theme). Alternatively enter size in pixels (Example: 800x800 (Width x Height)).", "keydesign"),
                            "dependency" =>	array(
                                "element" => "image_source",
                                "value" => array("media_library"),
                            ),
                        ),

                        array(
                            "type" =>	"dropdown",
                            "class" =>	"",
                            "heading" =>	esc_html__("Image masonry style","keydesign"),
                            "param_name" =>	"mg_size",
                            "value" =>	array(
                                    "Regular" => "mg-small",
                                    "Double size" => "mg-big",
                                ),
                            "save_always" => true
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Caption title", "keydesign"),
                            "param_name" => "mg_image_caption_title",
                            "value" => "",
                            "description" => esc_html__("Show caption title with PhotoSwipe lightbox.", "keydesign"),
                        ),

                        array(
                            "type" => "textfield",
                            "class" => "",
                            "heading" => esc_html__("Caption description", "keydesign"),
                            "param_name" => "mg_image_caption_desc",
                            "value" => "",
                            "description" => esc_html__("Show caption description with PhotoSwipe lightbox.", "keydesign"),
                        ),
                    )
                ));
            }
        }

        public function kd_masonrygallery_container($atts, $content = null) {

            // Include required JS and CSS files
	          wp_enqueue_script( 'masonry' );

            // Declare empty vars
            $output = '';

            extract(shortcode_atts(array(
                'mg_extra_class' => '',
            ), $atts));

            $output = '<div class="mg-gallery mg-container row '.$mg_extra_class.'"><div class="mg-sizer"></div>' . do_shortcode($content) . '</div>';
            return $output;
        }

        public function kd_masonrygallery_single($atts, $content = null) {

            // Declare empty vars
            $output = $image = $mg_single_size = $default_src = $media_image = $caption_title = $caption_desc = '';

            extract(shortcode_atts(array(
                'image_source' => '',
                'mg_image' => '',
                'ext_image' => '',
                'mg_thumb_size' => '',
                'mg_size' => '',
                'mg_image_caption_title' => '',
                'mg_image_caption_desc' => '',
            ), $atts));

            if ( ! $mg_thumb_size ) {
        			$mg_thumb_size = 'full';
        		}

            $image = wpb_getImageBySize($params = array(
                'post_id' => NULL,
                'attach_id' => $mg_image,
                'thumb_size' => $mg_thumb_size,
                'class' => ""
            ));

            $default_src = vc_asset_url( 'vc/no_image.png' );
            $ext_image = $ext_image ? esc_attr( $ext_image ) : $default_src;

            if ($image_source == 'external_link') {
              $src = $ext_image;
            } elseif ($image_source == 'media_library' && !$image) {
              $src = $default_src;
            } elseif ($image_source == 'media_library' && $image != '') {
              $link = wp_get_attachment_image_src( $mg_image, 'large' );
              $link = $link[0];
              $src = $link;
            }

            if ($image_source == 'external_link' && !$ext_image ) {
              $width = '900';
              $height = '800';
            } elseif ($image_source == 'media_library' && !$image) {
              $width = '900';
              $height = '800';
            } elseif ($image_source == 'external_link' && $ext_image != '') {
              list($width, $height) = getimagesize($src);
            } elseif ($image_source == 'media_library' && $image != '') {
              $link = wp_get_attachment_image_src( $mg_image, 'large' );
              $width = $link[1];
              $height = $link[2];
            }

            if( $mg_size == 'mg-small' ) {
                $mg_single_size = 'small-masonry-img';
            } elseif ( $mg_size == 'mg-big' ) {
                $mg_single_size = 'big-masonry-img';
            }

            if ( '' != $mg_image_caption_title ) {
              $caption_title = 'data-caption-title="'.esc_html( $mg_image_caption_title ).'"';
            }

            if ( '' != $mg_image_caption_desc ) {
              $caption_desc = 'data-caption-desc="'.esc_html( $mg_image_caption_desc ).'"';
            }

            $output = '<div class="mg-single-img '.$mg_single_size.'"><a data-size="' . $width. 'x' .$height .'" href='. $src . ' '.$caption_title.' '.$caption_desc.'>';
              if ($image_source == 'external_link') {
                if (!$ext_image) {
                  $output .='<img src="'.$default_src.'" class="vc_img-placeholder" />';
                } else {
                  $output .='<img src="'.$ext_image.'" width="'.$width.'" height="'.$height.'" />';
                }
              } elseif ($image_source == 'media_library') {
                if (!$image) {
                  $output .='<img src="'.$default_src.'" class="vc_img-placeholder" />';
                } elseif ($image != '') {
                  $output .= $image['thumbnail'];
                }
              }
            $output .= '</a></div>';

            return $output;
        }
    }
}
if (class_exists('tek_masonrygallery_elem')) {
    $tek_masonrygallery_elem = new tek_masonrygallery_elem;
}
?>
