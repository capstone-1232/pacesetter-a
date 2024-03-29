<?php
/**
 * pacesetter faq page
 *
 *
 * @package pacesetter
 */

/**
 */

//  10 Steps ACF
$ten_header = get_field( "faq_header", 201 );
$ten_info = get_field( "faq_info", 201 );
$ten_pdf = get_field( "pdf", 201 );
if( $ten_pdf ) { 
    $ten_pdf_url = $ten_pdf['url'];
    $ten_pdf_title = $ten_pdf['title'];
    $ten_pdf_target = $ten_pdf['target'] ? $ten_pdf['target'] : '_self';
}

// boot fit ACF
$boot_header = get_field( "faq_header", 202 );
$boot_info = get_field( "faq_info", 202 );
$boot_pdf = get_field( "pdf", 202);
if( $boot_pdf ) { 
    $boot_pdf_url = $boot_pdf['url'];
    $boot_pdf_title = $boot_pdf['title'];
    $boot_pdf_target = $boot_pdf['target'] ? $boot_pdf['target'] : '_self';
}

// boot stretching ACF
$stretching_header = get_field( "faq_header", 203);
$stretching_info = get_field( "faq_info", 203);
$stretching_pdf = get_field( "pdf", 203);
if( $stretching_pdf ) { 
    $stretching_pdf_url = $stretching_pdf['url'];
    $stretching_pdf_title = $stretching_pdf['title'];
    $stretching_pdf_target = $stretching_pdf['target'] ? $stretching_pdf['target'] : '_self';
}

// cold hands ACF
$cold_header = get_field( "faq_header", 205);
$cold_info = get_field( "faq_info", 205);
$cold_pdf = get_field( "pdf", 205);
if( $cold_pdf ) { 
    $cold_pdf_url = $cold_pdf['url'];
    $cold_pdf_title = $cold_pdf['title'];
    $cold_pdf_target = $cold_pdf['target'] ? $cold_pdf['target'] : '_self';
}

// goggle care ACF
$goggle_header = get_field( "faq_header", 207);
$goggle_info = get_field( "faq_info", 207);
$goggle_pdf = get_field( "pdf", 207);
if( $goggle_pdf ) { 
    $goggle_pdf_url = $goggle_pdf['url'];
    $goggle_pdf_title = $goggle_pdf['title'];
    $goggle_pdf_target = $goggle_pdf['target'] ? $goggle_pdf['target'] : '_self';
}


// heated product ACF
$heated_header = get_field( "faq_header", 209);
$heated_info = get_field( "faq_info", 209);
$heated_pdf = get_field( "pdf", 209);
if( $heated_pdf ) { 
    $heated_pdf_url = $heated_pdf['url'];
    $heated_pdf_title = $heated_pdf['title'];
    $heated_pdf_target = $heated_pdf['target'] ? $heated_pdf['target'] : '_self';
}

// helmet repalcement ACF
$helmet_header = get_field( "faq_header", 212);
$helmet_info = get_field( "faq_info", 212);
$helmet_pdf = get_field( "pdf", 212);
if( $helmet_pdf ) { 
    $helmet_pdf_url = $helmet_pdf['url'];
    $helmet_pdf_title = $helmet_pdf['title'];
    $helmet_pdf_target = $helmet_pdf['target'] ? $helmet_pdf['target'] : '_self';
}

// storeing ski gear ACF
$store_header = get_field( "faq_header", 213);
$store_info = get_field( "faq_info", 213);
$store_pdf = get_field( "pdf", 213);
if( $store_pdf ) { 
    $store_pdf_url = $store_pdf['url'];
    $store_pdf_title = $store_pdf['title'];
    $store_pdf_target = $store_pdf['target'] ? $store_pdf['target'] : '_self';
}

// race ski length ACF
$race_length_header = get_field( "faq_header", 214);
$race_length_info = get_field( "faq_info", 214);
$race_length_pdf = get_field( "pdf", 214);
if( $race_length_pdf ) { 
    $race_length_pdf_url = $race_length_pdf['url'];
    $race_length_pdf_title = $race_length_pdf['title'];
    $race_length_pdf_target = $race_length_pdf['target'] ? $race_length_pdf['target'] : '_self';
}

// race service ACF
$race_service_header = get_field( "faq_header", 215);
$race_service_info = get_field( "faq_info", 215);
$race_service_pdf = get_field( "pdf", 215); 
if( $race_service_pdf ) { 
    $race_service_pdf_url = $race_service_pdf['url'];
    $race_service_pdf_title = $race_service_pdf['title'];
    $race_service_pdf_target = $race_service_pdf['target'] ? $race_service_pdf['target'] : '_self';
}

// ski tuneing wax ACF
$tuneing_header = get_field( "faq_header", 216);
$tuneing_info = get_field( "faq_info", 216);
$tuneing_pdf = get_field( "pdf", 216);
if( $tuneing_pdf ) { 
    $tuneing_pdf_url = $tuneing_pdf['url'];
    $tuneing_pdf_title = $tuneing_pdf['title'];
    $tuneing_pdf_target = $tuneing_pdf['target'] ? $tuneing_pdf['target'] : '_self';
}

