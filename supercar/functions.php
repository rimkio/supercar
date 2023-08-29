<?php
require_once 'inc/init.php';
define('THEME_URL', get_template_directory_uri());

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('Swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/css/swiper.css', array(), rand(11111, 99999), 'all');
    wp_enqueue_script('Swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/js/swiper.js', array('jquery'), rand(11111, 99999), true);
	wp_enqueue_script('isotope-pkgd-min-js', THEME_URL . '/dist/js/isotope.pkgd.min.js', array('jquery'), null, true);
	wp_enqueue_script('matchHeight-min-js', THEME_URL . '/dist/js/jquery.matchHeight.min.js', array('jquery'), null, true);
//	wp_enqueue_script('custom-js', THEME_URL . '/dist/js/customs.js', array(), rand(111,99999), true);
    wp_enqueue_style('supercars-app',  THEME_URL . '/dist/css/app.css', array(), rand(11111, 99999), 'all');
    wp_enqueue_style('supercars-main',  THEME_URL . '/dist/css/main.css', array(), rand(11111, 99999), 'all');
    wp_enqueue_style('supercars-customs',  THEME_URL . '/dist/css/customs.css', array(), rand(11111, 99999), 'all');
    wp_enqueue_script('svelte', THEME_URL . '/dist/svelte/index.js', array('jquery'), rand(11111, 99999), true);
    wp_enqueue_script('app', THEME_URL . '/dist/js/app.js', array('jquery'), rand(11111, 99999), true);
    wp_enqueue_script('manifest', THEME_URL . '/dist/js/manifest.js', array('jquery'), rand(11111, 99999), true);
    wp_enqueue_script('vendor', THEME_URL . '/dist/js/vendor.js', array('jquery'), rand(11111, 99999), true);

    wp_enqueue_script('js-custom', THEME_URL . '/dist/js-custom/main.js', array('jquery'), rand(11111, 99999), true);
    wp_enqueue_script('js-custom-manifest', THEME_URL . '/dist/js-custom/manifest.js', array('jquery'), rand(11111, 99999), true);
    wp_enqueue_script('js-custom-vendor', THEME_URL . '/dist/js-custom/vendor.js', array('jquery'), rand(11111, 99999), true);
});
