<?php
/**
 * pacesetter about us page
 *
 *
 * @package pacesetter
 */

/**
 */

//  our history ACF
$history_header = get_field( "header", 173 );
$history_info = get_field( "info", 173 );

// unmatched expertise acf
$expertise_header = get_field( "header", 174 );
$expertise_info = get_field( "info", 174 );

// winter wonderland acf
$wonderland_header = get_field( "header", 175 );
$wonderland_info = get_field( "info", 175 );

// services beyond the shop acf
$services_header = get_field( "header", 176 );
$services_info = get_field( "info", 176 );

// diverse range of products acf
$products_header = get_field( "header", 177 );
$products_info = get_field( "info", 177 );

//  community events ACF
 $community_header = get_field( "header", 178 );
 $community_info = get_field( "info", 178);

//  images
$first_block = get_field( "about_us_image", 183);
$first_block_size = $first_block['sizes']['large'];
$first_block_alt = $first_block['alt'];
$second_block = get_field( "about_us_image", 185);
$second_block_size = $second_block['sizes']['large'];
$second_block_alt = $second_block['alt'];
$third_block = get_field( "about_us_image", 188);
$third_block_size = $third_block['sizes']['large'];
$third_block_alt = $third_block['alt'];


 get_header();

?>

<!-- first block image -->

<div class="first-block">
        <img class="about-image" src="<?php echo $first_block_size ?>" alt="<?php echo $first_block_alt ?>">
        <h1>About Us</h1>
    <div class="about-text">
        <div class="history">
            <h3><?php if( $history_header ) {echo wp_kses_post( $history_header );} else {echo 'empty';} ?></h3>
            <p><?php if( $history_info ) {echo wp_kses_post( $history_info );} else {echo 'empty';} ?></p>
        </div>
        
        <div class="expertise">
            <h3><?php if( $expertise_header ) {echo wp_kses_post( $expertise_header );} else {echo 'empty';} ?></h3>
            <p><?php if( $expertise_info ) {echo wp_kses_post( $expertise_info );} else {echo 'empty';} ?></p>
        </div>
    </div>
</div>

<!-- second block image -->

<div class="second-block">
        <img class="about-image" src="<?php echo $second_block_size ?>" alt="<?php echo "$second_block_alt" ?>"> 
    <div class="about-text">
        <div class="winter">
            <h3><?php if( $wonderland_header ) {echo wp_kses_post( $wonderland_header );} else {echo 'empty';} ?></h3>
            <p><?php if( $wonderland_info ) {echo wp_kses_post( $wonderland_info );} else {echo 'empty';} ?>
            </p>
        </div>
        <div class="service">
            <h3><?php if( $services_header ) {echo wp_kses_post( $services_header );} else {echo 'empty';} ?></h3>
            <p><?php if( $services_info ) {echo wp_kses_post( $services_info );} else {echo 'empty';} ?></p>
        </div>
    </div>
</div>

<!-- third block image -->

<div class="third-block">
        <img class="about-image" src="<?php echo $third_block_size ?>" alt="<?php echo $third_block_alt ?>">
    <div class="about-text">
        <div class="diverse">
            <h3><?php if( $products_header ) {echo wp_kses_post( $products_header );} else {echo 'empty';} ?></h3>
            <p><?php if( $products_info ) {echo wp_kses_post( $products_info );} else {echo 'empty';} ?></p>
        </div>
        <div class="community">
            <h3><?php if( $community_header ) {echo wp_kses_post( $community_header );} else {echo 'empty';} ?></h3>
            <p><?php if( $community_info ) {echo wp_kses_post( $community_info );} else {echo 'empty';} ?></p>
        </div>
    </div> 
</div>

<?php get_footer() ?>