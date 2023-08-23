<?php

/**
 * Use this file to register any custom post types you wish to create.
 */
if (!function_exists('spc_create_custom_post_type')) {
	// Register Custom Post Type
	function spc_create_custom_post_type()
	{

		// Setup customer-reviews type
		register_post_type(
			'customer-reviews',
			array(
				'labels' => [
					'name' => __('Customer Reviews'),
					'singular_name' => __('Customer Reviews')
				],
				'menu_icon' => 'dashicons-testimonial',
				'public' => true,
				'exclude_from_search' => true,
				'has_archive' => false,
				'rewrite' => array('slug' => 'customer-reviews', 'with_front' => false)
			)
		);

	}

	add_action('init', 'spc_create_custom_post_type', 0); // Register Custom Taxonomy
}