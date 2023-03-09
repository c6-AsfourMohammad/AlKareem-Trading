<!DOCTYPE html>
<html>
    <head>
        <title><?php echo get_bloginfo();?></title>
        <meta name="description" content="Trucking is transportation and Logistics website template">
        <meta name="author" content="pixel-industry">
        <meta name="keywords" content="transportation, logistics, transportation template, logistics template, cargo, business">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/bootstrap.css"/><!-- bootstrap grid -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/masterslider/style/masterslider.css" /><!-- Master slider css -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/masterslider/skins/default/style.css" /><!-- Master slider default skin -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/animate.css"/><!-- animations -->
        <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri();?>/owl-carousel/owl.carousel.css'/><!-- Client carousel -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/style.css?rand=<?php echo rand();?>"/><!-- template styles -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/color-blue.css"/><!-- template main color -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/retina.css"/><!-- retina ready styles -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/responsive.css"/><!-- responsive styles -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/style.css"/><!-- responsive styles -->
        <link rel="icon" href="<?php echo get_stylesheet_directory_uri();?>/img/alkareem Icon.png">
        <!-- Google Web fonts -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,800,700,600' rel='stylesheet' type='text/css'>

        <!-- Font icons -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/icon-fonts/font-awesome-4.3.0/css/font-awesome.min.css"/>
        <!-- Fontawesome icons css -->
    </head>
    <body>
        <!-- Header Starts -->
            <?php get_header();?>
        <!-- Header Ends -->
<!-- ------------------------------------------------------------------------------------------------------ -->
        <!-- Slider Starts  -->
        <div id="masterslider" class="master-slider ms-skin-default mb-0">
        <?php
                    $args=array(
                        'posts_per_page' =>3, 
                        'cat' => 4,
                    );
                    $the_query = new WP_Query( $args );
                            
                    // The Loop
                    if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                ?>
            <!-- slide 1 start -->
            <div class="ms-slide">
                <!-- slide background -->
                <img src="<?php echo get_field('image');?>" data-src="<?php echo get_field('image');?>"/>  
                <h2 class="ms-layer pi-caption01" 
                    style="left: 58px; top: 390px;" 
                    data-type="text" 
                    data-effect="top(short)" 
                    data-duration="300"
                    data-hide-effect="fade" 
                    data-delay="0" 
                    >
                   
                </h2>               
            </div><!-- .ms-slide end -->
            <?php } } ?>
        </div><!-- #masterslider end -->
        <!-- Slider Ends -->
