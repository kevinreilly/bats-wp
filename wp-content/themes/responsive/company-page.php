<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Company Members Page Template
 *
Template Name:  Company Members
 *
 * @file           company-page.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/company-page.php
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
								'value' => 'player',
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
                        <center><p><a href="<?php the_permalink(); ?>"><?php the_title(); ?><br /><span style="font-style:italic;"><?php echo get_field('extra_text'); ?></span></a></p></center>
                        <?php
						echo '</div>';
					endwhile; wp_reset_postdata();
				?>
                </div><div class="clear"></div>

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
