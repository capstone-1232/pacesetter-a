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

//  images
    $brand_one = get_field( "brand_image", 509);
    $brand_one_size = $brand_one['sizes']['large'];
    $brand_one_alt = $brand_one['alt'];
    $brand_two = get_field( "brand_image", 512);
    $brand_two_size = $brand_two['sizes']['large'];
    $brand_two_alt = $brand_two['alt'];
    $brand_three = get_field( "brand_image", 520);
    $brand_three_size = $brand_three['sizes']['large'];
    $brand_three_alt = $brand_three['alt'];
    $brand_four = get_field( "brand_image", 521);
    $brand_four_size = $brand_four['sizes']['large'];
    $brand_four_alt = $brand_four['alt'];
    $brand_five = get_field( "brand_image", 522);
    $brand_five_size = $brand_five['sizes']['large'];
    $brand_five_alt = $brand_five['alt'];
    $brand_six = get_field( "brand_image", 524);
    $brand_six_size = $brand_six['sizes']['large'];
    $brand_six_alt = $brand_six['alt'];
    $brand_seven = get_field( "brand_image", 523);
    $brand_seven_size = $brand_seven['sizes']['large'];
    $brand_seven_alt = $brand_seven['alt'];
 ?>

 <main>
    <!-- hero banner -->
    <div class="home">
        <div class="hero-banners">
        <?php
            $args = array(
                'post_type' => 'front-banner',
                'post_per_page' => 1,
                'orderby' => 'date',
                'order' => 'ASC'
            );

            $loop = new WP_Query($args); 

            echo '<div class="hero-banner-slider">';
            while ($loop->have_posts()): $loop->the_post();
                echo '<div class="hero-banner" style="background-image: url(' . get_the_post_thumbnail_url( get_the_ID(), "large" ) . '")>';
                echo '<h2>';
                    the_title();
                echo '</h2>';
                echo '<p>' . the_content() . '</p>';
                echo '<a href="';
                        the_field('URL');
                echo '">Discover</a>';
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
    ?>
        <div class="featured-card">
            <a href="<?php the_permalink(); ?>">
                <?php echo woocommerce_get_product_thumbnail(); ?>
                <p class="featured-title"><?php the_title(); ?></p>
                <p class="featured-price"><?php echo '$'.wc_get_price_to_display( $product, array( 'price' => $product->get_price() ) ); ?></p>
            </a>
        </div>
    <?php
        endwhile;

        wp_reset_query();
    ?>
    </div>
</div>


        <!-- top brands -->
        <div class="top-brands">
            <h1>Our Top Brands</h1>
            <div class="top-brands-desktop">
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
            <div class="top-brands-mobile">
                <img class="brand-image" src="<?php echo $brand_one_size ?>" alt="<?php echo $brand_one_alt ?>">
                <img class="brand-image" src="<?php echo $brand_two_size ?>" alt="<?php echo $brand_two_alt ?>">
                <img class="brand-image" src="<?php echo $brand_three_size ?>" alt="<?php echo $brand_three_alt ?>">
                <img class="brand-image" src="<?php echo $brand_four_size ?>" alt="<?php echo $brand_four_alt ?>">
                <img class="brand-image" src="<?php echo $brand_five_size ?>" alt="<?php echo $brand_five_alt ?>">
                <img class="brand-image" src="<?php echo $brand_six_size ?>" alt="<?php echo $brand_six_alt ?>">
                <img class="brand-image" src="<?php echo $brand_seven_size ?>" alt="<?php echo $brand_seven_alt ?>">
            </div>
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
