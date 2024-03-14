<?php
/**
 * pacesetter contact page
 *
 *
 * @package pacesetter
 */

/**
 */

 get_header();

?>

<div class="contact-us">
    <h2>Contact Us</h2>
    
    <h3>Pacesetter Ski Shoppe</h3>
    <div class="address">
        <p>Address:</p>
        <p>Edmonton, Alberta Canada</p>
        <p>Phone: 780-483-2005</p>
    </div> <!-- address end -->

    <div class="hours">
        <p>Hours</p>
        <div>
            <p>Monday-Friday</p>
            <p>Saturday</p>
            <p>Sunday</p>
        </div>
        <div>
            <p>9:30AM-5:30PM</p>
            <p>10AM-5PM</p>
            <p>12PM-5PM</p>
        </div>
    </div> <!-- hours end -->

    <h3>Email Us</h3>
    
    <div class="email-form">

    <?php
        echo do_shortcode('[contact-form-7 id="e3b630a" title="Pacesetter Cotact Form"]');
    ?> 

    </div>

</div> <!-- contact end -->
    
 <?php get_footer(); ?>