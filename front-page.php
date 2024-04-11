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
    $first_block = get_field( "about_us_image", 183);
    $first_block_size = $first_block['sizes']['large'];
    $first_block_alt = $first_block['alt'];
    $second_block = get_field( "about_us_image", 185);
    $second_block_size = $second_block['sizes']['large'];
    $second_block_alt = $second_block['alt'];
    $third_block = get_field( "about_us_image", 188);
    $third_block_size = $third_block['sizes']['large'];
    $third_block_alt = $third_block['alt'];
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
                echo the_field('URL');
                echo '">More</a>';
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
                <p class="featured-price"><?php echo wc_get_price_to_display( $product, array( 'price' => $product->get_price() ) ); ?></p>
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
                <img class="about-image" src="<?php echo $first_block_size ?>" alt="<?php echo $first_block_alt ?>">
                <img class="about-image" src="<?php echo $first_block_size ?>" alt="<?php echo $first_block_alt ?>">
                <img class="about-image" src="<?php echo $first_block_size ?>" alt="<?php echo $first_block_alt ?>">
                <img class="about-image" src="<?php echo $first_block_size ?>" alt="<?php echo $first_block_alt ?>">
                <img class="about-image" src="<?php echo $first_block_size ?>" alt="<?php echo $first_block_alt ?>">
                <img class="about-image" src="<?php echo $first_block_size ?>" alt="<?php echo $first_block_alt ?>">
                <img class="about-image" src="<?php echo $first_block_size ?>" alt="<?php echo $first_block_alt ?>">
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
