<!-- Navigation start -->
<nav class="navbar navbar-custom tt-default-nav" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php
            $logo_src = get_option('theme_options_logo_src');
            ?>
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <img src="<?php echo $logo_src; ?>" alt="<?php echo get_option('theme_options_logo_alt'); ?>">
            </a> 
        </div>

        <div class="collapse navbar-collapse" id="custom-collapse">

            <?php
            wp_nav_menu(
                    array(
                        'menu' => 'top_menu',
                        'theme_location' => 'top_menu',
                        'depth' => 2,
                        'container' => 'div',
                        //'container_class' => '',
                        'menu_class' => 'nav navbar-nav navbar-right',
                        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                        'walker' => new wp_bootstrap_navwalker()
                    )
            );
            ?>
        </div>
    </div><!-- /.container -->
</nav>
<!-- Navigation end --> 