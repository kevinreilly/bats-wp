<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * About Template
 *
 *
 * @file           sidebar-about.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar-about.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>
<?php responsive_widgets_before(); // above widgets container hook ?>
	<div id="widgets">
    	<div class="about-menu">
		<?php responsive_widgets(); // above widgets hook ?>
		<?php if( !dynamic_sidebar( 'about' ) ) : ?>
			<div class="widget-wrapper">

			</div><!-- end of .widget-wrapper -->
		<?php endif; //end of shows-featured-side ?>
		<?php responsive_widgets_end(); // after widgets hook ?>
        </div>
	</div><!-- end of #widgets -->
<?php responsive_widgets_after(); // after widgets container hook ?>