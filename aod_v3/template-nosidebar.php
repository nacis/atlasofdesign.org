<?php
/*
Template Name: No Sidebar
*/
?>

<?php get_header(); ?>
<div class="container">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; // end of the loop. ?>
</div>
<?php get_footer(); ?>