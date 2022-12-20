<?php
/**
 * Template part for displaying portfolio item boxes
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package leadengine
 * by KeyDesign
 */

?>

<?php
	$without_image_class = '';

	if (!has_post_thumbnail()) {
		$without_image_class .= 'without-image';
	}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<?php if (has_post_thumbnail()) : ?>
		<div class="entry-image">
			<a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('keydesign-grid-image'); ?></a>
		</div>
	<?php endif; ?>
	<div class="entry-wrapper <?php echo esc_html($without_image_class); ?>">
		<div class="entry-meta">
			<span class="blog-label"><span class="far fa-folder-open"></span>
			<?php
				$terms_slug_str = '';
				$terms = get_the_terms($post->ID, 'portfolio-category' );
				if ($terms && ! is_wp_error($terms)) :
					$term_slugs_arr = array();
					foreach ($terms as $term) {
							$term_slugs_arr[] = $term->name;
					}
					$terms_slug_str = join(", ", $term_slugs_arr);
				endif;
				echo esc_attr($terms_slug_str);
			?>
		</span>
		</div>
		<h4 class="blog-single-title"><a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
		<div class="entry-content">
			<a class="post-link" href="<?php esc_url(the_permalink()); ?>"><?php echo apply_filters( 'portfolio_related_grid_text', esc_html__("View project", "leadengine") ); ?></a>
		</div>
	</div>
</article>
