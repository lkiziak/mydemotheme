<?php
 ini_set('display_errors', '1');
 error_reporting(E_ERROR);
?>

<?php get_header(); ?>

<h1>Health Blog</h1>
<hr>

<!-- Post Loop -->
  <?php if( have_posts() ) : ?>
      <?php while( have_posts() ) : the_post(); ?>

        <?php get_template_part('content', get_post_format()); ?>

          <!-- do stuff ... -->

      <?php endwhile; ?>
  <?php endif; ?>

<?php get_footer(); ?>
<?php get_sidebar();?>



