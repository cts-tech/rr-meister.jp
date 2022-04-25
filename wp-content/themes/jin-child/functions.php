<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' ); 
function theme_enqueue_styles() { 
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'cts-style',
                    get_stylesheet_directory_uri() . '/cts-compile.css',
                    array('theme-style'),
                    '1.0'
    );
} 


add_action( 'admin_menu', 'add_custom_menu' );
function add_custom_menu(){
    add_menu_page( 'ブロックの管理', 'ブロックの管理',
    'manage_options', 'edit.php?post_type=wp_block', '', 'dashicons-admin-post', 21 ); 
}