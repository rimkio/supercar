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
				'publicly_queryable' => false,
				'exclude_from_search' => true,
				'has_archive' => false,
				'rewrite' => array('slug' => 'customer-reviews', 'with_front' => false)
			)
		);

		register_post_type(
			'team',
			array(
				'labels' => [
					'name' => __('Team'),
					'singular_name' => __('Team')
				],
				'menu_icon' => 'dashicons-groups',
				'public' => true,
				'supports' => array( 'title', 'editor','thumbnail'),
				'publicly_queryable' => false,
				'exclude_from_search' => true,
				'has_archive' => false,				
			)
		);


		register_post_type(
			'vehicle',
			array(
				'labels' => [
					'name' => __('Vehicle'),
					'singular_name' => __('Vehicle')
				],
				'public' => true,
				'menu_icon' => 'dashicons-car',
				'has_archive' => 'used-cars',
				'rewrite' => array('slug' => 'vehicle', 'with_front' => false)
			)
		);

		register_taxonomy(
			'department',
			'team',
			[
				'label' => __('Department'),
				'hierarchical' => true,
				'rewrite' => array('slug' => 'department', 'with_front' => false)
			]
		);

	}

	add_action('init', 'spc_create_custom_post_type', 0); // Register Custom Taxonomy
}
