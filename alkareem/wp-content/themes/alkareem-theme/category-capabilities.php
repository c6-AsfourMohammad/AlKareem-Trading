<?php get_header();?>
    <!-- .page-title start -->
    <div class="page-title-style01 page-title-negative-top pt-bkg09">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- <h1>Trucking - News</h1> -->

                        <div class="breadcrumb-container">
                            <!-- <ul class="breadcrumb clearfix">
                                <li>You are here:</li>
                                <li>
                                    <a href="#">News</a>
                                </li>
                                <li>
                                    <a href="#">News list</a>
                                </li> -->
                            <!-- </ul>.breadcrumb end -->
                        </div><!-- .breadcrumb-container end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-title-style01.page-title-negative-top end -->

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <ul class="col-md-12 blog-posts post-list">
                        
                    <?php while ( have_posts() ) { the_post(); ?>
                        <li class="blog-post clearfix">
                            <div class="post-date">
                                <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                    <img src="<?php echo get_field('image');?>" alt="checklist icon"/>
                                </div>
                            </div><!-- .post-date end -->

                            <div class="post-body">
                                <a href="#">
                                    <h3>Industrial products:</h3>
                                </a>

                                <p>
                                    These can include raw materials, machinery, and equipment needed for manufacturing 
                                    processes, construction materials, and other products that support industry operations.
                                </p>

                                <!-- <a href="news-single.html" class="read-more">
                                    <span>
                                        Read more
                                        <i class="fa fa-chevron-right"></i>
                                    </span>                              
                                </a> -->
                            </div><!-- .post-body end -->
                        </li><!-- .blog-post end -->

                        <?php } wp_reset_query();?>  
                    
                    </ul><!-- .col-md-9.blog-posts.post-list end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

<?php get_footer();?>