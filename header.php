<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">

  <?php do_action('wp_head'); ?>
</head>
<body>
  <div class="wrapper">
    <header class="header">
      <div class="logo">
        <a href="#" class="logo__text">oBlog</a>
        <div class="logo__baseline">
          Un simple blog
        </div>
      </div>
      <nav class="main-nav">
        <a class="main-nav__link" href="#">Cat&eacute;gories</a>
        <a class="main-nav__link" href="#">&Agrave; propos</a>
        <a class="main-nav__link" href="#">Contact</a>
      </nav>
      <div class="header__tools">
        <?php get_search_form(); ?>
        <a href="#" class="action-button">S&apos;abonner</a>
      </div>
    </header>