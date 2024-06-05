<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package decorpo-tech-garage
 */
?>


	<?php
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
								the_title( '<h2 class="entry-title">', '</h2>' );
							?>
							<h2>* <?=get_the_date('Y-m-d');?> *</h2>
						</header>
						<footer class="entry-footer">
							<?php the_excerpt();?>
						</footer><!-- .entry-footer -->
					</a>
			<?php
		}

		// wp_link_pages(
		// 	array(
		// 		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'towerpf-site' ),
		// 		'after'  => '</div>',
		// 	)
		// );
	?>
	<!-- </div>.entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
