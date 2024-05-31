<?php
/**
 * The front-page template file
 *
 * This is the front-page template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package decorpo-tech-garage
 */

get_header();
?>
	<main id="primary" class="content-main">
		<?php
		if(have_posts()){
			while(have_posts()){
				the_post();
				get_template_part('template-parts/content', get_post_type());
			}
			the_posts_navigation();
		}
?>
	</main><!-- #main -->
<?php
get_sidebar();
get_footer();
