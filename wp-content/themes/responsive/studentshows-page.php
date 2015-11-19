<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Student Shows Page Template
 *
Template Name:  Student Shows
 *
 * @file           studentshows-page.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/studentshows-page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>

<div id="content" class="grid col-700">

	<?php get_template_part( 'loop-header' ); ?>

	<?php if( have_posts() ) : ?>

		<?php while( have_posts() ) : the_post(); ?>

			<?php responsive_entry_before(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php responsive_entry_top(); ?>

				<div class="post-entry">
					<?php the_content(); ?>
				</div>
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
    
    <?php
	$args = array(
		'post_type' => 'sunday',
		'meta_key' => 'date_1',
		'orderby' => 'meta_value_num',
		'order' => 'ASC'
	);
	
	$the_query = new WP_Query($args);
	?>
	
	<?php if ($the_query->have_posts()): ?>
		
		<div id="student-shows-schedule" class="banner"><h3>Student Show Schedule</h3></div>
        <div class="student-shows-list">
        
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			
            <div class="student-show-month">
            	<?php
					$count = 1;
					for($x=1;$x<16;$x++){
						$exists = get_field('name_'. $x);
						if($exists != ''){
							$count++;
						}
						else {}
					}
				
					for($i=1;$i<$count;$i++){
						$today = date('Ymd');
						$show_date = get_field('date_'. $i);
						if($show_date < $today){
							$display_class = ' none';
						}
						else {
							$display_class = '';
						}
						
						echo '<div class="student-show'. $display_class .'">';
						
						$date = DateTime::createFromFormat('Ymd', get_field('date_'. $i));
						echo '<p class="student-show-date">'. $date->format('l, M j') .'</p>';
						
						$name = get_field('name_'. $i);
						echo '<h2 class="student-show-title">'. $name .'</h2>';
						
						$time = get_field('time_'. $i);
						echo '<p class="student-show-time">'. $time .'</p>';
						
						$desc = get_field('desc_'. $i);
						echo '<p class="student-show-desc">'. $desc .'</p>';
						
						echo '</div>';
					}
				?>
            </div>
            <?php wp_reset_query(); ?>
            
        <?php endwhile; ?>
        
        </div>
    <?php endif; ?>
    
	
</div><!-- end of #content -->
<div id="about-sidebar" class="grid col-220 fit">
<?php get_sidebar(get_field('sidebar')); ?>
</div>
<?php get_footer(); ?>