// lowest price ACF
$lowest_header = get_field( "faq_header", 217);
$lowest_info = get_field( "faq_info", 217);
$lowest_pdf = get_field( "pdf", 217);
if( $lowest_pdf ) { 
    $lowest_pdf_url = $lowest_pdf['url'];
    $lowest_pdf_title = $lowest_pdf['title'];
    $lowest_pdf_target = $lowest_pdf['target'] ? $lowest_pdf['target'] : '_self';
}

// after purchase info ACF
$purchase_header = get_field( "faq_header", 218);
$purchase_info = get_field( "faq_info", 218);
$purchase_pdf = get_field( "pdf", 218);
if( $purchase_pdf ) { 
    $purchase_pdf_url = $purchase_pdf['url'];
    $purchase_pdf_title = $purchase_pdf['title'];
    $purchase_pdf_target = $purchase_pdf['target'] ? $purchase_pdf['target'] : '_self';
}

 get_header();

?>

<h1>FAQ</h1>

<!-- equipment maintenance -->
<div class="faq-page">
<div>
  <h2>Equipment Maintenance & Services that can Help</h2>  
  <p>Some advice on how to maintain your equipment to keep it in top shape for when you hit the slopes, and what you should consider if your equipment just isn't fitting right.</p>
</div>

<!-- 10 steps boot fit -->
<div class="faq-card">
    <div>
        <h3><?php if( $ten_header ) {echo wp_kses_post( $ten_header );} else {echo 'empty';} ?></h3>
        <p><?php if( $ten_info ) {echo wp_kses_post( $ten_info );} else {echo 'empty';} ?></p>
    </div>
    <div class="download-button">
        <a href="<?php echo esc_url( $ten_pdf_url ); ?>" target="<?php echo esc_attr( $ten_pdf_target ); ?>"><?php echo esc_html( $ten_pdf_title ); ?>
        <svg fill="none" stroke="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <g fill="#000"> <path d="m12.554 16.506c-0.1421 0.1554-0.3429 0.2439-0.5535 0.2439s-0.4114-0.0885-0.5535-0.2439l-4-4.375c-0.2795-0.3057-0.25826-0.7801 0.04744-1.0596 0.30571-0.2795 0.7801-0.2583 1.0596 0.0474l2.6965 2.9493v-11.068c0-0.41421 0.3358-0.75 0.75-0.75s0.75 0.33579 0.75 0.75v11.068l2.6965-2.9493c0.2795-0.3057 0.7539-0.3269 1.0596-0.0474s0.3269 0.7539 0.0474 1.0596l-4 4.375z"/> <path d="m3.75 15c0-0.4142-0.33578-0.75-0.75-0.75-0.41421 0-0.75 0.3358-0.75 0.75v0.0549c-2e-5 1.3676-4e-5 2.4699 0.11652 3.3369 0.12102 0.9001 0.37991 1.6579 0.98183 2.2598 0.60192 0.602 1.3598 0.8609 2.2599 0.9819 0.86697 0.1165 1.9693 0.1165 3.3369 0.1165h6.1098c1.3676 0 2.4699 0 3.3369-0.1165 0.9001-0.121 1.6579-0.3799 2.2599-0.9819 0.6019-0.6019 0.8608-1.3597 0.9818-2.2598 0.1165-0.867 0.1165-1.9693 0.1165-3.3369v-0.0549c0-0.4142-0.3358-0.75-0.75-0.75s-0.75 0.3358-0.75 0.75c0 1.4354-0.0016 2.4365-0.1031 3.1919-0.0987 0.7338-0.2791 1.1223-0.5559 1.3991s-0.6653 0.4572-1.3991 0.5559c-0.7554 0.1015-1.7565 0.1031-3.1919 0.1031h-6c-1.4354 0-2.4365-0.0016-3.1919-0.1031-0.73377-0.0987-1.1224-0.2791-1.3991-0.5559s-0.45721-0.6653-0.55586-1.3991c-0.10156-0.7554-0.10315-1.7565-0.10315-3.1919z"/></g></svg></a>
        </div>
    </div> <!-- 10 steps boot fit end -->

<!-- boot fit love -->
<div class="faq-card">
    <div>
        <h3><?php if( $boot_header ) {echo wp_kses_post( $boot_header );} else {echo 'empty';} ?></h3>
        <p><?php if( $boot_info ) {echo wp_kses_post( $boot_info );} else {echo 'empty';} ?></p>
    </div>
    <div class="download-button">
        <a href="<?php echo esc_url( $boot_pdf_url ); ?>" target="<?php echo esc_attr( $boot_pdf_target ); ?>"><?php echo esc_html( $boot_pdf_title ); ?>
        <svg fill="none" stroke="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <g fill="#000"> <path d="m12.554 16.506c-0.1421 0.1554-0.3429 0.2439-0.5535 0.2439s-0.4114-0.0885-0.5535-0.2439l-4-4.375c-0.2795-0.3057-0.25826-0.7801 0.04744-1.0596 0.30571-0.2795 0.7801-0.2583 1.0596 0.0474l2.6965 2.9493v-11.068c0-0.41421 0.3358-0.75 0.75-0.75s0.75 0.33579 0.75 0.75v11.068l2.6965-2.9493c0.2795-0.3057 0.7539-0.3269 1.0596-0.0474s0.3269 0.7539 0.0474 1.0596l-4 4.375z"/> <path d="m3.75 15c0-0.4142-0.33578-0.75-0.75-0.75-0.41421 0-0.75 0.3358-0.75 0.75v0.0549c-2e-5 1.3676-4e-5 2.4699 0.11652 3.3369 0.12102 0.9001 0.37991 1.6579 0.98183 2.2598 0.60192 0.602 1.3598 0.8609 2.2599 0.9819 0.86697 0.1165 1.9693 0.1165 3.3369 0.1165h6.1098c1.3676 0 2.4699 0 3.3369-0.1165 0.9001-0.121 1.6579-0.3799 2.2599-0.9819 0.6019-0.6019 0.8608-1.3597 0.9818-2.2598 0.1165-0.867 0.1165-1.9693 0.1165-3.3369v-0.0549c0-0.4142-0.3358-0.75-0.75-0.75s-0.75 0.3358-0.75 0.75c0 1.4354-0.0016 2.4365-0.1031 3.1919-0.0987 0.7338-0.2791 1.1223-0.5559 1.3991s-0.6653 0.4572-1.3991 0.5559c-0.7554 0.1015-1.7565 0.1031-3.1919 0.1031h-6c-1.4354 0-2.4365-0.0016-3.1919-0.1031-0.73377-0.0987-1.1224-0.2791-1.3991-0.5559s-0.45721-0.6653-0.55586-1.3991c-0.10156-0.7554-0.10315-1.7565-0.10315-3.1919z"/></g></svg></a>
    </div>
