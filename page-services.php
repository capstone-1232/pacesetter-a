<?php
/**
 * pacesetter services page
 *
 *
 * @package pacesetter
 */

/**
 */

//  full tune ACF
 $full_tune_type = get_field( "type_of_tune", 137 );
 $full_tune_description = get_field( "tune_description", 137 );
 $full_tune_ski = get_field( "ski_tune_price", 137 );
 $full_tune_snowboard = get_field( "snowboard_tune_price", 137 );

//  base grind only ACF
 $base_grind_type = get_field( "type_of_tune", 138 );
 $base_grind_description = get_field( "tune_description", 138 );
 $base_grind_ski = get_field( "ski_tune_price", 138 );
 $base_grind_snowboard = get_field( "snowboard_tune_price", 138 );

// major tune ACF
$major_tune_type = get_field( "type_of_tune", 139 );
$major_tune_description = get_field( "tune_description", 139 );
$major_tune_ski = get_field( "ski_tune_price", 139 );
$major_tune_snowboard = get_field( "snowboard_tune_price", 139 ); 

// hot wax ACF
$hot_wax_type = get_field( "type_of_tune", 143 );
$hot_wax_description = get_field( "tune_description", 143 );
$hot_wax_ski = get_field( "ski_tune_price", 143 );
$hot_wax_snowboard = get_field( "snowboard_tune_price", 143 ); 

// binding adjustments ACF
$binding_adjustments_type = get_field( "type_of_tune", 144 );
$binding_adjustments_description = get_field( "tune_description", 144 );
$binding_adjustments_ski = get_field( "ski_tune_price", 144 );
$binding_adjustments_snowboard = get_field( "snowboard_tune_price", 144 ); 

// binding install ACF
$binding_install_type = get_field( "type_of_tune", 145 );
$binding_install_description = get_field( "tune_description", 145 );
$binding_install_ski = get_field( "ski_tune_price", 145 );
$binding_install_snowboard = get_field( "snowboard_tune_price", 145 ); 

// heli coils ACF
$heli_coils_type = get_field( "type_of_tune", 146 );
$heli_coils_description = get_field( "tune_description", 146 );
$heli_coils_ski = get_field( "ski_tune_price", 146 );
$heli_coils_snowboard = get_field( "snowboard_tune_price", 146 ); 

// boot punching ACF
$boot_punching_type = get_field( "type_of_tune", 147 );
$boot_punching_description = get_field( "tune_description", 147 );
$boot_punching_ski = get_field( "ski_tune_price", 147 );
$boot_punching_snowboard = get_field( "snowboard_tune_price", 147 ); 

// boot stretching ACF
$boot_stretching_type = get_field( "type_of_tune", 148 );
$boot_stretching_description = get_field( "tune_description", 148 );
$boot_stretching_ski = get_field( "ski_tune_price", 148 );
$boot_stretching_snowboard = get_field( "snowboard_tune_price", 148 ); 

// heating of heat moldable liners ACF
$heat_type = get_field( "type_of_tune", 149 );
$heat_description = get_field( "tune_description", 149 );
$heat_ski = get_field( "ski_tune_price", 149 );
$heat_snowboard = get_field( "snowboard_tune_price", 149 ); 

// general labor ACF
$labor_type = get_field( "type_of_tune", 151 );
$labor_description = get_field( "tune_description", 151 );
$labor_ski = get_field( "ski_tune_price", 151 );
$labor_snowboard = get_field( "snowboard_tune_price", 151 ); 

 get_header();

?>
<h1>Services</h1>
<p>Renters are responsible for the equipment rented while it is in your possession for the duration of your rental. Return your equipment before 2pm on your drop-off day, in clean condition, to avoid additional charges. For equipment not returned or damaged, the renter will be charged full replacement value for the missing or damaged piece(s) of equipment. If the equipment that you rent is returned to us late, additional daily rental charges will apply for each day that they are returned late.</p>

