<?php
/* Template Name: About Us */
get_header();
the_post();
?>


<section class="page-title-section about-us-one" data-stellar-background-ratio="0.1">
    <div class="container">
        <div class="page-header text-center">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
</section>




<section class="section-padding">
    <div class="container">

        <div class="about-intro">
            <?php the_content(); ?>
            <?php
            $video_url = rwmb_meta('video_url');
            ?>
            <div class="video-intro mt-30">
                <?php
                $content_img_01 = rwmb_meta('video_cover_img', 'type=image&size=FULL');
                if (!empty($content_img_01)) {
                    foreach ($content_img_01 as $image) {
                        echo '<img class="img-responsive" src="', esc_url($image['full_url']), '"  alt="', esc_attr($image['alt']), '">';
                    }
                }
                ?>
                <a class="external-link popup-youtube" href="<?php echo $video_url; ?>" title="">
                    <i class="fa fa-play"></i>
                </a>
            </div>
        </div>
    </div>
</section>



<section class="history-section">
    <div class="container-fluid">
        <div class="row">
            <?php $url_thumb = get_the_post_thumbnail_url(); ?>
            <div class="col-lg-6 col-md-5 no-padding">
                <div class="history-cover" style="background: url(<?php echo $url_thumb; ?>) center center no-repeat #5E5E5E;background-size: cover;"></div>
            </div>

            <div class="col-lg-6 col-md-7 no-padding">
                <div class="history-wrapper">

                    <div id="historyCarousel" class="carousel slide" data-ride="carousel">


                        <div class="carousel-inner" role="listbox">
                            <?php
                            $years_id = rwmb_meta('years_id');
                            if (!empty($years_id)) {
                                $counter = 1;
                                foreach ($years_id as $years_group) {
                                    ?>
                                    <div id="item-id-<?php echo $counter; ?>" class="item">
                                        <h3><?php echo $years_group['title_years']; ?></h3>
                                        <?php
                                        $years_content_src = $years_group['description_years'];
                                        $years_content = apply_filters('the_content', $years_content_src);
                                        echo $years_content;
                                        ?>
                                    </div>
                                    <?php
                                    $counter++;
                                }
                            }
                            ?>
                        </div>
                        <script>
                            $('#item-id-1').addClass('active');
                        </script>

                        <a class="left carousel-control" href="#historyCarousel" role="button" data-slide="prev">
                            <span class="fa fa-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#historyCarousel" role="button" data-slide="next">
                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<section class="more-about-section section-padding">
    <div class="container">
        <div class="text-center">
            <?php
            $more_about_us_content_src = rwmb_meta('more_about_us_content');
            $more_about_us_content = apply_filters('the_content', $more_about_us_content_src);
            echo $more_about_us_content;
            ?>
        </div>

        <div class="row mt-80">
            <div class="col-md-5">
                <div class="creative-skills">
                    <h2>Our Skills</h2>
                    <?php
                    $skills_id = rwmb_meta('skills_id');
                    if (!empty($skills_id)) {
                        foreach ($skills_id as $skills_group) {
                            ?>
                            <div class="skill-progress">
                                <span class="skill-title"><?php echo $skills_group['title_skills']; ?></span>
                                <div class="progress">
                                    <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="<?php echo $skills_group['percent_skills']; ?>" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <div class="col-md-7">
                <div class="faq-section">
                    <h2>FAQ Answers</h2>
                    <div class="panel-group accordion-v1" id="faq-accordion">
                        <?php
                        $args = array(
                            'posts_per_page' => -1,
                            'post_type' => 'faqs',
                        );
                        $faqs_post = get_posts($args);
                        ?>
                        <?php
                        $contador = 1;
                        foreach ($faqs_post as $post) : setup_postdata($post);
                            ?>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#faq-accordion" href="#collapse<?php echo $contador; ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapse<?php echo $contador; ?>" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>


                            <?php
                            $contador++;
                        endforeach;
                        ?>
                        <?php wp_reset_postdata(); ?>

                    </div>
                </div><!-- /.col-sm-6 -->
            </div><!-- /.col-sm-6 -->
        </div><!-- /.row -->

    </div><!-- /.container -->
</section>


<!-- Testimonial Version Two -->
<section class="client-slider-v2-wrapper">
    <div class="overlay-bg section-padding">
        <div class="container">

            <div id="client-slider-v2" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                    $args = array(
                        'posts_per_page' => -1,
                        'post_type' => 'testimonial',
                    );
                    $testimonial = get_posts($args);
                    ?>
                    <?php
                    $container = 1;
                    foreach ($testimonial as $post) : setup_postdata($post);
                        ?>

                        <!-- Quote 1 -->
                        <div id="testimonial-<?php echo $container; ?>" class="item ">
                            <blockquote>
                                <div class="row">
                                    <div class="col-lg-8 col-lg-offset-2 testimonial-content">
                                        <?php the_content(); ?>
                                        <span class="author"><?php the_title(); ?></span>
                                    </div>
                                </div>
                            </blockquote>
                        </div>

                        <?php
                        $container++;
                    endforeach;
                    ?>
                    <?php wp_reset_postdata(); ?>
                    <script>
                        $('#testimonial-1').addClass('active');
                    </script>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#client-slider-v2" role="button" data-slide="prev">
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#client-slider-v2" role="button" data-slide="next">
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div><!-- /.container -->
    </div>
</section>
<!-- Testimonial Version Two End -->


<!-- client section -->
<section class="client-section section-padding">
    <div class="container">
        <div class="text-center">
            <?php
            $customer_content_src = rwmb_meta('customers_content');
            $customer_content = apply_filters('the_content', $customer_content_src);
            echo $customer_content;
            ?>
        </div>

        <div class="row mt-80 text-center">

            <div class="col-xs-6 col-sm-3 client ">
                <?php
                $args = array(
                    'posts_per_page' => -1,
                    'post_type' => 'customers',
                );
                $portfolio_post = get_posts($args);
                ?>
                <?php
                foreach ($portfolio_post as $post) : setup_postdata($post);
                    $item instanceof WP_Post;

                    if (has_post_thumbnail($post->ID)) {

                        $attachment_id = get_post_meta($post->ID, '_thumbnail_id', true);

                        $image = wp_get_attachment_image_src($attachment_id, 'portafolio-list');

                        $image_src = $image[0];
                    }
                    ?>

                    <img class="img-responsive" src="<?php echo $image_src ?>" alt="<?php echo $post->post_title ?>, <?php echo $post->post_content ?>">


                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>