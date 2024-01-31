<?php 
add_action('wp_enqueue_scripts', 'child_enqueue_styles');

function child_enqueue_styles() {
	wp_enqueue_style(
		'child-style', get_stylesheet_uri()
	);
}