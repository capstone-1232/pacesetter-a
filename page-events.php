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
        <?php echo "<h1>" . date("M") . " - Events</h1>"; ?>
        <form action="" method="GET">
            <select id="calender-select" name="calendar-select">
                <option id="calendar" value="calendar" <?php if ($_GET['calendar-select'] === 'calendar') echo "checked"; ?>>View Calendar</option>
                <option id="event-card" value="event-card" <?php if ($_GET['calendar-select'] === 'event-card') echo "checked"; ?>>View Events</option>
            </select>
            <input type="submit" value="Set">
        </form>
    </div>
    <div class="event-card">
    <?php 
    
    if (isset($_GET['calendar-select'])) {
        switch($_GET['calendar-select']) {
            case 'calendar':
                echo do_shortcode("[calendar id='353']");
            break;

            case 'event-card':

                $args = array(
                    'posts_per_page'    => -1,
                    'post_type'     => 'event'
                );

                // query
                $the_query = new WP_Query( $args );

                if( $the_query->have_posts() ):
                    echo '<ul>';
                    while( $the_query->have_posts() ) : $the_query->the_post();
                    echo    '<li>';
                        the_post_thumbnail();
                        the_title();
                        the_content();
                    echo do_shortcode('[email-subscribers-form id="3"]');
                    echo    '</li>';
                    endwhile;
                    echo '</ul>';
                endif;

                wp_reset_query();   // Restore global post data stomped by the_post().
            break;
        }

    } else {
        echo "NULL";
    }

    ?>
    </div>
</div>

<?php get_footer() ?>