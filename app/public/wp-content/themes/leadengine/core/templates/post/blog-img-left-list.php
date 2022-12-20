<?php
/**
 * Template part for displaying standard posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package leadengine
 * by KeyDesign
 */

?>

<?php
	$entry_class = '';

	if ( !has_post_thumbnail() ) {
		$entry_class = 'without-image';
	}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-image">
		<a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('keydesign-left-image'); ?></a>
	</div>
	<div class="entry-wrapper <?php echo esc_html( $entry_class ); ?>">
		<?php get_template_part( 'core/templates/post/partials/content', 'post-meta' ); ?>
		<?php if ('quote' === get_post_format()) : ?>
		  <h2 class="blog-single-title quote"><?php the_title(); ?></h2>
		<?php else : ?>
		  <h2 class="blog-single-title"><a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<?php endif; ?>
		<div class="entry-content">
			<?php the_excerpt(); ?>
			<?php wp_link_pages(); ?>
			<a class="tt_button tt_secondary_button" href="<?php esc_url(the_permalink()); ?>"><?php _e( 'Read more', 'leadengine' ); ?></a>
		</div>
	</div>
</article>
