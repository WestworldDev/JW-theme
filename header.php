<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WWR
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="wwr/bulma.css">
	<link rel="stylesheet" href="wwr/normalize.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- <div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wwr' ); ?></a>
 -->
	<header id="masthead" class="site-header">
<section class="hero is-info is-medium">
    <div class="hero-head">
        <nav class="navbar">
            <div class="container">
                <div class="navbar-brand">
                    <div class="site-branding">
            <?php
            the_custom_logo();
            if ( is_front_page() && is_home() ) : ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php else : ?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php
            endif;

            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
                <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
            <?php
            endif; ?>
        </div><!-- .site-branding -->
 <span class="navbar-burger burger" data-target="navbarMenuHeroB">
            <span></span> <span></span> <span></span> </span>
                </div>
                <div id="navbarMenuHeroB" class="navbar-menu">
                    <div class="navbar-end"> <a class="navbar-item is-active">
              Home
            </a> <a class="navbar-item">
              Examples
            </a> <a class="navbar-item">
              Documentation
            </a> <span class="navbar-item">
              <a class="button is-info is-inverted">
                <span class="icon">
                  <i class="fab fa-github"></i>
                </span> <span>Download</span> </a>
                        </span>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="hero-body">
        <div class="container has-text-centered">
            <p class="title"> Title </p>
            <p class="subtitle"> Subtitle </p>
        </div>
    </div> 
    <div class="hero-foot is-large">
        <nav class="tabs is-boxed is-fullwidth">
            <div class="container">
                <ul>
                    <li class="is-active"> <a>Overview</a> </li>
                    <li> <a>Modifiers</a> </li>
                    <li> <a>Grid</a> </li>
                    <li> <a>Elements</a> </li>
                    <li> <a>Components</a> </li>
                    <li> <a>Layout</a> </li>
                </ul>
            </div>
        </nav>
    </div>
</section>
</header>

	<div id="content" class="site-content">
