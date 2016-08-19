<?php
/**
 * My Header
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ckim-assignment1/Portfolio
 */

$options=get_option( 'ck_options_settings' ); 

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/flexslider.css" />

<!--Provided by WooThemes-->
<link rel="text/javascript" src="/~ccit3667/wp-content/themes/ckim-assignment1/portfolio/js/jquery.flexslider-min.js">
</script>
<link rel="text/javascript" src="/~ccit3667/wp-content/themes/ckim-assignment1/portfolio/js/jquery.flexslider.js">
</script>

<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider();
  });
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- This is the style for my options  -->
     <style>
        .site-branding{
	       background-color: <?php echo $options['ck_radio_field']; ?>
        }
    </style>

    <style>
        .site-branding{
	       color: <?php echo $options['ck_select_field']; ?>
        }
    </style>
    <style>
        .site-description{
	       font-size: <?php echo $options['ck_font_field']; ?>
        }
    </style>


<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'portfolio' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;?>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner.png" alt="Banner" width="2000"/>
			<?php
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'portfolio' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
