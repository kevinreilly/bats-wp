<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Schedule Page Template
 *
Template Name:  Schedule
 *
 * @file           schedule-page.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/schedule-page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>

<div id="content" class="grid col-940 schedule">

	<?php // get_template_part( 'loop-header' ); ?>

	<?php if( have_posts() ) : ?>

		<?php while( have_posts() ) : the_post(); ?>

			<?php responsive_entry_before(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php responsive_entry_top(); ?>

				<div class="post-entry">
                
                	<center><h1>Internal Schedule of Shows</h1></center>
                    <br />
					
                    <?php
						$today = date('Ymd');
						
						$args = array(
							'posts_per_page' => -1,
							'post_type' => array('friday','saturday','sunday','special','sport'),
							'meta_query'             => array(
								array(
									'key'       => 'publish_area',
									'value'     => 'left',
								)
							),
							'meta_key' => 'publish_start_date',
							'orderby' => 'meta_value_num',
							'order' => 'ASC'
						);
						
						$posts = get_posts($args);
						if($posts){ ?>
							<table cellpadding="0" cellspacing="0" border="0">
                            	<tr><td colspan="3">Homepage Left</td></tr>
                            	<tr>
                                	<td>Show Title</td><td>Publish Start Date</td><td>Publish End Date</td>
                                </tr>
                            <?php
							foreach($posts as $post) : setup_postdata($post);
								$publish_start_date = get_field('publish_start_date');
								$publish_end_date = get_field('publish_end_date');
								
								if($publish_start_date){
									
									if($publish_end_date >= $today){
										
										$psd = date('M d, Y', strtotime($publish_start_date));
										$ped = date('M d, Y', strtotime($publish_end_date));
										
										echo '<tr><td>'. get_the_title() .'</td><td>'. $psd .'</td><td>'. $ped .'</td>';
									}
								}
							endforeach;
							?>
                            </table>
                            <?php
						}
					?>
                    
                    <?php
						$today = date('Ymd');
						
						$args = array(
							'posts_per_page' => -1,
							'post_type' => array('friday','saturday','sunday','special','sport'),
							'meta_query'             => array(
								array(
									'key'       => 'publish_area',
									'value'     => 'right',
								)
							),
							'meta_key' => 'publish_start_date',
							'orderby' => 'meta_value_num',
							'order' => 'ASC'
						);
						
						$posts = get_posts($args);
						if($posts){ ?>
							<table cellpadding="0" cellspacing="0" border="0">
                            	<tr><td colspan="3">Homepage Right</td></tr>
                            	<tr>
                                	<td>Show Title</td><td>Publish Start Date</td><td>Publish End Date</td>
                                </tr>
                            <?php
							foreach($posts as $post) : setup_postdata($post);
								$publish_start_date = get_field('publish_start_date');
								$publish_end_date = get_field('publish_end_date');
								
								if($publish_start_date){
									
									if($publish_end_date >= $today){
										
										$psd = date('M d, Y', strtotime($publish_start_date));
										$ped = date('M d, Y', strtotime($publish_end_date));
										
										echo '<tr><td>'. get_the_title() .'</td><td>'. $psd .'</td><td>'. $ped .'</td>';
									}
								}
							endforeach;
							?>
                            </table>
                            <?php
						}
					?>
                    
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

</div><!-- end of #content -->

<?php get_footer(); ?>
