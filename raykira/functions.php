<?php

// ****************************************************************
// ==================== Add Custom Image Sizes ====================
// ****************************************************************

	add_image_size( 'bridal_party', 550, 550, true);
	
// ****************************************************************
// ================ Enqueue Stylesheet and jQuery =================
// ****************************************************************

function theme_style() {
	wp_register_script('themescript', get_template_directory_uri() . '/js/scripts.js', array(), '', true);
	wp_enqueue_script('themescript');
	wp_enqueue_style( 'theme_info', get_stylesheet_uri() );
	wp_enqueue_style( 'theme_main_styles', get_template_directory_uri().'/styles/css/main-style.css' );
}

function theme_jquery() {
	wp_enqueue_script( 'jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', false );
}

add_action( 'wp_enqueue_scripts', 'theme_style' );
add_action( 'wp_enqueue_scripts', 'theme_jquery' );


?>