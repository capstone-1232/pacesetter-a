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
$security_info_two = get_field( "info", 266);
$security_list_one = get_field( "info", 264);
$security_list_two = get_field( "info", 265);

// additional information ACF
$additional_header = get_field( "info_header", 256);
$additional_list_one = get_field( "info", 267);
$additional_list_two = get_field( "info", 268);
$additional_list_three = get_field( "info", 269);
$additional_list_four = get_field( "info", 270);
$additional_list_five = get_field( "info", 271);
$additional_list_six = get_field( "info", 273);

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
    <ul>
        <li><?php if( $security_list_one ) {echo wp_kses_post( $security_list_one );} else {echo 'empty';}?></li>
        <li><?php if( $security_list_two ) {echo wp_kses_post( $security_list_two );} else {echo 'empty';}?></li>
    </ul>
    <p><?php if( $security_info_two ) {echo wp_kses_post( $security_info_two );} else {echo 'empty';}?></p>

    <!-- additional info -->
    <div>
        <h3><?php if( $additional_header ) {echo wp_kses_post( $additional_header );} else {echo 'empty';}?></h3>
        <div>
            <ul>
                <li><?php if( $additional_list_one ) {echo wp_kses_post( $additional_list_one );} else {echo 'empty';}?></li>
                <li><?php if( $additional_list_two ) {echo wp_kses_post( $additional_list_two );} else {echo 'empty';}?></li>
                <li><?php if( $additional_list_three ) {echo wp_kses_post( $additional_list_three );} else {echo 'empty';}?></li>
                <li><?php if( $additional_list_four ) {echo wp_kses_post( $additional_list_four );} else {echo 'empty';}?></li>
            </ul>
        </div>
        <div>
            <ul>
                <li><?php if( $additional_list_five ) {echo wp_kses_post( $additional_list_five );} else {echo 'empty';}?></li>
                <li><?php if( $additional_list_six ) {echo wp_kses_post( $additional_list_six );} else {echo 'empty';}?></li>
            </ul>
        </div>

        <h3>Damage Waiver Coverages</h3>
            <div>
                <ul>
                    <li>Applies to equipment damages while in the act of skiing on a ski hill. (See below for inclusions and exclusions)</li>
                    <li>ONLY applicable to regular ski rentals (junior & adult)</li>
                    <li>Damage waiver is not offered for snowboard rentals or demo ski rentals</li>
                    <li>$5 for the duration of the rental</li>
                    <li>Covers damages and breakage of equipment.</li>
                    <li>Management has final say as to what damages are covered by the optional damage waiver.</li>
                </ul>
                <p>Includes:</p>
                <ul>
                    <li>Bent or broken poles</li>
                    <li>Broken boot buckles</li>
                    <li>Ski base damage from accidental impact with rocks (must be deemed repairable by Pacesetter service shop technicians)</li>
                    <li>Damage must fall between the cost of a Major tune ($60) and a small base patch and edge repair up to $100.</li>
                </ul>
            </div> <!-- includes end -->
            <div>
                <p>Excludes</p>
                <ul>
                    <li>Bent skis,</li>
                    <li>Broken cores,</li>
                    <li>Damages caused by use of equipment in terrain parks and parking lots</li>
                    <li>Misuse</li>
                    <li>Neglect</li>
                    <li>Abuse</li>
                    <li>Damages caused by third party (ex: other service centers)</li>
                </ul>
                <ul>
                    <li>Does not cover theft, misplaced or stolen equipment.</li>
                    <li>Staff is NOT obligated to offer the damage waiver & the damage waiver cannot be added after the rented equipment has left the store.</li>
                </ul>
            </div> <!-- excludes end -->
        </div> <!-- damage waiver coverage end -->
    
    <!-- demo policy -->
    <div>
            <h3>Demo Purchase Policy</h3>
            <div>
            <p>Customers who decide that they would like to purchase a pair of skis
                that they took for demo are eligible for a credit from the rental of the skis
                that were rented.
                Maximum credit that can be used towards the purchase of a “new pair”
                of skis is two days of rental.
                (example $50 for the 1st day and $30 for the 2nd day – total of $80)
                The rental credit is to be used towards the purchase of a “new pair” of
                the same skis that were rented for demo and cannot be used towards
                any other product.
                Rental credit is only applicable to the purchase of a “new pair” of skis at
                regular price and cannot be used to purchase skis that are on sale.</p>
            </div> <!-- demo div 1 end -->
            <div>
                <p>If we do not have stock available to sell the customer a “new pair” of skis OR we cannot order a pair of skis from the supplier for the customer, we will consider selling the demo skis. If we agree to sell the demo skis, a price will be determined and the customer’s rental cost to demo the skis will not be applicable to the purchase of the set of demo skis. If the customer does not purchase a “new pair” of skis upon the return of the demo skis, they will have up to 30 days from date of rental return for the rental credit to be valid towards the purchase of a “new pair” of skis. The customer needs to retain the customer copy of the rental form and show store staff the form at the time of purchase to activate the rental credit for the purchase of a new pair of skis within the period explained above.</p>
            </div> <!-- demo div 2 end -->
    </div> <!-- demo purchase policy end -->
</div><!-- end rental info -->
