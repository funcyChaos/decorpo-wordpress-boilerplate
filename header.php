<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package decorpo-tech-garage
 */

?>
<!doctype html>
<html <?php language_attributes();?>>
	<head>
		<meta charset="<?php bloginfo('charset');?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php
			require get_template_directory().'/inc/dynamic-styles.php';
			wp_head();
		?>
	</head>
	<body <?php body_class();?>>
	<?php wp_body_open();?>
	<div id="mobile_menu" class="mobile-menu hidden">

	</div>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'decorpo-tech-garage');?></a>
		<header id="masthead" class="site-header">
			<div class="site-logo">
				<?php
					// Cause this should be a conditional
					if(true){
						the_custom_logo();
					}
				?>
			</div>
			<div class="site-title">
				<a href="<?=get_home_url()?>">
					<h1><?php bloginfo('name');?></h1>
				</a>
			</div>
			<nav id="site-navigation" class="main-navigation">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container'			 => 'ul',
						)
					);
				?>
				<i id="mobile_toggle" class="fas fa-bars"></i>

			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->