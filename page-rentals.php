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
$ski_type_one = get_field( "type", 324 );
$ski_type_two = get_field( "type", 325 );
$ski_type_three = get_field( "type", 326 );
$ski_package_one = get_field( "package", 319 );
$ski_package_two = get_field( "package", 318 );
$ski_package_three = get_field( "package", 320 );
$ski_demo_one = get_field( "demo", 321 );
$ski_demo_two = get_field( "demo", 322 );
$ski_demo_three = get_field( "demo", 323 );

// snowboard rentals ACF
$snowboard_header = get_field( "rental_header", 162 );
$snowboard_rental = get_field( "rental", 162 );
$snowboard_type_one = get_field( "type", 333 );
$snowboard_type_two = get_field( "type", 329 );
$snowboard_type_three = get_field( "type", 335 );
$snowboard_type_four = get_field( "type", 327 );
$snowboard_package_one = get_field( "package", 328 );
$snowboard_package_two = get_field( "package", 337 );
$snowboard_package_three = get_field( "package", 330 );
$snowboard_package_four = get_field( "package", 331 );

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
$coverages_list_one = get_field("info", 274);
$coverages_list_two = get_field("info", 275);
$coverages_list_three = get_field("info", 277);
$coverages_list_four = get_field("info", 279);
$coverages_list_five = get_field("info", 280);
$coverages_list_six = get_field("info", 281);
$coverages_list_seven = get_field("info", 290);
$coverages_list_eight = get_field("info", 303);
$coverages_list_nine = get_field("info", 306);
$coverages_ordered_one = get_field("info", 282);
$coverages_ordered_two = get_field("info", 284);
$coverages_ordered_three = get_field("info", 287);
$coverages_ordered_four = get_field("info", 292);
$coverages_ordered_five = get_field("info", 293);
$coverages_ordered_six = get_field("info", 295);
$coverages_ordered_seven = get_field("info", 296);
$coverages_ordered_eight = get_field("info", 298);
$coverages_ordered_nine = get_field("info", 299);
$coverages_ordered_ten = get_field("info", 302);


// demo purchase ACF
$demo_header = get_field( "info_header", 258);
$demo_info_one = get_field( "info", 305);
$demo_info_two = get_field( "info", 306);

 get_header();

?>

<!-- rentals -->
<h1>Rentals</h1>

<!-- <section class="rentals-padding"> -->

<div class="rentals-desc">
    <p>Renters are responsible for the equipment rented while it is in your possession for the duration of your rental. Return your equipment before 2pm on your drop-off day, in clean condition, to avoid additional charges. For equipment not returned or damaged, the renter will be charged full replacement value for the missing or damaged piece(s) of equipment. If the equipment that you rent is returned to us late, additional daily rental charges will apply for each day that they are returned late.</p>

    <h2>Ski and Snowboard</h2>
    <!-- rentals table -->
    <table>
        <tr>
            <th>Rental</th>
            <th>Type</th>
            <th>Basic Package</th>
            <th>Demo</th>
        </tr>
    
        <tr>
            <td>Skiing:<div><?php if( $ski_rental ) {echo wp_kses_post( $ski_rental );} else {echo 'empty';} ?></div></td>
            <td>
                <ul>
                    <li><?php if( $ski_type_one ) {echo wp_kses_post( $ski_type_one );} else {echo 'empty';} ?></li>
                    <li><?php if( $ski_type_two ) {echo wp_kses_post( $ski_type_two );} else {echo 'empty';} ?></li>
                    <li><?php if( $ski_type_three ) {echo wp_kses_post( $ski_type_three );} else {echo 'empty';} ?></li>
                </ul>
            </td>
            <td>
                <ul>
                    <li><?php if( $ski_package_one ) {echo wp_kses_post( $ski_package_one );} else {echo 'empty';} ?></li>
                    <li><?php if( $ski_package_two ) {echo wp_kses_post( $ski_package_two );} else {echo 'empty';} ?></li>
                    <li><?php if( $ski_package_three ) {echo wp_kses_post( $ski_package_three );} else {echo 'empty';} ?></li>
                </ul>
            </td>
            <td>
                <ul>
                    <li><?php if( $ski_demo_one ) {echo wp_kses_post( $ski_demo_one );} else {echo 'empty';} ?></li>
                    <li><?php if( $ski_demo_two ) {echo wp_kses_post( $ski_demo_two );} else {echo 'empty';} ?></li>
                    <li><?php if( $ski_demo_three ) {echo wp_kses_post( $ski_demo_three );} else {echo 'empty';} ?></li>
                </ul>
            </td>
        </tr>
    
        <tr>
            <td>Snowboarding: <div><?php if( $snowboard_rental ) {echo wp_kses_post( $snowboard_rental );} else {echo 'empty';} ?></div></td>
            <td>
                <ul>
                    <li><?php if( $snowboard_type_one ) {echo wp_kses_post( $snowboard_type_one );} else {echo 'empty';} ?></li>
                    <li><?php if( $snowboard_type_two ) {echo wp_kses_post( $snowboard_type_two );} else {echo 'empty';} ?></li>
                    <li><?php if( $snowboard_type_three ) {echo wp_kses_post( $snowboard_type_three );} else {echo 'empty';} ?></li>
                    <li><?php if( $snowboard_type_four ) {echo wp_kses_post( $snowboard_type_four );} else {echo 'empty';} ?></li>
                </ul>
            </td>
            <td>
                <ul>
                    <li><?php if( $snowboard_package_one ) {echo wp_kses_post( $snowboard_package_one );} else {echo 'empty';} ?></li>
                    <li><?php if( $snowboard_package_two ) {echo wp_kses_post( $snowboard_package_two );} else {echo 'empty';} ?></li>
                    <li><?php if( $snowboard_package_three ) {echo wp_kses_post( $snowboard_package_three );} else {echo 'empty';} ?></li>
                    <li><?php if( $snowboard_package_four ) {echo wp_kses_post( $snowboard_package_four );} else {echo 'empty';} ?></li>
                </ul>
            </td>
        </tr>
    </table>
    </div> <!-- end rentals table -->