</div> <!-- boot fit love end -->

<!-- boot strecthing -->
<div class="faq-card">
    <div>
        <h3><?php if( $stretching_header ) {echo wp_kses_post( $stretching_header );} else {echo 'empty';} ?></h3>
        <p><?php if( $stretching_info ) {echo wp_kses_post( $stretching_info );} else {echo 'empty';} ?></p>
    </div>
    <div class="download-button">
        <a href="<?php echo esc_url( $stretching_pdf_url ); ?>" target="<?php echo esc_attr( $stretching_pdf_target ); ?>"><?php echo esc_html( $stretching_pdf_title ); ?>
        <svg fill="none" stroke="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <g fill="#000"> <path d="m12.554 16.506c-0.1421 0.1554-0.3429 0.2439-0.5535 0.2439s-0.4114-0.0885-0.5535-0.2439l-4-4.375c-0.2795-0.3057-0.25826-0.7801 0.04744-1.0596 0.30571-0.2795 0.7801-0.2583 1.0596 0.0474l2.6965 2.9493v-11.068c0-0.41421 0.3358-0.75 0.75-0.75s0.75 0.33579 0.75 0.75v11.068l2.6965-2.9493c0.2795-0.3057 0.7539-0.3269 1.0596-0.0474s0.3269 0.7539 0.0474 1.0596l-4 4.375z"/> <path d="m3.75 15c0-0.4142-0.33578-0.75-0.75-0.75-0.41421 0-0.75 0.3358-0.75 0.75v0.0549c-2e-5 1.3676-4e-5 2.4699 0.11652 3.3369 0.12102 0.9001 0.37991 1.6579 0.98183 2.2598 0.60192 0.602 1.3598 0.8609 2.2599 0.9819 0.86697 0.1165 1.9693 0.1165 3.3369 0.1165h6.1098c1.3676 0 2.4699 0 3.3369-0.1165 0.9001-0.121 1.6579-0.3799 2.2599-0.9819 0.6019-0.6019 0.8608-1.3597 0.9818-2.2598 0.1165-0.867 0.1165-1.9693 0.1165-3.3369v-0.0549c0-0.4142-0.3358-0.75-0.75-0.75s-0.75 0.3358-0.75 0.75c0 1.4354-0.0016 2.4365-0.1031 3.1919-0.0987 0.7338-0.2791 1.1223-0.5559 1.3991s-0.6653 0.4572-1.3991 0.5559c-0.7554 0.1015-1.7565 0.1031-3.1919 0.1031h-6c-1.4354 0-2.4365-0.0016-3.1919-0.1031-0.73377-0.0987-1.1224-0.2791-1.3991-0.5559s-0.45721-0.6653-0.55586-1.3991c-0.10156-0.7554-0.10315-1.7565-0.10315-3.1919z"/></g></svg></a>
    </div>
</div> <!-- boot streching end -->

