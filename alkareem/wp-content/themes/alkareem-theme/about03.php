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
        <!-- .page-title start -->


        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                        
                        <div class="custom-heading">
                            <h2>About Us</h2>
                        </div>
                        <img class="float-right" src="<?php echo get_field('image');?>" alt="" width="360"/>
                        <p>
                            <?php echo get_the_content(); ?>
                        </p>
                        <br />
                        <div class="row">
                            <div class="col-md-5">
                                <div class="custom-heading">
                                    <h3>our Vision</h3>
                                </div><!-- .custom-heading end -->
                                <p>
                                <?php echo get_the_content(); ?>
                                </p>
                            </div><!-- .col-md-5 end -->
                            <div class="col-md-7">
                                <div class="custom-heading">
                                    <h3>our Mission</h3>
                                </div><!-- .custom-heading end -->

                                <ul class="fa-ul">
                                <?php
                    $args=array(
                        'posts_per_page' => 5, 
                        'cat' => 6,
                    );
                    $the_query = new WP_Query( $args );
                            
                    // The Loop
                    if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                ?>
                                    <li>
                                        <i class="fa fa-li fa-long-arrow-right"></i>
                                        <?php echo get_the_content(); ?>
                                    </li>

                                    <li>
                                        <i class="fa fa-li fa-long-arrow-right"></i>
                                        <?php echo get_the_content(); ?>
                                    </li>

                                    <li>
                                        <i class="fa fa-li fa-long-arrow-right"></i>
                                        <?php echo get_the_content(); ?>
                                    </li>

                                    <li>
                                        <i class="fa fa-li fa-long-arrow-right"></i>
                                        <?php echo get_the_content(); ?>
                                    </li>

                                    <li>
                                        <i class="fa fa-li fa-long-arrow-right"></i>
                                        <?php echo get_the_content(); ?>
                                    </li>
                                    <?php } } ?>
                                </ul><!-- .fa-ul end -->
                            </div><!-- .col-md-7 end -->
                        </div><!-- .row end -->
                    </div><!-- .col-md-9 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->       
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
    </body>
</html>