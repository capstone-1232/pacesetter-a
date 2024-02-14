<!-- custom header function -->
<?php
add_theme_support( 'custom-header' );

function pacesetter_custom_header_setup() {
	$defaults = array(
		// Default Header Image to display.
		'default-image'          => get_template_directory_uri() . '/images/headers/default.jpg',
		// Display the header text along with the image.
		'header-text'            => false,
		// Header text color default.
		'default-text-color'     => '000',
		// Header image width (in pixels).
		'width'                  => 1000,
		// Header image height (in pixels).
		'height'                 => 198,
		// Header image random rotation default.
		'random-default'         => false,
		// Enable upload of image file in admin.
		'uploads'                => false,
		// Function to be called in theme head section.
		'wp-head-callback'       => 'wphead_cb',
		// Function to be called in preview page head section.
		'admin-head-callback'    => 'adminhead_cb',
		// Function to produce preview markup in the admin screen.
		'admin-preview-callback' => 'adminpreview_cb',
	);
}
add_action( 'after_setup_theme', 'pacesetter_custom_header_setup' );

// custom logo
function pacesetter_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'pacesetter_custom_logo_setup' );

add_theme_support( 'custom-logo' );
function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'pacesetter_custom_logo_setup' );

// custom backgrounds
add_theme_support( 'custom-background' );
$args = array(
    'default-color' => '0000ff',
    'default-image' => get_template_directory_uri() . '/images/wapuu.jpg',
);
add_theme_support( 'custom-background', $args );

// regisrter menus
function register_my_menus() {
	register_nav_menus(
	  array(
		'header-menu' => __( 'Header Menu' ),
		'extra-menu' => __( 'Extra Menu' )
	   )
	 );
   }
   add_action( 'init', 'register_my_menus' );

