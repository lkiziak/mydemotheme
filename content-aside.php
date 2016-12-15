<!-- Aside Post - Entire Daily Routines Posts Page -->

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
   <header class="entry-header">

      <?php the_title( sprintf('<h4 class="entry-title"><a href="%s">', esc_url( get_permalink() )),'</a></h4>' ); ?>
      <div class="thumbnail-img"><?php the_post_thumbnail('medium'); ?></div>
      <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?><?php the_category(); ?></small>

      <p><?php the_content(); ?></p>
<hr>
