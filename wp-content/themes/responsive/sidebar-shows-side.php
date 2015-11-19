<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Shows Side Template
 *
 *
 * @file           sidebar-shows-side.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar-shows-side.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>
<?php responsive_widgets_before(); // above widgets container hook ?>
	<div id="widgets">
    <div class="shows-menu">
    <ul>
    	<?php
			global $post;
			$slug = get_post( $post )->post_name;
		?>
        <li class="<?php $name = 'shows'; if ($name == $slug){ echo 'active'; } ?>"><a href="<?php echo $name; ?>">Shows &amp; Sch edule</a></li>
        <ul>
            <?php
                $url = get_permalink();
                
                $args = array (
                    'post_type' => array('friday', 'saturday', 'special'),
                    'posts_per_page' => -1,
                    
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
    </ul>
    </div>
		<?php responsive_widgets(); // above widgets hook ?>
		<?php if( !dynamic_sidebar( 'shows-side' ) ) : ?>
			<div class="widget-wrapper">

			</div><!-- end of .widget-wrapper -->
		<?php endif; //end of shows-featured-side ?>
		<?php responsive_widgets_end(); // after widgets hook ?>
	</div><!-- end of #widgets -->
<?php responsive_widgets_after(); // after widgets container hook ?>