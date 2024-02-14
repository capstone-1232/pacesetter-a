<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- retrieves the header image. get_custom_header() gets the custom header data. -->
<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		</a>
	</div>
<?php endif; ?>

<?php
$header_info = array(
	'width'         => 980,
	'height'        => 60,
	'default-image' => get_template_directory_uri() . '/images/sunset.jpg',
);
add_theme_support( 'custom-header', $header_info );

// // custom header image might not need
// $header_images = array(
// 	'sunset' => array(
// 		'url'           => get_template_directory_uri() . '/images/sunset.jpg',
// 		'thumbnail_url' => get_template_directory_uri() . '/images/sunset_thumbnail.jpg',
// 		'description'   => 'Sunset',
// 	),
// 	'flower' => array(
// 		'url'           => get_template_directory_uri() . '/images/flower.jpg',
// 		'thumbnail_url' => get_template_directory_uri() . '/images/flower_thumbnail.jpg',
// 		'description'   => 'Flower',
// 	),
// );
// register_default_headers( $header_images );

// custom logo
if ( function_exists( 'the_custom_logo' ) ) {
	the_custom_logo();
}

wp_nav_menu(
	array(
	  'theme_location' => 'extra-menu',
	  'container_class' => 'my_extra_menu_class'
	)
  );