<?php
	$content = apply_filters( 'the_content', get_the_content() );
	$audio = false;

	// Only get video from the content if a playlist isn't present.
	if ( false === strpos( $content, 'wp-playlist-script' ) ) {
		$audio = get_media_embedded_in_content( $content, array( 'audio', 'iframe' ) );
  }
?>
<?php if ( '' !== get_the_post_thumbnail() && empty( $audio ) ) : ?>
	<div class="entry-image">
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
      <?php the_post_thumbnail('large'); ?>
    </a>
	</div>
<?php endif; ?>
<?php if ( !empty( $audio ) && !is_single() ) {
	foreach ( $audio as $audio_html ) {
		echo '<div class="entry-audio">'.$audio_html.'</div>';
	}
}; ?>
