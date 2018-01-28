<?php

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

show_admin_bar(false);

function logo_widgets_init() {

	register_sidebar( array(
		'name'          => 'Логотип svg',
		'id'            => 'logo',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<p class="hidden">',
		'after_title'   => '</div>',
	) );

}
add_action( 'widgets_init', 'logo_widgets_init' );

require_once ( get_stylesheet_directory() . '/theme-options.php' );

add_theme_support( 'post-thumbnails' ); /*задати мініатюру у рубриці*/

// Load up our awesome theme options
// require_once ( get_stylesheet_directory() . '/theme-options.php' );
/*function load_my_script() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri(). 
		'/libs/jquery/jquery-2.1.3.min.js');
	wp_enqueue_script('jquery');

}*/
/*add_action( 'wp_enqueue_scripts', 'true_include_myscript' );
function true_include_myscript() {
    wp_enqueue_script( 'themename', get_stylesheet_directory_uri() . '/libs/jquery/jquery-2.1.3.min.js', array('jquery'), null, true );
}*/

