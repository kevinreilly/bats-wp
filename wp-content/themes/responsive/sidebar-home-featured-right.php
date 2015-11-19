<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Home Featured Right Template
 *
 *
 * @file           sidebar-home-featured-right.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar-home-featured-right.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>
<?php responsive_widgets_before(); // above widgets container hook ?>
	<div id="widgets">
		<?php responsive_widgets(); // above widgets hook ?>

		<?php if( !dynamic_sidebar( 'home-featured-right' ) ) : ?>
			<div class="widget-wrapper">
            
            <?php
				$today = date('Ymd');
				
				$args = array (
					'post_type'              => array('friday','saturday','sunday','special','sport'),
					'meta_query'             => array(
						array(
							'key'       => 'publish_area',
							'value'     => 'right',
						),
						array(
			    	        'key'		=> 'publish_start_date',
			    	        'compare'	=> '<=',
			    	        'value'		=> $today,
			    	    ),
			    	     array(
			    	        'key'		=> 'publish_end_date',
			    	        'compare'	=> '>=',
			    	        'value'		=> $today,
			    	    )
					),
				);
				
				// The Query
				$query = new WP_Query( $args );
				
				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						
						$post_type = get_post_type();
						if ($post_type == 'special'){
							$post_type = get_field('day');
						}
						else if ($post_type == 'sport'){
							$post_type = get_field('day');
						}
						else{}
						$post_type = ucwords($post_type);
												
						echo '<span class="post-type">'. $post_type .'</span>';
						echo '<div class="featured-right">';
						echo '<a href="'. get_permalink() .'">'. get_the_post_thumbnail() . '</a>';
						
						show_type();
						
						echo '<div class="featured-post-title"><a href="'. get_permalink() .'">'. get_the_title() . '</a></div>';
						
						echo the_field('show_description');
						
						echo '<br />';
						
						next_show();
						
						echo '<a class="buy-button" href="'. get_field("tickets_url") .'" target="_blank"><img src="wp-content/themes/responsive/core/images/buy-tickets-button.png" /></a>';
						
						global $nextshow;
						
						$status1 = get_field('show_status_'. $nextshow);
						$statusAll = get_field("show_status");
						
						if($status1){
							$status = $status1;
						}
						else {
							$status = $statusAll;
						}
						
						echo '<div class="show_status">'. $status .'</div>';
						
						echo '</div>';
					}
				} else {
					// no posts found
				}
				
				// Restore original Post Data
				wp_reset_postdata();
				
			?>

			</div><!-- end of .widget-wrapper -->
		<?php endif; //end of home-featured-right ?>

		<?php responsive_widgets_end(); // after widgets hook ?>
	</div><!-- end of #widgets -->
<?php responsive_widgets_after(); // after widgets container hook ?>