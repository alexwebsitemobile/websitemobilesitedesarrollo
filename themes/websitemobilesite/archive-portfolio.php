<?php
get_header();
?>

<section class="page-title-section portfolio-cover" data-stellar-background-ratio="0.1">
    <div class="container">
        <div class="page-header text-center">
            <h1>Portfolio</h1>
        </div>
    </div>
</section>




<section class="portfolio-section section-padding">
    <div class="container">
        <div class="portfolio-container text-center">
            <ul id="portfolio-grid" class="three-column hover-two">

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
                    $url_thumb = get_the_post_thumbnail_url();
                    ?>

                    <li class="portfolio-item">
                        <div class="portfolio">
                            <div class="tt-overlay"></div>
                            <?php
                            the_post_thumbnail('portfolio-image');
                            ?>
                            <div class="portfolio-info">
                                <h3 class="project-title"><?php the_title(); ?></h3>
                                <a href="<?php the_permalink(); ?>" class="links"> <?php echo $term_clases; ?></a>
                            </div><!-- /.project-info -->

                            <ul class="portfolio-details">
                                <li><a class="tt-lightbox" href="<?php echo $url_thumb; ?>"><i class="fa fa-search"></i></a></li>
                                <li><a href="<?php the_permalink(); ?>"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                    </li>

                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>                
            </ul>
        </div>
    </div>
</section>


<?php
get_footer();
?>