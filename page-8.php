<!-- About Me page -->
<?php get_header(); ?>

<h1>About Me</h1>

<!-- Post Loop -->
  <?php if( have_posts() ) : ?>
      <?php while( have_posts() ) : the_post(); ?>

        <!-- do stuff ... -->
        <?php the_title(); ?>
          <h6><?php the_title(); ?></h6>
          <p><?php the_content(); ?></p>
          <hr>
      <?php endwhile; ?>
  <?php endif; ?>

<?php get_footer(); ?>
