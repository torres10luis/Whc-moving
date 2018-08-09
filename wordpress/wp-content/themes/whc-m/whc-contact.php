<?php
/**
 * 
 * Template name: Contact Page
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package whc-moving
 */

get_header();
?>

	<div id="primary" class="col-12">
	


         <?php the_content(); ?>

		
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
