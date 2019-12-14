<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <!-- styles enqueued in functions.php -->
  <!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css"> -->
  <!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"> -->
  <title>
    <?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
  </title>
  <?php wp_head(); ?>
</head>

<body class="p-top-85" id="body-element" onload="adminBarPadding();">
  <!-- navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" id="header-navbar">
    <a class="navbar-brand" href="<?php echo home_url(); ?>">
      <img src="<?php echo get_theme_file_uri('media/VFW-logo-header.png'); ?>" width="200" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup"> -->


    <?php
    wp_nav_menu(
      array(
        'menu'  => 'main',
        'theme_location' => 'primary',
        'container' => 'div',
        'container_class' => 'collapse navbar-collapse justify-content-end',
        'container_id'  => 'navbarNavAltMarkup',
        'menu_class' => 'navbar-nav',
      )
    );
    ?>

    <!-- <a class="nav-item nav-link active" href="<?php echo home_url(); ?>">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">Join</a>
          <a class="nav-item nav-link" href="#">Contact Us</a>
          <a class="nav-item nav-link" href="#">Calendar</a>
          <a class="nav-item nav-link" href="#">Newsletter</a>
          <a class="nav-item nav-link" href="#">Auxiliary</a>
          <a class="nav-item nav-link" href="#">Veteran's Resources</a> -->

    <!-- </div> -->
  </nav>