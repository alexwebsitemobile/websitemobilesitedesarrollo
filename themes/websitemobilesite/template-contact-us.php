<?php
/* Template Name: Contact Us */
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



<section class="map-section">
    <div id="myMap"></div>
</section>



<section class="contact-section section-padding">
    <div class="container">
        
        <div class="text-center">
            <?php the_content(); ?>
        </div>


        <div class="row mt-80">
            <div class="col-md-7">
                <?php echo do_shortcode('[contact-form-7 id="26" title="Contact form 1"]'); ?>
            </div><!-- /.col-md-12 -->

            <div class="col-md-4 col-md-offset-1 contact-info">
                <h3>Contact Info</h3>
                <address>
                    1355 Market Street, Suite 900<br>
                    San Francisco, CA 94103<br>
                    <abbr title="Phone">P:</abbr> (123) 456-7890<br>
                    <a href="mailto:#">first.last@example.com</a>
                </address>

                <h3>business hours</h3>
                <p>
                    <span>Mon - Fri: 9am to 6pm</span>
                    <br>
                    <span>Sat : 9am to 1pm</span>
                </p>
            </div>

        </div><!-- /.row -->

    </div><!-- /.container -->
</section><!-- /.contact-section -->

<?php
get_footer();
?>