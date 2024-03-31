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
            <ul class="slider">
                <li class="slider-item"><img src="https://drive.google.com/uc?export=view&id=1G7zeotJ6w6h5NsdfA9MpZEinbA45fCBG"></li>
                <li class="slider-item"><img src="https://drive.google.com/uc?export=view&id=1uNRvtgX89B3KmQHGJQpLDoNPgFH1oCOu"></li>
                <li class="slider-item"><img src="https://drive.google.com/uc?export=view&id=1Cp3Jobqybs2KGKm7DTutvmZkWi7c-50Y"></li>
                <li class="slider-item"><img src="https://drive.google.com/uc?export=view&id=135lHXV8_QtuyrKtCH_vo7kK8D-6yw45L"></li>
            </ul>
        </div>
    </div>
</main>


 <?php get_footer(); ?>
