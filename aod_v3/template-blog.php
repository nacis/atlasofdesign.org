<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<div class="container">
  <div class="content">
    <?php
    $blog = get_posts(array('showposts' => -1));
    echo "<ul class='blog-list'>";
    foreach ($blog as $b) {
      $post = $b;
      setup_postdata($post);
      $title = get_the_title();
      $date = get_the_date();
      $permalink = get_permalink();
      $excerpt = get_the_excerpt();
      echo "<li><i class='blog-icon fa fa-align-left'></i><a href='{$permalink}'>{$title} <span class='blog-post-date'>{$date}</span><br><p class='blog-post-excerpt'>{$excerpt}</p></a></li>";
      wp_reset_postdata();
    }
    echo "</ul>";
    ?>
  </div>
  <?php get_sidebar(); ?>
</div>

<?php if ( has_post_thumbnail() ) { ?>
  <div class="page-feat-image"><?php the_post_thumbnail(); ?></div>
<?php } ?>
<?php get_footer(); ?>