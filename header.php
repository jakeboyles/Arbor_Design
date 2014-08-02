<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<!-- mobile meta -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,700,300,500' rel='stylesheet' type='text/css'>
<link href='http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css' rel="stylesheet">
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<nav id="nav-wrap">
			<a href="<?php echo get_bloginfo('url'); ?>"><img id="logo" src="<?php bloginfo('template_url'); ?>/images/logo.png"></a>
			<div id="mobileButton"></div>
	<ul id="mobileNav">
		<li><a href="<?php echo get_bloginfo('url'); ?>"><i class="icon-fixed-width icon-home"></i>Home</a></li>
		<li><a href="about-us"><i class="icon-fixed-width icon-question-sign"></i>About Us</a></li>
		<li><a href="cincinnati-tree-services"><i class="icon-fixed-width icon-leaf"></i>Services</a></li>
		<li><a href="references"><i class="icon-fixed-width icon-thumbs-up"></i>References</a></li>
		<li><a href="contact-us"><i class="icon-fixed-width icon-phone"></i>Contact</a></li>
	</ul>
</nav>
		<div id="nav" role="nav">
		<a href="<?php echo get_bloginfo('url'); ?>"><img id="logo" src="<?php bloginfo('template_url'); ?>/images/logo.png"></a>
		<h3>Call Us At: (513) 851-3399</h3>
		<ul id="navi">
		<li><a href="<?php echo get_bloginfo('url'); ?>"><i class="icon-fixed-width icon-home"></i>Home</a></li>
		<li><a href="about-us"><i class="icon-fixed-width icon-question-sign"></i>About Us</a></li>
		<li><a href="cincinnati-tree-services"><i class="icon-fixed-width icon-leaf"></i>Services</a>
			<ul>
            <li><a href="#">Tree Care &amp; Health Services</a></li>
            <li><a href="#">Tree Fertilizations</a></li>
            <li><a href="#">Tree Protection Programs</a></li>
            <li><a href="#">Storm Damage &amp; Tree Removal</a></li>
            <li><a href="#">Commercial Clients</a></li>
            <li><a href="#">Consulting Services</a></li>
            <li><a href="#">Snow Removal</a></li>
        </ul>
		</li>
		<li><a href="references"><i class="icon-fixed-width icon-thumbs-up"></i>References</a></li>
		<li><a href="contact-us"><i class="icon-fixed-width icon-phone"></i>Contact</a></li>
		</ul>
		</div>
