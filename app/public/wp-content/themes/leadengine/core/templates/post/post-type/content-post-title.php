
<?php if ('quote' === get_post_format()) : ?>
  <h3 class="blog-single-title quote"><?php the_title(); ?></h3>
<?php else : ?>
  <h3 class="blog-single-title"><a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
<?php endif; ?>
