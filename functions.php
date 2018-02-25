<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Genesis Sample Theme' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/' );
define( 'CHILD_THEME_VERSION', '2.2.2' );

//* Enqueue Google Fonts
add_action( 'wp_enqueue_scripts', 'genesis_sample_google_fonts' );
function genesis_sample_google_fonts() {

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700|Roboto:300,400', array(), CHILD_THEME_VERSION );

}
// Adding Material Bootstrap and jQuery
add_action( 'wp_enqueue_scripts', 'add_material_bootstrap');
function add_material_bootstrap(){

	wp_enqueue_script( 'jQuery-targets', get_stylesheet_directory_uri() . '/js/filters.js', array( 'jquery' ), NULL, false);
	wp_enqueue_style( 'md_bootstrap_css', '//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.5/css/mdb.min.css', array(), CHILD_THEME_VERSION );
	wp_enqueue_script( 'md_bootstrap_js', '//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.5/js/mdb.min.js', array(), CHILD_THEME_VERSION );
	wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style.css' );




}

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

//* Add Accessibility support
add_theme_support( 'genesis-accessibility', array( 'headings', 'drop-down-menu',  'search-form', 'skip-links', 'rems' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );


// Adding custom styles to the login form
function my_custom_files() {
	wp_enqueue_style( 'md_bootstrap_css', '//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.5/css/mdb.min.css', array(), CHILD_THEME_VERSION );
	wp_enqueue_script( 'md_bootstrap_js', '//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.5/js/mdb.min.js', array(), CHILD_THEME_VERSION );
	wp_enqueue_script( 'jQuery-targets', get_stylesheet_directory_uri() . '/js/login.js', array( 'jquery' ), NULL, false);
	wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/login-style.css' );
}
add_action( 'login_enqueue_scripts', 'my_custom_files' );

// Adding the function to change html classes to give MD Bootstrap the functionality it needs
//* Add z depth classes to header
add_filter( 'genesis_attr_site-header', 'append_zdepth_class' );
add_filter( 'genesis_attr_nav-primary', 'append_zdepth_class' );
add_filter( 'genesis_attr_entry', 'append_zdepth_class' );
// add_filter( 'genesis_attr_sidebar-primary', 'append_zdepth_class' );
function append_zdepth_class( $attributes ) {
 $attributes['class'] .= ' z-depth-3';
return $attributes;
}
