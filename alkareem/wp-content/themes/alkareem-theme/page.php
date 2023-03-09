<?php get_header();?>
<div class="page-content">
            <div class="container">
            <?php while ( have_posts() ) { the_post(); ?>
                <div class="row">
                    <div class="col-md-12"> 

                        <div>
                            <h2><?php the_title();?></h2>
                        </div>
                        <div>
                       
                            <?php the_content();?>
                        </div>
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
                <?php } wp_reset_query();?> 
            </div><!-- .container end -->
        </div><!-- .page-content end --> 

<?php get_footer();?>