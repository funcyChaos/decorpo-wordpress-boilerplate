<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package decorpo-tech-garage
 */

?>
			<footer id="colophon" class="site-footer">
				<a href="https://www.instagram.com/funcychaos/" target="_blank">
					<i title="@funcyChaos" class="fas fa-hashtag fa-5x"></i>
				</a>
				<a href="https://github.com/funcyChaos" target="_blank">
					<i title="funcyChaos Github" class="fas fa-code-branch fa-5x"></i>
				</a>


				<!-- nav menu items -->
				<?php
						// wp_nav_menu(array(
						// 		'menu' => 'Nav Menu',
						// 		'theme_location' => 'footer-menu',
						// 		'menu_class' => 'footer-menu',
						// 		'menu_id' => 'footer-id'
						// ))
				?>
				<!-- end -->
			</footer><!-- #colophon -->
		</div><!-- #page -->
		<?php wp_footer(); ?>
	</body>
</html>
