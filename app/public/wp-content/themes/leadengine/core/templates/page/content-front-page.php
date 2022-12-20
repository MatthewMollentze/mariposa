<?php
/**
 * Displays content for front page
 *
 * @package leadengine
 * by KeyDesign
 */

?>

<?php
   $page_bgcolor = get_post_meta( get_the_ID(), '_themetek_page_bgcolor', true );
   $page_background_color = ' background-color:'.$page_bgcolor.';';
?>
<section id="<?php echo esc_attr( $post->post_name );?>" class="section" style="<?php echo ( !empty( $page_bgcolor ) ? esc_attr( $page_background_color ) : '' ); ?>">
   <div class="container" >
      <div class="row">
         <?php the_content(); ?>
      </div>
   </div>
</section>
