<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?php echo get_template_directory_uri();?>/style.css" rel="stylesheet" type="text/css" media="all">
  <link rel="stylesheet" href="/css/style.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <?php wp_head();?> -->
</head>
<body>
<header class="header">
  <div class="header__title">
  <h1>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <?php bloginfo( 'name' ); ?><span class="header__ttl__sub"></span><a>
  </h1>
    <!-- <p class="header__descrition"><?php bloginfo( 'description' ); ?></p> -->
  </div>
  <?php get_search_form(); ?>
</header>