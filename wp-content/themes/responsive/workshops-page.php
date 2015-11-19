<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Workshops Page Template
 *
Template Name:  Workshops
 *
 * @file           workshops-page.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/workshops-page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>

<div id="content" class="grid col-700 workshops">

	<?php get_template_part( 'loop-header' ); ?>

	<?php if( have_posts() ) : ?>

		<?php while( have_posts() ) : the_post(); ?>

			<?php responsive_entry_before(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php responsive_entry_top(); ?>

				<div class="post-entry">
                	<?php the_content(); ?>
                    
                    <?php if( have_rows('workshops') ): ?>
					<div class="accordion">
                    	<div class="grid col-940">
							<?php while( have_rows('workshops') ): the_row(); 
 
								$question = get_sub_field('title');
								$answer = get_sub_field('description');
							?>
                            <div class="acc-block">
                                <div class="acc-title">
                                    <?php echo '<a class="more-link">'. $question .'</a>'; ?>
                                </div>
                                <div class="acc-content">
                                    <?php echo $answer; ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <?php echo get_field('title2'); ?>
                    
                    <?php if( have_rows('workshops2') ): ?>
					<div class="accordion">
                    	<div class="grid col-940">
							<?php while( have_rows('workshops2') ): the_row(); 
 
								$question = get_sub_field('title');
								$answer = get_sub_field('description');
							?>
                            <div class="acc-block">
                                <div class="acc-title">
                                    <?php echo '<a class="more-link">'. $question .'</a>'; ?>
                                </div>
                                <div class="acc-content">
                                    <?php echo $answer; ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <?php echo get_field('bottom_content'); ?>
                    
				</div>
                
                <script type="text/javascript">
					(function($) {
						
					  var allPanels = $('.accordion > .col-940 > .acc-block > .acc-content').hide();
						
					  $('.accordion > .col-940 > .acc-block > .acc-title > a').click(function() {
						  allPanels.slideUp();
						  $('.more-link').slideDown();
						  $('.more-link').css('background','url(http://bats.wpengine.com/wp-content/themes/responsive/core/images/plus.png) top left no-repeat');
						  $(this).parent().next().slideDown();
						  //$(this).children('.more-link').slideUp();
						  $(this).css('background','url(http://bats.wpengine.com/wp-content/themes/responsive/core/images/minus.png) top left no-repeat');
						  
						return false;
					  });
					
					})(jQuery);
				</script>
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
