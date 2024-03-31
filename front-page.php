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
 ?>

 <main>
    <!-- banner plugin location -->
    <div class="home">
        <div class="events-banner"></div>

        <!-- featured -->
        <div class="featured">
            <h1>Featured</h1>
            <?php  
                $args = array(
                    'post_type'      => 'product',
                    'posts_per_page' => 4,
                    'product_cat'    => 'featured-item'
                );

                $loop = new WP_Query( $args );

                while ( $loop->have_posts() ) : $loop->the_post();
                    global $product;
                    echo '<br />' . woocommerce_get_product_thumbnail().' '.get_the_title().' '.get_price();
                endwhile;

                wp_reset_query();
            ?>
        </div>

        <!-- top brands -->
        <div class="top-brands">
            <h2>Shop Top Brands</h2>
        </div>
    </div>
</main>


 <?php get_footer(); ?>
