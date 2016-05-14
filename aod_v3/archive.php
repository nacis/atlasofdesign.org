<?php get_header(); ?>
<div class="container">
	<div id="content">	
	<h3 class="archive-title"><?php 
		if ( is_day() ) { printf( __( 'Daily Archives: %s', 'Atlas of Design' ), get_the_time(get_option('date_format') ) ); }
		elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'Atlas of Design' ), get_the_time('F Y') ); }
		elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'Atlas of Design' ), get_the_time('Y') ); }
		else { _e( 'Archives', 'Atlas of Design' ); }
	?></h3>

	<?php 
		if (have_posts()) :
	   		while (have_posts()) : the_post();
	   			$count = 0;
	   			if ( !in_category( 'Event' )) {
	   				$count++;
	?>				
					<div class="post">
						<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
						<h6 class="date"><?php the_date() ?></h6>
	  					<?php the_content(); ?>
					</div>


				<?php } 
	   		endwhile;
		endif;

		if ($count == 0) {
			echo "<p>We're sorry, there are no posts for this month.</p>";
		}
	?>


</div><!-- end content -->
<?php get_sidebar(); ?>
</div><!-- end container -->
<?php get_footer(); ?>