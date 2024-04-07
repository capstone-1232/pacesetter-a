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
    <!-- hero banner -->
    <div class="home">
        <div class="hero-banners">
        <?php
            $args = array(
                'post_type' => 'front-banner',
                'post_per_page' => 1
            );

            $loop = new WP_Query($args); 

            echo '<div class="hero-banner-slider">';
            while ($loop->have_posts()): $loop->the_post();
                echo '<div class="hero-banner" style="background-image: url(' . get_the_post_thumbnail_url( get_the_ID(), "large" ) . '")>';
                echo '<h2>';
                    the_title();
                echo '</h2>';
                echo '<p>' . the_content() . '</p>';
                echo '</div>';
            endwhile; 
            echo '</div>';

            wp_reset_postdata();
        ?>
        </div>

        <!-- featured -->
        <div class="featured">
            <h1>Featured</h1>
            <div class="featured-products">
            <?php  
                $args = array(
                    'post_type'      => 'product',
                    'posts_per_page' => 4,
                    'product_cat'    => 'featured-item'
                );

                $loop = new WP_Query( $args );

                while ( $loop->have_posts() ) : $loop->the_post();
                    global $product;
                    echo '<div class="featured-card">' . woocommerce_get_product_thumbnail() . '<p class="featured-title">' . get_the_title() . '</p> <p class="featured-price">$CA ' . wc_get_price_to_display( $product, array( 'price' => $product->get_price() ) ) . '</p> </div>';
                endwhile;

                wp_reset_query();
            ?>
            </div>
        </div>

        <!-- top brands -->
        <div class="top-brands">
            <h1>Our Top Brands</h1>
            <?php
                $args = array(
                    'post_type' => 'brand', 
                    'post_per_page' => 3
                );

                $loop = new WP_Query($args); 

                echo '<ul class="brands-slider">';
                while ($loop->have_posts()): $loop->the_post();
                    echo '<li class="slider-item">' . the_post_thumbnail() . '</li>';
                endwhile; 
                echo '</ul>';
            ?>
        </div>

        <!-- image slider -->
        <div class="top-images">
        <?php
            $args = array(
                'post_type' => 'top-images', 
                'post_per_page' => 1,
                'orderby' => 'date',
                'order' => 'ASC'
            );

            $loop = new WP_Query($args); 

            echo '<ul class="top-images-slider">';
            while ($loop->have_posts()): $loop->the_post();
                the_post_thumbnail();
            endwhile; 
            echo '</ul>';
        ?>
        </div>
    </div>
</main>


 <?php get_footer(); ?>
