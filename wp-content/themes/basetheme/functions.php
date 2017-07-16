<?php

//Add thumbnail images
function theme_setup() {
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'theme_setup');


//Adding stylesheets
function _adding_stylesheet(){
  //Style register
  wp_register_style('ihover',get_template_directory_uri().'/assets/css/ihover.css',array(),'1.0 ');
  wp_register_style('style',get_template_directory_uri().'/style.css',array(),'1.0 ');
  //Style display
  wp_enqueue_style('ihover');
  wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts','_adding_stylesheet');

//Create menus
function adding_menus(){
  register_nav_menus(array(
    'header-menu' => __('Header Menu','Derecho Anahuac'),
    'social-menu' => __('Social Menu','Derecho Anahuac')
    ));
}
add_action( 'init', 'adding_menus' );

//Action that call javascript file on themebase assets/js
function _adding_scripts() {
  //JS file regist
  wp_register_script('my_custom_script', get_template_directory_uri() . '/assets/js/theme-scripts.js', array('jquery'),'1', true);
  //Js load
  wp_enqueue_script('my_custom_script');
  wp_enqueue_script('jquery');
}
add_action( 'wp_enqueue_scripts', '_adding_scripts',100 ); 

//Remove warning for jquery migrate version 1.4.1
add_action( 'wp_default_scripts', function( $scripts ) {  
	if ( ! empty( $scripts->registered['jquery'] ) ) {
		$scripts->registered['jquery']->deps = array_diff( $scripts->registered['jquery']->deps, array( 'jquery-migrate' ) );
	}
} );

//Expires cookie for "jobs" page when user close the page
function dn_expire_psw_session() {
    if ( isset( $_COOKIE['wp-postpass_' . COOKIEHASH] ) ) {
        setcookie('wp-postpass_' . COOKIEHASH, '', 0, COOKIEPATH);
    }
}
add_action( 'wp', 'dn_expire_psw_session' );
?>