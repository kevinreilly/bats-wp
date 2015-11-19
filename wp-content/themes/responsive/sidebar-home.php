<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Home Widgets Template
 *
 *
 * @file           sidebar-home.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar-home.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>
<?php responsive_widgets_before(); // above widgets container hook ?>
	<div id="widgets" class="home-widgets">
		<div id="home_widget_1" class="grid col-300">
			<?php responsive_widgets(); // above widgets hook ?>

			<?php if( !dynamic_sidebar( 'home-widget-1' ) ) : ?>
				<div class="widget-wrapper">

					<div class="widget-title-home"><h3><?php _e( 'Home Widget 1', 'responsive' ); ?></h3></div>
					<div
						class="textwidget"><?php _e( 'This is your first home widget box. To edit please go to Appearance > Widgets and choose 6th widget from the top in area 6 called Home Widget 1. Title is also manageable from widgets as well.', 'responsive' ); ?></div>

				</div><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-1 ?>

			<?php responsive_widgets_end(); // responsive after widgets hook ?>
		</div>
		<!-- end of .col-300 -->

		<div id="home_widget_2" class="grid col-300">
			<?php responsive_widgets(); // responsive above widgets hook ?>

			<?php if( !dynamic_sidebar( 'home-widget-2' ) ) : ?>
				<div class="widget-wrapper">

					<div class="widget-title-home"><h3><?php _e( 'Home Widget 2', 'responsive' ); ?></h3></div>
					<div
						class="textwidget"><?php _e( 'This is your second home widget box. To edit please go to Appearance > Widgets and choose 7th widget from the top in area 7 called Home Widget 2. Title is also manageable from widgets as well.', 'responsive' ); ?></div>

				</div><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-2 ?>

			<?php responsive_widgets_end(); // after widgets hook ?>
		</div>
		<!-- end of .col-300 -->

		<div id="home_widget_3" class="grid col-300 fit">
			<?php responsive_widgets(); // above widgets hook ?>

			<?php if( !dynamic_sidebar( 'home-widget-3' ) ) : ?>
				<div class="widget-wrapper">

					<div class="widget-title-home"><h3><?php _e( 'Home Widget 3', 'responsive' ); ?></h3></div>
					<div
						class="textwidget"><?php _e( 'This is your third home widget box. To edit please go to Appearance > Widgets and choose 8th widget from the top in area 8 called Home Widget 3. Title is also manageable from widgets as well.', 'responsive' ); ?></div>

				</div><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-3 ?>

			<?php responsive_widgets_end(); // after widgets hook ?>
		</div>
		<!-- end of .col-300 fit -->
        
        <hr />
        
        <div class="grid col-940">
        	<h3 style="color:#b22b05;">Coming Soon to BATS</h3>
        </div>
        
        <div id="home_widget_4" class="grid col-300 coming-soon">
			<?php responsive_widgets(); // above widgets hook ?>

			<?php if( !dynamic_sidebar( 'home-widget-4' ) ) : ?>
				<div class="widget-wrapper">

					<div class="widget-title-home"><h3><?php _e( 'Home Widget 4', 'responsive' ); ?></h3></div>
					<div
						class="textwidget"><?php _e( 'This is your fourth home widget box. To edit please go to Appearance > Widgets and choose 8th widget from the top in area 8 called Home Widget 4. Title is also manageable from widgets as well.', 'responsive' ); ?></div>

				</div><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-4 ?>

			<?php responsive_widgets_end(); // after widgets hook ?>
		</div>
		<!-- end of .col-300 fit -->
        
        <div id="home_widget_5" class="grid col-300 coming-soon">
			<?php responsive_widgets(); // above widgets hook ?>

			<?php if( !dynamic_sidebar( 'home-widget-5' ) ) : ?>
				<div class="widget-wrapper">

					<div class="widget-title-home"><h3><?php _e( 'Home Widget 5', 'responsive' ); ?></h3></div>
					<div
						class="textwidget"><?php _e( 'This is your fourth home widget box. To edit please go to Appearance > Widgets and choose 8th widget from the top in area 8 called Home Widget 4. Title is also manageable from widgets as well.', 'responsive' ); ?></div>

				</div><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-5 ?>

			<?php responsive_widgets_end(); // after widgets hook ?>
		</div>
		<!-- end of .col-300 fit -->
        
        <div id="home_widget_6" class="grid col-300 fit coming-soon">
			<?php responsive_widgets(); // above widgets hook ?>

			<?php if( !dynamic_sidebar( 'home-widget-6' ) ) : ?>
				<div class="widget-wrapper">

					<div class="widget-title-home"><h3><?php _e( 'Home Widget 6', 'responsive' ); ?></h3></div>
					<div
						class="textwidget"><?php _e( 'This is your fourth home widget box. To edit please go to Appearance > Widgets and choose 8th widget from the top in area 8 called Home Widget 4. Title is also manageable from widgets as well.', 'responsive' ); ?></div>

				</div><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-6 ?>

			<?php responsive_widgets_end(); // after widgets hook ?>
		</div>
		<!-- end of .col-300 fit -->
        
        <div id="home_widget_7" class="grid col-940 fit">
			<?php responsive_widgets(); // above widgets hook ?>

			<?php if( !dynamic_sidebar( 'home-widget-7' ) ) : ?>
				<div class="widget-wrapper">

					<div class="widget-title-home"><h3><?php _e( 'Home Widget 7', 'responsive' ); ?></h3></div>
					<div
						class="textwidget"><?php _e( 'This is your fourth home widget box. To edit please go to Appearance > Widgets and choose 8th widget from the top in area 8 called Home Widget 4. Title is also manageable from widgets as well.', 'responsive' ); ?></div>

				</div><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-7 ?>

			<?php responsive_widgets_end(); // after widgets hook ?>
		</div>
		<!-- end of .col-300 fit -->
	</div><!-- end of #widgets -->
<?php responsive_widgets_after(); // after widgets container hook ?>