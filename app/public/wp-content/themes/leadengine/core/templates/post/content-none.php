<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package leadengine
 * by KeyDesign
 */

?>

<section id="posts-content" class="container">
	<div class="row" >
		<h2 class="section-title"><?php esc_html_e( 'Nothing Found', 'leadengine' ); ?></h2>
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'leadengine' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
		<?php elseif ( is_search() ) : ?>
			<p class="section-subheading"><?php _e( 'Sorry, but nothing matched your search terms. Please try again using different keywords.', 'leadengine' ); ?></p>
			<?php get_search_form();
		else : ?>
			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'leadengine' ); ?></p>
			<?php get_search_form();
		endif; ?>
	</div>
</section><!-- .no-results -->
