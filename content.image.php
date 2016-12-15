<!-- Posts with image -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>

<header class="entry-header">
    <?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() )),'</a></h1>' ); ?>
    <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, <?php the_category(); ?></small>
</header>

      <div class="thumbnail-img"><?php the_post_thumbnail('medium'); ?></div>

  <p><?php the_content(); ?></p>

    <hr>
