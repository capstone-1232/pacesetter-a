<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>
<body <?php body_class(); ?>>
<!-- retrieves the header image. get_custom_header() gets the custom header data. -->
<?php if ( get_header_image() ) : ?>
	<div id="site-header">
			<img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		</a>
	</div>
<?php endif; ?>

	<section class="p-menu">
		<nav id="navbar" class="navigation">
				
		<!-- custom logo -->
		<?php if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		} ?>

	<div class="nav-items">
		<div class="subnav">
		<button class="subnavbtn"><a href="#">Skis</a><i class="fa fa-caret-down"></i></button>
		<div class="subnav-content">
		<a href="#">Skis</a>
		<a href="#">Ski Boots</a>
		<a href="#">Ski Bindings</a>
		<a href="#">Poles</a>`
		</div> <!-- subnav-content end -->
		<button class="subnavbtn"><a href="#">Snowboards</a><i class="fa fa-caret-down"></i></button>
		<div class="subnav-content">
		<a href="#">Snowboards</a>
		<a href="#">Snowboard Boots</a>
		<a href="#">Snowboard Bindings</a>
		</div> <!-- subnav-content end -->
		<button class="subnavbtn"><a href="#">Apparel</a><i class="fa fa-caret-down"></i></button>
		<div class="subnav-content">
		<a href="#">Mens</a>
		<a href="#">Womens</a>
		<a href="#">Kids</a>
		<a href="#">Accessories</a>`
		</div> <!-- subnav-content end -->
		<button class="subnavbtn"><a href="#">Accessories</a><i class="fa fa-caret-down"></i></button>
		<div class="subnav-content">
		<a href="#">Bags</a>
		<a href="#">Sunglasses</a>
		<a href="#">Helmets</a>
		<a href="#">Goggles</a>`
		</div> <!-- subnav-content end -->
			<a href="#">Services</a>
		</div> <!-- sub-nav end -->
	</div> <!-- nav-items end -->
		
	<!-- hamburger toggle button -->
	<input id="toggle" type="checkbox" />
	<label class="hamburger" for="toggle">
		<div class="top"></div>
		<div class="middle"></div>
		<div class="bottom"></div>
	</label>
</nav> <!-- end main nav -->
	
    <nav class="menu">
		<button class="subnavbtn"><a href="#">Skis</a><i class="fa fa-caret-down-big"></i></button>
		<div class="subnav-content">
	  <a href="#">Skis</a>
      <a href="#">Ski Boots</a>
      <a href="#">Ski Bindings</a>
	  <a href="#">Poles</a>`
    </div>
	<button class="subnavbtn"><a href="#">Snowboards</a><i class="fa fa-caret-down-big"></i></button>
    <div class="subnav-content">
      <a href="#">Snowboards</a>
      <a href="#">Snowboard Boots</a>
      <a href="#">Snowboard Bindings</a>
    </div>
	<button class="subnavbtn"><a href="#">Apparel</a><i class="fa fa-caret-down-big"></i></button>
    <div class="subnav-content">
      <a href="#">Mens</a>
      <a href="#">Womens</a>
      <a href="#">Kids</a>
	  <a href="#">Accessories</a>`
	</div>
	<button class="subnavbtn"><a href="#">Accessories</a><i class="fa fa-caret-down-big"></i></button>
    <div class="subnav-content">
      <a href="#">Bags</a>
      <a href="#">Sunglasses</a>
      <a href="#">Helmets</a>
	  <a href="#">Goggles</a>`
    </div>
	<a class="link" href="#">Events</a>
	<a class="link" href="#">Contact Us</a>
	<a class="link" href="#">About Us</a>
	<a class="link" href="#">Rentals</a>
	<a class="link" href="#">FAQ</a>
	<a class="link" href="#">Services</a>
    </nav>
</section>

<?php
$header_info = array(
	'width'         => 980,
	'height'        => 60,
	'default-image' => get_template_directory_uri() . '/images/sunset.jpg',
);
add_theme_support( 'custom-header', $header_info );

// custom header image might not need
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
