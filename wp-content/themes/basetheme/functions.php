<?php

// Login styles
function admin_styles(){
  wp_enqueue_style( 'login.css',get_template_directory_uri().'/assets/css/login.css', false );
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'login.js',get_template_directory_uri().'/assets/js/login.js', array('jquery'), 1.0, true );
}
add_action( 'login_enqueue_scripts','admin_styles', 10 );


//Add thumbnail images
function theme_setup() {
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'theme_setup');


//Adding stylesheets
function _adding_stylesheet(){
  //Style register
  wp_register_style('ihover',get_template_directory_uri().'/assets/css/ihover.css',array(),'1.0 ');
  wp_register_style('jquery-ui',get_template_directory_uri().'/assets/css/jquery-ui.css',array(),'1.0 ');
  wp_register_style('card',get_template_directory_uri().'/assets/css/card.css',array(),'1.0 ');
  wp_register_style('style',get_template_directory_uri('ihover').'/style.css',array(),'1.0 ');
  //Style display
  wp_enqueue_style('ihover');
  wp_enqueue_style('jquery-ui');
  wp_enqueue_style('card');
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
  wp_register_script('external', get_template_directory_uri() . '/assets/js/external-jquery.js', true);
  wp_register_script('jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.js', true);
  //Js load
  wp_enqueue_script('external');
  wp_enqueue_script('jquery-ui');
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
function custom_password_cookie_expiry( $expires ) {
    return (-1);
}
add_filter( 'post_password_expires', 'custom_password_cookie_expiry' );

//Removes the 'Protected' string from title pages
function change_protected_title_prefix() {
    return '%s';
}
add_filter('protected_title_format', 'change_protected_title_prefix');

//Projects Post type
add_action( 'init', 'blog_projects' );
function blog_projects() {
  $labels = array(
    'name'               => _x( 'Proyectos', 'blog' ),
    'singular_name'      => _x( 'Proyecto', 'post type singular name', 'blog' ),
    'menu_name'          => _x( 'Proyectos', 'admin menu', 'blog' ),
    'name_admin_bar'     => _x( 'Proyectos', 'add new on admin bar', 'blog' ),
    'add_new'            => _x( 'Agregar Nuevo', 'book', 'blog' ),
    'add_new_item'       => __( 'Agregar Nuevo Proyecto', 'blog' ),
    'new_item'           => __( 'Nuevo Proyecto', 'blog' ),
    'edit_item'          => __( 'Editar Proyectos', 'blog' ),
    'view_item'          => __( 'Ver Proyectos', 'blog' ),
    'all_items'          => __( 'Todos los Proyectos', 'blog' ),
    'search_items'       => __( 'Buscar Proyectos', 'blog' ),
    'parent_item_colon'  => __( 'Parent Proyectos:', 'blog' ),
    'not_found'          => __( 'No Projects found.', 'blog' ),
    'not_found_in_trash' => __( 'No Projects found in Trash.', 'blog' )
  );

  $args = array(
    'labels'             => $labels,
    'description'        => __( 'Description.', 'blog' ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'proyectosblog' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 6,
    'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category' ),
  );

  register_post_type( 'proyectosblog', $args );
}

//Widget activation
function my_widgets (){
  register_sidebar( array( 
    'name' => 'Blog sidebar',
    'id' => 'blog_sidebar',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
    ) );
}
add_action( 'widgets_init', 'my_widgets');


//Search only posts on blog page
function my_home_category( $query ) {
    if ( !is_admin() && $query->is_main_query() ) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
  }
}
add_action( 'pre_get_posts', 'my_home_category' );


?>