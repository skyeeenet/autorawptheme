<?php
    /*
    Template Name: Contact Us
    */
?>

<?php get_header(); ?>

 <!-- Featured Title -->
 <div id="featured-title" class="featured-title clearfix">
            <div id="featured-title-inner" class="container clearfix">
                <div class="featured-title-inner-wrap">                    
                    <div id="breadcrumbs">
                        <div class="breadcrumbs-inner">
                            <?php the_breadcrumb(); ?>
                        </div>
                    </div>
                    <div class="featured-title-heading-wrap">
                        <h1 class="feautured-title-heading">
                            <?php echo get_the_title(); ?>
                        </h1>
                    </div>
                </div><!-- /.featured-title-inner-wrap -->
            </div><!-- /#featured-title-inner -->            
        </div>
        <!-- End Featured Title -->

        <!-- Main Content -->
        <div id="main-content" class="site-main clearfix">
            <div id="content-wrap">
                <div id="site-content" class="site-content clearfix">
                    <div id="inner-content" class="inner-content-wrap">
                       <div class="page-content">
                            <!-- ICONBOX -->
                            <div class="row-iconbox">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                                            <div class="themesflat-headings style-1 text-center clearfix">
                                                <h2 class="heading">CONTACT US</h2>
                                                <div class="sep has-icon width-125 clearfix">
                                                    <div class="sep-icon">
                                                        <span class="sep-icon-before sep-center sep-solid"></span>
                                                        <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                                        <span class="sep-icon-after sep-center sep-solid"></span>
                                                    </div>
                                                </div>
                                                <p class="sub-heading font-weight-400 max-width-770 line-height-26 margin-top-14">Are you interested in finding out how Autora Construction Services can make your project a success? For more information on our services please contact us.</p>
                                            </div>
                                            <div class="themesflat-spacer clearfix" data-desktop="45" data-mobile="35" data-smobile="35"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->

                                    <div class="row gutter-16">
                                        <div class="col-md-4">
                                            <div class="themesflat-icon-box icon-top align-center  accent-color style-3 bg-light-snow clearfix">
                                                <div class="icon-wrap">
                                                    <i class="icon-phone"></i>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#">+61 3 8376 6284</a></h5>
                                                    <p class="sub-heading">Support 24/7 - Online 24 hours</p>
                                                    <span class="class more-link"><a href="#">Call us now</a></span>
                                                </div>
                                            </div><!-- /.themesflat-icon-box -->
                                        </div><!-- /.col --> 
                                        <div class="col-md-4">
                                            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                            <div class="themesflat-icon-box icon-top align-center accent-color style-3 bg-light-snow clearfix">
                                                <div class="icon-wrap">
                                                    <i class="icon-map"></i>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#">4946 MARMORA ROAD</a></h5>
                                                    <p class="sub-heading">Mon- Sat: 5:00 am to 6:30 pm</p>
                                                    <span class="class more-link">Sunday: Close</span>
                                                </div>
                                            </div><!-- /.themesflat-icon-box -->
                                        </div><!-- /.col -->
                                        <div class="col-md-4">
                                            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                            <div class="themesflat-icon-box icon-top align-center accent-color style-3 bg-light-snow clearfix">
                                                <div class="icon-wrap">
                                                    <i class="icon-envelope"></i>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#"><?php the_field('phone'); ?></a></h5>
                                                    <p class="sub-heading"><?php the_field('place'); ?></p>
                                                    <span class="class more-link"><a href="#"><?php the_field('email'); ?></a></span>
                                                </div>
                                            </div><!-- /.themesflat-icon-box -->
                                        </div><!-- /.col -->                           
                                    </div><!-- /.row -->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="58" data-mobile="35" data-smobile="35"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END ICONBOX -->

                           <!-- CONTACT -->
                            <div class="row-contact">
                                <div class="container">
                                    <div class="row">
                                    <div class="col-md-4">          
                                        <?php echo do_shortcode('[contact-form-7 id="179" title="Contact us"]'); ?>
                                    </div>
                                        <div class="col-md-8">
                                            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                            <div class="themesflat-map style-2"></div>
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="81" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END CONTACT -->
                       </div><!-- /.page-content -->
                    </div><!-- /#inner-content -->
                </div><!-- /#site-content -->
            </div><!-- /#content-wrap -->
        </div><!-- /#main-content -->
        <script src="assets/js/gmap3.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIEU6OT3xqCksCetQeNLIPps6-AYrhq-s&region=GB"></script>

<?php get_footer(); ?>