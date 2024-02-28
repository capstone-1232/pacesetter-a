<?php get_header(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/index.js"></script>
        <main>
            <section class="featured-items">
                <h2>Featured Items</h2>
                <?php 
                    $args = array(
                        'post_type' => 'portfolio',
                        'posts_per_page' => 4
                    );
                    $portfolio_query = new WP_Query($args);
                ?>
                <ul class="posts-ul">
                    <?php if($portfolio_query->have_posts()): while($portfolio_query->have_posts()): $portfolio_query->the_post(); ?>
                        <li class="items-list">
                            <img src="<?php echo get_field('extra_image'); ?>">
                            <h1><?php echo get_field('title'); ?></h1>
                            <a href="portfolio/<?php esc_url( get_permalink() ); ?>">See More</a>
                        </li>
                    <?php endwhile; endif; ?>
                </ul>
            </section>
            <section>
            <h2>Caroussel Example</h2>
            <div class="your-class">
            <div>your content</div>
            <div>your content</div>
            <div>your content</div>
            </div>

            <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
            <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
            <script type="text/javascript" src="slick/slick.min.js"></script>

            </section>
            <secction class="top-brands">
                <?php
                    echo do_shortcode('[smartslider3 slider="1"]');
                    echo do_shortcode('[smartslider3 slider="2"]');
                ?>
            </secction>
            <script type="text/javascript">
                $(document).ready(function(){
                $('.your-class').slick({
                    setting-name: setting-value
                });
                });
            </script>
            

        </main>
        <footer>

        </footer>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script>
            jQuery(".slider2").slick({
            dots:true,
            autoplay: true,
            autoplaySpeed: 1000,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1
            });
        </script>
    </body>

</html>