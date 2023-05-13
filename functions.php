<?php

function wpdevs_load_scripts(){
    wp_enqueue_style( 
        'wpdevs-style',
        get_stylesheet_uri(),
        array(''),
        filemtime(
            get_template_directory(). '/style.css'
        ),
        'all'
    );
    wp_enqueue_style( 
        'google-fonts', 
        'https://fonts.googleapis.com/css2?family=Alice&family=Urbanist:wght@200;300;500;700&display=swap', 
        array(), 
        null
    );
    wp_enqueue_script( 
        'mainscripts', 
        get_template_directory_uri(). 'js/scripts.php', 
        array(), 
        '0.1', 
        true
    );
}
add_action( 'wp_enqueue_scripts', 'wpdevs_load_scripts');

register_nav_menus(
    array(
        'wpdevs_main_menu' => 'Main Menu',
        'wpdevs_footer_menu' => 'Footer Menu'
    )
);

add_theme_support( 'custom-logo' );