<!-- cold hands -->
<div class="faq-card">
    <div>
        <h3><?php if( $cold_header ) {echo wp_kses_post( $cold_header );} else {echo 'empty';} ?></h3>
        <p><?php if( $cold_info ) {echo wp_kses_post( $cold_info );} else {echo 'empty';} ?></p>
    </div>
    <div class="download-button">
        <a href="<?php echo esc_url( $cold_pdf_url ); ?>" target="<?php echo esc_attr( $cold_pdf_target ); ?>"><?php echo esc_html( $cold_pdf_title ); ?>
        <svg fill="none" stroke="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <g fill="#000"> <path d="m12.554 16.506c-0.1421 0.1554-0.3429 0.2439-0.5535 0.2439s-0.4114-0.0885-0.5535-0.2439l-4-4.375c-0.2795-0.3057-0.25826-0.7801 0.04744-1.0596 0.30571-0.2795 0.7801-0.2583 1.0596 0.0474l2.6965 2.9493v-11.068c0-0.41421 0.3358-0.75 0.75-0.75s0.75 0.33579 0.75 0.75v11.068l2.6965-2.9493c0.2795-0.3057 0.7539-0.3269 1.0596-0.0474s0.3269 0.7539 0.0474 1.0596l-4 4.375z"/> <path d="m3.75 15c0-0.4142-0.33578-0.75-0.75-0.75-0.41421 0-0.75 0.3358-0.75 0.75v0.0549c-2e-5 1.3676-4e-5 2.4699 0.11652 3.3369 0.12102 0.9001 0.37991 1.6579 0.98183 2.2598 0.60192 0.602 1.3598 0.8609 2.2599 0.9819 0.86697 0.1165 1.9693 0.1165 3.3369 0.1165h6.1098c1.3676 0 2.4699 0 3.3369-0.1165 0.9001-0.121 1.6579-0.3799 2.2599-0.9819 0.6019-0.6019 0.8608-1.3597 0.9818-2.2598 0.1165-0.867 0.1165-1.9693 0.1165-3.3369v-0.0549c0-0.4142-0.3358-0.75-0.75-0.75s-0.75 0.3358-0.75 0.75c0 1.4354-0.0016 2.4365-0.1031 3.1919-0.0987 0.7338-0.2791 1.1223-0.5559 1.3991s-0.6653 0.4572-1.3991 0.5559c-0.7554 0.1015-1.7565 0.1031-3.1919 0.1031h-6c-1.4354 0-2.4365-0.0016-3.1919-0.1031-0.73377-0.0987-1.1224-0.2791-1.3991-0.5559s-0.45721-0.6653-0.55586-1.3991c-0.10156-0.7554-0.10315-1.7565-0.10315-3.1919z"/></g></svg></a>
    </div>
</div> <!-- cold hands end -->

<!-- goggle care -->
<div class="faq-card">
    <div>
        <h3><?php if( $goggle_header ) {echo wp_kses_post( $goggle_header );} else {echo 'empty';} ?></h3>
        <p><?php if( $goggle_info ) {echo wp_kses_post( $goggle_info );} else {echo 'empty';} ?></p>
    </div>
    <div class="download-button">
        <a href="<?php echo esc_url( $goggle_pdf_url ); ?>" target="<?php echo esc_attr( $goggle_pdf_target ); ?>"><?php echo esc_html( $goggle_pdf_title ); ?>
        <svg fill="none" stroke="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <g fill="#000"> <path d="m12.554 16.506c-0.1421 0.1554-0.3429 0.2439-0.5535 0.2439s-0.4114-0.0885-0.5535-0.2439l-4-4.375c-0.2795-0.3057-0.25826-0.7801 0.04744-1.0596 0.30571-0.2795 0.7801-0.2583 1.0596 0.0474l2.6965 2.9493v-11.068c0-0.41421 0.3358-0.75 0.75-0.75s0.75 0.33579 0.75 0.75v11.068l2.6965-2.9493c0.2795-0.3057 0.7539-0.3269 1.0596-0.0474s0.3269 0.7539 0.0474 1.0596l-4 4.375z"/> <path d="m3.75 15c0-0.4142-0.33578-0.75-0.75-0.75-0.41421 0-0.75 0.3358-0.75 0.75v0.0549c-2e-5 1.3676-4e-5 2.4699 0.11652 3.3369 0.12102 0.9001 0.37991 1.6579 0.98183 2.2598 0.60192 0.602 1.3598 0.8609 2.2599 0.9819 0.86697 0.1165 1.9693 0.1165 3.3369 0.1165h6.1098c1.3676 0 2.4699 0 3.3369-0.1165 0.9001-0.121 1.6579-0.3799 2.2599-0.9819 0.6019-0.6019 0.8608-1.3597 0.9818-2.2598 0.1165-0.867 0.1165-1.9693 0.1165-3.3369v-0.0549c0-0.4142-0.3358-0.75-0.75-0.75s-0.75 0.3358-0.75 0.75c0 1.4354-0.0016 2.4365-0.1031 3.1919-0.0987 0.7338-0.2791 1.1223-0.5559 1.3991s-0.6653 0.4572-1.3991 0.5559c-0.7554 0.1015-1.7565 0.1031-3.1919 0.1031h-6c-1.4354 0-2.4365-0.0016-3.1919-0.1031-0.73377-0.0987-1.1224-0.2791-1.3991-0.5559s-0.45721-0.6653-0.55586-1.3991c-0.10156-0.7554-0.10315-1.7565-0.10315-3.1919z"/></g></svg></a>
    </div>
</div> <!-- goggle care end -->

