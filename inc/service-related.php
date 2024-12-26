<?php
add_action('pre_get_posts', function($query){
	if(is_post_type_archive('service')){
			$query->set( 'orderby', 'date' );
			$query->set( 'order', 'ASC' );
	}
});

add_shortcode('wordpress_dev_form', function(){
	?><h1>wordpress dev form shortcode</h1><?php
});