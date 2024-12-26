<div class="sidebar">
	<?php
		get_search_form();
		wp_list_categories(['title_li'=>'Service Categories', 'taxonomy'=>'type']);
		wp_list_categories(['title_li'=>'Blog Categories']);
	?>
	<!-- <script>document.getElementById("searchsubmit").value = "S"</script> -->
</div>