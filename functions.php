<?php
/**
 * pacesetter functions and definitions
 *
 *
 * @package pacesetter
 */

/**
 */

 add_theme_support( 'wp-block-styles' );


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

// custom backgrounds
add_theme_support( 'custom-background' );
$args = array(
    'default-color' => '0000ff',
    'default-image' => get_template_directory_uri() . '/images/wapuu.jpg',
);
add_theme_support( 'custom-background', $args );

// regisrter menus


//thumbnails
add_theme_support( 'post-thumbnails' );

// pagination
function your_themes_pagination() {
	global $wp_query;
	echo paginate_links();
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce' );
}  

if (class_exists('Woocommerce')){
    add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
}

add_filter( 'woocommerce_product_tabs', 'remove_reviews_tab', 98 );
function remove_reviews_tab( $tabs ) {
    unset( $tabs['reviews'] );
    return $tabs;
}

// remove related products
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

// remove product rating
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );

// remove  rating  stars
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
// remove product meta 
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
// remove related products
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
// remove add to cart
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
// remove side bar
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 ); 

remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_show_product_images', 7 );

add_action( 'woocommerce_after_single_product_summary', 'woocommerce_show_product_thumbnails', 20 ); 

// shop page
// breadcrumb move
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
add_action( 'woocommerce_archive_description', 'woocommerce_breadcrumb', 5 );
// remove add to cart
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );