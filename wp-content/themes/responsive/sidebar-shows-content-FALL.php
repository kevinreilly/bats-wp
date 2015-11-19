<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Shows Content Template
 *
 *
 * @file           sidebar.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>
<?php responsive_widgets_before(); // above widgets container hook ?>
	
	<div id="widgets" class="grid col-940">
    	<div class="banner">
	        <h3>Now Playing</h3>
	    </div>
		<?php responsive_widgets(); // above widgets hook ?>

		<?php if( !dynamic_sidebar( 'shows-content' ) ) : ?>
			<div class="widget-wrapper">

				<?php
					$today = date('Ymd');
					
					$args = array (
						'post_type'              => array('friday','saturday','sunday','special','sport'),
						'meta_query'             => array(
							array(
								'key'       => 'publish_area',
								'value'     => 'left',
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
							
							$post_id = get_the_ID();
							
							$post_type = get_post_type();
							if ($post_type == 'special'){
								$post_type = get_field('day');
							}
							else if ($post_type == 'sport'){
								$post_type = get_field('day');
							}
							else{}
							$post_type = ucwords($post_type);
													
							echo '<div class="now-playing">';
							echo '<a href="'. get_permalink() .'">';
							the_post_thumbnail();
							echo '</a>';
							
							echo '<div class="show-details">';
							
							echo '<span class="post-type">This '. $post_type .'</span>';
							
							echo '<div class="now-playing-title"><a href="'. get_permalink() .'">'. get_the_title() . '</a></div>';
							
							echo the_field('show_description');
							
							echo '<br />';
							
							next_show();
							
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
							
							echo '<div class="show-actors">';
							
							$actors = 'actors_'. $nextshow;
							
							$post_objects = get_field($actors);
 
						    if( $post_objects ): ?>
						        <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
						            <?php setup_postdata($post); ?>
                                    	<div class="actor-image">
						                	<?php the_post_thumbnail(); ?>
                                        </div>
						        <?php endforeach; ?>
						        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						    <?php endif;
							
							echo '</div><div class="clear"></div>';
							
							$show_type = get_field('show_type', $post_id);

							if ($show_type == 'shortform'){
								echo '<a class="inline inline-left" href="#shortform"><img class="show_type" src="http://bats.wpengine.com/wp-content/themes/responsive/core/images/shortform.png" /></a>';
							}
							else {
								echo '<a class="inline inline-left" href="#longform"><img class="show_type" src="http://bats.wpengine.com/wp-content/themes/responsive/core/images/longform.png" /></a>';
							}
							
							echo '<a class="show-more" href="'. get_permalink($post_id) .'">Tell me more&nbsp;&raquo;</a>';
							
							echo '<a class="buy-button" href="'. get_field("tickets_url", $post_id) .'" target="_blank"><img src="http://bats.wpengine.com/wp-content/themes/responsive/core/images/buy-tickets-button.png" /></a>';
							
							echo '</div><div class="clear"></div></div>';
						}
					} else {
						// no posts found
					}
					
					// Restore original Post Data
					wp_reset_postdata();
					
				?>
                
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
							
							$post_id = get_the_ID();
							
							$post_type = get_post_type();
							if ($post_type == 'special'){
								$post_type = get_field('day');
							}
							else if ($post_type == 'sport'){
								$post_type = get_field('day');
							}
							else{}
							$post_type = ucwords($post_type);
													
							echo '<div class="now-playing">';
							echo '<a href="'. get_permalink() .'">';
							the_post_thumbnail();
							echo '</a>';
							
							echo '<div class="show-details">';
							
							echo '<span class="post-type">This '. $post_type .'</span>';
							
							echo '<div class="now-playing-title"><a href="'. get_permalink() .'">'. get_the_title() . '</a></div>';
							
							echo the_field('show_description');
							
							echo '<br />';
							
							next_show();
							
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
							
							echo '<div class="show-actors">';
							
							$actors = 'actors_'. $nextshow;
							
							$post_objects = get_field($actors);
 
						    if( $post_objects ): ?>
						        <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
						            <?php setup_postdata($post); ?>
                                    	<div class="actor-image">
						                	<?php the_post_thumbnail(); ?>
                                        </div>
						        <?php endforeach; ?>
						        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						    <?php endif;
							
							echo '</div><div class="clear"></div>';
							
							$show_type = get_field('show_type', $post_id);

							if ($show_type == 'shortform'){
								echo '<a class="inline inline-left" href="#shortform"><img class="show_type" src="http://bats.wpengine.com/wp-content/themes/responsive/core/images/shortform.png" /></a>';
							}
							else {
								echo '<a class="inline inline-left" href="#longform"><img class="show_type" src="http://bats.wpengine.com/wp-content/themes/responsive/core/images/longform.png" /></a>';
							}
							
							echo '<a class="show-more" href="'. get_permalink($post_id) .'">Tell me more&nbsp;&raquo;</a>';
							
							echo '<a class="buy-button" href="'. get_field("tickets_url", $post_id) .'" target="_blank"><img src="http://bats.wpengine.com/wp-content/themes/responsive/core/images/buy-tickets-button.png" /></a>';
							
							echo '</div><div class="clear"></div></div><div class="clear"></div>';
						}
					} else {
						// no posts found
					}
					
					// Restore original Post Data
					wp_reset_postdata();
					
				?>
                
                <div class="student-shows">
                	<div class="student-content">
	                	<h3>This Week's <a href="http://bats.wpengine.com/shows/student-shows">Student Shows</a></h3>
	                    <p>See the future of improv &mdash; <a href="http://bats.wpengine.com/school">BATS School</a> students come out to play!</p>
	                    <a href="http://bats.wpengine.com/shows/student-shows">All student shows&nbsp;&raquo;</a>
                    </div>
                    <?php
					$today = date('Ymd');
					
					$args = array (
						'post_type' => array('sunday'),
						'posts_per_page' => 1,
						'meta_key' => 'date_1',
						'orderby' => 'meta_value_num',
						'order' => 'DESC'
					);
					
					// The Query
					$query = new WP_Query( $args );
					
					// The Loop
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
																					
							echo '<div class="student-list">';
																																																
							$today = date('Ymd');
							for($i=1;$i<7;$i++){
								$date = get_field('date_'. $i);
								
								if($date >= $today){
									
									$date = DateTime::createFromFormat('Ymd', get_field('date_'. $i));
									echo $date->format('l, M j, ');
									echo get_field('time_'. $i);
									
									break;
								}
								
								else{}
							}
																																			
							echo '</div><div class="clear"></div>';
						}
					}
					else {
						// no posts found
					}
					
					// Restore original Post Data
					wp_reset_postdata();
					
				?>
                </div>
                
                
                <?php // monthBanner('0'); ?>
                
                <img style="margin: 0 0 30px -4.5%;" src="http://www.improv.org/wp-content/uploads/2014/07/BATS-SIF.jpg" />
                
                <div class="currentMonth">
                
                <?php currentMonth('friday') ?>
        
                <?php currentMonth('saturday') ?>
                
                <?php currentMonth('special') ?>
                
                <?php currentMonth('sport') ?>
            
                                
                <?php currentStudent(); ?>
                
                
                </div>
                <div class="clear"></div>
                                                
                
                <?php monthBanner('1'); ?>
                
                <div class="nextMonth">
                <?php nextMonth('friday') ?>
        
                <?php nextMonth('saturday') ?>
            
                <?php nextMonth('special') ?>
                
                <?php nextMonth('sport') ?>
                
                
                <?php randomQuote2(); ?>
                
                
                </div>
                
                <div class="clear"></div>
                
                <?php monthBanner('2'); ?>
                
                <div class="nextMonth">
                <?php laterMonth('friday','2') ?>
                <?php laterMonth('saturday','2') ?>
                <?php laterMonth('special','2') ?>
                <?php laterMonth('sport','2') ?>
                </div>
                <div class="clear"></div>
                
                <?php monthBanner('3'); ?>
                
                <div class="nextMonth">
                <?php laterMonth('friday','3') ?>
                <?php laterMonth('saturday','3') ?>
                <?php laterMonth('special','3') ?>
                <?php laterMonth('sport','3') ?>
                </div>
                <div class="clear"></div>
                
                <?php monthBanner('4'); ?>
                
                <div class="nextMonth">
                <?php laterMonth('friday','4') ?>
                <?php laterMonth('saturday','4') ?>
                <?php laterMonth('special','4') ?>
                <?php laterMonth('sport','4') ?>
                </div>
                <div class="clear"></div>
                
                <?php /*
					for($i=2;$i<3;$i++){
						
						$today = date('Ymd');
						$date = date_create($today);
						date_add($date, date_interval_create_from_date_string($i.' months'));
						$date = date_format($date, 'Ymd');
						$date = DateTime::createFromFormat('Ymd', $date);
						$month = $date->format('m');
						$year = $date->format('Y');
						
						$startDate = $year . $month .'01';
						$endDate = $year . $month .'31';
						
						$args = array(
							'post_type' => array('friday','saturday','special','sport'),
							'posts_per_page' => 10,
							$meta_query = array(
								array(
									'key' => 'date_1',
									'value' => array($startDate, $endDate),
									'type' => 'numeric',
									'compare' => 'BETWEEN'
								)
							)
						);
						
						$the_query = new WP_Query( $args );
	
						if( $the_query->have_posts() ){
							
							echo '<div class="laterMonth">';
							$m = $date->format('F');
							$y = $date->format('Y');
							echo '<div class="banner">';
							echo '<h3>'. $m .' '. $y .'</h3>';
							echo '</div>';
							
							while ( $the_query->have_posts() ){
								
								
								
							}
							echo '</div>';
						}
					} */
				?>
                                
                
                <div class="clear"></div>
                
                <?php //monthBanner('3'); ?>
                
                
                <div class="clear"></div>
                               
                
                
                
                

			</div><!-- end of .widget-wrapper -->
		<?php endif; //end of shows-content-sidebar ?>

		<?php responsive_widgets_end(); // after widgets hook ?>
	</div><!-- end of #widgets -->
    
    
    
<?php responsive_widgets_after(); // after widgets container hook ?>