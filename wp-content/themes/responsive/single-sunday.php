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
	
    <script type="text/javascript">
		// change this with the menu ID which SHOULD be selected.
		temp = $('#menu-item-10').attr('class');
	
		// adds 'current_page_parent' class to desired menu item.
		temp = "current_page_item " + temp;
		$('#menu-item-10').attr('class',temp);
	</script>

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
                    
                    <?php show_type_text(); ?>
                    
					<?php echo  '<br /><br /><span class="show-content">'. get_the_content() .'</span>'; ?>
                    
                    <?php echo '<div class="clear"></div><div class="show-details"><i>Approx. running time: '. get_field('run_time') .'</i><br />'; ?>
                    <?php echo 'Directed by: '. get_field('director') .'</div>'; ?>
                    
                    <?php echo '<a class="buy-button" href="'. get_field("tickets_url") .'" target="_blank"><img src="http://bats.wpengine.com/wp-content/themes/responsive/core/images/buy-tickets-button-big.png" /></a>';
					?>

				</div>
                <div class="clear"></div>
                <div class="banner">
                	<h3>Upcoming Shows</h3>
                </div>
                    	<?php
	                	$today = date('Ymd');
                        $post_type = get_post_type();
                        $post_type = ucwords($post_type);
                    
                        $date1 = get_field('date_1');
                        $date2 = get_field('date_2');
                        $date3 = get_field('date_3');
                        $date4 = get_field('date_4');
                        $date5 = get_field('date_5');
						
						//$dates = array($date1,$date2,$date3,$date4,$date5);
						$dates = array(1,2,3,4,5);
						
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
								echo '<div style="float:left;"><h3>'. $newdate .'</h3>';
								the_field('details_'. $daten);
								echo '</div><a class="buy-button" href="'. get_field("tickets_url") .'" target="_blank"><img src="http://bats.wpengine.com/wp-content/themes/responsive/core/images/buy-tickets-button.png" /></a>';
								echo '</div><div class="grid col-300 fit">';
								echo '<p style="margin:0 0 10px 0;"><strong>Cast</strong></p>';
								
								$actors = 'actors_'. $daten;
							
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
								
								echo '</div><div class="clear"></div></div>';
							}
						}
						?>
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

</div><!-- end of #content -->

<div id="shows-sidebar" class="grid col-220 fit">
	<?php get_sidebar(get_field('sidebar')); ?>
</div>
<?php get_footer(); ?>
