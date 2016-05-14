<?php
/*
Template Name: Translation - Single
*/
?>

<?php get_header(); ?>
<div class="container">
	<div id="content">
		<!-- creating menu section -->
		<ul id="single-language-menu">
		<?php
		$args = array(
			'child_of'	=> $post->post_parent,
		);
		$pages = get_pages($args);

		$current_id = get_the_ID();

		foreach ( $pages as $page ) {
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'single-page-thumbnail' );
			if($page->ID == $current_id) {
				$php_menu_item = '<li class="active" id="single-menu-' . $page->post_title . '"><a href="' . $page->guid . '">' . $page->post_title . '</a></li>';
			} else {
				$php_menu_item = '<li id="single-menu-' . $page->post_title . '"><a href="' . $page->guid . '">' . $page->post_title . '</a></li>';
			}
			
			echo $php_menu_item;	
		} ?>
		</ul>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; // end of the page info loop. ?>

	</div>

<?php get_sidebar(); ?>
</div><!-- #container -->


<?php get_footer(); ?>