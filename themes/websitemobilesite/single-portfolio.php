<?php
get_header();
the_post();
?>



<section class="page-title-section portfolio-cover" data-stellar-background-ratio="0.1">
    <div class="container">
        <div class="page-header text-center">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
</section>


<section class="single-project-section">
    <div class="container">

        <div class="mt-30">
            <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>  
        </div>

        <div class="project-overview">
            <div class="row">
                <div class="col-md-8">
                    <?php the_content(); ?>

                    <div class="client-testimonial mt-30">
                        <h2>Client Testimonial</h2>
                        <blockquote>
                            <?php echo rwmb_meta('client_testimonial'); ?>
                        </blockquote>
                    </div>

                </div>

                <div class="col-md-4 quick-overview">
                    <ul class="portfolio-meta">
                        <li><span> Client </span> <?php the_title(); ?></li>
                        <li><span> Completed on </span> <?php echo rwmb_meta('completed_on'); ?></li>
                        <li><span> Skills </span>  <?php echo rwmb_meta('skills_portfolio'); ?></li>
                    </ul>
                    <?php
                    $url_website = rwmb_meta('website_portfolio');
                    if (!empty($url_website)) {
                        ?>
                        <a href="<?php echo $url_website; ?>" class="btn btn-primary"> Visit website </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="cta-v3">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <h2>Ready to work with us?</h2>
                <p>You can us to talk more about your project</p>
            </div>
            <div class="col-sm-3 text-right">
                <a href="<?php echo home_url('contact-us'); ?>" class=" btn btn-primary">Contact us</a>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();
?>