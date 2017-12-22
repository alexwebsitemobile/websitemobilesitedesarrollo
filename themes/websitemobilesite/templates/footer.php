<?php
if (is_front_page()) {
    get_template_part('additional-footer');
}
?>


<footer class="footer-section text-center">
    <div class="container">
        <a class="page-scroll backToTop" href="#page-top"><i class="fa fa-angle-up"></i></a>

        <div class="row">
            <div class="col-xs-12">
                <div class="footer-logo">
                    <?php
                    $logo_footer_src = get_option('theme_options_logo_footer_src');
                    ?>
                    <a  href="<?php echo home_url(); ?>">
                        <img src="<?php echo $logo_footer_src; ?>" alt="<?php echo get_option('theme_options_logo_alt'); ?>">
                    </a> 
                </div>

                <div class="social-icon clearfix">
                    <?php
                    $facebook = get_option('theme_options_facebook');
                    $twitter = get_option('theme_options_twitter');
                    $instagram = get_option('theme_options_instagram');
                    ?>
                    <ul class="list-inline">
                        <?php if (!empty($facebook)) { ?>
                            <li><a href="<?php echo $facebook; ?>" target="_blank" title="Facebook" style="cursor: auto;">
                                <i class="fa fa-facebook"></i>
                            </a></li>
                        <?php } ?>
                        <?php if (!empty($twitter)) { ?>
                            <li><a href="<?php echo $twitter; ?>" target="_blank" title="Twitter" style="cursor: auto;">
                                <i class="fa fa-twitter"></i>
                            </a></li>
                        <?php } ?>

                        <?php if (!empty($instagram)) { ?>
                            <li><a href="<?php echo $instagram; ?>" target="_blank" title="Instagram" style="cursor: auto;">
                                <i class="fa fa-instagram"></i>
                            </a></li>
                        <?php } ?>
                    </ul>
                </div>

                <div class="copyright">
                    <p>&copy; Copright <?php echo date('Y'); ?> Website Mobile Site - All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.easing.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.sticky.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/smoothscroll.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.stellar.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.inview.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/wow.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.countTo.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.shuffle.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.BlackAndWhite.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/owl-carousel/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyAylza_5dgyqy7nCzLtW7h7iBKJyHQTv4E"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/scripts.js"></script>

<script type="text/javascript">
    function vidplay() {
        var video = document.getElementById("videoPlayer");
        var button = document.getElementById("playbtn");
        if (video.paused) {
            video.play();
            button.className = "pause"
        } else {
            video.pause();
            button.className = "play"
        }
    }

    /* ======= GOOGLE MAP ======= */

    if ($('#myMap').length > 0) {
        //set your google maps parameters
        var $latitude = 40.716304,
                $longitude = -73.995763,
                $map_zoom = 16

        //google map custom marker icon 
        var $marker_url = '<?php bloginfo('template_url'); ?>/images/pin.png';

        //we define here the style of the map
        var style = [{
                "stylers": [{
                        "hue": "#000"
                    }, {
                        "saturation": -70
                    }, {
                        "gamma": 2.15
                    }, {
                        "lightness": 12
                    }]
            }];

        //set google map options
        var map_options = {
            center: new google.maps.LatLng($latitude, $longitude),
            zoom: $map_zoom,
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            streetViewControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
            styles: style
        }
        //inizialize the map
        var map = new google.maps.Map(document.getElementById('myMap'), map_options);
        //add a custom marker to the map                
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng($latitude, $longitude),
            map: map,
            visible: true,
            icon: $marker_url
        });

        var contentString = '<div id="mapcontent">' + '<p>Source Meridian, 795 Folsom Ave, San Francisco.</p></div>';
        var infowindow = new google.maps.InfoWindow({
            maxWidth: 320,
            content: contentString
        });

        google.maps.event.addListener(marker, 'click', function () {
            infowindow.open(map, marker);
        });

    }
</script>
