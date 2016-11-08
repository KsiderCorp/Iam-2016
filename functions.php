<?php
require 'function/etc.php';
require 'function/single.php';
require 'function/shortcode.php';
// require 'function/seo.php';
require 'function/custompost.php';
require 'function/gallery.php';
require 'function/nav.php';


function myscript()
{

wp_enqueue_style( 'naked-style', get_template_directory_uri() . '/style.css', '10000', 'all' );

wp_deregister_script( 'jquery' );
wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',false, null, true);
wp_enqueue_script( 'jquery' );
wp_enqueue_script( 'fontloader', 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js',false, null, true );

wp_enqueue_script( 'mainscript', get_stylesheet_directory_uri() . '/js/main.js',false, null, true );

if( is_front_page() || is_page('history')|| is_page('education') || is_page_template('template/conference-list.php')  || is_page_template('template/reports.php') ){
	wp_enqueue_script( 'scrollspy', get_stylesheet_directory_uri() . '/js/scrollspy.js',false, null, true );
	};

if( !is_front_page() ){

wp_enqueue_style( 'social', get_template_directory_uri() . '/addon/social-likes/likely.css', '', 'all' );
wp_enqueue_script( 'socialjs', get_stylesheet_directory_uri() . '/addon/social-likes/likely.js',false, null, true );

wp_enqueue_script( 'bxslider', get_template_directory_uri() . '/addon/fotorama/fotorama.js', false, null, true);
wp_enqueue_style( 'bxstyle', get_template_directory_uri() . '/addon/fotorama/fotorama.css', '', 'all' );

};

if( is_page('getmail') ){
wp_enqueue_script( 'username', get_stylesheet_directory_uri() . '/js/username.js',false, null, true );
};


/*
wp_enqueue_style( 'fontss', 'https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic|Roboto+Slab:400,300,700&subset=latin,cyrillic-ext', '', 'all' ); */

// Icon
wp_enqueue_style( 'icon', get_template_directory_uri() . '/addon/icons/styles.css', '', 'all' );

if ( is_page_template('template/conference-info.php') ) {

	wp_enqueue_script( 'mapscript', get_template_directory_uri() . '/js/map.js', array(), null, true );

	wp_register_script( 'googlemap', 'https://maps.googleapis.com/maps/api/js?sensor=true');
	wp_enqueue_script( 'googlemap' );

}

   if ( !is_singular( 'conference' ) ) {
        wp_deregister_style( 'contact-form-7' );
    }
}
add_action( 'wp_enqueue_scripts', 'myscript' );

?>
