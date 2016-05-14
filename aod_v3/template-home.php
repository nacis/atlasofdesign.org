<?php
/*
Template Name: Home
*/
get_header(); ?>
  
  <header id="intro" style="background-image:url(<?php bloginfo('template_url'); ?>/img/header_jake-coolidge-columbia-watershed.jpg);">
    <div class="container">
      <div class="row">
        <div class="block-6" id="intro-content">
          <h1>Atlas of Design</h1>
          <p class="sub-text">A gallery of beautiful and inspiring maps from around the world. Volume II is currently for sale. We are working on Volume III!</p>
          <a href="http://nacis.org/order-the-atlas-of-design" target="_blank" class="button button-red button-small button-top">Purchase Volume II now!</a>
        </div>
      </div>
    </div>
  </header>

  <section id="sub-header">
    <div class="container">
      <div class="row">
        <div class="block-6">
          <div class="sub-header-content dark">
            <p class="sub-text">The Atlas of Design is dedicated to showing off some of the world’s most beautiful and intriguing cartographic design. Every two years, we publish a new volume of full-color maps, selected from worldwide competition and judged by an expert panel.</p>
          </div>
        </div>
        <!-- <div class="block-6">
          <div class="sub-header-content">
            <p class="sub-text dark">We are now accepting submissions for the third volume of the Atlas of Design! Submissions close on <strong>February 28th, 2016</strong> at midnight (PST).</p>
            <a href="/submit" class="button button-green button-top">Submit your map!</a>
          </div>
        </div> -->
      </div>
    </div>
  </section>

  <section id="description">
    <div class="container">
      <p>The Atlas aims to inspire readers both within the field of cartography and without toward new understandings of design, and of the power that a well-crafted map can have. Take a look at <a href="/one">Volume I</a> and <a href="/two">Volume II</a>.</p>
    </div>

    <div class="description-images">
      <div class="description-image description-image-full" style="background-image:url(<?php bloginfo('template_url'); ?>/img/home-img-full.jpg);"></div>
      <div class="description-image description-image-half" style="background-image:url(<?php bloginfo('template_url'); ?>/img/home-img-aod2v2.jpg);"></div>
      <div class="description-image description-image-half" style="background-image:url(<?php bloginfo('template_url'); ?>/img/home-img-aod1.jpg);"></div>
    </div>
  </section>

  <section id="recent">
    <div class="row">
      <?php
        $args = array(
        'posts_per_page' => 4
      );
      $query = new WP_Query( $args );
        if ( $query->have_posts() ) : ?>
                <!-- the loop -->
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="block-3 recent-post">
                <a href="<?php the_permalink(); ?>">
                  <h3 class="recent-post-title"><?php the_title(); ?></h3>
                  <div class="recent-post-excerpt"><?php the_excerpt(); ?></div>
                </a>
                </div>
                <?php endwhile; ?>
                <!-- end of the loop -->

                <?php wp_reset_postdata(); ?>
        <?php else:  ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </div>
  </section> 
  
<?php get_footer(); ?>