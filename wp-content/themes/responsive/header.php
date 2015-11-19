<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.3
 * @filesource     wp-content/themes/responsive/header.php
 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */
?>
	<!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title><?php wp_title( '&#124;', true, 'right' ); ?></title>
		<link rel="stylesheet" type="text/css" href="//cloud.typography.com/7038872/806502/css/fonts.css" />
		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
        
        <link rel="stylesheet" href="http://bats.wpengine.com/wp-content/plugins/colorbox/colorbox.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="http://bats.wpengine.com/wp-content/plugins/colorbox/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
				$(".inline").colorbox({inline:true, width:"320px"});
			});
		</script>
        <script type="text/javascript">
			$(document).ready(function(){
				$( "div.widget-wrapper:has(div.social-icons)" ).addClass( "social-widget" );
				$( "div.widget-wrapper:has(div.videoWrapper)" ).addClass( "video-widget" );
			});
		</script>

		<?php wp_head(); ?>
        
        <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-53311726-1', 'auto');
		  ga('send', 'pageview');
		</script>
        
	</head>

<body <?php body_class(); ?> style="background:#000000 url(http://bats.wpengine.com/wp-content/backgrounds/bg<?php echo(mt_rand(2,8)); ?>.jpg) center top no-repeat">
	<?php date_default_timezone_set('America/Los_Angeles'); ?>
    <div style='display:none'>
        <div id='shortform' style='padding:10px; background:#fff;'>
            <span style="font-size:2em;">Shortform:</span><span> (usually on Fridays)<br />fun and fast-paced improvised theatre, filled with scenes, songs, games, and lots of audience participation and suggestions.</span>
            <br /><br />
<a href="http://bats.wpengine.com/shows/about-improvised-theatre">Read more about Improv &raquo;</a>
        </div>
    </div>
    
    <div style='display:none'>
        <div id='longform' style='padding:10px; background:#fff;'>
            <span style="font-size:2em;">Longform:</span><span> (usually on Saturdays)<br />full-length, narrative, genre-driven, completely improvised stories based on audience suggestions.</span>
            <br /><br />
			<a href="http://bats.wpengine.com/shows/about-improvised-theatre">Read more about Improv &raquo;</a>
        </div>
    </div>

<?php responsive_container(); // before container hook ?>
<div id="container" class="hfeed">

<?php responsive_header(); // before header hook ?>
	<div id="header">

		<?php responsive_header_top(); // before header content hook ?>
		
		<?php if( has_nav_menu( 'top-menu', 'responsive' ) ) { ?>
			<?php wp_nav_menu( array(
								   'container'      => '',
								   'fallback_cb'    => false,
								   'menu_class'     => 'top-menu',
								   'theme_location' => 'top-menu'
							   )
			);
			?>
		<?php } ?>

		<?php responsive_in_header(); // header hook ?>

		<?php if( get_header_image() != '' ) : ?>

			<div id="logo">
				<a href="<?php echo home_url( '/' ); ?>"><img src="<?php header_image(); ?>" width="<?php if( function_exists( 'get_custom_header' ) ) {
						echo get_custom_header()->width;
					}
					else {
						echo HEADER_IMAGE_WIDTH;
					} ?>" height="<?php if( function_exists( 'get_custom_header' ) ) {
						echo get_custom_header()->height;
					}
					else {
						echo HEADER_IMAGE_HEIGHT;
					} ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
			</div><!-- end of #logo -->

		<?php endif; // header image was removed ?>

		<?php if( !get_header_image() ) : ?>

			<div id="logo">
				<span class="site-name"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
				<span class="site-description"><?php bloginfo( 'description' ); ?></span>
			</div><!-- end of #logo -->

		<?php endif; // header image was removed (again) ?>
        
        <div class="tagline">
            <h2><?php $tagline = get_bloginfo('description'); echo $tagline; ?></h2>
        </div>
        
        <ul class="top-menu top-menu-mobile">
        	<li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12">
            	<a href="https://www.vendini.com/ticket-software.html?t=tix&w=30f488d21474d07590852179c032e191">Buy Tickets</a>
            </li>
		</ul>

		<?php get_sidebar( 'top' ); ?>
		<?php wp_nav_menu( array(
							   'container'       => 'div',
							   'container_class' => 'main-nav',
							   'fallback_cb'     => 'responsive_fallback_menu',
							   'theme_location'  => 'header-menu'
						   )
		);
		?>

		<?php if( has_nav_menu( 'sub-header-menu', 'responsive' ) ) { ?>
			<?php wp_nav_menu( array(
								   'container'      => '',
								   'menu_class'     => 'sub-header-menu',
								   'theme_location' => 'sub-header-menu'
							   )
			);
			?>
		<?php } ?>

		<?php responsive_header_bottom(); // after header content hook ?>

	</div><!-- end of #header -->
<?php responsive_header_end(); // after header container hook ?>

<?php responsive_wrapper(); // before wrapper container hook ?>
	<div id="wrapper" class="clearfix">
<?php responsive_wrapper_top(); // before wrapper content hook ?>
<?php responsive_in_wrapper(); // wrapper hook ?>