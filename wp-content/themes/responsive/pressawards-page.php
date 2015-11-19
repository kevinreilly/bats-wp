<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Press & Awards Page Template
 *
Template Name:  Press & Awards
 *
 * @file           pressawards-page.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/pressawards-page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>

<div id="content" class="grid col-700 press">

	<?php get_template_part( 'loop-header' ); ?>

	<?php if( have_posts() ) : ?>

		<?php while( have_posts() ) : the_post(); ?>

			<?php responsive_entry_before(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php responsive_entry_top(); ?>

				<div class="post-entry">
                	<?php the_content(); ?>
                    
                    <div class="accordion">
                    	<div class="grid col-940">
                            <div class="acc-block">
                                <div class="acc-title">
                                    <?php echo '<a class="more-link plus">MORE AWARDS</a>'; ?>
                                </div>
                                <div class="acc-content" style="padding:0;">
                                    <?php echo get_field('more_awards'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <hr />
                    <h2>Press and Media Coverage</h2>
                    <div class="press-year">2014</div>
                    
                    <?php if( have_rows('2014') ): ?>
					<div class="accordion-one">
                    	<div class="grid col-940">
							<?php while( have_rows('2014') ): the_row(); 
 
								$title = get_sub_field('title');
								$article = get_sub_field('article');
							?>
                            <div class="acc-block">
                                <div class="acc-title">
                                    <?php echo '<a class="more-link">'. $title .'</a>'; ?>
                                </div>
                                <div class="acc-content">
                                    <?php echo $article; ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    
                    
                    <?php if( have_rows('2013') ): ?>
                    <hr />
                    <div class="press-year">2013</div>
					<div class="accordion">
                    	<div class="grid col-940">
							<?php while( have_rows('2013') ): the_row(); 
 
								$title = get_sub_field('title');
								$article = get_sub_field('article');
							?>
                            <div class="acc-block">
                                <div class="acc-title">
                                    <?php echo '<a class="more-link">'. $title .'</a>'; ?>
                                </div>
                                <div class="acc-content">
                                    <?php echo $article; ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    
                    
                    <?php if( have_rows('2012') ): ?>
                    <hr />
                    <div class="press-year">2012</div>
					<div class="accordion">
                    	<div class="grid col-940">
							<?php while( have_rows('2012') ): the_row(); 
 
								$title = get_sub_field('title');
								$article = get_sub_field('article');
							?>
                            <div class="acc-block">
                                <div class="acc-title">
                                    <?php echo '<a class="more-link">'. $title .'</a>'; ?>
                                </div>
                                <div class="acc-content">
                                    <?php echo $article; ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    
                    
                    <?php if( have_rows('2011') ): ?>
                    <hr />
                    <div class="press-year">2011</div>
					<div class="accordion">
                    	<div class="grid col-940">
							<?php while( have_rows('2011') ): the_row(); 
 
								$title = get_sub_field('title');
								$article = get_sub_field('article');
							?>
                            <div class="acc-block">
                                <div class="acc-title">
                                    <?php echo '<a class="more-link">'. $title .'</a>'; ?>
                                </div>
                                <div class="acc-content">
                                    <?php echo $article; ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    
                    
                    <?php if( have_rows('2010') ): ?>
                    <hr />
                    <div class="press-year">2010</div>
					<div class="accordion">
                    	<div class="grid col-940">
							<?php while( have_rows('2010') ): the_row(); 
 
								$title = get_sub_field('title');
								$article = get_sub_field('article');
							?>
                            <div class="acc-block">
                                <div class="acc-title">
                                    <?php echo '<a class="more-link">'. $title .'</a>'; ?>
                                </div>
                                <div class="acc-content">
                                    <?php echo $article; ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    
                    
                    <?php if( have_rows('2009') ): ?>
                    <hr />
                    <div class="press-year">2009</div>
					<div class="accordion">
                    	<div class="grid col-940">
							<?php while( have_rows('2009') ): the_row(); 
 
								$title = get_sub_field('title');
								$article = get_sub_field('article');
							?>
                            <div class="acc-block">
                                <div class="acc-title">
                                    <?php echo '<a class="more-link">'. $title .'</a>'; ?>
                                </div>
                                <div class="acc-content">
                                    <?php echo $article; ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    
                    
                    <?php if( have_rows('2008') ): ?>
                    <hr />
                    <div class="press-year">2008</div>
					<div class="accordion">
                    	<div class="grid col-940">
							<?php while( have_rows('2008') ): the_row(); 
 
								$title = get_sub_field('title');
								$article = get_sub_field('article');
							?>
                            <div class="acc-block">
                                <div class="acc-title">
                                    <?php echo '<a class="more-link">'. $title .'</a>'; ?>
                                </div>
                                <div class="acc-content">
                                    <?php echo $article; ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    
                    
                    <?php if( have_rows('2007') ): ?>
                    <hr />
                    <div class="press-year">2007</div>
					<div class="accordion">
                    	<div class="grid col-940">
							<?php while( have_rows('2007') ): the_row(); 
 
								$title = get_sub_field('title');
								$article = get_sub_field('article');
							?>
                            <div class="acc-block">
                                <div class="acc-title">
                                    <?php echo '<a class="more-link">'. $title .'</a>'; ?>
                                </div>
                                <div class="acc-content">
                                    <?php echo $article; ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    
                    
                    <?php if( have_rows('2006') ): ?>
                    <hr />
                    <div class="press-year">2006</div>
					<div class="accordion">
                    	<div class="grid col-940">
							<?php while( have_rows('2006') ): the_row(); 
 
								$title = get_sub_field('title');
								$article = get_sub_field('article');
							?>
                            <div class="acc-block">
                                <div class="acc-title">
                                    <?php echo '<a class="more-link">'. $title .'</a>'; ?>
                                </div>
                                <div class="acc-content">
                                    <?php echo $article; ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    
                    
                    <?php if( have_rows('2005') ): ?>
                    <hr />
                    <div class="press-year">2005</div>
					<div class="accordion">
                    	<div class="grid col-940">
							<?php while( have_rows('2005') ): the_row(); 
 
								$title = get_sub_field('title');
								$article = get_sub_field('article');
							?>
                            <div class="acc-block">
                                <div class="acc-title">
                                    <?php echo '<a class="more-link">'. $title .'</a>'; ?>
                                </div>
                                <div class="acc-content">
                                    <?php echo $article; ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    
                    
                    <?php if( have_rows('2004') ): ?>
                    <hr />
                    <div class="press-year">2004</div>
					<div class="accordion">
                    	<div class="grid col-940">
							<?php while( have_rows('2004') ): the_row(); 
 
								$title = get_sub_field('title');
								$article = get_sub_field('article');
							?>
                            <div class="acc-block">
                                <div class="acc-title">
                                    <?php echo '<a class="more-link">'. $title .'</a>'; ?>
                                </div>
                                <div class="acc-content">
                                    <?php echo $article; ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    
                    
                    <?php if( have_rows('2003') ): ?>
                    <hr />
                    <div class="press-year">2003</div>
					<div class="accordion">
                    	<div class="grid col-940">
							<?php while( have_rows('2003') ): the_row(); 
 
								$title = get_sub_field('title');
								$article = get_sub_field('article');
							?>
                            <div class="acc-block">
                                <div class="acc-title">
                                    <?php echo '<a class="more-link">'. $title .'</a>'; ?>
                                </div>
                                <div class="acc-content">
                                    <?php echo $article; ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    
                    
                    <?php if( have_rows('2002') ): ?>
                    <hr />
                    <div class="press-year">2002</div>
					<div class="accordion">
                    	<div class="grid col-940">
							<?php while( have_rows('2002') ): the_row(); 
 
								$title = get_sub_field('title');
								$article = get_sub_field('article');
							?>
                            <div class="acc-block">
                                <div class="acc-title">
                                    <?php echo '<a class="more-link">'. $title .'</a>'; ?>
                                </div>
                                <div class="acc-content">
                                    <?php echo $article; ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    
                    
                    <?php if( have_rows('2001') ): ?>
                    <hr />
                    <div class="press-year">2001</div>
					<div class="accordion">
                    	<div class="grid col-940">
							<?php while( have_rows('2001') ): the_row(); 
 
								$title = get_sub_field('title');
								$article = get_sub_field('article');
							?>
                            <div class="acc-block">
                                <div class="acc-title">
                                    <?php echo '<a class="more-link">'. $title .'</a>'; ?>
                                </div>
                                <div class="acc-content">
                                    <?php echo $article; ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    
                    
                    <?php if( have_rows('2000') ): ?>
                    <hr />
                    <div class="press-year">2000</div>
					<div class="accordion">
                    	<div class="grid col-940">
							<?php while( have_rows('2000') ): the_row(); 
 
								$title = get_sub_field('title');
								$article = get_sub_field('article');
							?>
                            <div class="acc-block">
                                <div class="acc-title">
                                    <?php echo '<a class="more-link">'. $title .'</a>'; ?>
                                </div>
                                <div class="acc-content">
                                    <?php echo $article; ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    
                    
                    <?php if( have_rows('1999') ): ?>
                    <hr />
                    <div class="press-year">1999</div>
					<div class="accordion">
                    	<div class="grid col-940">
							<?php while( have_rows('1999') ): the_row(); 
 
								$title = get_sub_field('title');
								$article = get_sub_field('article');
							?>
                            <div class="acc-block">
                                <div class="acc-title">
                                    <?php echo '<a class="more-link">'. $title .'</a>'; ?>
                                </div>
                                <div class="acc-content">
                                    <?php echo $article; ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    
                    
                    <?php if( have_rows('1998') ): ?>
                    <hr />
                    <div class="press-year">1998</div>
					<div class="accordion">
                    	<div class="grid col-940">
							<?php while( have_rows('1998') ): the_row(); 
 
								$title = get_sub_field('title');
								$article = get_sub_field('article');
							?>
                            <div class="acc-block">
                                <div class="acc-title">
                                    <?php echo '<a class="more-link">'. $title .'</a>'; ?>
                                </div>
                                <div class="acc-content">
                                    <?php echo $article; ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    
                    
                    <script type="text/javascript">
					(function($) {
						
					  var allPanels = $('.accordion > .col-940 > .acc-block > .acc-content').hide();
						
					  $('.accordion > .col-940 > .acc-block > .acc-title > a').click(function() {
						  allPanels.slideUp();
						  $('.more-link').slideDown();
						  $(this).parent().next().slideDown();
						  
						return false;
					  });
					
					})(jQuery);
				</script>
                    
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
