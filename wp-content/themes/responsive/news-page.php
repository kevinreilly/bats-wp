<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * News Page Template
 *
Template Name:  News
 *
 * @file           news-page.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/news-page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>

<div id="content" class="grid col-700">

	<?php // get_template_part( 'loop-header' ); ?>

	<?php if( have_posts() ) : ?>

		<?php while( have_posts() ) : the_post(); ?>

			<?php responsive_entry_before(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php responsive_entry_top(); ?>

				<div class="post-entry">
					<?php the_content(); ?>
                    
                    <?php
					$args = array(
						'post_type' => 'news',
						'post_per_page' => 10,
						'meta_key' => 'date',
						'orderby' => 'meta_value_num',
						'order' => 'DESC'
					);
					$the_query = new WP_Query($args);
					if($the_query->have_posts()){ 
						while($the_query->have_posts()){ 
							$the_query->the_post(); ?>
                    			
                                <div class="news-article">
				
									<?php $imageurl = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>
                                    
                                    <?php if($imageurl){ ?>
                                        <img style="float:left;margin:0 2% 7px 0;" src="<?php echo $imageurl ?>" />
                                    <?php } ?>
                                    
                                    <h3><?php echo get_the_title() ?></h3>
                                                        
                                    <p><?php echo get_field('content'); ?></p>
                                    
                                    <hr />
                                
                                </div>
                                
                    <?php }} else {} wp_reset_postdata(); ?>
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
<div id="about-sidebar" class="grid col-220 fit">
<?php get_sidebar(get_field('sidebar')); ?>
</div>
<?php get_footer(); ?>