<!-- heated maintenance -->
<div class="faq-card">
    <div>
        <h3><?php if( $heated_header ) {echo wp_kses_post( $heated_header );} else {echo 'empty';} ?></h3>
        <p><?php if( $heated_info ) {echo wp_kses_post( $heated_info );} else {echo 'empty';} ?></p>
    </div>
    <div class="download-button">
        <a href="<?php echo esc_url( $heated_pdf_url ); ?>" target="<?php echo esc_attr( $heated_pdf_target ); ?>"><?php echo esc_html( $heated_pdf_title ); ?>
        <svg fill="none" stroke="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <g fill="#000"> <path d="m12.554 16.506c-0.1421 0.1554-0.3429 0.2439-0.5535 0.2439s-0.4114-0.0885-0.5535-0.2439l-4-4.375c-0.2795-0.3057-0.25826-0.7801 0.04744-1.0596 0.30571-0.2795 0.7801-0.2583 1.0596 0.0474l2.6965 2.9493v-11.068c0-0.41421 0.3358-0.75 0.75-0.75s0.75 0.33579 0.75 0.75v11.068l2.6965-2.9493c0.2795-0.3057 0.7539-0.3269 1.0596-0.0474s0.3269 0.7539 0.0474 1.0596l-4 4.375z"/> <path d="m3.75 15c0-0.4142-0.33578-0.75-0.75-0.75-0.41421 0-0.75 0.3358-0.75 0.75v0.0549c-2e-5 1.3676-4e-5 2.4699 0.11652 3.3369 0.12102 0.9001 0.37991 1.6579 0.98183 2.2598 0.60192 0.602 1.3598 0.8609 2.2599 0.9819 0.86697 0.1165 1.9693 0.1165 3.3369 0.1165h6.1098c1.3676 0 2.4699 0 3.3369-0.1165 0.9001-0.121 1.6579-0.3799 2.2599-0.9819 0.6019-0.6019 0.8608-1.3597 0.9818-2.2598 0.1165-0.867 0.1165-1.9693 0.1165-3.3369v-0.0549c0-0.4142-0.3358-0.75-0.75-0.75s-0.75 0.3358-0.75 0.75c0 1.4354-0.0016 2.4365-0.1031 3.1919-0.0987 0.7338-0.2791 1.1223-0.5559 1.3991s-0.6653 0.4572-1.3991 0.5559c-0.7554 0.1015-1.7565 0.1031-3.1919 0.1031h-6c-1.4354 0-2.4365-0.0016-3.1919-0.1031-0.73377-0.0987-1.1224-0.2791-1.3991-0.5559s-0.45721-0.6653-0.55586-1.3991c-0.10156-0.7554-0.10315-1.7565-0.10315-3.1919z"/></g></svg></a>
    </div>
</div> <!-- heated maintenance end -->

<!-- helemt replacement -->
<div class="faq-card">
    <div>
        <h3><?php if( $helmet_header ) {echo wp_kses_post( $helmet_header );} else {echo 'empty';} ?></h3>
        <p><?php if( $helmet_info ) {echo wp_kses_post( $helmet_info );} else {echo 'empty';} ?></p>
    </div>
    <div class="download-button">
         <a href="<?php echo esc_url( $helmet_pdf_url ); ?>" target="<?php echo esc_attr( $helmet_pdf_target ); ?>"><?php echo esc_html( $helmet_pdf_title ); ?>
        <svg fill="none" stroke="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <g fill="#000"> <path d="m12.554 16.506c-0.1421 0.1554-0.3429 0.2439-0.5535 0.2439s-0.4114-0.0885-0.5535-0.2439l-4-4.375c-0.2795-0.3057-0.25826-0.7801 0.04744-1.0596 0.30571-0.2795 0.7801-0.2583 1.0596 0.0474l2.6965 2.9493v-11.068c0-0.41421 0.3358-0.75 0.75-0.75s0.75 0.33579 0.75 0.75v11.068l2.6965-2.9493c0.2795-0.3057 0.7539-0.3269 1.0596-0.0474s0.3269 0.7539 0.0474 1.0596l-4 4.375z"/> <path d="m3.75 15c0-0.4142-0.33578-0.75-0.75-0.75-0.41421 0-0.75 0.3358-0.75 0.75v0.0549c-2e-5 1.3676-4e-5 2.4699 0.11652 3.3369 0.12102 0.9001 0.37991 1.6579 0.98183 2.2598 0.60192 0.602 1.3598 0.8609 2.2599 0.9819 0.86697 0.1165 1.9693 0.1165 3.3369 0.1165h6.1098c1.3676 0 2.4699 0 3.3369-0.1165 0.9001-0.121 1.6579-0.3799 2.2599-0.9819 0.6019-0.6019 0.8608-1.3597 0.9818-2.2598 0.1165-0.867 0.1165-1.9693 0.1165-3.3369v-0.0549c0-0.4142-0.3358-0.75-0.75-0.75s-0.75 0.3358-0.75 0.75c0 1.4354-0.0016 2.4365-0.1031 3.1919-0.0987 0.7338-0.2791 1.1223-0.5559 1.3991s-0.6653 0.4572-1.3991 0.5559c-0.7554 0.1015-1.7565 0.1031-3.1919 0.1031h-6c-1.4354 0-2.4365-0.0016-3.1919-0.1031-0.73377-0.0987-1.1224-0.2791-1.3991-0.5559s-0.45721-0.6653-0.55586-1.3991c-0.10156-0.7554-0.10315-1.7565-0.10315-3.1919z"/></g></svg></a>
    </div>
</div> <!-- helemt replacement end -->

