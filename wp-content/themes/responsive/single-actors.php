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
                
                <div class="grid col-940 actor-list">
                <h1>Meet the Company and Coaches</h1>
                <?php $position = get_field('position'); ?>
                
                <?php
					if($position == 'player'){
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
					}
					else if($position == 'coach'){
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
					}
					else if($position == 'both'){
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
					}
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
						echo '<div class="actor-image">';
						$id = get_the_ID();
						$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
						<a href="<?php the_permalink(); ?>"><img src="<?php echo $url; ?>" /></a>
                        <?php
						if($id == $current_id){
							echo '<img class="arrow" src="http://bats.wpengine.com/wp-content/themes/responsive/core/images/arrow.png" />';
						}
						else{}
						echo '</div>';
					endwhile;
					wp_reset_postdata();
				?>
                </div>
                
                <div class="post-entry">
                	<div class="grid col-940 headshots">
                    	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                        <img src="<?php echo $url; ?>" />
                        <div class="half-shots">
                            <?php $extra1 = get_field('extra_image_1'); ?>
                            <?php $extra2 = get_field('extra_image_2'); ?>
                            <?php $extra3 = get_field('extra_image_3'); ?>
                            <?php if ($extra1 != ''){
	                    		echo '<img class="first-half" src="'. $extra1 .'" />';
							}
							?>
                            <?php if ($extra2 != ''){
	                    		echo '<img src="'. $extra2 .'" />';
							}
							?>
                        </div>
                        <?php if ($extra3 != ''){
	                    		echo '<img src="'. $extra3 .'" />';
						}
						?>
                    </div>
                	<div class="grid col-460 main-content">
                        <?php $actor_name = get_the_title(); ?>
						<?php the_content(); ?>
                    </div>
                    <div class="grid col-460 fit">
						<?php the_field('right_column'); ?>
                    </div>
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
