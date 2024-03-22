<?php
/**
 * rentals page
 *
 *
 * @package pacesetter
 */

/**
 */

//  skiing rental ACF
$ski_header = get_field( "rental_header", 161 );
$ski_rental = get_field( "rental", 161 );
$ski_type = get_field( "type", 161 );
$ski_package = get_field( "package", 161 );
$ski_demo = get_field( "demo", 161 );

// snowboard rentals ACF
$snowboard_header = get_field( "rental_header", 162 );
$snowboard_rental = get_field( "rental", 162 );
$snowboard_type = get_field( "type", 162 );
$snowboard_package = get_field( "package", 162 );

// damage waiver ACF
$damage_header = get_field( "info_header", 254);
$damage_info = get_field( "info", 254);

// security deposit ACF
$security_header = get_field( "info_header", 255);
$security_info = get_field( "info", 255);

// additional information ACF
$additional_header = get_field( "info_header", 256);
$additional_info = get_field( "info", 256);

// damage waiver coverages ACF
$coverages_header = get_field( "info_header", 257);
$coverages_info = get_field( "info", 257);

// demo purchase ACF
$demo_header = get_field( "info_header", 258);
$demo_info = get_field( "info", 258);

 get_header();

?>

<!-- rentals -->
<h1>Rentals</h1>

<!-- <section class="rentals-padding"> -->

<div class="rentals-desc">
    <p>Renters are responsible for the equipment rented while it is in your possession for the duration of your rental. Return your equipment before 2pm on your drop-off day, in clean condition, to avoid additional charges. For equipment not returned or damaged, the renter will be charged full replacement value for the missing or damaged piece(s) of equipment. If the equipment that you rent is returned to us late, additional daily rental charges will apply for each day that they are returned late.</p>

    <h2>Ski and Snowboard</h2>
</div> 

<div>
    <!-- rentals table -->
    <table class="rentals-table">
        <tr class="desktop-only">
            <th>Rental</th>
            <th>Type</th>
            <th>Package</th>
            <th>Demo</th>
        </tr>

        <tr>
            <th class="rental hidden">Skiing</th>
            <td class="rental-desc"><?php if( $ski_header ) {echo wp_kses_post( $ski_header );} else {echo 'empty';} ?><div><?php if( $ski_rental ) {echo wp_kses_post( $ski_rental );} else {echo 'empty';} ?></div></td>
            <th class="rental-type hidden">Type</th>
            <th class="package hidden">Package</th>
            <td class="type-desc"><?php if( $ski_type ) {echo wp_kses_post( $ski_type );} else {echo 'empty';} ?></td>
            <td class="package-desc"><?php if( $ski_package ) {echo wp_kses_post( $ski_package );} else {echo 'empty';}?></td>
            <th class="demo hidden">Demo</th>
            <td class="demo-desc"><?php if( $ski_demo ) {echo wp_kses_post( $ski_demo );} else {echo 'empty';}?></td>
        </tr>

        <tr>
            <th class="rental hidden">Snowboard</th>
            <td class="rental-desc"><?php if( $snowboard_header ) {echo wp_kses_post( $snowboard_header );} else {echo 'empty';}?><div><?php if( $snowboard_rental ) {echo wp_kses_post( $snowboard_rental );} else {echo 'empty';} ?></div></td>
            <th class="rental-type hidden">Type</th>
            <th class="package hidden">Package</th>
            <td class="type-desc"><?php if( $snowboard_type ) {echo wp_kses_post( $snowboard_type );} else {echo 'empty';} ?></td>
            <td class="package-desc"><?php if( $snowboard_package ) {echo wp_kses_post( $snowboard_package );} else {echo 'empty';} ?></td>
            <th class="demo hidden">Demo</th>
            <td class="demo-desc">N/A</td>
        </tr>
    </table>
</div> <!-- end rentals table -->

<!-- rentals info -->
<div class="rentals-info">
    <!-- damage waiver -->
    <h3><?php if( $damage_header ) {echo wp_kses_post( $damage_header );} else {echo 'empty';}?></h3>
    <p><?php if( $damage_info ) {echo wp_kses_post( $damage_info );} else {echo 'empty';}?></p>

    <!-- security deposit -->
    <h3><?php if( $security_header ) {echo wp_kses_post( $security_header );} else {echo 'empty';}?></h3>
    <p><?php if( $security_info ) {echo wp_kses_post( $security_info );} else {echo 'empty';}?></p>

    <!-- additional info -->
    <div>
        <h3><?php if( $additional_header ) {echo wp_kses_post( $additional_header );} else {echo 'empty';}?></h3>
        <p><?php if( $additional_info ) {echo wp_kses_post( $additional_info );} else {echo 'empty';}?></p>
    </div> <!-- additional info end -->

        <!-- damage waiver coverages -->
        <div>
</div>
</div>


    
<?php get_footer(); ?>