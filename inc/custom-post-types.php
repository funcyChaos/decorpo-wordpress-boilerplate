<?php

add_action('init', function(){
	register_post_type('service', [
		'public'        	=> true,
		'labels'					=> [
			'name'					=> 'Services',
			'singular_name'	=> 'Service',
			'add_new'				=> 'Add Service Page',
			'add_new_item'	=> 'Add Service Page',
		],
		'menu_icon'     	=> 'dashicons-hammer',
		'menu_position' 	=> 4,
		'has_archive'			=> 'services',
		'rewrite'					=> ['slug' => 'services', 'with_front' => false],
		'show_in_rest'		=> true,
		'show_in_menu'		=> true,
		'show_ui'					=> true,
		'rest_base'				=> 'services',
		'supports'				=> ['title', 'editor', 'thumbnail', 'excerpt', 'author'],
		'map_meta_cap'		=> true,
	]);
	register_taxonomy('type', 'service', [
		'hierarchical'	=> true,
		'label'					=> 'Service Types',
		'query_var'			=> true,
		'rewrite'				=> ['slug' => 'service-categories', 'with_front' => false],
	]);
});