<!-- ski and snowboard rentals table -->
<table>
    <tr>
        <th>Type of tune</th>
        <th>Skis</th>
        <th>Snowboard</th>
    </tr>

    <!-- full tune -->
    <tr>
        <td><?php if( $full_tune_type ) {echo wp_kses_post( $full_tune_type );} else {echo 'empty';} ?> <div><?php if( $full_tune_description ) {echo wp_kses_post( $full_tune_description );} else {echo 'empty';} ?> </div></td>
        <td><?php if( $full_tune_ski ) {echo wp_kses_post( $full_tune_ski );} else {echo 'empty';} ?> </td>
        <td><?php if( $full_tune_snowboard ) {echo wp_kses_post( $full_tune_snowboard );} else {echo 'empty';} ?> </td>  
    </tr> <!-- full tune end -->

    <!-- base grind -->
    <tr>
        <td><?php if( $base_grind_type ) {echo wp_kses_post( $base_grind_type );} else {echo 'empty';} ?> <div><?php if( $base_grind_description ) {echo wp_kses_post( $base_grind_description );} else {echo 'empty';} ?> </div></td>
        <td><?php if( $base_grind_ski ) {echo wp_kses_post( $base_grind_ski );} else {echo 'empty';} ?> </td>
        <td><?php if( $base_grind_snowboard ) {echo wp_kses_post( $base_grind_snowboard );} else {echo 'empty';} ?> </td>  
    </tr> <!-- base grind end -->

    <!-- major tune -->
    <tr>
       <td><?php if( $major_tune_type ) {echo wp_kses_post( $major_tune_type );} else {echo 'empty';} ?> <div><?php if( $major_tune_description ) {echo wp_kses_post( $major_tune_description );} else {echo 'empty';} ?> </div></td>
        <td><?php if( $major_tune_ski ) {echo wp_kses_post( $major_tune_ski );} else {echo 'empty';} ?> </td>
        <td><?php if( $major_tune_snowboard ) {echo wp_kses_post( $major_tune_snowboard );} else {echo 'empty';} ?> </td>  
    </tr> <!-- major tune end -->

    <!-- hot wax -->
    <tr>
        <td><?php if( $hot_wax_type ) {echo wp_kses_post( $hot_wax_type );} else {echo 'empty';} ?> <div><?php if( $hot_wax_description ) {echo wp_kses_post( $hot_wax_description );} else {echo 'empty';} ?> </div></td>
        <td><?php if( $hot_wax_ski ) {echo wp_kses_post( $hot_wax_ski );} else {echo 'empty';} ?> </td>
        <td><?php if( $hot_wax_snowboard ) {echo wp_kses_post( $hot_wax_snowboard );} else {echo 'empty';} ?> </td>  
    </tr> <!-- hot wax end -->

    <!-- binding adjustments -->
    <tr>
        <td><?php if( $binding_adjustments_type ) {echo wp_kses_post( $binding_adjustments_type );} else {echo 'empty';} ?> <div><?php if( $binding_adjustments_description ) {echo wp_kses_post( $binding_adjustments_description );} else {echo 'empty';} ?> </div></td>
        <td><?php if( $binding_adjustments_ski ) {echo wp_kses_post( $binding_adjustments_ski );} else {echo 'empty';} ?> </td>
        <td><?php if( $binding_adjustments_snowboard ) {echo wp_kses_post( $binding_adjustments_snowboard );} else {echo 'empty';} ?> </td>  
    </tr> <!-- binding adjustments end -->

     <!-- binding install -->
     <tr>
        <td><?php if( $binding_install_type ) {echo wp_kses_post( $binding_install_type );} else {echo 'empty';} ?> <div><?php if( $binding_install_description ) {echo wp_kses_post( $binding_install_description );} else {echo 'empty';} ?> </div></td>
        <td><?php if( $binding_install_ski ) {echo wp_kses_post( $binding_install_ski );} else {echo 'empty';} ?> </td>
        <td><?php if( $binding_install_snowboard ) {echo wp_kses_post( $binding_install_snowboard );} else {echo 'empty';} ?> </td>  
    </tr> <!-- binding install end -->

    <!-- heli coils -->
    <tr>
        <td><?php if( $heli_coils_type ) {echo wp_kses_post( $heli_coils_type );} else {echo 'empty';} ?> <div><?php if( $heli_coils_description ) {echo wp_kses_post( $heli_coils_description );} else {echo 'empty';} ?> </div></td>
        <td><?php if( $heli_coils_ski ) {echo wp_kses_post( $heli_coils_ski );} else {echo 'empty';} ?> </td>
        <td><?php if( $heli_coils_snowboard ) {echo wp_kses_post( $heli_coils_snowboard );} else {echo 'empty';} ?> </td>  
    </tr> <!-- heli coils end -->

     <!-- boot punching -->
     <tr>
        <td><?php if( $boot_punching_type ) {echo wp_kses_post( $boot_punching_type );} else {echo 'empty';} ?> <div><?php if( $boot_punching_description ) {echo wp_kses_post( $boot_punching_description );} else {echo 'empty';} ?> </div></td>
        <td><?php if( $boot_punching_ski ) {echo wp_kses_post( $boot_punching_ski );} else {echo 'empty';} ?> </td>
        <td><?php if( $boot_punching_snowboard ) {echo wp_kses_post( $boot_punching_snowboard );} else {echo 'empty';} ?> </td>  
    </tr> <!-- boot punching end -->

    <!-- boot stretching -->
    <tr>
        <td><?php if( $boot_stretching_type ) {echo wp_kses_post( $boot_stretching_type );} else {echo 'empty';} ?> <div><?php if( $boot_stretching_description ) {echo wp_kses_post( $boot_stretching_description );} else {echo 'empty';} ?> </div></td>
        <td><?php if( $boot_stretching_ski ) {echo wp_kses_post( $boot_stretching_ski );} else {echo 'empty';} ?> </td>
        <td><?php if( $boot_stretching_snowboard ) {echo wp_kses_post( $boot_stretching_snowboard );} else {echo 'empty';} ?> </td>  
    </tr> <!-- boot stretching end -->

     <!-- heating of heat moldable liners -->
     <tr>
        <td><?php if( $heat_type ) {echo wp_kses_post( $heat_type );} else {echo 'empty';} ?> <div><?php if( $heat_description ) {echo wp_kses_post( $heat_description );} else {echo 'empty';} ?> </div></td>
        <td><?php if( $heat_ski ) {echo wp_kses_post( $heat_ski );} else {echo 'empty';} ?> </td>
        <td><?php if( $heat_snowboard ) {echo wp_kses_post( $heat_snowboard );} else {echo 'empty';} ?> </td>  
    </tr> <!-- heating of heat moldable liners end -->

     <!-- general labor rate -->
     <tr>
        <td><?php if( $labor_type ) {echo wp_kses_post( $labor_type );} else {echo 'empty';} ?> <div><?php if( $labor_description ) {echo wp_kses_post( $labor_description );} else {echo 'empty';} ?> </div></td>
        <td><?php if( $labor_ski ) {echo wp_kses_post( $labor_ski );} else {echo 'empty';} ?> </td>
        <td><?php if( $labor_snowboard ) {echo wp_kses_post( $labor_snowboard );} else {echo 'empty';} ?> </td>  
    </tr> <!-- general labor rate end -->
    
<?php get_footer(); ?>