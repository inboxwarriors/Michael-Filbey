<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Michaelfilbey
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon-160x160.png" sizes="160x160">
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon-32x32.png" sizes="32x32">
<meta name="msapplication-TileColor" content="#ffc40d">
<meta name="msapplication-TileImage" content="/mstile-144x144.png">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
  <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'michaelfilbey' ); ?></a>

  <header id="masthead" class="site-header" role="banner">

    <div class="max top">
      <div class="site-branding">
        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <img src="<?php bloginfo('template_directory'); ?>/img/logo-full-normal-h.svg" alt="<?php bloginfo( 'name' ); ?>"></a></h1>
      </div><!-- .site-branding -->

      <nav id="site-navigation" class="main-navigation" role="navigation">
        <button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Menu', 'michaelfilbey' ); ?></button>
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
      </nav><!-- #site-navigation -->
    </div>

    <div class="contact-bar">
    <h4>07984 202 126 <a href="mailto:michaelfilbey_[at]_hotmail.co.uk" class="mail">michaelfilbey_[at]_hotmail.co.uk</a></h4>
    </div>
  </header><!-- #masthead -->


  <div id="content" class="site-content">

