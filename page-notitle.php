<?php
/*
Template Name: page no title
*/
get_header(); ?>

  <?php if( have_posts() ) : ?>
      <?php while( have_posts() ) : the_post(); ?>

        <!-- do stuff ... -->
        <h1>My static title</h1>
         <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
         <p><?php the_content(); ?></p>
         <hr>

      <?php endwhile; ?>
  <?php endif; ?>

<?php get_footer(); ?>
