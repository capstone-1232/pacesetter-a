<?php
/**
 * pacesetter events page
 *
 *
 * @package pacesetter
 */

/**
 */

 get_header();

?>

<div class="event-section">
    <div class="event-header">
        <h1>January - Events</h1>
    </div>
    <div class="event-card">
        <?php echo do_shortcode("[em_events]"); ?>
    </div>
</div>

<?php get_footer() ?>