<?php

/** Carrega Scripts personalizados, tanto JS quanto de estilos (inclui fontes) */
function wpdevs_load_scripts(){
    wp_enqueue_style( 
        'wpdevs-style',
        get_stylesheet_uri(),
        array(''),
        filemtime(
            get_template_directory(). '/css/global.css'
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
        'wpdev-mainscripts', 
        get_template_directory_uri(). './js/scripts.js', 
        array(), 
        '0.1', 
        false
    );
}
add_action( 'wp_enqueue_scripts', 'wpdevs_load_scripts');

/** Registra os principais menus e possibilita a inserção deles */
register_nav_menus(
    array(
        'wpdevs_main_menu' => 'Main Menu',
        'wpdevs_footer_menu' => 'Footer Menu'
    )
);

/** Adiciona a possibilidade de inserção de logo pelo menu Personalizar */
add_theme_support( 'custom-logo', array());

/** Adiciona suporte global às thumbs */
add_theme_support( 'post-thumbnails' );

/** Adiciona um limite mágimo de 12 palavras no excerpt dos posts */
function wpdev_custom_excerpt_length( $length ) {
	return 12;
}
add_filter( 'excerpt_length', 'wpdev_custom_excerpt_length', 999 );

/** Adiciona classes bootstrap na tag <a> do menu.*/
function wpdevs_nav_menu_link_attributes( $atts, $item, $args ) {
    $atts['class'] = 'nav-link px-2 text-white';
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'wpdevs_nav_menu_link_attributes', 10, 3 );

