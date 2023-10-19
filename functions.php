<?php

add_action( 'wp_enqueue_scripts', 'style_theme');
add_action( 'wp_footer', 'scripts_theme');
add_action( 'after_setup_theme', 'theme_register_nav_menu');
add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );          // Only for post, page
add_image_size( 'content_img_size', 1200, 1000);
add_filter( 'image_size_names_choose', 'my_custom_sizes' );
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

function my_scripts_method() {
	// reject standart jQuery
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', false, null, true);
	wp_enqueue_script( 'jquery' );
}

function my_custom_sizes( $sizes ) {
	return array_merge( $sizes, array(
		'content_img_size' => 'Мой размерчик',
	) );
}


function style_theme() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
};

function scripts_theme() {
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js');
};

function theme_register_nav_menu() {
    register_nav_menu( 'top', 'Верхнее меню');
    register_nav_menu( 'bottom', 'Нижнее меню');
    register_nav_menu( 'about_elem', 'Про елемент');
    register_nav_menu( 'education', 'Освіта');
    register_nav_menu( 'projects', 'Проекти');
    register_nav_menu( 'security', 'Охорона');
    register_nav_menu( 'confidence', 'Політика конфіденційності');

    add_filter( 'excerpt_more', 'new_excerpt_more' );
    function new_excerpt_more( $more ){
        global $post;
        return '<a href="'. get_permalink($post->ID) . '"> Читать дальше...</a>';
    }
};
