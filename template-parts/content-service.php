<?php
/**
 * Template part for displaying services
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package decorpo-tech-garage
 */

		if(is_singular()){
			?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><?php
			the_title( '<h1 class="entry-title">', '</h1>' );
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'towerpf-site' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
		}else{
			?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('post-list-item'); ?>>
					<a href="<?=esc_url(get_permalink())?>">
						<header class="entry-header">
							<?php
								the_post_thumbnail();
								the_title( '<h1 class="entry-title">', '</h1>' );
							?>
						</header>
						<footer class="entry-footer">
							<?php the_excerpt();?>
						</footer><!-- .entry-footer -->
					</a>
			<?php
		}
	?>
	<!-- </div>.entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
