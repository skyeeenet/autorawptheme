<?php
/*
    Template Name: Projects
    */
?>

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
                        <span class="trail-end">Projects</span>
                    </div>
                </div>
            </div>
            <div class="featured-title-heading-wrap">
                <h1 class="feautured-title-heading">
                    Projects Grid
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
                    <!-- SERVICES -->
                    <div class="row-services">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="73" data-mobile="60" data-smobile="60"></div>
                                    <ul class="themesflat-filter style-1 clearfix">
                                        <li class="active"><a href="#" data-filter="*">All</a></li>
                                        <li><a href="#" data-filter=".green">GREEN HOUSE</a></li>
                                        <li><a href="#" data-filter=".architecture">ARCHITECTURE </a></li>
                                        <li><a href="#" data-filter=".construction">CONSTRUCTION </a></li>
                                        <li><a href="#" data-filter=".villa">VILLA</a></li>
                                        <li><a href="#" data-filter=".building">BUILDING</a></li>
                                    </ul>
                                    <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-project style-2 isotope-project has-margin mg15 data-effect clearfix">

                                        <?php
                                        $args = array(
                                            'post_type' => 'projects',
                                            'posts_per_page' => 0
                                        );
                                        $loop = new WP_Query($args);
                                        while ($loop->have_posts()) : $loop->the_post(); ?>
                                            <div class="project-item green villa">
                                                <div class="inner">
                                                    <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="Image">
                                                        <div class="elm-link">
                                                            <a href="#" class="icon-1 icon-search"></a>
                                                            <a href="#" class="icon-1"></a>
                                                        </div>
                                                        <div class="overlay-effect bg-color-3"></div>
                                                    </div>
                                                    <div class="text-wrap">
                                                        <h5 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                                        <div class="elm-meta">
                                                            <?php $terms = get_the_terms($post->ID, 'tags'); ?>
                                                            <?php foreach ($terms as $term) : ?>
                                                                <span><a href="<?php echo get_term_link($term->term_id, $term->taxonomy); ?>"><?php echo $term->name; ?></a></span>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.product-item -->
                                        <?php endwhile;
                                    wp_reset_query(); ?>

                                    </div><!-- /.themesflat-project -->
                                    <div class="button-wrap has-icon icon-left size-14 pf21 text-center">
                                        <a href="#" class="themesflat-button bg-accent pd32"><span>LOAD MORE <span class="icon"><i class="ion-load-c"></i></span></span></a>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="72" data-mobile="60" data-smobile="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div>
                    <!-- END SERVICES -->
                </div><!-- /.page-content -->
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->

<?php get_footer(); ?>