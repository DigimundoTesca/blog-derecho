<?php
//Action that call javascript file on themebase assets/js
add_action( 'wp_enqueue_scripts', '_adding_scripts',100 ); 
function _adding_scripts() {
	wp_register_script('my_custom_script', get_template_directory_uri() . '/assets/js/theme-scripts.js', array('jquery'),'1', true);
	wp_enqueue_script('my_custom_script');
}

//Remove warning for jquery migrate version 1.4.1
add_action( 'wp_default_scripts', function( $scripts ) {  
	if ( ! empty( $scripts->registered['jquery'] ) ) {
		$scripts->registered['jquery']->deps = array_diff( $scripts->registered['jquery']->deps, array( 'jquery-migrate' ) );
	}
} );
?>