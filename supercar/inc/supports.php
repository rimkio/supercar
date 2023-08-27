<?php

if ( ! function_exists( 'supercars_supports' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @return void
	 */
	function supercars_supports() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
	}
}
add_action( 'after_setup_theme', 'supercars_supports' );