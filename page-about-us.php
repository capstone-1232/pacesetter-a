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


 get_header();

?>

<h1>About Us</h1>

<div class="first-block">
    <div class="history">
        <h2><?php if( $history_header ) {echo wp_kses_post( $history_header );} else {echo 'empty';} ?></h2>
        <p><?php if( $history_info ) {echo wp_kses_post( $history_info );} else {echo 'empty';} ?></p>
    </div>
    
    <div class="expertise">
        <h2><?php if( $expertise_header ) {echo wp_kses_post( $expertise_header );} else {echo 'empty';} ?></h2>
        <p><?php if( $expertise_info ) {echo wp_kses_post( $expertise_info );} else {echo 'empty';} ?></p>
    </div>
</div>

<div class="second-block">
    <div class="winter">
        <h2><?php if( $wonderland_header ) {echo wp_kses_post( $wonderland_header );} else {echo 'empty';} ?></h2>
        <p><?php if( $wonderland_info ) {echo wp_kses_post( $wonderland_info );} else {echo 'empty';} ?>
        </p>
    </div>
    <div class="service">
        <h2><?php if( $service_header ) {echo wp_kses_post( $service_header );} else {echo 'empty';} ?></h2>
        <p><?php if( $service_info ) {echo wp_kses_post( $service_info );} else {echo 'empty';} ?></p>
    </div>
</div>

<div class="third-block">
    <div class="diverse">
        <h2><?php if( $products_header ) {echo wp_kses_post( $products_header );} else {echo 'empty';} ?></h2>
        <p><?php if( $products_info ) {echo wp_kses_post( $products_info );} else {echo 'empty';} ?></p>
    </div>
    <div class="community">
        <h2><?php if( $community_header ) {echo wp_kses_post( $community_header );} else {echo 'empty';} ?></h2>
        <p><?php if( $community_info ) {echo wp_kses_post( $community_info );} else {echo 'empty';} ?></p>
    </div>
</div>

<?php get_footer() ?>