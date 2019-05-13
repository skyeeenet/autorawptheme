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
                        <a href="page-projects.html" class="trail-begin">Projects</a>
                        <span class="sep">|</span>
                        <span class="trail-end">Project Single</span>
                    </div>
                </div>
            </div>
            <div class="featured-title-heading-wrap">
                <h1 class="feautured-title-heading">
                    Project Name
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
                    <!-- PROJECT DETAIL -->
                    <div class="row-project-detail">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                                    <div class="detail-inner-wrap">
                                        <div class="detail-info">
                                            <div class="content-info">
                                                <div class="themesflat-headings style-2 clearfix">
                                                    <h2 class="heading line-height-62">PROJECT NAME</h2>
                                                    <div class="sep has-width w80 accent-bg clearfix">
                                                    </div>
                                                </div>
                                                <ul class="list-info has-icon icon-left">
                                                    <li><span class="text">Client <span class="icon"><i class="fa fa-user"></i></span></span><span class="right"><?php the_field('client'); ?></span></li>
                                                    <li><span class="text">Budget <span class="icon"><i class="fa fa-usd"></i></span></span><span class="right"><?php the_field('budget'); ?></span></li>
                                                    <li><span class="text">Surface Area <span class="icon"><i class="fa fa-search"></i></span></span><span class="right"><?php the_field('surface_area'); ?></span></li>
                                                    <li><span class="text">Year completed <span class="icon"><i class="fa fa-calendar"></i></span></span><span class="right"><?php the_field('year_completed'); ?></span></li>
                                                    <li><span class="text">Prime Consultant: <span class="icon"><i class="fa fa-folder-open"></i></span></span><span class="right"><?php the_field('prime_consultant'); ?></span></li>
                                                    <li><span class="text">Tag <span class="icon"><i class="fa fa-tag"></i></span></span><span class="right"> <?php $terms = get_the_terms($post->ID, 'tags'); ?>
                                                            <?php foreach ($terms as $term) : ?>
                                                                <a href="<?php echo get_term_link($term->term_id, $term->taxonomy); ?>"><?php echo $term->name; ?></a>
                                                            <?php endforeach; ?></span></li>
                                                </ul>
                                            </div><!-- /.content-info -->

                                            <div class="themesflat-spacer clearfix" data-desktop="46" data-mobile="35" data-smobile="35"></div>

                                            <div class="content-info info-brochures">
                                                <div class="themesflat-headings style-2 clearfix">
                                                    <h2 class="heading line-height-62">BROCHURES</h2>
                                                    <div class="sep has-width w60 accent-bg clearfix">
                                                    </div>
                                                </div>
                                                <div class="themesflat-spacer clearfix" data-desktop="34" data-mobile="35" data-smobile="35"></div>
                                                <div class="button-wrap has-icon icon-left size-14 pf21">
                                                    <a href="<?php the_field('pdf'); ?>" class="themesflat-button font-default bg-light-white w100"><span>Brochures.PDF <span class="icon"><i class="fa fa-file-pdf-o"></i></span></span></a>
                                                </div>
                                                <div class="button-wrap has-icon icon-left size-14 pf21">
                                                    <a href="<?php the_field('doc'); ?>" class="themesflat-button font-default bg-light-white w100"><span>Brochures.DOC <span class="icon"><i class="fa fa-file-word-o"></i></span></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="detail-gallery">
                                            <div class="themesflat-spacer clearfix" data-desktop="21" data-mobile="21" data-smobile="21"></div>
                                            <div class="themesflat-gallery style-2 has-arrows arrow-center arrow-circle offset-v-82 has-thumb w185 clearfix" data-gap="0" data-column="1" data-column2="1" data-column3="1" data-auto="false">
                                                <div class="owl-carousel owl-theme">
                                                    <div class="gallery-item">
                                                        <div class="inner">
                                                            <div class="thumb">
                                                                <img src="assets/img/gallery/gallery-1-800x450.jpg" alt="Image">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gallery-item">
                                                        <div class="inner">
                                                            <div class="thumb">
                                                                <img src="assets/img/gallery/gallery-2-800x450.jpg" alt="Image">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gallery-item">
                                                        <div class="inner">
                                                            <div class="thumb">
                                                                <img src="assets/img/gallery/gallery-3-800x450.jpg" alt="Image">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gallery-item">
                                                        <div class="inner">
                                                            <div class="thumb">
                                                                <img src="assets/img/gallery/gallery-4-800x450.jpg" alt="Image">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.themesflat-cousel-box -->
                                            <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="40" data-smobile="40"></div>
                                            <div class="flat-content-wrap style-3 clearfix">
                                                <h5 class="title">PROJECT DESCRIPTION</h5>
                                                <div class="sep has-width w60 accent-bg margin-top-18 clearfix"></div>
                                                <p class="margin-top-28">The ten-storey, 325,000 SF Krembil Discovery Centre provides the Toronto Western Hospital with a new research and rehabilitation facility. The Integrated Project Delivery contract included the base building core and shell (and associated functional space), interior fit-up of two floors of the rehab solutions space, two floors of wet labs, a single floor vivarium and the associated interstitial floor</p>
                                                <p>From November 2013 to April 2014, EllisDon was awarded an additional Lump Sum contract for $5 million. This additional scope of work included a lab fit- up on the fourth level of the Krembil Discovery Centre.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="58" data-mobile="60" data-smobile="60"></div>
                                </div>
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-lines style-1 line-full line-solid clearfix"><span class="line"></span></div>
                                    <div class="themesflat-spacer clearfix" data-desktop="46" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-headings style-2 clearfix">
                                        <h2 class="heading">RELATED PROJECTS</h2>
                                        <div class="sep has-width w80 accent-bg margin-top-3 clearfix"></div>
                                    </div><!-- /.themesflat-heading -->
                                    <div class="themesflat-spacer clearfix" data-desktop="35" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-carousel-box data-effect has-arrows arrow-top arrow75 arrow-circle arrow-style-2 clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-auto="false">
                                        <div class="owl-carousel owl-theme">
                                            <div class="themesflat-project style-1 clearfix">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46">
                                                            <img src="assets/img/project/project-1-370x245.jpg" alt="Image">
                                                            <div class="text-wrap text-center">
                                                                <h5 class="heading"><a href="#">LAKE MEADOWS APARTMENTS</a></h5>
                                                                <div class="elm-meta">
                                                                    <span><a href="#">Architecture</a></span>
                                                                    <span><a href="#">Building</a></span>
                                                                </div>
                                                            </div>
                                                            <div class="elm-link">
                                                                <a href="#" class="icon-1 icon-search"></a>
                                                                <a href="#" class="icon-1"></a>
                                                            </div>
                                                            <div class="overlay-effect bg-color-3"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.themesflat-project -->
                                            <div class="themesflat-project style-1 clearfix">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46">
                                                            <img src="assets/img/project/project-2-370x245.jpg" alt="Image">
                                                            <div class="text-wrap text-center">
                                                                <h5 class="heading"><a href="#">LAKE MEADOWS APARTMENTS</a></h5>
                                                                <div class="elm-meta">
                                                                    <span><a href="#">Architecture</a></span>
                                                                    <span><a href="#">Building</a></span>
                                                                </div>
                                                            </div>
                                                            <div class="elm-link">
                                                                <a href="#" class="icon-1 icon-search"></a>
                                                                <a href="#" class="icon-1"></a>
                                                            </div>
                                                            <div class="overlay-effect bg-color-3"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.themesflat-project -->
                                            <div class="themesflat-project style-1 clearfix">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46">
                                                            <img src="assets/img/project/project-3-370x245.jpg" alt="Image">
                                                            <div class="text-wrap text-center">
                                                                <h5 class="heading"><a href="#">LAKE MEADOWS APARTMENTS</a></h5>
                                                                <div class="elm-meta">
                                                                    <span><a href="#">Architecture</a></span>
                                                                    <span><a href="#">Building</a></span>
                                                                </div>
                                                            </div>
                                                            <div class="elm-link">
                                                                <a href="#" class="icon-1 icon-search"></a>
                                                                <a href="#" class="icon-1"></a>
                                                            </div>
                                                            <div class="overlay-effect bg-color-3"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.themesflat-project -->
                                            <div class="themesflat-project style-1 clearfix">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46">
                                                            <img src="assets/img/project/project-1-370x245.jpg" alt="Image">
                                                            <div class="text-wrap text-center">
                                                                <h5 class="heading"><a href="#">LAKE MEADOWS APARTMENTS</a></h5>
                                                                <div class="elm-meta">
                                                                    <span><a href="#">Architecture</a></span>
                                                                    <span><a href="#">Building</a></span>
                                                                </div>
                                                            </div>
                                                            <div class="elm-link">
                                                                <a href="#" class="icon-1 icon-search"></a>
                                                                <a href="#" class="icon-1"></a>
                                                            </div>
                                                            <div class="overlay-effect bg-color-3"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.themesflat-project -->
                                            <div class="themesflat-project style-1 clearfix">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46">
                                                            <img src="assets/img/project/project-2-370x245.jpg" alt="Image">
                                                            <div class="text-wrap text-center">
                                                                <h5 class="heading"><a href="#">LAKE MEADOWS APARTMENTS</a></h5>
                                                                <div class="elm-meta">
                                                                    <span><a href="#">Architecture</a></span>
                                                                    <span><a href="#">Building</a></span>
                                                                </div>
                                                            </div>
                                                            <div class="elm-link">
                                                                <a href="#" class="icon-1 icon-search"></a>
                                                                <a href="#" class="icon-1"></a>
                                                            </div>
                                                            <div class="overlay-effect bg-color-3"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.themesflat-project -->
                                            <div class="themesflat-project style-1 clearfix">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46">
                                                            <img src="assets/img/project/project-3-370x245.jpg" alt="Image">
                                                            <div class="text-wrap text-center">
                                                                <h5 class="heading"><a href="#">LAKE MEADOWS APARTMENTS</a></h5>
                                                                <div class="elm-meta">
                                                                    <span><a href="#">Architecture</a></span>
                                                                    <span><a href="#">Building</a></span>
                                                                </div>
                                                            </div>
                                                            <div class="elm-link">
                                                                <a href="#" class="icon-1 icon-search"></a>
                                                                <a href="#" class="icon-1"></a>
                                                            </div>
                                                            <div class="overlay-effect bg-color-3"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.themesflat-project -->
                                        </div>
                                    </div><!-- /.themesflat-carousel-box -->
                                    <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
                                </div>
                            </div>
                        </div><!-- /.container -->
                    </div>
                    <!-- END PROJECT DETAIL -->
                </div><!-- /.page-content -->

            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->

<?php get_footer(); ?>