<?php
require_once 'inc/init.php';
define('THEME_URL', get_template_directory_uri());

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('supercars-app',  THEME_URL . '/dist/css/app.css', array(), rand(11111, 99999), 'all');
    wp_enqueue_script('svelte', THEME_URL . '/dist/svelte/index.js', array('jquery'), rand(11111, 99999), true);
    wp_enqueue_script('app', THEME_URL . '/dist/js/app.js', array('jquery'), rand(11111, 99999), true);
    wp_enqueue_script('manifest', THEME_URL . '/dist/js/manifest.js', array('jquery'), rand(11111, 99999), true);
    wp_enqueue_script('vendor', THEME_URL . '/dist/js/vendor.js', array('jquery'), rand(11111, 99999), true);
});
