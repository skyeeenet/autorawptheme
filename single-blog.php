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

                <?php the_post(); ?>

                <?php $post_url = get_permalink($post->ID); ?>
                <article class="hentry data-effect">
                    <div class="post-media data-effect-item has-effect-icon offset-v-25 offset-h-24 clerafix">
                        <a href="page-blog-single.html"><img src="<?php the_post_thumbnail_url(); ?>" alt="Image"></a>
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
                            <a href="<?php echo $post_url; ?>" class="icon-1"></a>
                        </div>
                    </div><!-- /.post-media -->

                    <div class="post-content-wrap clearfix">
                        <h2 class="post-title">
                            <span class="post-title-inner">
                                <a href="<?php echo $post_url; ?>"><?php the_title(); ?></a>
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
                        <div class="post-content post-excerpt margin-bottom-43">
                            <?php the_content(); ?>
                        </div><!-- /.post-excerpt -->
                        <div class="post-tags-socials clearfix">
                            <div class="post-tags ">
                                <span>Tags :</span>
                                <?php $terms = get_the_terms($post->ID, 'tags');

                                foreach ($terms as $term) { ?>

                                    <a href="<?php echo get_term_link($term->term_id); ?>"><?php echo $term->name; ?></a>

                                <?php } ?>

                            </div>
                            <div class="post-socials ">
                                <a href="#" class="facebook"><span class="fa fa-facebook-square"></span></a>
                                <a href="#" class="twitter"><span class="fa fa-twitter"></span></a>
                                <a href="#" class="linkedin"><span class="fa fa-linkedin-square"></span></a>
                                <a href="#" class="pinterest"><span class="fa fa-pinterest-p"></span></a>
                            </div>
                        </div>

                    </div><!-- /.post-content-wrap -->
                </article><!-- /.hentry -->


                <?php 
                    $next_post_obj = get_adjacent_post(false, '', false);
                    $prev_post_obj = get_adjacent_post(false, '', true);

                    if ($next_post_obj != '')
                        $next_link = get_permalink($next_post_obj->ID);

                    if ($prev_post_obj != '')
                        $prev_link = get_permalink($prev_post_obj->ID);
                ?>
                <div class="themesflat-pagination clearfix no-border padding-top-17">
                    <ul class="page-prev-next">
                        <li>
                            <?php if (isset($prev_link)): ?>
                                <a href="<?php echo $prev_link; ?>" class="prev">
                                    Previous Article
                                </a>
                            <?php endif; ?>
                        </li>
                        <li class="text-right">
                            <?php if (isset($next_link)): ?>
                                <a href="<?php echo $next_link; ?>" class="next">
                                    Next Article
                                </a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div><!-- /.themesflat-pagination -->
                <?php comments_template(); ?>
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
        <div id="sidebar">
            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60"></div>
            <div id="inner-sidebar" class="inner-content-wrap">
                <div class="widget widget_search">
                    <form action="#" method="get" role="search" class="search-form style-1">
                        <input type="search" class="search-field" placeholder="Search..." value="" name="s" title="Search for">
                        <button class="search-submit" type="submit" title="Search">Search</button>
                    </form>
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

                <div class="widget widget_lastest">
                    <h2 class="widget-title"><span>PRECENT POST</span></h2>
                    <ul class="lastest-posts data-effect clearfix">
                        <li class="clearfix">
                            <div class="thumb data-effect-item has-effect-icon">
                                <img src="assets/img/news/post-1-65x65.jpg" alt="Image">
                                <div class="overlay-effect bg-color-2"></div>
                                <div class="elm-link">
                                    <a href="page-blog-single.html" class="icon-2"></a>
                                </div>
                            </div>
                            <div class="text">
                                <h3><a href="page-blog-single.html">SMART BUILDING WITH CONCRETE SUSTAINABLE</a></h3>
                                <span class="post-date"><span class="entry-date">29 June 2018</span></span>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="thumb data-effect-item has-effect-icon">
                                <img src="assets/img/news/post-2-65x65.jpg" alt="Image">
                                <div class="overlay-effect bg-color-2"></div>
                                <div class="elm-link">
                                    <a href="page-blog-single.html" class="icon-2"></a>
                                </div>
                            </div>
                            <div class="text">
                                <h3><a href="page-blog-single.html">HI-TECH WOODEN HOUSE BUILT WITHOUT GLUE</a></h3>
                                <span class="post-date"><span class="entry-date">31 June 2018</span></span>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="thumb data-effect-item has-effect-icon">
                                <img src="assets/img/news/post-3-65x65.jpg" alt="Image">
                                <div class="overlay-effect bg-color-2"></div>
                                <div class="elm-link">
                                    <a href="page-blog-single.html" class="icon-2"></a>
                                </div>
                            </div>
                            <div class="text">
                                <h3><a href="page-blog-single.html">HI-TECH WOODEN HOUSE BUILT WITHOUT GLUE</a></h3>
                                <span class="post-date"><span class="entry-date">31 June 2018</span></span>
                            </div>
                        </li>
                    </ul>
                </div><!-- /.widget_lastest -->

                <div class="widget widget_tags margin-top-55">
                    <h2 class="widget-title"><span>TAGS</span></h2>
                    <div class="tags-list">
                        <a href="#">Building</a>
                        <a href="#">Smart House</a>
                        <a href="#">Costruction</a>
                        <a href="#">Villa</a>
                        <a href="#">Residential</a>
                        <a href="#">Interior</a>
                        <a href="#">Resort</a>
                        <a href="#">Commercial</a>
                    </div>
                </div>
            </div>
        </div><!-- /#sidebar -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->

<?php get_footer(); ?>