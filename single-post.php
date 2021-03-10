<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>

<main id="site-content" role="main">    

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/blog', get_post_type() );
		}
	}

	?>

</main><!-- #site-content -->

<div id="menu-frauenweihe">
<?php wp_nav_menu(); ?>
</div>


<?php // get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
