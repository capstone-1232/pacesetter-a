<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php //wp_head();  ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
	<title>Pacesetter Ski & Snowboard</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
	<script src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script>
</head>

<body>
	<header>
		<div class="navbar">
			<nav class="main-nav">
					<!-- custom logo -->
					<div class="logo">
						<?php if (function_exists('the_custom_logo')) {
							the_custom_logo();
						} ?>
					</div>

				<div class="nav-items">
					<!-- ski -->
					<div class="subnav">
						<a href="#">Skis
							<svg class="subnavbtn" fill="#000000" viewBox="0 0 24 24">
								<path
									d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z" />
							</svg></a>
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
							<svg class="subnavbtn" fill="#000000" viewBox="0 0 24 24">
								<path
									d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z" />
							</svg></a>
						<div class="subnav-content">
							<a href="#">Snowboards</a>
							<a href="#">Snowboard Boots</a>
							<a href="#">Snowboard Bindings</a>
						</div> <!-- subnav-content end -->
					</div> <!-- subnav end -->
					<!-- apparel -->
					<div class="subnav">
						<a href="#">Apparel
							<svg class="subnavbtn" fill="#000000" viewBox="0 0 24 24">
								<path
									d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z" />
							</svg></a>
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
							<svg class="subnavbtn" fill="#000000" viewBox="0 0 24 24">
								<path
									d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z" />
							</svg></a>
						<div class="subnav-content">
							<a href="#">Bags</a>
							<a href="#">Helmets</a>
							<a href="#">Goggles</a>
						</div> <!-- subnav-content end -->
					</div> <!-- sub-nav end -->
					<a href="services">Services</a>
					<a href="rentals">Rentals</a>
				</div>
				<svg class="nav-btn" fill="none" viewBox="0 0 24 24">
					<g stroke="#000" stroke-linecap="round" stroke-width="2">
						<path d="m4 18h16" />
						<path d="m4 12h16" />
						<path d="m4 6h16" />
					</g>
				</svg>
			</nav> <!-- end main nav -->
		</div> <!-- navbar end -->

		<!-- hamburger menu -->
		<div class="menu">
			<nav>
				<!-- ski -->
				<div class="subnav">
					<a href="#">Skis
						<svg class="subnavbtn" fill="#000000" viewBox="0 0 24 24">
							<path
								d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z" />
						</svg></a>
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
						<svg class="subnavbtn" fill="#000000" viewBox="0 0 24 24">
							<path
								d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z" />
						</svg></a>
					<div class="subnav-content">
						<a href="#">Snowboards</a>
						<a href="#">Snowboard Boots</a>
						<a href="#">Snowboard Bindings</a>
					</div> <!-- subnav-content end -->
				</div> <!-- subnav end -->
				<!-- apparel -->
				<div class="subnav">
					<a href="#">Apparel
						<svg class="subnavbtn" fill="#000000" viewBox="0 0 24 24">
							<path
								d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z" />
						</svg></a>
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
						<svg class="subnavbtn" fill="#000000" viewBox="0 0 24 24">
							<path
								d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z" />
						</svg></a>
					<div class="subnav-content">
						<a href="#">Bags</a>
						<a href="#">Helmets</a>
						<a href="#">Goggles</a>
					</div> <!-- subnav-content end -->
				</div> <!-- sub-nav end -->
				<a class="link" href="events">Events</a>
				<a class="link" href="contact">Contact Us</a>
				<a class="link" href="about-us">About Us</a>
				<a class="link" href="rentals">Rentals</a>
				<a class="link" href="faq">FAQ</a>
				<a class="link" href="services">Services</a>
			</nav>
		</div> <!-- menu end -->
	</header>