<!-- ski gear -->
<div class="faq-card">
    <div>
        <h3><?php if( $store_header ) {echo wp_kses_post( $store_header );} else {echo 'empty';} ?></h3>
        <p><?php if( $store_info ) {echo wp_kses_post( $store_info );} else {echo 'empty';} ?></p>
    </div>
    <div class="download-button">
        <a href="<?php echo esc_url( $store_pdf_url ); ?>" target="<?php echo esc_attr( $store_pdf_target ); ?>"><?php echo esc_html( $store_pdf_title ); ?>
        <svg fill="none" stroke="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <g fill="#000"> <path d="m12.554 16.506c-0.1421 0.1554-0.3429 0.2439-0.5535 0.2439s-0.4114-0.0885-0.5535-0.2439l-4-4.375c-0.2795-0.3057-0.25826-0.7801 0.04744-1.0596 0.30571-0.2795 0.7801-0.2583 1.0596 0.0474l2.6965 2.9493v-11.068c0-0.41421 0.3358-0.75 0.75-0.75s0.75 0.33579 0.75 0.75v11.068l2.6965-2.9493c0.2795-0.3057 0.7539-0.3269 1.0596-0.0474s0.3269 0.7539 0.0474 1.0596l-4 4.375z"/> <path d="m3.75 15c0-0.4142-0.33578-0.75-0.75-0.75-0.41421 0-0.75 0.3358-0.75 0.75v0.0549c-2e-5 1.3676-4e-5 2.4699 0.11652 3.3369 0.12102 0.9001 0.37991 1.6579 0.98183 2.2598 0.60192 0.602 1.3598 0.8609 2.2599 0.9819 0.86697 0.1165 1.9693 0.1165 3.3369 0.1165h6.1098c1.3676 0 2.4699 0 3.3369-0.1165 0.9001-0.121 1.6579-0.3799 2.2599-0.9819 0.6019-0.6019 0.8608-1.3597 0.9818-2.2598 0.1165-0.867 0.1165-1.9693 0.1165-3.3369v-0.0549c0-0.4142-0.3358-0.75-0.75-0.75s-0.75 0.3358-0.75 0.75c0 1.4354-0.0016 2.4365-0.1031 3.1919-0.0987 0.7338-0.2791 1.1223-0.5559 1.3991s-0.6653 0.4572-1.3991 0.5559c-0.7554 0.1015-1.7565 0.1031-3.1919 0.1031h-6c-1.4354 0-2.4365-0.0016-3.1919-0.1031-0.73377-0.0987-1.1224-0.2791-1.3991-0.5559s-0.45721-0.6653-0.55586-1.3991c-0.10156-0.7554-0.10315-1.7565-0.10315-3.1919z"/></g></svg></a>
    </div>
</div> <!-- ski gear end -->

<!-- racing info -->
<h2>Racing Information</h2>

<!-- length recommendation -->
<div class="faq-card">
    <div>
        <h3><?php if( $race_length_header ) {echo wp_kses_post( $race_length_header );} else {echo 'empty';} ?></h3>
        <p><?php if( $race_length_info ) {echo wp_kses_post( $race_length_info );} else {echo 'empty';} ?></p>
    </div>
    <div class="download-button">
         <a href="<?php echo esc_url( $race_length_pdf_url ); ?>" target="<?php echo esc_attr( $race_length_pdf_target ); ?>"><?php echo esc_html( $race_length_pdf_title ); ?>
        <svg fill="none" stroke="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <g fill="#000"> <path d="m12.554 16.506c-0.1421 0.1554-0.3429 0.2439-0.5535 0.2439s-0.4114-0.0885-0.5535-0.2439l-4-4.375c-0.2795-0.3057-0.25826-0.7801 0.04744-1.0596 0.30571-0.2795 0.7801-0.2583 1.0596 0.0474l2.6965 2.9493v-11.068c0-0.41421 0.3358-0.75 0.75-0.75s0.75 0.33579 0.75 0.75v11.068l2.6965-2.9493c0.2795-0.3057 0.7539-0.3269 1.0596-0.0474s0.3269 0.7539 0.0474 1.0596l-4 4.375z"/> <path d="m3.75 15c0-0.4142-0.33578-0.75-0.75-0.75-0.41421 0-0.75 0.3358-0.75 0.75v0.0549c-2e-5 1.3676-4e-5 2.4699 0.11652 3.3369 0.12102 0.9001 0.37991 1.6579 0.98183 2.2598 0.60192 0.602 1.3598 0.8609 2.2599 0.9819 0.86697 0.1165 1.9693 0.1165 3.3369 0.1165h6.1098c1.3676 0 2.4699 0 3.3369-0.1165 0.9001-0.121 1.6579-0.3799 2.2599-0.9819 0.6019-0.6019 0.8608-1.3597 0.9818-2.2598 0.1165-0.867 0.1165-1.9693 0.1165-3.3369v-0.0549c0-0.4142-0.3358-0.75-0.75-0.75s-0.75 0.3358-0.75 0.75c0 1.4354-0.0016 2.4365-0.1031 3.1919-0.0987 0.7338-0.2791 1.1223-0.5559 1.3991s-0.6653 0.4572-1.3991 0.5559c-0.7554 0.1015-1.7565 0.1031-3.1919 0.1031h-6c-1.4354 0-2.4365-0.0016-3.1919-0.1031-0.73377-0.0987-1.1224-0.2791-1.3991-0.5559s-0.45721-0.6653-0.55586-1.3991c-0.10156-0.7554-0.10315-1.7565-0.10315-3.1919z"/></g></svg></a>
    </div>
</div> <!-- length recommendation end -->