</div> 

<div>

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

        <h3><?php if( $coverages_header ) {echo wp_kses_post( $coverages_header );} else    {echo 'empty';}?></h3>
            <div>
                <ul>
                    <li><?php if( $coverages_list_one ) {echo wp_kses_post( $coverages_list_one );} else    {echo 'empty';}?></li>
                    <li><?php if( $coverages_list_two ) {echo wp_kses_post( $coverages_list_two );} else    {echo 'empty';}?></li>
                    <li><?php if( $coverages_list_three ) {echo wp_kses_post( $coverages_list_three );} else    {echo 'empty';}?></li>
                    <li><?php if( $coverages_list_four ) {echo wp_kses_post( $coverages_list_four );} else    {echo 'empty';}?></li>
                    <li><?php if( $coverages_list_five ) {echo wp_kses_post( $coverages_list_five );} else    {echo 'empty';}?></li>
                    <li><?php if( $coverages_list_six ) {echo wp_kses_post( $coverages_list_six );} else    {echo 'empty';}?></li>
                </ul>
                <p>Includes:</p>
                <ul>
                    <li><?php if( $coverages_ordered_one ) {echo wp_kses_post( $coverages_ordered_one );} else    {echo 'empty';}?></li>
                    <li><?php if( $coverages_ordered_two ) {echo wp_kses_post( $coverages_ordered_two );} else    {echo 'empty';}?></li>
                    <li><?php if( $coverages_ordered_three ) {echo wp_kses_post( $coverages_ordered_three );} else    {echo 'empty';}?></li>
                    <li><?php if( $coverages_list_seven ) {echo wp_kses_post( $coverages_list_seven );} else    {echo 'empty';}?></li>
                </ul>
            </div> <!-- includes end -->
            <div>
                <p>Excludes</p>
                <ul>
                    <li><?php if( $coverages_ordered_four ) {echo wp_kses_post( $coverages_ordered_four );} else    {echo 'empty';}?></li>
                    <li><?php if( $coverages_ordered_five ) {echo wp_kses_post( $coverages_ordered_five );} else    {echo 'empty';}?></li>
                    <li><?php if( $coverages_ordered_six ) {echo wp_kses_post( $coverages_ordered_six );} else    {echo 'empty';}?></li>
                    <li><?php if( $coverages_ordered_seven ) {echo wp_kses_post( $coverages_ordered_seven );} else    {echo 'empty';}?></li>
                    <li><?php if( $coverages_ordered_eight ) {echo wp_kses_post( $coverages_ordered_eight );} else    {echo 'empty';}?></li>
                    <li><?php if( $coverages_ordered_nine ) {echo wp_kses_post( $coverages_ordered_nine );} else    {echo 'empty';}?></li>
                    <li><?php if( $coverages_ordered_ten ) {echo wp_kses_post( $coverages_ordered_ten );} else    {echo 'empty';}?></li>
                </ul>
                <ul>
                    <li><?php if( $coverages_list_eight ) {echo wp_kses_post( $coverages_list_eight );} else    {echo 'empty';}?></li>
                    <li><?php if( $coverages_list_nine ) {echo wp_kses_post( $coverages_ordered_nine );} else    {echo 'empty';}?></li>
                </ul>
            </div> <!-- excludes end -->
        </div> <!-- damage waiver coverage end -->
    
    <!-- demo policy -->
    <div>
            <h3>Demo Purchase Policy</h3>
            <div>
            <p><?php if( $demo_info_one ) {echo wp_kses_post( $demo_info_one );} else    {echo 'empty';}?></p>
            </div> <!-- demo div 1 end -->
            <div>
                <p><?php if( $demo_info_two ) {echo wp_kses_post( $demo_info_two );} else    {echo 'empty';}?></p>
            </div> <!-- demo div 2 end -->
    </div> <!-- demo purchase policy end -->
</div><!-- end rental info -->

<?php get_footer(); ?>
