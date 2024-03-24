<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
	<title>Pacesetter Ski & Snowboard</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
	<script>js/functions.js</script>
</head>
<body <?php body_class(); ?>>
<header>
	<!-- retrieves the header image. get_custom_header() gets the custom header data. -->
	<?php if ( get_header_image() ) : ?>
		<div id="site-header">
				<img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
			</a>
		</div>
	<?php endif; ?>

			<h1 class="nav-hidden">Top Nav</h1>

			<div class="navbar">
				<nav>
				<!-- custom logo -->
				<?php if ( function_exists( 'the_custom_logo' ) ) {
					the_custom_logo();
				} ?>

				<!-- ski -->
				<div class="subnav">
					<a href="#">Skis
					<?xml version="1.0" encoding="UTF-8"?>
					<svg class="subnavbtn" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z"/></svg></a>
					<div class="subnav-content">
						<a href="#">Skis</a>
						<a href="#">Ski Boots</a>
						<a href="#">Ski Bindings</a>
						<a href="#">Poles</a>
					</div> <!-- subnav-content end -->
				</div><!-- subnav end -->

				<!-- snowboard -->
				<div class="subnav">
					<a href="#">Snowboards
					<?xml version="1.0" encoding="UTF-8"?>
					<svg class="subnavbtn" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z"/></svg></a>
					<div class="subnav-content">
						<a href="#">Snowboards</a>
						<a href="#">Snowboard Boots</a>
						<a href="#">Snowboard Bindings</a>
					</div> <!-- subnav-content end -->
				</div> <!-- subnav end -->

				<!-- apparel -->
				<div class="subnav">
					<a href="#">Apparel
					<?xml version="1.0" encoding="UTF-8"?>
					<svg class="subnavbtn" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z"/></svg></a>
					<div class="subnav-content">
						<a href="#">Mens</a>
						<a href="#">Womens</a>
						<a href="#">Kids</a>
						<a href="#">Accessories</a>
					</div> <!-- subnav-content end -->
				</div> <!-- subnav end -->

				<!-- accessories -->
				<div class="subnav">
					<a href="#">Accessories
					<?xml version="1.0" encoding="UTF-8"?>
					<svg class="subnavbtn" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z"/></svg></a>
					<div class="subnav-content">
						<a href="#">Bags</a>
						<a href="#">Helmets</a>
						<a href="#">Goggles</a>`
					</div> <!-- subnav-content end -->
				</div> <!-- sub-nav end -->
					<a href="services">Services</a>
					<a href="rentals">Rentals</a>
				</nav> <!-- end main nav -->
			</div> <!-- navbar end -->

	<div class="flex-container">
					<img src="img/logo.svg" alt="Brand Logo">
			<a class="nav-btn">
				<img src="img/hamburger-menu.svg" alt="hamburger-menu icon">
			</a>
			<nav class="menu">
				<a class="subnavbtn" href="#">
					Skis<i class="fa fa-caret-down"></i>
				</a>
			<div class="subnav-content">
				<a href="#">Skis</a>
				<a href="#">Ski Boots</a>
				<a href="#">Ski Bindings</a>
				<a href="#">Poles</a>`
			</div>
				<a class="subnavbtn" href="#">
					Snowboards<i class="fa fa-caret-down"></i>
				</a>
			<div class="subnav-content">
				<a href="#">Snowboards</a>
				<a href="#">Snowboard Boots</a>
				<a href="#">Snowboard Bindings</a>
			</div>
				<a class="subnavbtn" href="#">
					Apparel<i class="fa fa-caret-down"></i>
				</a>
			<div class="subnav-content">
				<a href="#">Mens</a>
				<a href="#">Womens</a>
				<a href="#">Kids</a>
				<a href="#">Accessories</a>`
			</div>
				<a class="subnavbtn" href="#">
					Accessories<i class="fa fa-caret-down"></i>
				</a>
			<div class="subnav-content">
				<a href="#">Bags</a>
				<a href="#">Helmets</a>
				<a href="#">Goggles</a>`
			</div>
			<a class="link" href="events">Events</a>
			<a class="link" href="contact">Contact Us</a>
			<a class="link" href="about-us">About Us</a>
			<a class="link" href="rentals">Rentals</a>
			<a class="link" href="faq">FAQ</a>
			<a class="link" href="services">Services</a>
			</nav>
		</div>
	
	<?php
		$header_info = array(
			'width'         => 980,
			'height'        => 60,
			'default-image' => get_template_directory_uri() . '/images/sunset.jpg',
		);
		add_theme_support( 'custom-header', $header_info );
	?>
</header>