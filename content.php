        <!-- do stuff ... -->
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>

  <?php the_title(); ?>
      <div class="thumbnail-img"><?php the_post_thumbnail('medium'); ?></div>
      <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?><?php the_category(); ?></small>
      <p><?php the_content(); ?></p>

    <hr>

  </article>
