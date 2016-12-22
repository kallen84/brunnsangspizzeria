<?php 

function bp_theme_load_scripts() {
    // CSS
	wp_enqueue_style('style', get_template_directory_uri().'/build/css/master.min.css');
    wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', '3.3.7', true );
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/font-awesome-4.7.0/css/font-awesome.min.css');

    // Scripts
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//code.jquery.com/jquery-1.11.3.min.js', false, '1.11.3', true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('scripts', get_template_directory_uri().'/build/js/script.min.js', false, '0.0.1', true);
    wp_enqueue_script('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '3.3.7', 'all');
}
add_action('wp_enqueue_scripts', 'bp_theme_load_scripts');