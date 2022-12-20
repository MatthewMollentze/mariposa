<?php
/**
 * The template for displaying Related posts for Portfolio post types
 */

	if( !( 'portfolio' == get_post_type() ) ) {
		return false;
  }

  $carousel_class = '';
	$terms = get_the_terms( $post->ID , 'portfolio-category', 'string');
  if ($terms == 0) {
    return false;
  }
	$term_ids = array_values( wp_list_pluck( $terms,'term_id' ) );

	$related_query = new WP_Query(
		array(
			'post_type' => 'portfolio',
			'tax_query' => array(
				array(
					'taxonomy' => 'portfolio-category',
					'field' => 'id',
					'terms' => $term_ids,
					'operator'=> 'IN'
				)
			),
			'posts_per_page' => leadengine_get_option( 'tek-portfolio-related-posts-number' ),
			'ignore_sticky_posts' => 1,
			'orderby' => 'rand',
			'post__not_in' => array($post->ID)
		)
	);

	if( $related_query->found_posts == 0) {
		return false;
  }

  if ($related_query->found_posts > 3 && leadengine_get_option( 'tek-portfolio-related-posts-number' ) > 3) {
    $carousel_class = 'owlslider-related-posts';
  }
?>

<section class="related-posts">
  <div class="container">
    <?php if ( '' != leadengine_get_option( 'tek-portfolio-related-posts-title' ) ) : ?>
      <div class="related-title">
        <h3><?php echo esc_html( leadengine_get_option( 'tek-portfolio-related-posts-title' ) ); ?></h3>
      </div>
    <?php endif; ?>
    <div class="related-content <?php echo esc_attr($carousel_class); ?>">
      <?php
      	if ( $related_query->have_posts() ) : while ( $related_query->have_posts() ) : $related_query->the_post();
      		get_template_part('core/templates/portfolio/project', 'minimal-grid');
      	endwhile;
      	else :
      		get_template_part('core/templates/post/content','none');
      	endif;

      	wp_reset_postdata();
      ?>
    </div>
  </div>
</section>
