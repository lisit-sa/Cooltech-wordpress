<?php

function gently_scripts() {
	wp_enqueue_script('html5shiv', get_template_directory_uri() .'/js/html5shiv.js', array('jquery'), '3.7.3', true);
	wp_enqueue_script('columnizer', get_template_directory_uri() .'/js/jquery.columnizer.js', array('jquery'), '1.6.2', true);
	wp_enqueue_script('formstyler', get_template_directory_uri() .'/js/jquery.formstyler.js', array('jquery'), '1.7.4', true);
	wp_enqueue_script('placeholder', get_template_directory_uri() .'/js/jquery.placeholder.js',array('jquery'), '2.1.1', true);
	wp_enqueue_script('ui', get_template_directory_uri() .'/js/jquery.ui.js', array('jquery'), '1.11.4', true);
	wp_enqueue_script('modernizr', get_template_directory_uri() .'/js/modernizr.js', array('jquery'), '2.8.3', true);
	wp_enqueue_script( 'study_theme-custom', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true );
}

add_action( 'init', 'gently_scripts' );
?>

