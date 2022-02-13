<?php

if ( ! function_exists( 'fse_setup' ) ) {
	function fse_setup() {
            add_theme_support( 'wp-block-styles' );
        }
}
add_action( 'after_setup_theme', 'fse_setup' );

function fse_styles() {
	wp_enqueue_style(
		'fse-style',
		get_stylesheet_uri(),
		'',
		wp_get_theme()->get( 'Version' )
	);

}
add_action( 'wp_enqueue_scripts', 'fse_styles' );