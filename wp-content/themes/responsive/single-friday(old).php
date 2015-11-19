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
                    
                    <?php echo '<div class="show_status">'. get_field('show_status') .'</div>'; ?>
                    
                    <?php
					$show_type = get_field('show_type');
					if ($show_type == 'shortform'){
						echo '<img class="show_type" src="..\..\wp-content/themes/responsive/core/images/shortform.png" />&nbsp;<span>Shortform</span>';
					}
					else {
						echo '<img class="show_type" src="..\..\wp-content/themes/responsive/core/images/longform.png" />&nbsp;<span>Longform</span>';
					}
					?>
                    
					<?php echo  '<br /><br /><span class="show-content">'. get_the_content() .'</span>'; ?>
                    
                    <?php echo '<div class="clear"></div><div class="show-details"><i>Approx. running time: '. get_field('run_time') .'</i><br />'; ?>
                    <?php echo 'Directed by: '. get_field('director') .'</div>'; ?>
                    
                    <?php echo '<a class="buy-button" href="'. get_field("tickets_url") .'"><img src="..\..\wp-content/themes/responsive/core/images/buy-tickets-button-big.png" /></a>';
					?>

				</div>
                <div class="clear"></div>
                <div class="banner">
                	<h3>Upcoming Shows</h3>
                </div>
                <?php
				echo '<div class="show-date">';
				$today = date('Ymd');
				$post_type = get_post_type();
				$post_type = ucwords($post_type);
			
				$date1 = get_field('date_1');
				$date2 = get_field('date_2');
				$date3 = get_field('date_3');
				$date4 = get_field('date_4');
				$date5 = get_field('date_5');
				
				// global $nextshow;
					
				if ($today <= $date1){
					$m = substr($date1, 4, 2);
					$d = substr($date1, 6, 2);
					$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
					$m = $months[$m-1];
					$date1 = $post_type . ', ' . $m . ' ' . $d;
					echo $date1;
					$nextshow = '1';
					
					echo '</div><div class="show-actors">';
				
				$actors = 'actors_'. $nextshow;
				
				$post_objects = get_field($actors);

				if( $post_objects ): ?>
					<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
						<?php setup_postdata($post); ?>
							<div class="actor-image">
								<?php the_post_thumbnail(); echo '<span>'. get_the_title() .'</span>'; ?>
							</div>
					<?php endforeach; ?>
					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif;
					
					$m = substr($date2, 4, 2);
					$d = substr($date2, 6, 2);
					$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
					$m = $months[$m-1];
					$date2 = $post_type . ', ' . $m . ' ' . $d;
					echo $date2;
					$nextshow = '2';
					
					echo '</div><div class="show-actors">';
				
				$actors = 'actors_'. $nextshow;
				
				$post_objects = get_field($actors);

				if( $post_objects ): ?>
					<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
						<?php setup_postdata($post); ?>
							<div class="actor-image">
								<?php the_post_thumbnail(); echo '<span>'. get_the_title() .'</span>'; ?>
							</div>
					<?php endforeach; ?>
					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif;
					
					$m = substr($date3, 4, 2);
					$d = substr($date3, 6, 2);
					$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
					$m = $months[$m-1];
					$date3 = $post_type . ', ' . $m . ' ' . $d;
					echo $date3;
					$nextshow = '3';
					
					echo '</div><div class="show-actors">';
				
				$actors = 'actors_'. $nextshow;
				
				$post_objects = get_field($actors);

				if( $post_objects ): ?>
					<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
						<?php setup_postdata($post); ?>
							<div class="actor-image">
								<?php the_post_thumbnail(); echo '<span>'. get_the_title() .'</span>'; ?>
							</div>
					<?php endforeach; ?>
					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif;
					
					$m = substr($date4, 4, 2);
					$d = substr($date4, 6, 2);
					$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
					$m = $months[$m-1];
					$date4 = $post_type . ', ' . $m . ' ' . $d;
					echo $date4;
					$nextshow = '4';
					
					echo '</div><div class="show-actors">';
				
				$actors = 'actors_'. $nextshow;
				
				$post_objects = get_field($actors);

				if( $post_objects ): ?>
					<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
						<?php setup_postdata($post); ?>
							<div class="actor-image">
								<?php the_post_thumbnail(); echo '<span>'. get_the_title() .'</span>'; ?>
							</div>
					<?php endforeach; ?>
					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif;
					
					$m = substr($date5, 4, 2);
					$d = substr($date5, 6, 2);
					$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
					$m = $months[$m-1];
					$date5 = $post_type . ', ' . $m . ' ' . $d;
					echo $date5;
					$nextshow = '5';
					
					echo '</div><div class="show-actors">';
				
				$actors = 'actors_'. $nextshow;
				
				$post_objects = get_field($actors);

				if( $post_objects ): ?>
					<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
						<?php setup_postdata($post); ?>
							<div class="actor-image">
								<?php the_post_thumbnail(); echo '<span>'. get_the_title() .'</span>'; ?>
							</div>
					<?php endforeach; ?>
					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif;
				}
				else if ($today <= $date2){
					$m = substr($date2, 4, 2);
					$d = substr($date2, 6, 2);
					$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
					$m = $months[$m-1];
					$date2 = $post_type . ', ' . $m . ' ' . $d;
					echo $date2;
					$nextshow = '2';
					
					echo '</div><div class="show-actors">';
				
				$actors = 'actors_'. $nextshow;
				
				$post_objects = get_field($actors);

				if( $post_objects ): ?>
					<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
						<?php setup_postdata($post); ?>
							<div class="actor-image">
								<?php the_post_thumbnail(); echo '<span>'. get_the_title() .'</span>'; ?>
							</div>
					<?php endforeach; ?>
					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif;
					
					$m = substr($date3, 4, 2);
					$d = substr($date3, 6, 2);
					$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
					$m = $months[$m-1];
					$date3 = $post_type . ', ' . $m . ' ' . $d;
					echo $date3;
					$nextshow = '3';
					
					echo '</div><div class="show-actors">';
				
				$actors = 'actors_'. $nextshow;
				
				$post_objects = get_field($actors);

				if( $post_objects ): ?>
					<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
						<?php setup_postdata($post); ?>
							<div class="actor-image">
								<?php the_post_thumbnail(); echo '<span>'. get_the_title() .'</span>'; ?>
							</div>
					<?php endforeach; ?>
					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif;
					
					$m = substr($date4, 4, 2);
					$d = substr($date4, 6, 2);
					$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
					$m = $months[$m-1];
					$date4 = $post_type . ', ' . $m . ' ' . $d;
					echo $date4;
					$nextshow = '4';
					
					echo '</div><div class="show-actors">';
				
				$actors = 'actors_'. $nextshow;
				
				$post_objects = get_field($actors);

				if( $post_objects ): ?>
					<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
						<?php setup_postdata($post); ?>
							<div class="actor-image">
								<?php the_post_thumbnail(); echo '<span>'. get_the_title() .'</span>'; ?>
							</div>
					<?php endforeach; ?>
					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif;
					
					$m = substr($date5, 4, 2);
					$d = substr($date5, 6, 2);
					$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
					$m = $months[$m-1];
					$date5 = $post_type . ', ' . $m . ' ' . $d;
					echo $date5;
					$nextshow = '5';
					
					echo '</div><div class="show-actors">';
				
				$actors = 'actors_'. $nextshow;
				
				$post_objects = get_field($actors);

				if( $post_objects ): ?>
					<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
						<?php setup_postdata($post); ?>
							<div class="actor-image">
								<?php the_post_thumbnail(); echo '<span>'. get_the_title() .'</span>'; ?>
							</div>
					<?php endforeach; ?>
					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif;	
				}
				else if ($today <= $date3){
					$m = substr($date3, 4, 2);
					$d = substr($date3, 6, 2);
					$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
					$m = $months[$m-1];
					$date3 = $post_type . ', ' . $m . ' ' . $d;
					echo $date3;
					$nextshow = '3';
					
					echo '</div><div class="show-actors">';
				
				$actors = 'actors_'. $nextshow;
				
				$post_objects = get_field($actors);

				if( $post_objects ): ?>
					<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
						<?php setup_postdata($post); ?>
							<div class="actor-image">
								<?php the_post_thumbnail(); echo '<span>'. get_the_title() .'</span>'; ?>
							</div>
					<?php endforeach; ?>
					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif;
					
					$m = substr($date4, 4, 2);
					$d = substr($date4, 6, 2);
					$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
					$m = $months[$m-1];
					$date4 = $post_type . ', ' . $m . ' ' . $d;
					echo $date4;
					$nextshow = '4';
					
					echo '</div><div class="show-actors">';
				
				$actors = 'actors_'. $nextshow;
				
				$post_objects = get_field($actors);

				if( $post_objects ): ?>
					<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
						<?php setup_postdata($post); ?>
							<div class="actor-image">
								<?php the_post_thumbnail(); echo '<span>'. get_the_title() .'</span>'; ?>
							</div>
					<?php endforeach; ?>
					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif;
					
					$m = substr($date5, 4, 2);
					$d = substr($date5, 6, 2);
					$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
					$m = $months[$m-1];
					$date5 = $post_type . ', ' . $m . ' ' . $d;
					echo $date5;
					$nextshow = '5';
					
					echo '</div><div class="show-actors">';
				
				$actors = 'actors_'. $nextshow;
				
				$post_objects = get_field($actors);

				if( $post_objects ): ?>
					<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
						<?php setup_postdata($post); ?>
							<div class="actor-image">
								<?php the_post_thumbnail(); echo '<span>'. get_the_title() .'</span>'; ?>
							</div>
					<?php endforeach; ?>
					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif;
				}
				else if ($today <= $date4){
					$m = substr($date4, 4, 2);
					$d = substr($date4, 6, 2);
					$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
					$m = $months[$m-1];
					$date4 = $post_type . ', ' . $m . ' ' . $d;
					echo $date4;
					$nextshow = '4';
					
					echo '</div><div class="show-actors">';
				
				$actors = 'actors_'. $nextshow;
				
				$post_objects = get_field($actors);

				if( $post_objects ): ?>
					<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
						<?php setup_postdata($post); ?>
							<div class="actor-image">
								<?php the_post_thumbnail(); echo '<span>'. get_the_title() .'</span>'; ?>
							</div>
					<?php endforeach; ?>
					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif;
					
					$m = substr($date5, 4, 2);
					$d = substr($date5, 6, 2);
					$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
					$m = $months[$m-1];
					$date5 = $post_type . ', ' . $m . ' ' . $d;
					echo $date5;
					$nextshow = '5';
					
					echo '</div><div class="show-actors">';
				
				$actors = 'actors_'. $nextshow;
				
				$post_objects = get_field($actors);

				if( $post_objects ): ?>
					<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
						<?php setup_postdata($post); ?>
							<div class="actor-image">
								<?php the_post_thumbnail(); echo '<span>'. get_the_title() .'</span>'; ?>
							</div>
					<?php endforeach; ?>
					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif;
				}
				else if ($today <= $date5){
					$m = substr($date5, 4, 2);
					$d = substr($date5, 6, 2);
					$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
					$m = $months[$m-1];
					$date5 = $post_type . ', ' . $m . ' ' . $d;
					echo $date5;
					$nextshow = '5';
					
					echo '</div><div class="show-actors">';
				
				$actors = 'actors_'. $nextshow;
				
				$post_objects = get_field($actors);

				if( $post_objects ): ?>
					<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
						<?php setup_postdata($post); ?>
							<div class="actor-image">
								<?php the_post_thumbnail(); echo '<span>'. get_the_title() .'</span>'; ?>
							</div>
					<?php endforeach; ?>
					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif;
				}
				echo '</div>';
											
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
	<?php get_sidebar('shows-side'); ?>
</div>
<?php get_footer(); ?>
