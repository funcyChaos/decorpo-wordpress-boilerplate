<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
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
		<img style="max-width: 400px;" src="<?=bloginfo('template_directory')?>/img/rick-roll.gif" alt="Rick Rolled">
		<h1>404 I could not find that</h1>
	</main><!-- #main -->
<?php
get_sidebar();
get_footer();
