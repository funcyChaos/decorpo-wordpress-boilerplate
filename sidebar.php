<aside>
	<div class="site-logo">
		<?php
			// Cause this should be a conditional
			if(true){
				the_custom_logo();
			}
		?>
	</div>
		<?php
			get_search_form();
		?>
		<div class="categories">
			<?php
				wp_list_categories(['title_li'=>'Service Categories', 'taxonomy'=>'type']);
				wp_list_categories(['title_li'=>'Blog Categories']);
			?>
		</div>
</aside>