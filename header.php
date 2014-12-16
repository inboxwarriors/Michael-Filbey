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
    <h2>07984 202 126  <a href="mailto:mf@michaelfilbey.com">mf@michaelfilbey.com</a></h2>
    </div>
  </header><!-- #masthead -->


  <div id="content" class="site-content">
