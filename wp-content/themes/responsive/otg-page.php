<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * On The Go Page Template
 *
Template Name:  On The Go
 *
 * @file           otg-page.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/otg-page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>

<div id="content" class="grid col-700 otg-page">

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

</div><!-- end of #content -->
<div id="otg-sidebar" class="grid col-220 fit">
<?php get_sidebar(get_field('sidebar')); ?>
</div>
<?php get_footer(); ?>
