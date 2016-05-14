<?php get_header(); ?>
<div class="container">
	<div class="content">
		<?php while ( have_posts() ) : the_post(); ?>
			<h1><? the_title(); ?></h1>
			<h6 class="date"><? the_date(); ?></h6>
			<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>