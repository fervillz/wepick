<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WePick
 */

get_header(); ?>

	<?php echo get_template_part( 'template-parts/section', 'codes' ); ?>

	<?php echo get_template_part( 'template-parts/section', 'features' ); ?>

	<?php echo get_template_part( 'template-parts/section', 'downloads' ); ?>

	<?php echo get_template_part( 'template-parts/section', 'how' ); ?>

	<?php echo get_template_part( 'template-parts/section', 'screenshots' ); ?>

	<?php echo get_template_part( 'template-parts/section', 'contact' ); ?>

<?php
get_footer();