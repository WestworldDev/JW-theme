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
<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <!-- <link rel="apple-touch-icon" href="icon.png"> -->
        <!-- Place favicon.ico in the root directory -->

        <!-- <link rel="stylesheet" href="/normalize.css"> -->
        <!-- <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bulma.css">
         <link rel="stylesheet" href="/styles.css"> -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- <div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wwr' ); ?></a>
 -->

 

	<div id="content" class="site-content">
