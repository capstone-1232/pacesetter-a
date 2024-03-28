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
        <form action="" method="POST">
            <input name="calendar-select" type="submit" value="View Calendar">
            <?php
                if (isset($_POST['calendar-select'])) {
                    echo '<input name="cancel-btn" type="submit" value="X">';
                }
            ?>
        </form>
    </div>
    <div class="event-card">
    <?php 

    if (isset($_POST['calendar-select'])) {
        echo do_shortcode("[calendar id='353']");
    }

        $args = array(
                        'posts_per_page'    => -1,
                        'post_type'     => 'event'
                    );

                    $the_query = new WP_Query( $args );

                    if( $the_query->have_posts() ):
                        echo '<ul>';
                        while( $the_query->have_posts() ) : $the_query->the_post();
                        echo    '<li class="event-card-list">';
                            the_post_thumbnail();
                        echo        '<div class="card-body">';
                            the_title();
                            the_content();
                        echo do_shortcode('[email-subscribers-form id="3"]');
                        echo        '</div>';
                        echo    '</li>';
                        endwhile;
                        echo '</ul>';
                    endif;

                    wp_reset_query();

    ?>
    </div>
</div>

<?php get_footer() ?>