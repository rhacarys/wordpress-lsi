<?php

/**
 * Include CSS files 
 */
function theme_enqueue_scripts() {
        wp_enqueue_style( 'Titillium_Web', 'https://fonts.googleapis.com/css?family=Titillium+Web:400,300,700' );
        wp_enqueue_style( 'Font_Awesome', get_template_directory_uri() . '/font/font-awesome-4.6.3/css/font-awesome.min.css' );
        wp_enqueue_style( 'Bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
        wp_enqueue_style( 'MDB', get_template_directory_uri() . '/css/mdb.min.css' );
        wp_enqueue_style( 'Style', get_template_directory_uri() . '/style.css' );
		wp_enqueue_script( 'google-maps', 'http://maps.google.com/maps/api/js?key=AIzaSyAtByjqhNfmq0f042Km9w5okH1Y25KH8ds' );
        wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery-2.2.3.min.js', array(), '2.2.3', true );
        wp_enqueue_script( 'Tether', get_template_directory_uri() . '/js/tether.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'MDB', get_template_directory_uri() . '/js/mdb.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'Tema', get_template_directory_uri() . '/js/tema.js', array(), '1.0.0', true );

        }
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );


/**
 * Include external files
 */
require_once('inc/mdb_bootstrap_navwalker.php');
require_once('inc/mdb_pagination.php');  
 
/**
 * Setup Theme
 */
function MDB_setup() {
	// Navigation Menus
	register_nav_menus(array(
			'navbar' => __( 'Navbar Menu'),
    		'footer1' => __( 'Footer #1 Column')
	));
	// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('main-full', 1078, 516, false); // main post image in full width
}
add_action('after_setup_theme', 'MDB_setup');


/**
 * Register our sidebars and widgetized areas.
 */
function mdb_widgets_init() {

	register_sidebar( array(
			'name'          => 'Sidebar',
			'id'            => 'sidebar',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
	) );

	register_sidebar( array(
			'name'          => 'Footer widget area',
			'id'            => 'footer',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'mdb_widgets_init' );

?>

