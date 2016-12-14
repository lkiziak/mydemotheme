<h1>Pacific Health</h1>

<?php get_header(); ?>

<hr>

<!-- Post Loop -->
  <?php if( have_posts() ) : ?>
      <?php while( have_posts() ) : the_post(); ?>

        <?php get_template_part('content', get_post_format()); ?>

          <!-- do stuff ... -->

      <?php endwhile; ?>
  <?php endif; ?>

<?php get_footer(); ?>




