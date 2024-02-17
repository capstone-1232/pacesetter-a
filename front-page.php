<?php
/**
 * pacesetter front page
 *
 *
 * @package pacesetter
 */

/**
 */

 get_header();

 if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
} else {
    // Custom content markup goes here
}
?>


<?php get_footer(); ?>
