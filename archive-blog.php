<?php get_header(); ?>

<!-- Featured Title -->
<div id="featured-title" class="featured-title clearfix">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="home.html" class="trail-begin">Home</a>
                        <span class="sep">|</span>
                        <span class="trail-end">Blog</span>
                    </div>
                </div>
            </div>
            <div class="featured-title-heading-wrap">
                <h1 class="feautured-title-heading">
                    Blog
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



                <?php while (have_posts()) :
                    the_post(); ?>

                    <article class="hentry data-effect">
                        <div class="post-media has-effect-icon offset-v-25 offset-h-24 data-effect-item clerafix">
                            <a href="<?php the_permalink($post); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="Image"></a>
                            <div class="post-calendar">
                                <span class="inner">
                                    <span class="entry-calendar">
                                        <span class="day"><?php the_time("d"); ?></span>
                                        <span class="month"><?php the_time("M"); ?></span>
                                    </span>
                                </span>
                            </div>
                            <div class="overlay-effect bg-color-1"></div>
                            <div class="elm-link">
                                <a href="<?php the_permalink($post); ?>" class="icon-1"></a>
                            </div>
                        </div><!-- /.post-media -->

                        <div class="post-content-wrap clearfix">
                            <h2 class="post-title">
                                <span class="post-title-inner">
                                    <a href="<?php the_permalink($post); ?>"><?php the_title(); ?></a>
                                </span>
                            </h2><!-- /.post-title -->
                            <div class="post-meta">
                                <div class="post-meta-content">
                                    <div class="post-meta-content-inner">
                                        <span class="post-date item"><span class="inner"><span class="entry-date"><?php the_time("d M Y"); ?></span></span></span>
                                        <span class="post-by-author item"><span class="inner"><a href="#">By: <?php the_author(); ?></a></span></span>
                                        <span class="comment item"><span class="inner"><a href="#"><?php comments_number('No comments', '1 Comment', '% Comments'); ?></a></span></span>
                                    </div>
                                </div>
                            </div><!-- /.post-meta -->
                            <div class="post-content post-excerpt">
                                <p><?php the_content(); ?></p>
                            </div><!-- /.post-excerpt -->
                            <div class="post-read-more">
                                <div class="post-link">
                                    <a href="<?php the_permalink($post); ?>">READ MORE</a>
                                </div>
                            </div>
                        </div><!-- /.post-content-wrap -->
                    </article><!-- /.hentry -->

                <?php endwhile; ?>

                <div class="themesflat-pagination clearfix">
                    <?php the_posts_pagination(array(
                        'prev_text'    => __('<'),
                        'next_text'    => __('>'),
                    )); ?>
                </div>

            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
        <div id="sidebar">
            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60"></div>
            <div id="inner-sidebar" class="inner-content-wrap">
                <div class="widget widget_search">
                    <?php get_search_form(); ?>
                </div><!-- /.widget_search -->

                <div class="widget widget_follow">
                    <h2 class="widget-title"><span>FOLLOW US</span></h2>
                    <div class="follow-wrap clearfix col3 g8">
                        <div class="follow-item facebook">
                            <div class="inner">
                                <span class="socials">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <span class="text">43217 likes</span>
                                </span>
                            </div>
                        </div>
                        <div class="follow-item twitter">
                            <div class="inner">
                                <span class="socials">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <span class="text">3752 flowers</span>
                                </span>
                            </div>
                        </div>
                        <div class="follow-item google">
                            <div class="inner">
                                <span class="socials">
                                    <a href="#"><i class="fa fa-google"></i></a>
                                    <span class="text">432 contacter</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div><!-- /.widget_follow -->

                <?php if (is_active_sidebar('right_panel')) : ?>
                    <?php dynamic_sidebar('right_panel'); ?>
                <?php endif; ?>

            </div>
        </div><!-- /#sidebar -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->

<?php get_footer(); ?>