<!-- header Start -->
<?php get_header();?>
<!-- header End -->
    <!-- .page-Our Capabilities start -->
    <div class="page-title-style01 page-title-negative-top pt-bkg09">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-container">
                        </div>
                        <!-- .breadcrumb-container end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </div>
        <!-- .page-title-style01.page-title-negative-top end -->
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
                            </div>
                            <!-- .post-date end -->
                            <div class="post-body">
                                <a href="#">
                                    <h3><?php the_title();?></h3>
                                </a>
                                <div ><?php the_content();?></div>
                            </div>
                            <!-- .post-body end -->
                        </li>
                        <!-- .blog-post end -->
                        <?php } wp_reset_query();?>  
                    </ul>
                    <!-- .col-md-9.blog-posts.post-list end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </div>
        <!-- .page-Our Capabilities end -->
<!-- Footer Start-->
<?php get_footer();?>
<!-- Footer End -->
