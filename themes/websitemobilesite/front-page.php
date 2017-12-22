<?php
get_header();
the_post();
?>


<section id="home">
    <?php putRevSlider('highlight-showcase3', 'homepage'); ?>
</section>


<section id="services" class="services-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>

        <div class="row mt-80 text-center">
            <?php
            $boxes_id = rwmb_meta('boxes_id');
            if (!empty($boxes_id)) {
                foreach ($boxes_id as $boxes_group) {
                    ?>
                    <div class="col-md-4 col-sm-6 sbox-gutter">
                        <div class="service-box">
                            <i class="<?php echo $boxes_group['icon_boxes']; ?>"></i>
                            <h3><?php echo $boxes_group['title_boxes']; ?></h3>
                            <p><?php echo $boxes_group['description_boxes']; ?></p>
                        </div><!-- /.service-box -->
                    </div><!-- /.col-sm-4 -->
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>


<section class="hero-block-v2 pb-20 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <div class="post-content">
                    <?php
                    $content_01_src = rwmb_meta('content_01');
                    $content_01 = apply_filters('the_content', $content_01_src);
                    echo $content_01;
                    ?>
                </div>
            </div>
            <div class="col-sm-4 col-sm-offset-1">
                <div class="responsive-screenshot">
                    <?php
                    $content_img_01 = rwmb_meta('content_img_01', 'type=image&size=FULL');
                    if (!empty($content_img_01)) {
                        foreach ($content_img_01 as $image) {
                            echo '<img class="img-responsive" src="', esc_url($image['full_url']), '"  alt="', esc_attr($image['alt']), '">';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
</section>


<section class="recent-project-section section-padding">
    <div class="container">
        <div class="text-center">
            <?php
            $portfolio_content_src = rwmb_meta('portfolio_content');
            $portfolio_content = apply_filters('the_content', $portfolio_content_src);
            echo $portfolio_content;
            ?>
        </div>
    </div>

    <div class="project-container">

        <div class="owl-carousel owl-theme recent-project-carousel">

            <?php
            $args = array(
                'posts_per_page' => 10,
                'post_type' => 'portfolio',
            );
            $portfolio_post = get_posts($args);
            ?>
            <?php
            foreach ($portfolio_post as $post) : setup_postdata($post);
                $term_list = wp_get_post_terms($post->ID, 'portfolio-category');
                $term_clases = '';
                foreach ($term_list as $term) {
                    $term_clases .= ' ' . $term->name;
                }
                ?>

                <div class="recent-project">
                    <div class="tt-overlay"></div>
                    <?php
                    the_post_thumbnail('portfolio-image');
                    ?>
                    <div class="project-info">
                        <h3><?php the_title(); ?></h3>
                        <ul class="project-meta">
                            <li>
                                <?php echo $term_clases; ?>
                            </li>
                        </ul>
                    </div>

                    <div class="project-link clearfix">
                        <a href="<?php the_permalink(); ?>">View Full project <i class="fa fa-long-arrow-right pull-right"></i></a>
                    </div>
                </div>

            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        </div>

        <div class="customNavigation project-navigation text-center">
            <a class="btn-prev"><i class="fa fa-angle-left"></i></a>
            <a class="btn-next"><i class="fa fa-angle-right"></i></a>
        </div>

        <div class="portfolio-container text-center">
            <a href="<?php echo home_url('portfolio'); ?>" class="btn btn-primary view-more">View More</a>
        </div>

    </div>
</section>


<?php
get_footer();
?>