<?php
/*
* Template: Sticky navbar sections - Side Photo
*/

if(!function_exists('kd_section_set_side_photo')) {

  // Declare empty vars
  $image = $content_image = $default_src = $dimensions = $hwstring = $animation_delay = $wrapper_class = '';

  function kd_section_set_side_photo($atts,$content = null){
  	extract(shortcode_atts(array(
      'featured_image_source' => '',
      'fss_featured_image' => '',
      'featured_ext_image' => '',
      'featured_ext_image_size' => '',
      'css_animation_image' => '',
  	),$atts));

    $default_src = vc_asset_url( 'vc/no_image.png' );
    $dimensions = vc_extract_dimensions( $featured_ext_image_size );
    $hwstring = $dimensions ? image_hwstring( $dimensions[0], $dimensions[1] ) : '';

    if ($featured_image_source == 'external_link') {
      if (!$featured_ext_image) {
        $content_image ='<img src="'.$default_src.'" class="vc_img-placeholder" />';
      } else {
        $content_image ='<img src="'.$featured_ext_image.'" '.$hwstring.' />';
      }
    } else {
      if (!$fss_featured_image) {
        $content_image ='<img src="'.$default_src.'" class="vc_img-placeholder" />';
      } else {
        $image = wpb_getImageBySize ( $params = array( 'post_id' => NULL, 'attach_id' => $fss_featured_image, 'thumb_size' => 'full', 'class' => "" ) );
        $content_image = $image['thumbnail'];
      }
    }

    /* Animation delay */
    if ('' !== $css_animation_image) {
      $animation_delay = 'data-animation-delay="200"';
    } else {
      $animation_delay = '';
    }

    $wrapper_class = implode(' ', array('side-featured-wrapper', $css_animation_image));

    $output = '<div class="' . trim($wrapper_class) . '" ' . $animation_delay . '>
      <div class="featured-image">'.$content_image.'</div>
    </div>';
    return $output;
  }
}
