<?php
/*
    Template Name: About Us Team
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
    <div id="content-wrap" class="container">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="themesflat-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                <div class="themesflat-headings style-2 clearfix">
                    <h2 class="heading">LEADERSHIP TEAM</h2>
                    <div class="sep has-width w80 accent-bg clearfix"></div>
                    <p class="sub-heading font-size-16 line-height-28 text-666 margin-top-27">With us you will have the peace of mind knowing that your dream home project is in the hands of a licensed fully insured building company.</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="35" data-smobile="35"></div>
                <div class="themesflat-content-box clearfix" data-margin="0 15px 0 0" data-mobilemargin="0 0 0 0">
                    <ol class="comment-list style-2">

                        <?php
                        $args = array(
                            'post_type' => 'info_block',
                            'posts_per_page' => 0,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'team',
                                    'field' => 'slug',
                                    'terms' => 'leadership'
                                )
                            )
                        );
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) : $loop->the_post(); ?>

                            <li class="comment">
                                <article class="comment-wrap clearfix">
                                    <div class="gravatar"><img alt="image" src="<?php the_post_thumbnail_url(); ?>" /></div>
                                    <div class="comment-content">
                                        <div class="comment-meta">
                                            <h6 class="comment-author"><?php the_title(); ?></h6>
                                            <span class="comment-position"><?php the_field('place'); ?></span>
                                        </div>
                                        <div class="comment-text">
                                            <p><?php the_content(); ?></p>
                                            <div class="socials">
                                                <a href="<?php the_field('facebook'); ?>" class="facebook"><span class="fa fa-facebook-square"></span></a>
                                                <a href="<?php the_field('linkedin'); ?>" class="linkedin"><span class="fa fa-linkedin-square"></span></a>
                                                <a href="<?php the_field('d'); ?>" class="pinterest"><span class="fa fa-pinterest-p"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </li><!-- /.comment -->

                        <?php endwhile;
                    wp_reset_query(); ?>

                    </ol><!-- /.comment-list -->
                </div><!-- /.themesflat-content-box -->
                <div class="themesflat-spacer clearfix" data-desktop="83" data-mobile="60" data-smobile="60"></div>
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
        <div id="sidebar">
            <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="0" data-smobile="0"></div>
            <div id="inner-sidebar" class="inner-content-wrap">
                <div class="widget widget_list">
                    <div class="inner">
                        <ul class="list-wrap">
                            <li class="list-item">
                                <a href="#"><span class="text">Who we are?</span></a>
                            </li>
                            <li class="list-item">
                                <a href="#"><span class="text">Leadership Team</span></a>
                            </li>
                            <li class="list-item">
                                <a href="#"><span class="text">Careers</span></a>
                            </li>
                        </ul>
                    </div>
                </div><!-- /.widget_list -->

                <div class="widget widget_instagram margin-top-51">
                    <h2 class="widget-title margin-bottom-30"><span>OUR GALLERY</span></h2>
                    <div class="instagram-wrap data-effect clearfix col3 g10">

                        <?php echo do_shortcode('[instagram-feed]'); ?>

                    </div>
                </div><!-- /.widget_instagram -->

                <div class="widget widget_lastest_twitter margin-top-40">
                    <h2 class="widget-title"><span>LATEST TWITTER</span></h2>
                    <?php echo do_shortcode('[custom-twitter-feeds]'); ?>
                </div><!-- /.widget_lastest -->
            </div>
            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60"></div>
        </div><!-- /#sidebar -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->

<?php get_footer(); ?>