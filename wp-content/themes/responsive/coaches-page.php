<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Coaches Page Template
 *
Template Name:  Coaches
 *
 * @file           coaches-page.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/coaches-page.php
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
                
                <div class="grid col-940 actor-grid">
                <?php
	                $args = array(
						'post_type' => 'actors',
						'posts_per_page' => 50,
						'meta_query' => array(
							'relation' => 'OR',
							array(
								'key' => 'position',
								'value' => 'coach',
								'compare' => '='
							),
							array(
								'key' => 'position',
								'value' => 'both',
								'compare' => '='
							)
						)
					);
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
						echo '<div class="actor-image">';
						$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
						<a href="<?php the_permalink(); ?>"><img src="<?php echo $url; ?>" /></a>
                        <center><p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p></center>
                        <?php
						echo '</div>';
					endwhile; wp_reset_postdata();
				?>
                </div>

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