<!-- race avaliability -->
<div class="faq-card"> 
    <div>
        <h3><?php if( $race_service_header ) {echo wp_kses_post( $race_service_header );} else {echo 'empty';} ?></h3>
        <p><?php if( $race_service_info ) {echo wp_kses_post( $race_service_info );} else {echo 'empty';} ?></p>
    </div>
    <div class="download-button">
        <a href="<?php echo esc_url( $race_service_pdf_url ); ?>" target="<?php echo esc_attr( $race_service_pdf_target ); ?>"><?php echo esc_html( $race_service_pdf_title ); ?>
        <svg fill="none" stroke="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <g fill="#000"> <path d="m12.554 16.506c-0.1421 0.1554-0.3429 0.2439-0.5535 0.2439s-0.4114-0.0885-0.5535-0.2439l-4-4.375c-0.2795-0.3057-0.25826-0.7801 0.04744-1.0596 0.30571-0.2795 0.7801-0.2583 1.0596 0.0474l2.6965 2.9493v-11.068c0-0.41421 0.3358-0.75 0.75-0.75s0.75 0.33579 0.75 0.75v11.068l2.6965-2.9493c0.2795-0.3057 0.7539-0.3269 1.0596-0.0474s0.3269 0.7539 0.0474 1.0596l-4 4.375z"/> <path d="m3.75 15c0-0.4142-0.33578-0.75-0.75-0.75-0.41421 0-0.75 0.3358-0.75 0.75v0.0549c-2e-5 1.3676-4e-5 2.4699 0.11652 3.3369 0.12102 0.9001 0.37991 1.6579 0.98183 2.2598 0.60192 0.602 1.3598 0.8609 2.2599 0.9819 0.86697 0.1165 1.9693 0.1165 3.3369 0.1165h6.1098c1.3676 0 2.4699 0 3.3369-0.1165 0.9001-0.121 1.6579-0.3799 2.2599-0.9819 0.6019-0.6019 0.8608-1.3597 0.9818-2.2598 0.1165-0.867 0.1165-1.9693 0.1165-3.3369v-0.0549c0-0.4142-0.3358-0.75-0.75-0.75s-0.75 0.3358-0.75 0.75c0 1.4354-0.0016 2.4365-0.1031 3.1919-0.0987 0.7338-0.2791 1.1223-0.5559 1.3991s-0.6653 0.4572-1.3991 0.5559c-0.7554 0.1015-1.7565 0.1031-3.1919 0.1031h-6c-1.4354 0-2.4365-0.0016-3.1919-0.1031-0.73377-0.0987-1.1224-0.2791-1.3991-0.5559s-0.45721-0.6653-0.55586-1.3991c-0.10156-0.7554-0.10315-1.7565-0.10315-3.1919z"/></g></svg></a>
    </div>
</div> <!-- race avaliability end -->

<!-- tune wax -->
<div class="faq-card">
    <div>
        <h3><?php if( $tuneing_header ) {echo wp_kses_post( $tuneing_header );} else {echo 'empty';} ?></h3>
        <p><?php if( $tuneing_info ) {echo wp_kses_post( $tuneing_info );} else {echo 'empty';} ?></p>
    </div>
    <div class="download-button">
        <a href="<?php echo esc_url( $tuneing_pdf_url ); ?>" target="<?php echo esc_attr( $tuneing_pdf_target ); ?>"><?php echo esc_html( $tuneing_pdf_title ); ?>
        <svg fill="none" stroke="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <g fill="#000"> <path d="m12.554 16.506c-0.1421 0.1554-0.3429 0.2439-0.5535 0.2439s-0.4114-0.0885-0.5535-0.2439l-4-4.375c-0.2795-0.3057-0.25826-0.7801 0.04744-1.0596 0.30571-0.2795 0.7801-0.2583 1.0596 0.0474l2.6965 2.9493v-11.068c0-0.41421 0.3358-0.75 0.75-0.75s0.75 0.33579 0.75 0.75v11.068l2.6965-2.9493c0.2795-0.3057 0.7539-0.3269 1.0596-0.0474s0.3269 0.7539 0.0474 1.0596l-4 4.375z"/> <path d="m3.75 15c0-0.4142-0.33578-0.75-0.75-0.75-0.41421 0-0.75 0.3358-0.75 0.75v0.0549c-2e-5 1.3676-4e-5 2.4699 0.11652 3.3369 0.12102 0.9001 0.37991 1.6579 0.98183 2.2598 0.60192 0.602 1.3598 0.8609 2.2599 0.9819 0.86697 0.1165 1.9693 0.1165 3.3369 0.1165h6.1098c1.3676 0 2.4699 0 3.3369-0.1165 0.9001-0.121 1.6579-0.3799 2.2599-0.9819 0.6019-0.6019 0.8608-1.3597 0.9818-2.2598 0.1165-0.867 0.1165-1.9693 0.1165-3.3369v-0.0549c0-0.4142-0.3358-0.75-0.75-0.75s-0.75 0.3358-0.75 0.75c0 1.4354-0.0016 2.4365-0.1031 3.1919-0.0987 0.7338-0.2791 1.1223-0.5559 1.3991s-0.6653 0.4572-1.3991 0.5559c-0.7554 0.1015-1.7565 0.1031-3.1919 0.1031h-6c-1.4354 0-2.4365-0.0016-3.1919-0.1031-0.73377-0.0987-1.1224-0.2791-1.3991-0.5559s-0.45721-0.6653-0.55586-1.3991c-0.10156-0.7554-0.10315-1.7565-0.10315-3.1919z"/></g></svg></a>
    </div>
</div> <!-- tune wax end -->

<!-- purchase information -->
<h2>Purchase Information</h2>

