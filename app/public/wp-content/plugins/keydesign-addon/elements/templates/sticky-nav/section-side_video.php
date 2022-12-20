<?php
/*
* Template: Sticky navbar sections - Side Video
*/

if(!function_exists('kd_section_set_side_video')) {

  // Declare empty vars
  $video_w = $video_h = $embed = $cover_image = $content_image = $dimensions = $hwstring = $default_src = $wrapper_class = $animation_delay = '';

  function kd_section_set_side_video($atts,$content = null){
  	extract(shortcode_atts(array(
      'fss_video_url' => '',
      'video_image_source' => '',
      'fss_video_cover' => '',
      'video_ext_image' => '',
      'video_ext_image_size' => '',
      'fss_play_button' => '',
      'css_animation_image' => '',
  	),$atts));

    $default_src = vc_asset_url( 'vc/no_image.png' );
    $dimensions = vc_extract_dimensions( $video_ext_image_size );
    $hwstring = $dimensions ? image_hwstring( $dimensions[0], $dimensions[1] ) : '';

    if ($video_image_source == 'external_link') {
      if (!$video_ext_image) {
        $content_image ='<img src="'.$default_src.'" class="vc_img-placeholder" />';
      } else {
        $content_image ='<img src="'.$video_ext_image.'" '.$hwstring.' />';
      }
    } else {
      if (!$fss_video_cover) {
        $content_image ='<img src="'.$default_src.'" class="vc_img-placeholder" />';
      } else {
        $cover_image = wpb_getImageBySize ( $params = array( 'post_id' => NULL, 'attach_id' => $fss_video_cover, 'thumb_size' => 'full', 'class' => "" ) );
        $content_image = $cover_image['thumbnail'];
      }
    }

    $video_w = 500;
    $video_h = $video_w / 1.61; //1.61 golden ratio
    global $wp_embed;
    if ( is_object( $wp_embed ) ) {
    	$embed = $wp_embed->run_shortcode( '[embed width="' . $video_w . '"' . $video_h . ']' . $fss_video_url . '[/embed]' );
    }

    /* Animation delay */
    if ('' !== $css_animation_image) {
      $animation_delay = 'data-animation-delay="200"';
    } else {
      $animation_delay = '';
    }

    $wrapper_class = implode(' ', array('side-featured-wrapper', $css_animation_image, ));

    $output = '<div class="' . trim($wrapper_class) . '" ' . $animation_delay . '>
      <div class="entry-video">
        <div class="video-cover">
            <div class="background-video-image">'.$content_image.'</div>
          <div class="play-video kd-animate '.$fss_play_button.'"><span class="fa fa-play"></span></div>
          '.$embed.'
        </div>
      </div>
    </div>';

    return $output;
  }
}
