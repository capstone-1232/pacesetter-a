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
    <h1>Contact Us</h1>
    
    <h3>Pacesetter Ski Shoppe</h3>
    <div class="contact-flex">
        <div class="address">
            <h4>Address:</h4>
            <ul>
                <li>10054 167St NW</li>
                <li>Edmonton, Alberta Canada</li>
                <li>Phone: 780-483-2005</li>
            </ul>
        </div> <!-- address end -->

        <div class="hours">
            <h4>Hours:</h4>
            <div class="hours-flex">
                <ul>
                    <li>Monday-Friday</li>
                    <li>Saturday</li>
                    <li>Sunday</li>
                </ul>
                <ul>
                    <li>9:30AM-5:30PM</li>
                    <li>10AM-5PM</li>
                    <li>12PM-5PM</li>
                </ul>
            </div>
        </div> <!-- hours end -->
    </div>

    <h3>Email Us</h3>
    
    <div class="email-form">

    <?php
        echo do_shortcode('[contact-form-7 id="e3b630a" title="Pacesetter Contact Form"]');
    ?> 

    </div>

</div> <!-- contact end -->
    
 <?php get_footer(); ?>