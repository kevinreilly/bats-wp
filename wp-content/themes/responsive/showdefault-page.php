<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Show Default Page Template
 *
Template Name:  Show Default
 *
 * @file           showdefault-page.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/showdefault-page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>

<div id="content" class="grid col-700 school">

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
<div id="about-sidebar" class="grid col-220 fit">
<?php get_sidebar(get_field('sidebar')); ?>
</div>
<?php get_footer(); ?>
