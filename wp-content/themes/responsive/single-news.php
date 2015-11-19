<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Single Actor Template
 *
 *
 * @file           single-actor.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/single-actor.php
 * @link           http://codex.wordpress.org/Theme_Development#Single_Post_.28single.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>

<div id="content" class="grid col-700 <?php echo implode( ' ', responsive_get_content_classes() ); ?>">

	<?php get_template_part( 'loop-header' ); ?>

	<?php if( have_posts() ) : ?>

		<?php while( have_posts() ) : the_post(); ?>

			<?php responsive_entry_before(); ?>
			<div id="post-<?php $current_id = get_the_ID(); echo $current_id; ?>" <?php post_class(); ?>>
				<?php responsive_entry_top(); ?>
                
                <div class="post-entry">
                	<?php $imageurl = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>
					<?php if($imageurl){ ?>
                        <img style="float:left;margin:0 2% 7px 0;" src="<?php echo $imageurl ?>" />
                    <?php } ?>
                	<h3><?php echo get_the_title() ?></h3>
                    <p><?php echo get_field('content'); ?></p>
				</div>
				<!-- end of .post-entry -->

			</div>
			<?php responsive_entry_after(); ?>

		<?php wp_reset_postdata();
		endwhile;

		get_template_part( 'loop-nav' );

	else :

		get_template_part( 'loop-no-posts' );

	endif;
	?>

</div><!-- end of #content -->

<div id="shows-sidebar" class="grid col-220 fit">
	<?php get_sidebar(get_field('sidebar')); ?>
    
    <?php
	$today = date('Ymd');
	
	$posts = get_posts(array(
		'post_type'		=> 'friday',
	));
	 
	if($posts){
		foreach($posts as $post){
			$actors = get_field('actors_1');
			
			if($actors){
				foreach($actors as $actor){
					echo $actors->id;
					
				}
			}
		}
	}
	?>
    
</div>
<?php get_footer(); ?>
