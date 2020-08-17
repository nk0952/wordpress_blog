<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.1
 */

get_header();
?>
<main id="site-content" role="main">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<?php

				if ( have_posts() ) {

					while ( have_posts() ) {
						the_post();

						get_template_part( 'template-parts/content', get_post_type() );
					}
				}

				?>

			</div>
			<div class="col-lg-4 sidebar">
				<?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
					<?php dynamic_sidebar( 'custom-side-bar' ); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>