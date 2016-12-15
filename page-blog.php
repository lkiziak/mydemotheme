<?php
/*
Template Name: page blog
*/
get_header(); ?>

  <h1>Blog</h1>
  <?php if( have_posts() ) : ?>
      <?php while( have_posts() ) : the_post(); ?>

        <!-- do stuff ... -->

         <p><?php the_content(); ?></p>


      <?php endwhile; ?>
  <?php endif; ?>

<?php get_footer(); ?>