<!-- ------------------------------------------------------------------------------------------------------ -->
        <!-- Services Starts -->
        <div class="page-content parallax parallax01 mb-70">
            <div class="container">
                <div class="row services-negative-top">
                <?php
                    $args=array(
                        'posts_per_page' => 3, 
                        'cat' => 2,
                    );
                    $the_query = new WP_Query( $args );
                            
                    // The Loop
                    if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                ?>
                    <div class="col-md-4 col-sm-4">
                        <div class="service-feature-box">
                            <div class="service-media">
                               <div class="image-card-services" style="background-image:url(<?php echo get_field('image');?>)" ></div>
                            </div><!-- .service-media end -->
                            <div class="service-body">
                                <div class="custom-heading">
                                    <h4><a href="<?php echo home_url();?>/?cat=2<?php the_permalink();?>"> <?php the_title();?></a></h4>
                                </div><!-- .custom-heading end -->
                                <div><?php short_content(18);?></div>
                            </div><!-- .service-body end -->
                        </div><!-- .service-feature-box-end -->
                    </div><!-- .col-md-4 end -->
                <?php } } ?>
                </div><!-- .row end -->
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo home_url();?>/?cat=2" class="btn btn-big  btn-centered" style="background-color: #f27f22;">
                            <span>
                               More services
                            </span>
                        </a>
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div><!-- .container end -->
        </div>  
        <!-- Services Ends -->
        <!-- ------------------------------------------------------------------------------------------------------ -->
        <!-- capa. Starts -->
        <div class="page-content">
            <div class="container">
                <div class="row">
                
                    <div class="col-md-12">
                        <div class="custom-heading02">
                            <h2>Our Capabilities</h2>
                            <br/>
                        </div><!-- .custom-heading02 end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
                <div class="row">
                <?php
                    $args=array(
                        'posts_per_page' => 4, 
                        'cat' => 3,
                    );
                    $the_query = new WP_Query( $args );
                            
                    // The Loop
                    if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                ?>
                    <div class="col-md-6 col-sm-6  col-6">
                        <div class="service-icon-left-boxed ddiv">
                            <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                            <!-- <div class="image-card-services" style="background-image:url(<?php echo get_field('image');?>)" ></div> -->
                                <img src="<?php echo get_field('image');?>" alt="forktruck icon"/>
                            </div><!-- .icon-container end -->
                              <br/>
                            <div class="service-details">
                                <h3><a href="<?php echo home_url();?>/?cat=3<?php the_permalink();?>"> <?php the_title();?></a></h3>

                                <div class="cont"><?php short_content(30);?></div>
                            </div><!-- .service-details end -->
                        </div><!-- .service-icon-left-boxed end -->
                    </div><!-- .col-md-6 end -->                 
                    <?php } } ?>
                </div><!-- .row.mb-30 end -->
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo home_url();?>/?cat=3" class="btn btn-big  btn-centered" style="background-color: #f27f22;">
                            <span>
                              See More
                            </span>
                        </a>
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->
         <!-- capa. Ends -->
        <!-- ------------------------------------------------------------------------------------------------------ -->
         <!-- Footer Starts -->
        <?php get_footer() ?>
        <!-- footer Ends -->
        <script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
        <script src="<?php echo get_stylesheet_directory_uri();?>/js/bootstrap.min.js"></script><!-- .bootstrap script -->
        <script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.srcipts.min.js"></script><!-- modernizr, retina, stellar for parallax -->  
        <script src="<?php echo get_stylesheet_directory_uri();?>/owl-carousel/owl.carousel.min.js"></script><!-- Carousels script -->
        <script src="<?php echo get_stylesheet_directory_uri();?>/masterslider/masterslider.min.js"></script><!-- Master slider main js -->
        <script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.matchHeight-min.js"></script><!-- for columns with background image -->
        <script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.dlmenu.min.js"></script><!-- for responsive menu -->
        <script src="<?php echo get_stylesheet_directory_uri();?>/js/include.js"></script><!-- custom js functions -->
        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';

                function equalHeight() {
                    $('.page-content.column-img-bkg *[class*="custom-col-padding"]').each(function () {
                        var maxHeight = $(this).outerHeight();
                        $('.page-content.column-img-bkg *[class*="img-bkg"]').height(maxHeight);
                    });
                };
                $(document).ready(equalHeight);
                $(window).resize(equalHeight);

                // MASTER SLIDER START 
                var slider = new MasterSlider();
                slider.setup('masterslider', {
                    width: 1140, // slider standard width
                    height: 854, // slider standard height
                    space: 0,
                    speed: 50,
                    layout: "fullwidth",
                    centerControls: false,
                    loop: true,
                    autoplay: true
                            // more slider options goes here...
                            // check slider options section in documentation for more options.
                });
                // adds Arrows navigation control to the slider.
                slider.control('arrows');

                // CLIENTS CAROUSEL START 
                $('#client-carousel').owlCarousel({
                    items: 6,
                    loop: true,
                    margin: 30,
                    responsiveClass: true,
                    mouseDrag: true,
                    dots: false,
                    responsive: {
                        0: {
                            items: 2,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true
                        },
                        600: {
                            items: 3,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true
                        },
                        1000: {
                            items: 6,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            mouseDrag: true
                        }
                    }
                });

                // TESTIMONIAL CAROUSELS START
                $('#testimonial-carousel').owlCarousel({
                    items: 1,
                    loop: true,
                    margin: 30,
                    responsiveClass: true,
                    mouseDrag: true,
                    dots: false,
                    autoheight: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            autoHeight: true
                        },
                        600: {
                            items: 1,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            autoHeight: true
                        },
                        1000: {
                            items: 1,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            mouseDrag: true,
                            autoHeight: true
                        }
                    }
                });
            });
            /* ]]> */
        </script>
    </body>
</html>
