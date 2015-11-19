<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Foundation Specialty Page Template
 *
Template Name:  Foundation Specialty
 *
 * @file           foundationspec-page.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/foundationspec-page.php
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
	$today = date('Ymd');
	
	$args = array(
		'post_type' => 'class',
		'meta_query' => array(
			array(
				'key' => 'class_type',
				'value' => 'fs',
				'compare' => '='
			),
			array(
				'key'		=> 'start_date',
				'compare'	=> '>=',
				'value'		=> $today,
			),
		),
		'meta_key' => 'start_date',
		'orderby' => 'meta_value_num',
		'order' => 'ASC'
	);
	
	$the_query = new WP_Query($args);
	?>
	<div class="banner"><h3>Upcoming Foundation Specialty Classes</h3></div>
        <div class="school-classes">
	<?php if ($the_query->have_posts()): ?>
		
		
        
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			
            <div class="school-class">
            	<div class="class-details">
                <div class="class-dets">
            		<?php $class_details = get_the_content(); ?>
                    <?php $class_link = get_field('sign_up_link'); ?>
                
                    
                    <a href="<?php echo $class_link; ?>" target="_blank"><img class="signup-button" src="http://bats.wpengine.com/wp-content/themes/responsive/core/images/signup.png" /></a>
                    <?php echo $class_details; ?>
                    </div>
                    <div class="class-coach">
                        <strong><?php echo get_field('coach_label'); ?></strong>
                        <?php
                            $post_objects = get_field('coach');
    
                            if( $post_objects ): ?>
                                <?php foreach( $post_objects as $post): ?>
                                    <?php setup_postdata($post); ?>
                                        <br />
                                        <div class="coach-image">
                                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                                        </div>
                                        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                <?php endforeach; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            
            
        <?php endwhile; ?>
        <?php else: echo '<p>There are currently no classes scheduled.</p>'; ?>
    <?php endif; ?>
    
            </div>

    <?php wp_reset_query(); ?>
	
</div><!-- end of #content -->
<div id="about-sidebar" class="grid col-220 fit">
<?php get_sidebar(get_field('sidebar')); ?>
</div>
<?php get_footer(); ?>
