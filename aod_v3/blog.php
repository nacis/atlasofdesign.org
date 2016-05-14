<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<div class="container">
	<div id="content">
	<?php
	$query = new WP_Query( array('category_name' => 'uncategorized', 'posts_per_page' => 7 ));
	if ( $query->have_posts() ) : ?>
		<!-- the loop -->
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="post">
					<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<h6 class="date"><? the_date(); ?></h6>
		  			<?php the_content(); ?>
		 	</div><!-- end post -->
		<?php endwhile; ?>
	  	<!-- end of the loop -->
	  	<?php wp_reset_postdata(); ?>

	<?php else:  ?>
	  <p><?php _e( 'Uh oh! Something went wrong.' ); ?></p>
	<?php endif; ?>
	</div> <!-- end content -->
	<?php get_sidebar(); ?>
</div> <!-- end container -->

<?php get_footer(); ?>