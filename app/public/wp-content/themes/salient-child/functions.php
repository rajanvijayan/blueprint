<?php 
add_action( 'wp_enqueue_scripts', 'salient_child_enqueue_styles', 100);
function salient_child_enqueue_styles() {
		$nectar_theme_version = nectar_get_theme_version();

		wp_enqueue_style( 'font-awesome-free', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css' );

		wp_enqueue_style( 'salient-child-style', get_stylesheet_directory_uri() . '/style.css', '', $nectar_theme_version );

		wp_enqueue_style( 'salient-child-responsive', get_stylesheet_directory_uri() . '/css/responsive.css', '', $nectar_theme_version );		
    if ( is_rtl() ) {
   		wp_enqueue_style(  'salient-rtl',  get_template_directory_uri(). '/rtl.css', array(), '1', 'screen' );
		}
}

add_action( 'after_setup_theme', 'salient_child_register_nav_menu', 0 );
function salient_child_register_nav_menu(){
	register_nav_menus( array(
		'mobile' => __( 'Primary Menu for Mobile', 'salient' ),
	) );
}