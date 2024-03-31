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
                    echo '<div class="featured-product">' . woocommerce_get_product_thumbnail() . '<p class="featured-title">' . get_the_title() . '</p> <p class="featured-price">' . wc_get_price_to_display( $product, array( 'price' => $product->get_price() ) ) . '</p> </div>';
                endwhile;

                wp_reset_query();
            ?>
        </div>

        <!-- top brands -->
        <div class="top-brands">
            <h2>Shop Top Brands</h2>
            <?php echo do_shortcode('[metaslider id="396"]'); ?>
        </div>
    </div>
</main>


 <?php get_footer(); ?>
