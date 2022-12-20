<?php
	$content = apply_filters( 'the_content', get_the_content() );
	$video = false;

	// Only get video from the content if a playlist isn't present.
	if ( false === strpos( $content, 'wp-playlist-script' ) ) {
		$video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
  }
?>
<?php if ( '' !== get_the_post_thumbnail() && empty( $video ) ) : ?>
	<div class="entry-image">
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
      <?php the_post_thumbnail('large'); ?>
    </a>
	</div>
<?php endif; ?>
<?php if ( !empty( $video ) && !is_single() && class_exists('KEYDESIGN_ADDON_CLASS') ) {
	foreach ( $video as $video_html ) {
		echo '<div class="entry-video">
      <div class="video-cover">
        <div class="background-video-image">'. wp_get_attachment_image(get_post_thumbnail_id(), 'large') .'</div>
        <div class="play-video"><span class="fas fa-play"></span></div>';
		     echo '<div class="kd-esc-video">'.$video_html.'</div>';
       echo '</div>
    </div>';
	}
} elseif (!class_exists('KEYDESIGN_ADDON_CLASS')) {
	foreach ( $video as $video_html ) {
		echo '<div class="entry-video simple-video-iframe">'.$video_html.'</div>';
	}
} ?>
