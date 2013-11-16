<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-57x57.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-144x144.png">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,300' rel='stylesheet' type='text/css'>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<a class="home-link" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</a>

		<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
<a id="code4sac-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="123px" height="26px" viewBox="0 0 218.915 46.687" enable-background="new 0 0 218.915 46.687"xml:space="preserve"> <g> <g> <path fill="#FFFFFF" d="M147.485,16.502c-5.09-1.901-7.313-2.996-7.313-5.475c0-2.017,1.872-3.745,5.734-3.745 c3.861,0,6.67,1.095,8.249,1.844l1.99-7.088c-2.341-1.037-5.617-1.959-10.063-1.959c-9.304,0-14.921,5.071-14.921,11.697 c0,0.784,0.085,1.525,0.244,2.23h3.112h5.133l-0.95,5.044l-0.492,2.608c1.149,0.59,2.413,1.117,3.777,1.585 c4.739,1.672,6.612,3.054,6.612,5.475c0,2.535-2.165,4.207-6.261,4.207c-0.969,0-1.93-0.08-2.863-0.217l-0.592,3.253l-0.714,3.928 c1.18,0.15,2.409,0.238,3.643,0.238c10.824,0,15.914-5.533,15.914-12.043C157.725,22.611,154.448,19.038,147.485,16.502z"/> </g> <g> <path fill="#FFFFFF" d="M218.443,38.592l-1.353-6.896c-1.766,0.695-4.767,1.275-7.473,1.275c-8.002,0-12.709-4.926-12.709-12.749 c0-8.691,5.531-12.921,12.65-12.921c3.178,0,5.707,0.695,7.531,1.448l1.824-7.012C217.326,0.927,213.796,0,209.147,0 c-9.377,0-17.317,4.527-20.342,12.862l7.778,24.707c3.111,1.727,7.01,2.703,11.681,2.703 C213.09,40.271,216.796,39.402,218.443,38.592z"/> <path fill="#FFFFFF" d="M180.12,0.637h-11.768l-6.879,22.168c0.599,1.65,0.901,3.439,0.901,5.356 c0,4.497-1.765,8.561-4.985,11.532h8.139l2.824-10.025h11.355l3.06,10.025h9.649L180.12,0.637z M169.647,23.062l2.354-8.286 c0.646-2.26,1.235-5.215,1.823-7.532h0.118c0.588,2.317,1.294,5.215,2,7.532l2.471,8.286H169.647z"/> </g> <path fill="#FFFFFF" d="M0,23.806c0,10.243,7.012,16.459,17.413,16.459c4.615,0,8.118-0.713,10.239-1.602 c-0.102-0.104-0.204-0.211-0.304-0.318c-1.481-1.592-2.668-3.445-3.537-5.517c-1.322,0.232-2.75,0.359-4.178,0.359 c-6.954,0-10.459-4.146-10.459-10.303c0-5.409,2.104-9.841,5.434-12.488c2.396-1.956,5.61-2.992,8.999-2.992 c1.161,0,2.225,0.081,3.17,0.211c1.111-1.756,2.402-3.348,3.854-4.723l0.007-0.007l0.007-0.007c0.501-0.471,1.022-0.916,1.56-1.34 c-1.506-0.615-4.291-1.271-7.78-1.271c-5.551,0-10.401,1.323-14.491,4.144C3.973,8.326,0,15.116,0,23.806z"/> <path fill="#FFFFFF" d="M56.636,34.741c0.02-0.02,0.039-0.041,0.059-0.059l5.138-26.56c-2.398-4.787-7.148-7.854-14.079-7.854 c-5.667,0-10.693,2.072-14.374,5.524c-4.616,4.374-7.246,11.337-7.246,18.357c0,9.037,5.727,16.171,15.952,16.171 C47.987,40.322,52.954,38.25,56.636,34.741z M35.073,23.864c0-4.662,1.753-10.704,4.908-13.754 c1.812-1.842,4.149-2.935,6.778-2.935c6.194,0,7.946,4.661,7.946,9.495c0,4.488-1.693,10.877-4.791,13.927 c-1.812,1.725-4.149,2.819-6.603,2.819C37.586,33.417,35.073,29.331,35.073,23.864z"/> <path fill="#FFFFFF" d="M89.509,34.797c0.435-0.34,0.854-0.701,1.261-1.082l4.847-25.133c-0.842-1.484-1.919-2.728-3.186-3.768 c-3.33-2.819-8.238-4.2-14.374-4.2c-3.798,0-7.538,0.287-10.868,0.863l-7.304,37.75c1.928,0.346,6.019,0.691,10.751,0.691 C79.167,39.92,84.952,38.365,89.509,34.797z M74.493,7.52c0.876-0.173,2.104-0.23,3.563-0.23c6.954,0,10.401,3.626,10.401,9.726 c0,4.661-1.402,8.69-4.09,11.683c-2.572,2.936-6.604,4.547-11.161,4.547c-1.461,0-2.688-0.057-3.681-0.23L74.493,7.52z"/> <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="124.0674" y1="51.0161" x2="124.0674" y2="13.5355"> <stop  offset="0" style="stop-color:#0479FC"/> <stop  offset="1" style="stop-color:#02B2FE"/> </linearGradient> <path fill="url(#SVGID_1_)" d="M135.175,17.864h-7.849L113.58,35.424l-0.799,4.257h12.283l-1.33,7.006h5.986l1.331-7.006h3.414 l0.887-4.878h-3.37L135.175,17.864z M127.326,28.55l-1.33,6.253h-6.031l0.045-0.09l4.745-6.119 c1.374-1.906,2.482-3.725,3.769-5.676h0.177C128.257,24.737,127.726,26.733,127.326,28.55z"/> <polygon fill="#FFFFFF" points="109.811,34.717 109.982,33.797 110.56,33.061 110.911,32.612 103.445,32.612 105.257,23.23 119.28,23.23 120.624,16.267 106.601,16.267 108.236,7.981 123.079,7.981 124.481,0.902 101.167,0.902 93.687,39.689 108.878,39.689 109.012,38.975 	"/> </g> </svg></a>
					<h3 class="menu-toggle"><svg width="28px" height="28px" viewBox="0 0 50 50"><path fill="#ffffff" d="M 384.00,336.00l0.00,32.00 q0.00,6.50 -4.75,11.25t-11.25,4.75l-352.00,0.00 q-6.50,0.00 -11.25-4.75t-4.75-11.25l0.00-32.00 q0.00-6.50 4.75-11.25t 11.25-4.75l 352.00,0.00 q 6.50,0.00 11.25,4.75t 4.75,11.25zM 384.00,208.00l0.00,32.00 q0.00,6.50 -4.75,11.25t-11.25,4.75l-352.00,0.00 q-6.50,0.00 -11.25-4.75t-4.75-11.25l0.00-32.00 q0.00-6.50 4.75-11.25t 11.25-4.75l 352.00,0.00 q 6.50,0.00 11.25,4.75t 4.75,11.25zM 384.00,80.00l0.00,32.00 q0.00,6.50 -4.75,11.25 t-11.25,4.75l-352.00,0.00 q-6.50,0.00 -11.25-4.75t-4.75-11.25l0.00-32.00 q0.00-6.50 4.75-11.25t 11.25-4.75l 352.00,0.00 q 6.50,0.00 11.25,4.75t 4.75,11.25z" transform="scale(0.10714285714285714 0.10714285714285714)"></path></svg></h3>
					
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
			
		</header><!-- #masthead -->

		<div id="main" class="site-main">