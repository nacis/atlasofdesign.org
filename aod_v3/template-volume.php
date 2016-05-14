<?php
/*
Template Name: Volume
*/
?>

<?php get_header(); ?>
<?php while ( have_posts() ) : the_post();
  $featured_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-page-thumbnail' );
  echo '<div class="volume-header" style="background-image:url('.$featured_img[0].');"><h1 class="volume-number">'.get_the_title().'</h1></div>';
?>



<div class="container">
  <div class="volume-info">
    <div class="volume-text"><?php the_content(); ?></div>
  <?php endwhile; // end of the loop. ?>
  </div>

  <?php
  echo '<div id="volume-maps">';
  $volume = get_field('volume');
  $maps = array(
    'post_type' => 'maps',
    'tax_query' => array(
      array(
        'taxonomy' => 'volume',
        'terms' => $volume,
        'field' => 'term_id'
      )
    ),
    'posts_per_page' => -1
    );
  $maps_query = new WP_Query( $maps );
  if ( $maps_query->have_posts() ) :
    while ( $maps_query->have_posts() ) : $maps_query->the_post();
      
      $id = $post->ID;
      $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-page-thumbnail' );
      echo '<article class="volume-map" style="background-image:url('.$image[0].');">';
        echo '<div class="volume-map-info">';
          echo '<h3 class="volume-map-title">'.get_field('map_title').'</h3><br>';
          echo '<p class="volume-map-author">'.get_field('authors');
          if (get_field('authors_url'))
            echo '<a href="'.get_field('authors_url').'" target="_blank" class="volume-map-author-link"><i class="fa fa-link"></i></a>';
          echo '</p>';
            
          // if (get_post_meta($id, 'aod_extra', true))

        echo '</div>';
        if (get_field('map_url'))
          echo '<a href="'.get_field('map_url').'" target="_blank" class="volume-map-link"><i class="fa fa-external-link"></i></a>';
      echo '</article>';

    endwhile;
  endif;

  echo '</div>'; ?>
</div>
<?php get_footer(); ?>