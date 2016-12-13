<?php get_header(); ?>

<h1>A Little About Me</h1>

<!-- Post Loop -->
  <?php if( have_posts() ) : ?>
      <?php while( have_posts() ) : the_post(); ?>

        <!-- do stuff ... -->
        <?php the_title(); ?>
          <h3><?php the_title(); ?></h3>
          <p><?php the_content(); ?></p>
          <hr>
      <?php endwhile; ?>
  <?php endif; ?>

<?php get_footer(); ?>
