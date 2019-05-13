<?php
    /*
    Template Name: About Us
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
                                            <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                                            <div class="themesflat-headings style-1 text-center clearfix">
                                                <h2 class="heading"><?php the_field('home_page_first_title'); ?></h2>
                                                <div class="sep has-icon width-125 clearfix">
                                                    <div class="sep-icon">
                                                        <span class="sep-icon-before sep-center sep-solid"></span>
                                                        <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                                        <span class="sep-icon-after sep-center sep-solid"></span>
                                                    </div>
                                                </div>
                                                <p class="sub-heading"><?php the_field('home_page_first_subtitle');?></p>
                                            </div>
                                            <div class="themesflat-spacer clearfix" data-desktop="42" data-mobile="35" data-smobile="35"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->

                                    <div class="row">
                                        <?php
                                                    $args = array(
                                                        'post_type' => 'info_block',
                                                        'posts_per_page' => 0,
                                                        'tax_query' => array(
                                                            array(
                                                                'taxonomy' => 'info_block_types',
                                                                'field' => 'slug',
                                                                'terms' => 'features'
                                                            )
                                                        )
                                                    );
                                                    $loop = new WP_Query($args);
                                                    while ($loop->have_posts()) : $loop->the_post(); ?>
                                        <div class="col-md-4">
                                            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                            <div class="themesflat-content-box clearfix" data-margin="0 5px 0 5px" data-mobilemargin="0 0 0 0">
                                                <div class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 clearfix">
                                                    <div class="icon-wrap">
                                                        <i class="<?php the_field('class_image') ?>"></i>
                                                    </div>
                                                    <div class="text-wrap">
                                                        <h5 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                                        <div class="sep clearfix"></div>
                                                        <p class="sub-heading"><?php the_content(); ?></p>
                                                    </div>
                                                </div><!-- /.themesflat-icon-box -->
                                            </div><!-- /.themesflat-content-box -->
                                        </div><!-- /.col-md-4 -->
                                        <?php endwhile; wp_reset_query(); ?>
                                    </div><!-- /.row -->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="41" data-mobile="35" data-smobile="35"></div>
                                            <div class="elm-button text-center">
                                                <a href="#" class="themesflat-button bg-accent">ABOUT US</a>
                                            </div>
                                            <div class="themesflat-spacer clearfix" data-desktop="73" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>

                            </div>
                            <!-- END ICONBOX -->

                            <!-- ABOUT -->
                            <div class="row-about">
                                <div class="container-fluid">
                                    <div class="row equalize sm-equalize-auto">
                                        <div class="col-md-6 half-background style-1">
                                            
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-md-6 bg-light-grey">
                                            <div class="themesflat-spacer clearfix" data-desktop="64" data-mobile="35" data-smobile="35"></div>
                                            <div class="themesflat-content-box clearfix" data-margin="0 25% 0 4.5%" data-mobilemargin="0 0 0 4.5%">
                                                <div class="themesflat-headings style-1 clearfix">
                                                    <h2 class="heading">WELCOME TO AUTORA</h2>
                                                    <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>                                               
                                                    <p class="sub-heading margin-top-30">We have successfully completed projects in numerous states across the continental United States. Autora Construction Services has a proven track record of:</p>
                                                </div>
                                                <div class="themesflat-spacer clearfix" data-desktop="26" data-mobile="35" data-smobile="35"></div>
                                                <div class="content-list">
                                                    <div class="themesflat-list has-icon style-1 icon-left clearfix">
                                                        <div class="inner">
                                                            <span class="item">
                                                                <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                <span class="text">Completing projects on time & Following budget guidelines</span>
                                                            </span>
                                                        </div>
                                                    </div><!-- /.themeslat-list -->
                                                    <div class="themesflat-list has-icon style-1 icon-left clearfix">
                                                        <div class="inner">
                                                            <span class="item">
                                                                <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                <span class="text">Elevated quality of workmanship</span>
                                                            </span>
                                                        </div>
                                                    </div><!-- /.themeslat-list -->
                                                    <div class="themesflat-list has-icon style-1 icon-left clearfix">
                                                        <div class="inner">
                                                            <span class="item">
                                                                <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                <span class="text">Meeting diverse supplier requirements</span>
                                                            </span>
                                                        </div>
                                                    </div><!-- /.themeslat-list -->
                                                    <div class="themesflat-list has-icon style-1 icon-left clearfix">
                                                        <div class="inner">
                                                            <span class="item">
                                                                <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                <span class="text">Implementing appropriate safety precautions and procedures</span>
                                                            </span>
                                                        </div>
                                                    </div><!-- /.themeslat-list -->
                                                </div><!-- /.content-list -->
                                                <div class="themesflat-spacer clearfix" data-desktop="42" data-mobile="35" data-smobile="35"></div>
                                                <div class="elm-button">
                                                    <a href="#"  class="themesflat-button bg-white">GET IN TOUCH</a>
                                                </div>
                                            </div><!-- /.themesflat-content-box --> 
                                            <div class="themesflat-spacer clearfix" data-desktop="76" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container-fluid -->
                            </div>
                            <!-- END ABOUT -->

                            <!-- COUNTER -->
                            <div class="row-counter parallax parallax-4 parallax-overlay">
                                <div class="container">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="92" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->                                    
                                    <div class="themesflat-row gutter-30 separator light clearfix">
                                        <div class="col span_1_of_3">
                                            <div class="themesflat-content-box clearfix" data-margin="0 0 0 0" data-mobilemargin="0 0 0 0">
                                                <div class="themesflat-counter style-1 align-center clearfix">
                                                    <div class="counter-item">
                                                        <div class="inner">
                                                            <div class="text-wrap">
                                                                <div class="number-wrap">
                                                                    <span class="number" data-speed="2000" data-to="9240" data-inviewport="yes">9240</span><span class="suffix">+</span>
                                                                </div>
                                                                <h3 class="heading margin-right-18">PROJECT COMPLETED</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.themesflat-counter -->
                                            </div> 
                                            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>                                                                                  
                                        </div><!-- /.col-md-3 -->
                                        <div class="col span_1_of_3">                                            
                                            <div class="themesflat-content-box clearfix" data-margin="0 0 0 0" data-mobilemargin="0 0 0 0">
                                                <div class="themesflat-counter style-1 align-center clearfix">
                                                    <div class="counter-item">
                                                        <div class="inner">
                                                            <div class="text-wrap">
                                                                <div class="number-wrap">
                                                                    <span class="number" data-speed="2000" data-to="336" data-inviewport="yes">336</span><span class="suffix">+</span>
                                                                </div>
                                                                <h3 class="heading margin-right-6">AWARDS WON</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.themesflat-counter -->
                                            </div> 
                                            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>                                      
                                        </div><!-- /.col-md-3 -->
                                        <div class="col span_1_of_3">
                                            <div class="themesflat-content-box clearfix" data-margin="0 0 0 0" data-mobilemargin="0 0 0 0">
                                                <div class="themesflat-counter style-1 align-center clearfix">
                                                    <div class="counter-item">
                                                        <div class="inner">
                                                            <div class="text-wrap">
                                                                <div class="number-wrap">
                                                                    <span class="number" data-speed="2000" data-to="725" data-inviewport="yes">725</span><span class="suffix">+</span>
                                                                </div>
                                                                <h3 class="heading margin-right-8">SATISFIED CLIENTS</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.themesflat-counter -->
                                            </div>  
                                            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>                                     
                                        </div><!-- /.col-md-3 -->
                                        <div class="col span_1_of_3">
                                            <div class="themesflat-content-box clearfix" data-margin="0 0 0 0" data-mobilemargin="0 0 0 0">
                                                <div class="themesflat-counter style-1 align-center clearfix">
                                                    <div class="counter-item">
                                                        <div class="inner">
                                                            <div class="text-wrap">
                                                                <div class="number-wrap">
                                                                    <span class="number" data-speed="2000" data-to="2984" data-inviewport="yes">2984</span><span class="suffix">+</span>
                                                                </div>
                                                                <h3 class="heading margin-right-10">WORKERS EMPLOYED</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.themesflat-counter -->
                                            </div>                                        
                                        </div><!-- /.col-md-3 -->
                                    </div><!-- /.row -->
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="72" data-mobile="60" data-smobile="60"></div>                                        
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                                <div class="bg-parallax-overlay overlay-black style2"></div>
                            </div>
                            <!-- END COUNTER -->

                            <!-- TABS -->
                            <div class="row-tabs">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                    <div class="row">
                                        <div class="col-md-6">
                                        <div class="themesflat-content-box clearfix" data-margin="0 18px 0 0" data-mobilemargin="0 0 0 0">
                                                <div class="themesflat-headings style-1 clearfix">
                                                    <h2 class="heading">OVERVIEW</h2>
                                                    <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>                                          
                                                </div>
                                                <div class="themesflat-spacer clearfix" data-desktop="38" data-mobile="35" data-smobile="35"></div>
                                                <div class="themesflat-tabs style-1 clearfix">
                                                    <ul class="tab-title clearfix">
                                                    <?php
                                                        $i = 0;
                                                        $args = array(
                                                            'post_type' => 'info_block',
                                                            'posts_per_page' => 0,
                                                            'tax_query' => array(
                                                                array(
                                                                    'taxonomy' => 'info_block_types',
                                                                    'field' => 'slug',
                                                                    'terms' => 'overview'
                                                                )
                                                            )
                                                        );
                                                        $loop = new WP_Query($args);
                                                        while ($loop->have_posts()) : $loop->the_post(); ?>
                                                            <?php $i++; ?>
                                                            <li class="item-title <?php if($i == 1) echo ' active'; ?>">
                                                                <span class="inner"><?php the_title(); ?></span>
                                                            </li>
                                                        <?php endwhile; wp_reset_query(); ?>
                                                    </ul>

                                                    <div class="tab-content-wrap clearfix">
                                                        <?php
                                                        $args = array(
                                                            'post_type' => 'info_block',
                                                            'posts_per_page' => 0,
                                                            'tax_query' => array(
                                                                array(
                                                                    'taxonomy' => 'info_block_types',
                                                                    'field' => 'slug',
                                                                    'terms' => 'overview'
                                                                )
                                                            )
                                                        );
                                                        $loop = new WP_Query($args);
                                                        while ($loop->have_posts()) : $loop->the_post(); ?>

                                                        <div class="tab-content">
                                                            <div class="item-content">                                                            
                                                                <p><?php the_content(); ?></p>
                                                                <div class="themesflat-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                                    <div class="inner">
                                                                        <span class="item">
                                                                            <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                            <span class="text"><?php the_field('list_item_1'); ?></span>
                                                                        </span>
                                                                    </div>
                                                                </div><!-- /.themeslat-list -->
                                                                <div class="themesflat-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                                    <div class="inner">
                                                                        <span class="item">
                                                                            <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                            <span class="text"><?php the_field('list_item_2'); ?> </span>
                                                                        </span>
                                                                    </div>
                                                                </div><!-- /.themeslat-list -->
                                                                <div class="themesflat-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                                    <div class="inner">
                                                                        <span class="item">
                                                                            <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                            <span class="text"><?php the_field('list_item_3'); ?></span>
                                                                        </span>
                                                                    </div>
                                                                </div><!-- /.themeslat-list -->                                                        
                                                            </div>
                                                        </div><!-- /.tab-content -->

                                                        <?php endwhile; wp_reset_query(); ?>
                                                    </div><!-- /.tab-content-wrap -->
                                                </div><!-- /.themesflat-tabs -->
                                            </div><!-- /.themesflat-content-box -->                                                   
                                        </div><!-- /.col-md-6 -->

                                        <div class="col-md-6">
                                            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                            <div class="themesflat-content-box" data-margin="0 0 0 18px" data-mobilemargin="0 0 0 0">
                                                <div class="themesflat-headings style-1 clearfix">
                                                    <h2 class="heading">FAQs</h2>
                                                    <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>                                          
                                                </div>
                                                <div class="themesflat-spacer clearfix" data-desktop="38" data-mobile="35" data-smobile="35"></div>
                                                <div class="themesflat-accordions style-1 has-icon icon-left iconstyle-1 clearfix">
                                                <?php
                                                        $i = 0;
                                                        $args = array(
                                                            'post_type' => 'info_block',
                                                            'posts_per_page' => 0,
                                                            'tax_query' => array(
                                                                array(
                                                                    'taxonomy' => 'info_block_types',
                                                                    'field' => 'slug',
                                                                    'terms' => 'faqs'
                                                                )
                                                            )
                                                        );
                                                        $loop = new WP_Query($args);
                                                while ($loop->have_posts()) : $loop->the_post(); ?>
                                                    <?php $i++; ?>
                                                    <div class="accordion-item <?php if($i == 1) echo ' active'; ?>">
                                                        <h3 class="accordion-heading"><span class="inner"><?php the_title(); ?></span></h3>
                                                        <div class="accordion-content">
                                                            <div><?php the_content(); ?></div>
                                                        </div>
                                                    </div><!-- /.accordion-item -->

                                                    <?php endwhile; wp_reset_query(); ?>
                                                </div><!-- /.themesflat-accordion -->
                                            </div><!-- /.themesflat-content-box -->                                                  
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="0"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END TABS -->

                            <!-- PARTNER -->
                            <div class="row-partner">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
                                            <div class="themesflat-carousel-box clearfix" data-gap="5" data-column="5" data-column2="3" data-column3="2" data-auto="true">
                                                <div class="owl-carousel owl-theme">
                                                <?php
                                                    $args = array(
                                                        'post_type' => 'sliders',
                                                        'posts_per_page' => 0,
                                                        'tax_query' => array(
                                                            array(
                                                                'taxonomy' => 'slider_types',
                                                                'field' => 'slug',
                                                                'terms' => 'home_page_bottom_slider'
                                                            )
                                                        )
                                                    );
                                                    $loop = new WP_Query($args);
                                                    while ($loop->have_posts()) : $loop->the_post(); ?>
                                                    <div class="themesflat-partner style-1 align-center clearfix">
                                                        <div class="partner-item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="Image" class="partner-default">
                                                                    <img src="assets/img/partners/partner-1-color.png" alt="Image" class="partner-color">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /themesflat-partner -->
                                                    <?php endwhile; wp_reset_query(); ?>                                                   
                                                </div>
                                            </div><!-- /.themesflat-carousel-box -->
                                            <div class="themesflat-spacer clearfix" data-desktop="66" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END PARTNER -->

                            <!-- QUOTE -->
                            <div class="row-quote bg-row-1">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="38" data-mobile="35" data-smobile="35"></div>
                                            <div class="themesflat-quote style-1 clearfix">
                                                <div class="quote-item">
                                                    <div class="inner">
                                                        <div class="heading-wrap">
                                                            <h3 class="heading">START EXECUTING YOUR PROJECT</h3>
                                                        </div>
                                                        <div class="button-wrap has-icon icon-left">
                                                            <a href="#" class="themesflat-button bg-white small"><span>(+613) 8376 6284 <span class="icon"><i class="autora-icon-phone-contact"></i></span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="themesflat-spacer clearfix" data-desktop="33" data-mobile="35" data-smobile="35"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END QUOTE -->

                            <!-- TEAM -->
                            <div class="row-team">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                                            <div class="themesflat-headings style-1 text-center clearfix">
                                                <h2 class="heading">LEADERSHIP TEAM</h2>
                                                <div class="sep has-icon width-125 clearfix">
                                                    <div class="sep-icon">
                                                        <span class="sep-icon-before sep-center sep-solid"></span>
                                                        <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                                        <span class="sep-icon-after sep-center sep-solid"></span>
                                                    </div>
                                                </div>
                                                <p class="sub-heading font-weight-400 text-808 max-width-680">With us you will have the peace of mind knowing that your dream home project is in the hands of a licensed fully insured building company.</p>
                                            </div>
                                            <div class="themesflat-spacer clearfix" data-desktop="39" data-mobile="35" data-smobile="35"></div>
                                            <div class="themesflat-carousel-box data-effect has-bullets bullet-circle bullet24 clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-auto="true">
                                                <div class="owl-carousel owl-theme">
                                                <?php
                                                    $args = array(
                                                        'post_type' => 'sliders',
                                                        'posts_per_page' => 0,
                                                        'tax_query' => array(
                                                            array(
                                                                'taxonomy' => 'slider_types',
                                                                'field' => 'slug',
                                                                'terms' => 'team_slider'
                                                            )
                                                        )
                                                    );
                                                    $loop = new WP_Query($args);
                                                    while ($loop->have_posts()) : $loop->the_post(); ?>

                                                    <div class="themesflat-team style-1 align-center clearfix">
                                                        <div class="team-item">
                                                            <div class="inner">
                                                                <div class="thumb data-effect-item">
                                                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="Image">
                                                                    <ul class="socials clearfix">
                                                                        <li class="facebook"><a href="<?php the_field('facebook'); ?>"><i class="autora-icon-facebook"></i></a></li>
                                                                        <li class="twitter"><a href="<?php the_field('twitter'); ?>"><i class="autora-icon-twitter"></i></a></li>
                                                                        <li class="camera"><a href="<?php the_field('camera'); ?>"><i class="autora-icon-camera-outline"></i></a></li>
                                                                    </ul>
                                                                    <div class="overlay-effect bg-color-4"></div>
                                                                </div>
                                                                <div class="text-wrap">
                                                                    <h6 class="name"><?php the_title(); ?></h6>
                                                                    <div class="position"><?php the_field('position'); ?></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.themesflat-team -->
                                                    <?php endwhile; wp_reset_query(); ?>

                                                </div><!-- /.owl-carousel -->
                                            </div><!-- /.themesflat-carousel -->
                                            <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END TEAM -->
                       </div><!-- /.page-content -->
                    </div><!-- /#inner-content -->
                </div><!-- /#site-content -->
            </div><!-- /#content-wrap -->
        </div><!-- /#main-content -->


<?php get_footer(); ?>
