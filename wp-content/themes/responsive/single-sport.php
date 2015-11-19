<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Single Show Template
 *
 *
 * @file           single-show.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/single-show.php
 * @link           http://codex.wordpress.org/Theme_Development#Single_Post_.28single.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>

<div id="content" class="grid col-700 <?php echo implode( ' ', responsive_get_content_classes() ); ?>">

	<?php get_template_part( 'loop-header' ); ?>

	<?php if( have_posts() ) : ?>

		<?php while( have_posts() ) : the_post(); ?>

			<?php responsive_entry_before(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php responsive_entry_top(); ?>


				<div class="post-entry">
                	<?php echo get_the_post_thumbnail(); ?>
                	<?php echo '<h2 class="post-title">'. get_the_title() .'</h2>'; ?>
                    
                    <?php echo '<div class="show_status">'. get_field('show_description') .'</div>'; ?>
                    
                    <?php
					$show_type = get_field('show_type');
					if ($show_type == 'shortform'){
						echo '<a class="inline" href="#shortform"><img class="show_type" src="http://bats.wpengine.com/wp-content/themes/responsive/core/images/shortform.png" />&nbsp;<span>Shortform</span></a>';
					}
					else {
						echo '<a class="inline" href="#longform"><img class="show_type" src="http://bats.wpengine.com/wp-content/themes/responsive/core/images/longform.png" />&nbsp;<span>Longform</span></a>';
					}
					?>
                    
					<?php echo  '<br /><br /><span class="show-content">'. get_the_content() .'</span>'; ?>
                    
                    <?php echo '<div class="clear"></div><div class="show-details"><i>Approx. running time: '. get_field('run_time') .'</i><br />'; ?>
                    <?php echo 'Directed by: '. get_field('director') .'</div>'; ?>
                    
                    <?php echo '<a class="buy-button" href="'. get_field("tickets_url") .'" target="_blank"><img src="http://bats.wpengine.com/wp-content/themes/responsive/core/images/buy-tickets-button-big.png" /></a>';
					?>
                    
                    <?php echo '<div class="clear"></div><br /><a href="#teams">See the Teams and Standings &raquo;</a>'; ?>

				</div>
                <div class="clear"></div>
                <div class="banner">
                	<h3>Upcoming Shows</h3>
                </div>
                    	<?php
	                	$today = date('Ymd');
                        $post_type = get_field('day');
                        $post_type = ucwords($post_type);
                    
                        $date1 = get_field('date_1');
                        $date2 = get_field('date_2');
                        $date3 = get_field('date_3');
                        $date4 = get_field('date_4');
                        $date5 = get_field('date_5');
						$date6 = get_field('date_6');
						$date7 = get_field('date_7');
						$date8 = get_field('date_8');
						$date9 = get_field('date_9');
						$date10 = get_field('date_10');
						$date11 = get_field('date_11');
						$date12 = get_field('date_12');
						$date13 = get_field('date_13');
						
						$dates = array(1,2,3,4,5,6,7,8,9,10,11,12,13);
						
						foreach ($dates as $daten){
							$datev = get_field('date_'. $daten);
							if ($datev >= $today){
								$y = substr($datev, 0, 4);
								$m = substr($datev, 4, 2);
								$d = substr($datev, 6, 2);
								$d1 = substr($d, 0, 1);
								$d2 = substr($d, 1, 1);
								if($d1 == '0'){
									$d = $d2;
								}
								
								$m1 = substr($m, 0, 1);
								$m2 = substr($m, 0, 2);
								if ($m1 == '0'){
									$m = $m2;
								}
								$months = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
								$m = $months[$m-1];
								
								$time = get_field('time_'. $daten);
								$newdate = $post_type .', '. $m .' '. $d .', '. $y .'<br />'. $time;
								
								echo '<div class="grid col-940 upcoming-show"><div class="grid col-620">';
								echo '<div style="float:left;width:70%;"><h3>'. $newdate .'</h3>';
								the_field('details_'. $daten);
								echo '</div><a class="buy-button" href="'. get_field("tickets_url") .'" target="_blank"><img src="http://bats.wpengine.com/wp-content/themes/responsive/core/images/buy-tickets-button.png" /></a>';
								echo '</div><div class="grid col-300 fit">';
								
								$team1 = 'team_'. $daten .'_1';
								$team1 = get_field($team1);
								$team1 = get_field('team_'. $team1);
								
								$place1 = 'place_'. $daten;
								$place1 = get_field($place1);
								
								echo '<p style="margin:0 0 10px 0;"><strong>'. $team1 .'</strong></p>';
								
								$actors = 'actors_'. $daten .'_1';
							
								$post_objects = get_field($actors);
	 
							    if( $post_objects ): ?>
							        <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
							            <?php setup_postdata($post); ?>
	                                    	<div class="actor-image">
							                	<?php the_post_thumbnail(); ?>
                                                <?php echo '<a href="'. get_permalink() .'">'. get_the_title() .'</a>'; ?>
	                                        </div>
							        <?php endforeach; ?>
							        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
							    <?php endif;
								
								$team2 = 'team_'. $daten .'_2';
								$team2 = get_field($team2);
								$team2 = get_field('team_'. $team2);
								
								$place2 = 'place_'. $daten;
								$place2 = get_field($place2);
								
								echo '<p style="margin:0 0 10px 0;"><strong>'. $team2 .'</strong></p>';
								
								$actors = 'actors_'. $daten .'_2';
							
								$post_objects = get_field($actors);
	 
							    if( $post_objects ): ?>
							        <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
							            <?php setup_postdata($post); ?>
	                                    	<div class="actor-image">
							                	<?php the_post_thumbnail(); ?>
                                                <?php echo '<a href="'. get_permalink() .'">'. get_the_title() .'</a>'; ?>
	                                        </div>
							        <?php endforeach; ?>
							        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
							    <?php endif;
								
								echo '</div><div class="clear"></div></div><div class="clear"></div>';
							}
						}
						?>
                        <div class="clear"></div>
                        <div id="teams" class="banner">
		                	<h3>The Teams</h3>
		                </div>
                        
                        <?php
                        for($i=1; $i<7; $i++){
							$team = get_field('team_'. $i);
							$place = get_field('place_'. $i);
							$ratio = get_field('ratio_'. $i);
							$score = get_field('score_'. $i);
							
							if($i == 3 || $i == 6){
								$fit = ' fit';
							}
							else {
								$fit = '';
							}
							
							if($team != ''){
								echo '<div class=" grid col-300'. $fit .' team-block team-block-'. $i .'">';
								echo '<div style="margin-bottom:10px;">';
								echo '<p><strong>'. $team .'</strong></p>';
								echo '<p>'. $place .' / '. $ratio .'</p>';
								echo '<p>A.S.S. = '. $score .'</p>';
								echo '</div>';
								
								$actors = 'actors_'. $i;
							
								$post_objects = get_field($actors);
							?>
                            <?php
							    if( $post_objects ): ?>
							        <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
							            <?php setup_postdata($post); ?>
	                                    	<div class="actor-image">
							                	<?php the_post_thumbnail(); ?>
                                                <?php echo '<a href="'. get_permalink() .'">'. get_the_title() .'</a>'; ?>
	                                        </div>
							        <?php endforeach; ?>
							        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
							    <?php endif;
								
								
								echo '</div>';
							}
							else {}
						}
						?>
                        
                        <?php echo '<br /><br /><p style="clear:both;">A.S.S. = Average Score per Scene</p>'; ?>
                        
				<!-- end of .post-entry -->


				<?php responsive_entry_bottom(); ?>
			</div><!-- end of #post-<?php the_ID(); ?> -->
			<?php responsive_entry_after(); ?>

		<?php
		endwhile;

		get_template_part( 'loop-nav' );

	else :

		get_template_part( 'loop-no-posts' );

	endif;
	?>
    
    
    <ul style="display:none;">
            <?php
               $url = get_permalink();
                
			   $today = date('Ymd');
				
               $args = array (
                    'post_type' => array('friday', 'saturday', 'special', 'sport'),
                    'posts_per_page' => -1,
					'meta_key' => 'date_1',
					'orderby' => 'meta_value_num',
					'order' => 'ASC'
                );
                
                // The Query
                $query = new WP_Query( $args );
                
                // The Loop
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        
                        $permalink = get_permalink();
                        if ($url == $permalink){
                            $class ='active';
                        }
                        else { $class = 'inactive'; }
                        
                        echo '<li class="'. $class .'"><a href="'. $permalink .'">'. get_the_title() .'</a></li>';
                        
                    }
                } else {}
                
                // Restore original Post Data
                wp_reset_postdata();
                
            ?>
        </ul>
    

</div><!-- end of #content -->

<div id="shows-sidebar" class="grid col-220 fit">
	<?php get_sidebar(get_field('sidebar')); ?>
</div>
<?php get_footer(); ?>
