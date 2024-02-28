<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
// Add the new slick-theme.css if you want the default styling
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css"/>
        <main>
            <h1>Carousell</h1>

            <?php
            
            $args_array = array(
                'posts_per_page' => -1,
                'post_type' => 'portfolio',
                'post_status' => 'publish',
                'orderby' => 'post_type',
                'order' => 'DESC'
            );
            $get_portfolio_posts = get_posts( $args_array );

            if ($get_portfolio_posts) {
                foreach ($get_portfolio_posts as $post) :
                    setup_postdata($post);
                    ?>
                    <div class="post_wrapper">
                        <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID('extra_image'), 'full'); ?>
                        <div class="post_image"><img src="<?php echo $featured_img_url; ?>" alt="image"></div>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php the_excerpt(); ?>
                    </div>
                    <?php
                    endforeach;
                    wp_reset_postdata();
            }   


            ?>

            <div class="slides">
                <div>your content 1</div>
                <div>your content 2</div>
                <div>your content 3</div>
                <div>your content 4</div>
                <div>your content 5</div>
                <div>your content 6</div>
            </div>
        </main>

        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function(){
                $('.slides').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed:2000
                });
            });
    </script>
    </body>

</html>