<!-- lowest price -->
<div class="faq-card">
    <div>
        <h3><?php if( $lowest_header ) {echo wp_kses_post( $lowest_header );} else {echo 'empty';} ?></h3>
        <p><?php if( $lowest_info ) {echo wp_kses_post( $lowest_info );} else {echo 'empty';} ?></p>
    </div>
    <div class="download-button">
        <a href="<?php echo esc_url( $lowest_pdf_url ); ?>" target="<?php echo esc_attr( $lowest_pdf_target ); ?>"><?php echo esc_html( $lowest_pdf_title ); ?>
        <svg fill="none" stroke="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <g fill="#000"> <path d="m12.554 16.506c-0.1421 0.1554-0.3429 0.2439-0.5535 0.2439s-0.4114-0.0885-0.5535-0.2439l-4-4.375c-0.2795-0.3057-0.25826-0.7801 0.04744-1.0596 0.30571-0.2795 0.7801-0.2583 1.0596 0.0474l2.6965 2.9493v-11.068c0-0.41421 0.3358-0.75 0.75-0.75s0.75 0.33579 0.75 0.75v11.068l2.6965-2.9493c0.2795-0.3057 0.7539-0.3269 1.0596-0.0474s0.3269 0.7539 0.0474 1.0596l-4 4.375z"/> <path d="m3.75 15c0-0.4142-0.33578-0.75-0.75-0.75-0.41421 0-0.75 0.3358-0.75 0.75v0.0549c-2e-5 1.3676-4e-5 2.4699 0.11652 3.3369 0.12102 0.9001 0.37991 1.6579 0.98183 2.2598 0.60192 0.602 1.3598 0.8609 2.2599 0.9819 0.86697 0.1165 1.9693 0.1165 3.3369 0.1165h6.1098c1.3676 0 2.4699 0 3.3369-0.1165 0.9001-0.121 1.6579-0.3799 2.2599-0.9819 0.6019-0.6019 0.8608-1.3597 0.9818-2.2598 0.1165-0.867 0.1165-1.9693 0.1165-3.3369v-0.0549c0-0.4142-0.3358-0.75-0.75-0.75s-0.75 0.3358-0.75 0.75c0 1.4354-0.0016 2.4365-0.1031 3.1919-0.0987 0.7338-0.2791 1.1223-0.5559 1.3991s-0.6653 0.4572-1.3991 0.5559c-0.7554 0.1015-1.7565 0.1031-3.1919 0.1031h-6c-1.4354 0-2.4365-0.0016-3.1919-0.1031-0.73377-0.0987-1.1224-0.2791-1.3991-0.5559s-0.45721-0.6653-0.55586-1.3991c-0.10156-0.7554-0.10315-1.7565-0.10315-3.1919z"/></g></svg></a>
    </div>
</div> <!-- lowest price end -->

<!-- after purchase -->
<div class="faq-card">
    <div>
        <h3><?php if( $purchase_header ) {echo wp_kses_post( $purchase_header );} else {echo 'empty';} ?></h3>
        <p><?php if( $purchase_info ) {echo wp_kses_post( $purchase_info );} else {echo 'empty';} ?></p>
    </div>
    <div class="download-button">
        <a href="<?php echo esc_url( $purchase_pdf_url ); ?>" target="<?php echo esc_attr( $purchase_pdf_target ); ?>"><?php echo esc_html( $purchase_pdf_title ); ?>
        <svg fill="none" stroke="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <g fill="#000"> <path d="m12.554 16.506c-0.1421 0.1554-0.3429 0.2439-0.5535 0.2439s-0.4114-0.0885-0.5535-0.2439l-4-4.375c-0.2795-0.3057-0.25826-0.7801 0.04744-1.0596 0.30571-0.2795 0.7801-0.2583 1.0596 0.0474l2.6965 2.9493v-11.068c0-0.41421 0.3358-0.75 0.75-0.75s0.75 0.33579 0.75 0.75v11.068l2.6965-2.9493c0.2795-0.3057 0.7539-0.3269 1.0596-0.0474s0.3269 0.7539 0.0474 1.0596l-4 4.375z"/> <path d="m3.75 15c0-0.4142-0.33578-0.75-0.75-0.75-0.41421 0-0.75 0.3358-0.75 0.75v0.0549c-2e-5 1.3676-4e-5 2.4699 0.11652 3.3369 0.12102 0.9001 0.37991 1.6579 0.98183 2.2598 0.60192 0.602 1.3598 0.8609 2.2599 0.9819 0.86697 0.1165 1.9693 0.1165 3.3369 0.1165h6.1098c1.3676 0 2.4699 0 3.3369-0.1165 0.9001-0.121 1.6579-0.3799 2.2599-0.9819 0.6019-0.6019 0.8608-1.3597 0.9818-2.2598 0.1165-0.867 0.1165-1.9693 0.1165-3.3369v-0.0549c0-0.4142-0.3358-0.75-0.75-0.75s-0.75 0.3358-0.75 0.75c0 1.4354-0.0016 2.4365-0.1031 3.1919-0.0987 0.7338-0.2791 1.1223-0.5559 1.3991s-0.6653 0.4572-1.3991 0.5559c-0.7554 0.1015-1.7565 0.1031-3.1919 0.1031h-6c-1.4354 0-2.4365-0.0016-3.1919-0.1031-0.73377-0.0987-1.1224-0.2791-1.3991-0.5559s-0.45721-0.6653-0.55586-1.3991c-0.10156-0.7554-0.10315-1.7565-0.10315-3.1919z"/></g></svg></a>
    </div>
</div> <!-- after purchase end -->
</div>


<?php get_footer(); ?>