<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php bloginfo('title')?></title>


  <?php wp_head(); ?>

</head>

<div id="container">

  <?php
    if( is_home() ):
        $demo_classes = array( 'demo-class', 'my-class' );
    else:
        $demo_classes = array( 'no-demo-class' );
    endif;
  ?>

<body <?php body_class( $demo_classes ); ?>

  <?php wp_nav_menu(array('theme_location'=>'primary')); ?>

  <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />



