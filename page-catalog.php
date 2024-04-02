<?php
/**
 * pacesetter catalog page
 *
 *
 * @package pacesetter
 */

/**
 */

 get_header();

?>

<div>
    <h1></h1> <!-- updating header based on product page -->
    <div class="filter-items">
		<div class="subnav">
        <p>Filter:</p>
		<a href="#">Category</a><i class="fa fa-caret-down"></i>
        <div class="subfilter-content">
		<input type="checkbox" class="filter-checkbox" id="skis" name="category[]" value="skis">
		<label for="skis">Skis</label>
		<input type="checkbox" class="filter-checkbox" id="ski-boots" name="category[]" value="ski-boots">
		<label for="ski-boots">Ski Boots</label>
        </div>
		</div> <!-- subnav-content end -->
		<a href="#">Category</a><i class="fa fa-caret-down"></i>
		<div class="subnav-content">
		<a href="#">Skis</a>
		<a href="#">Ski Boots</a>
		<a href="#">Poles</a>
		<a href="#">Snowboards</a>
		<a href="#">Snowboard Boots</a>
		<a href="#">Snowboard Bindings</a>
		</div> <!-- subnav-content end -->
		<a href="#">Apparel</a><i class="fa fa-caret-down"></i>
		<div class="subnav-content">
		<a href="#">Mens</a>
		<a href="#">Womens</a>
		<a href="#">Kids</a>
		<a href="#">Accessories</a>`
		</div> <!-- subnav-content end -->
		<a href="#">Accessories</a><i class="fa fa-caret-down"></i>
		<div class="subnav-content">
		<a href="#">Bags</a>
		<a href="#">Helmets</a>
		<a href="#">Goggles</a>`
		</div> <!-- subnav-content end -->
			<a href="#">Services</a>
			<a href="#">Rentals</a>
		</div> <!-- sub-nav end -->
	</div> <!-- nav-items end -->
	<div id="main" class="row">

	<div>
	<?php  
// Get the category from the URL parameter
$filter_category = isset( $_GET['category'] ) ? sanitize_text_field( $_GET['category'] ) : '';

// Query arguments for WP_Query
$args = array(
    'post_type' => 'product',
);

// If a category is provided in the URL, add it to the query arguments
if ( ! empty( $filter_category ) ) {
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'product_cat',
            'field'    => 'slug',
            'terms'    => $filter_category,
        ),
    );
}

// WP_Query to fetch products based on query arguments
$loop = new WP_Query( $args );

// Loop through the products and display them
while ( $loop->have_posts() ) : $loop->the_post();
    global $product;
    // Display product information here
endwhile;

// Reset post data
wp_reset_postdata();

?>


<?php get_footer() ?>