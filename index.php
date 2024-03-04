<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Pacesetter | Home</title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js">
        
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <?php wp_head(); ?>
    </head>
    <body>
        <header>

        </header>


<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css"/>
        <main>
            <h1>Carousell</h1>

            <div class="swiper-container">
            <div class="swiper-wrapper">

            <?php 
            
                $args_array = array(
                    'posts_per_page' => -1,
                    'post_type' => 'slide',
                    'post_status' => 'publish',
                    'orderby' => 'post_type',
                    'order' => 'DESC'
                );

                $get_slick_slider_posts = get_posts( $args_array );

                if($get_slick_slider_posts) {
                    foreach($get_slick_slider_posts as $post) :
                        setup_postdata($post);
                ?>
                    
                        <div class="swiper-slide">
                            <a href="<?php the_field('image_link'); ?>" target="_blank">
                                <img src="<?php the_field('image_slide'); ?>"  />
                            </a>
                        </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

            <?php
            endforeach;
            wp_reset_postdata();
                }
            
            ?>
            </div>
            </div>
    
        </main>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="slick/slick.min.js"></script>

        <script type="text/javascript">
        $('.swiper-container').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
        });
        </script>
        </body>
</html>