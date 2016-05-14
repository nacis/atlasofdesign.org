<?php get_header(); ?>



<?php 
  $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'single-page-thumbnail');
?>
<div class="page-header" style="background-image:url(<?php echo $img[0] ?>);filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src=<?php echo $img[0] ?>, sizingMethod="scale");-ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src=<?php echo $img[0] ?>, sizingMethod="scale");">
  <?php
    $value = get_field( 'page_header_caption' );
    if ( $value ) {
      echo '<span class="page-header-caption">'.$value.'</span>';
    }
  ?>
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>

</div>

<div class="container">
	<div class="content">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
	</div>
	<!-- <?php get_sidebar(); ?> -->
</div>


<?php get_footer(); ?>