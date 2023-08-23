<?php

if (!function_exists('car_detail_widget')) {
    function car_detail_widget()
    {
        register_sidebar(array(
            'name' => 'Header Global',
            'id' => 'super_car_heaer',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="rounded">',
            'after_title' => '</h2>',
        ));
    }

    add_action('widgets_init', 'car_detail_widget');
}

if (!function_exists('social_menu_widget')) {
	function social_menu_widget()
	{
		register_sidebar(array(
			'name' => 'Social Menu',
			'id' => 'social_menu',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="rounded">',
			'after_title' => '</h2>',
		));
	}

	add_action('widgets_init', 'social_menu_widget');
}