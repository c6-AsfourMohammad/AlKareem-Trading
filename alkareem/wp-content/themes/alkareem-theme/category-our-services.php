<?php get_header();?>


    <!-- .page-title start -->
    <div class="page-title-style01 page-title-negative-top pt-bkg03">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- <h1>Alkareem Trading - Specialized Logistics Services</h1> -->

                    <div class="breadcrumb-container">
                        <ul class="breadcrumb clearfix">
                           
                        </ul><!-- .breadcrumb end -->
                    </div><!-- .breadcrumb-container end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-title-style01.page-title-negative-top end -->


    <div class="page-content custom-bkg bkg-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="custom-heading02">
                        <h2>Our Services</h2><br/>
                        <!-- <p>Alkareem LOGISTIC SERVICES</p> -->
                    </div><!-- .custom-heading02 end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->

            <div class="row">

            <?php while ( have_posts() ) { the_post(); ?>
                <div class="col-md-4 col-sm-4   ">
                    <div class="service-feature-box mb-15 card ">
                        <div class="service-media">
                            <div class="image-card-services" style="background-image:url(<?php echo get_field('image');?>)"></div>
                        </div><!-- .service-media end -->

                        <div class="service-body ">
                            <div class="custom-heading">
                                <h4><?php the_title();?></h4>
                            </div><!-- .custom-heading end -->

                            <div><p><?php short_content(100);?></p></div>
                        </div><!-- .service-body end -->
                    </div><!-- .service-feature-box-end -->
                </div><!-- .col-md-4 end -->
                <?php } wp_reset_query();?>    
            </div><!-- .row end -->

        </div><!-- .container end -->
    </div><!-- .page-content end -->

<?php get_footer();?>