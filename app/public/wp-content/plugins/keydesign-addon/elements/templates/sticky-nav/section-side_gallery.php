<?php
/*
* Template: Sticky navbar sections - Side Gallery
*/

if(!function_exists('kd_section_set_side_gallery')) {



  function kd_section_set_side_gallery($atts,$content = null){

    // Declare empty vars
    $output = $image = $images = $img = $thumbnail = $gal_images = $featured_gallery_id = $default_src = $dimensions = $hwstring = $wrapper_class = '';

  	extract(shortcode_atts(array(
      'gallery_image_source' => '',
      'fss_photo_gallery' => '',
      'gallery_ext_image' => '',
      'gallery_ext_image_size' => '',
      'fss_nav_style' => '',
      'fss_loop' => '',
      'fss_autoplay' => '',
      'fss_autoplay_speed' => '',
      'fss_stoponhover' => '',
      'css_animation_image' => '',
  	),$atts));

    if ($gallery_image_source == 'external_link') {
      $images = vc_value_from_safe( $gallery_ext_image );
      $images = explode( ',', $images );
    } else {
      $images = explode( ',', $fss_photo_gallery );
    }

    if ( '' === $images ) {
    	$images = '-1,-2,-3';
    }

    $default_src = vc_asset_url( 'vc/no_image.png' );

    foreach ( $images as $i => $image ) {
      if ($gallery_image_source == 'external_link') {
        if ($gallery_ext_image != '') {
          $image = esc_attr( $image );
    			$dimensions = vc_extract_dimensions( $gallery_ext_image_size );
    			$hwstring = $dimensions ? image_hwstring( $dimensions[0], $dimensions[1] ) : '';
    			$thumbnail = '<img ' . $hwstring . ' src="' . $image . '" />';
        } else {
          $thumbnail = '<img src="'.$default_src.'" class="vc_img-placeholder" />';
        }
      } else {
  			if ( $image > 0 ) {
  				$img = wpb_getImageBySize( $params = array(
              'post_id' => NULL,
              'attach_id' => $image,
              'thumb_size' => 'full',
              'class' => 'ffs-gallery-img'
          ));
  				$thumbnail = $img['thumbnail'];
        } else {
          $thumbnail = '<img src="'.$default_src.'" class="vc_img-placeholder" />';
        }
      }
      $gal_images .= $thumbnail;
    }

    $featured_gallery_id = "kd-featured-gallery-".uniqid();

    $output .= '<script type="text/javascript">
      jQuery(document).ready(function($){
        if ($(".'.$featured_gallery_id.' .featured-gallery").length) {
          $(".'.$featured_gallery_id.' .featured-gallery").owlCarousel({
            stageClass: "owl-wrapper",
            stageOuterClass: "owl-wrapper-outer",
            loadedClass: "owl-carousel",
            items: 1,
            rewind: true,';

            if($fss_nav_style == "nav-arrows") {
              $output .= 'nav: true,
              navSpeed: 500,
              dots: false,';
            } else {
              $output .='dots: true,
              nav: false,
              dotsSpeed: 500,';
            }

            if($fss_loop == "loop_on") {
              $output .= 'loop: true,';
            }

            if($fss_autoplay == "auto_on") {
              $output .= 'autoplay: true,';
            }

            if($fss_autoplay_speed !== "") {
              $output .= 'autoplayTimeout: '.$fss_autoplay_speed.',';
            }

            if($fss_autoplay == "auto_on" && $fss_stoponhover == "hover_on") {
              $output .= 'autoplayHoverPause: true,';
            }

            $output .='
            addClassActive: true,
          });
        }
      });
    </script>';

    /* Animation delay */
    if ('' !== $css_animation_image) {
        $animation_delay = 'data-animation-delay="200"';
    } else {
      $animation_delay = '';
    }

    $wrapper_class = implode(' ', array('side-featured-wrapper', $featured_gallery_id, $css_animation_image));

    $output .= '<div class="' . trim($wrapper_class) . '" ' . $animation_delay . '>
      <div class="featured-gallery">'.$gal_images.'</div>
    </div>';

    return $output;
  }
}
