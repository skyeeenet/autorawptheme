<?php
    /*
    Template Name: Главная страница
    */
?>
<?php get_header(); ?>
<div id="main-content" class="site-main clearfix">
            <div id="content-wrap">
                <div id="site-content" class="site-content clearfix">
                    <div id="inner-content" class="inner-content-wrap">
                       <div class="page-content">
                           <!-- SLIDER -->
                            <div class="rev_slider_wrapper fullwidthbanner-container">
                                <div id="rev-slider1" class="rev_slider fullwidthabanner">
                                    <ul>
                                        <!-- Slide 1 -->
                                        <?php
                                        $args = array(
                                            'post_type' => 'sliders',
                                            'posts_per_page' => 0,
                                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'slider_types',
                                                    'field' => 'slug',
                                                    'terms' => 'home_page_main_slider'
                                                )
                                            )
                                        );

                                        $loop = new WP_Query($args);

                                        while ($loop->have_posts()) : $loop->the_post(); ?>
                                        
                                            <li data-transition="random">
                                            <!-- Main Image -->
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="" data-bgposition="center center" data-no-retina>
                                            <!-- Layers -->
                                            <div class="tp-caption tp-resizeme text-white font-heading font-weight-600"
                                                data-x="['left','left','left','center']" data-hoffset="['34','34','34','0']"
                                                data-y="['middle','middle','middle','middle']" data-voffset="['-134','-134','-134','-134']"
                                                data-fontsize="['20','20','20','16']"
                                                data-lineheight="['70','70','40','24']"
                                                data-width="full"
                                                data-height="none"
                                                data-whitespace="normal"
                                                data-transform_idle="o:1;"
                                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                                data-mask_in="x:0px;y:[100%];" 
                                                data-mask_out="x:inherit;y:inherit;" 
                                                data-start="700" 
                                                data-splitin="none" 
                                                data-splitout="none" 
                                                data-responsive_offset="on">
                                                <?php the_title(); ?>
                                            </div>

                                            <div class="tp-caption tp-resizeme text-white font-heading font-weight-700"
                                                data-x="['left','left','left','center']" data-hoffset="['34','34','34','0']"
                                                data-y="['middle','middle','middle','middle']" data-voffset="['2','2','2','2']"
                                                data-fontsize="['52','52','42','32']"
                                                data-lineheight="['65','65','45','35']"
                                                data-width="full"
                                                data-height="none"
                                                data-whitespace="normal"
                                                data-transform_idle="o:1;"
                                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                                data-mask_in="x:0px;y:[100%];" 
                                                data-mask_out="x:inherit;y:inherit;" 
                                                data-start="1000" 
                                                data-splitin="none" 
                                                data-splitout="none" 
                                                data-responsive_offset="on">
                                                <?php the_content(); ?>
                                            </div>

                                            <div class="tp-caption"
                                                data-x="['left','left','left','center']" data-hoffset="['34','34','34','0']"
                                                data-y="['middle','middle','middle','middle']" data-voffset="['106','106','106','106']"
                                                data-width="full"
                                                data-height="none"
                                                data-whitespace="normal"
                                                data-transform_idle="o:1;"
                                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                                data-mask_in="x:0px;y:[100%];" 
                                                data-mask_out="x:inherit;y:inherit;" 
                                                data-start="1000" 
                                                data-splitin="none" 
                                                data-splitout="none" 
                                                data-responsive_offset="on">
                                                <a href="<?php the_permalink(); ?>" class="themesflat-button bg-accent big"><span>GET IN TOUCH</span></a>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                    <?php wp_reset_query(); ?>

                                        <!-- /End Slide 1 -->
                                    </ul>
                                </div> 
                            </div>
                            <!-- END SLIDER -->

                            <!-- ICONBOX -->
                            <div class="row-iconbox">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                                            <div class="themesflat-headings style-1 text-center clearfix">
                                                <h2 class="heading"><?php the_field('home_page_first_title',$loop->ID); ?></h2>
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
                                        <div class="col-md-4">
                                            <div class="themesflat-content-box clearfix" data-margin="0 5px 0 5px" data-mobilemargin="0 0 0 0">
                                                <div class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 clearfix">
                                                    <div class="icon-wrap">
                                                        <i class="autora-icon-quality"></i>
                                                    </div>
                                                    <div class="text-wrap">
                                                        <h5 class="heading"><a href="#">BEST QUALITY</a></h5>
                                                        <div class="sep clearfix"></div>
                                                        <p class="sub-heading">Autora Construction Services are committed to meeting the highest quality standards without compromising our safety culture..</p>
                                                    </div>
                                                </div><!-- /.themesflat-icon-box -->
                                            </div><!-- /.themesflat-content-box -->                                         
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-4">
                                            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                            <div class="themesflat-content-box clearfix" data-margin="0 5px 0 5px" data-mobilemargin="0 0 0 0">
                                                <div class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 clearfix">
                                                    <div class="icon-wrap">
                                                        <i class="autora-icon-time"></i>
                                                    </div>
                                                    <div class="text-wrap">
                                                        <h5 class="heading"><a href="#">ON TIME</a></h5>
                                                        <div class="sep clearfix"></div>
                                                        <p class="sub-heading">At our company, we respect the customer’s time and schedule and always complete the projects on timely fashion way.</p>
                                                    </div>
                                                </div><!-- /.themesflat-icon-box -->
                                            </div><!-- /.themesflat-content-box -->
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-4">
                                            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                            <div class="themesflat-content-box clearfix" data-margin="0 5px 0 5px" data-mobilemargin="0 0 0 0">
                                                <div class="themesflat-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 clearfix">
                                                    <div class="icon-wrap">
                                                        <i class="autora-icon-author"></i>
                                                    </div>
                                                    <div class="text-wrap">
                                                        <h5 class="heading"><a href="#">EXPERIENCED</a></h5>
                                                        <div class="sep clearfix"></div>
                                                        <p class="sub-heading">As the saying goes practice makes perfect. With our years of experience you can bet on us to get the job done exactly to your specifications.</p>
                                                    </div>
                                                </div><!-- /.themesflat-icon-box -->
                                            </div><!-- /.themesflat-content-box -->
                                        </div><!-- /.col-md-4 -->
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
                            <!-- END ICONBOX -->
                            
                            <!-- ABOUT -->
                            <div class="row-about">
                                <div class="container-fluid">
                                    <div class="row equalize sm-equalize-auto">
                                        <div class="col-md-6 half-background style-1">
                                            
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-md-6 bg-light-grey">
                                            <div class="themesflat-spacer clearfix" data-desktop="64" data-mobile="60" data-smobile="60"></div>
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
                                            <div class="themesflat-spacer clearfix" data-desktop="75" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container-fluid -->
                            </div>
                            <!-- END ABOUT -->

                            <!-- SERVICES -->
                            <div class="row-services">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                                            <div class="themesflat-headings style-1 text-center clearfix">
                                                <h2 class="heading"><?php the_field('home_page_second_title');?></h2>
                                                <div class="sep has-icon width-125 clearfix">
                                                    <div class="sep-icon">
                                                        <span class="sep-icon-before sep-center sep-solid"></span>
                                                        <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                                        <span class="sep-icon-after sep-center sep-solid"></span>
                                                    </div>
                                                </div>
                                                <p class="sub-heading"><?php the_field('home_page_second_subtitle'); ?></p>
                                            </div>
                                            <div class="themesflat-spacer clearfix" data-desktop="39" data-mobile="35" data-smobile="35"></div>
                                            <div class="themesflat-carousel-box data-effect clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-auto="false">
                                                <div class="owl-carousel owl-theme">

                                                    <?php
                                                    $args = array(
                                                        'post_type' => 'sliders',
                                                        'posts_per_page' => 0,
                                                        'tax_query' => array(
                                                            array(
                                                                'taxonomy' => 'slider_types',
                                                                'field' => 'slug',
                                                                'terms' => 'home_page_services_slider'
                                                            )
                                                        )
                                                    );
                                                    $loop = new WP_Query($args);
                                                    while ($loop->have_posts()) : $loop->the_post(); ?>
                                                        <div class="themesflat-image-box style-1 has-icon icon-right w65 clearfix">
                                                            <div class="image-box-item">
                                                                <div class="inner">
                                                                    <div class="thumb data-effect-item">
                                                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="Image">
                                                                        <div class="overlay-effect bg-color-accent"></div>
                                                                    </div>
                                                                    <div class="text-wrap">
                                                                        <h5 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                                                        <span class="icon-wrap">
                                                                            <i class="fa fa-angle-right"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.themesflat-image-box -->
                                                    <?php endwhile; wp_reset_query(); ?>

                                                </div>
                                            </div><!-- /.themesflat-carousel-box -->
                                            <div class="themesflat-spacer clearfix" data-desktop="50" data-mobile="35" data-smobile="35"></div>
                                            <div class="elm-button text-center">
                                                <a href="#" class="themesflat-button bg-accent">ALL SERVICES</a>
                                            </div>
                                            <div class="themesflat-spacer clearfix" data-desktop="73" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END SERVICES -->

                            <!-- PROJECT -->
                            <div class="row-project parallax parallax-1 parallax-overlay">                                
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                                            <div class="themesflat-headings style-1 text-center clearfix">
                                                <h2 class="heading text-white"><?php the_field('home_page_third_title') ?></h2>
                                                <div class="sep has-icon width-125 border-color-light clearfix">
                                                    <div class="sep-icon">
                                                        <span class="sep-icon-before sep-center sep-solid"></span>
                                                        <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                                        <span class="sep-icon-after sep-center sep-solid"></span>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="themesflat-spacer clearfix" data-desktop="30" data-mobile="35" data-smobile="35"></div>
                                            <div class="themesflat-carousel-box clearfix" data-gap="30" data-column="4" data-column2="2" data-column3="1" data-auto="false">
                                                <div class="owl-carousel owl-theme">
                                                <?php
                                                    $args = array(
                                                        'post_type' => 'sliders',
                                                        'posts_per_page' => 0,
                                                        'tax_query' => array(
                                                            array(
                                                                'taxonomy' => 'slider_types',
                                                                'field' => 'slug',
                                                                'terms' => 'home_page_featured_slider'
                                                            )
                                                        )
                                                    );
                                                    $loop = new WP_Query($args);
                                                    while ($loop->have_posts()) : $loop->the_post(); ?>
                                                    <div class="themesflat-project style-1 data-effect  clearfix">
                                                        <div class="project-item">
                                                            <div class="inner">
                                                                <div class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46">
                                                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="Image">
                                                                    <div class="text-wrap text-center">                                          
                                                                        <h5 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
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
                                                    <?php endwhile; wp_reset_query(); ?>
                                                </div>
                                            </div><!-- /.themesflat-carousel-box -->
                                            <div class="themesflat-spacer clearfix" data-desktop="41" data-mobile="35" data-smobile="35"></div>
                                            <div class="elm-button text-center">
                                                <a href="#" class="themesflat-button bg-accent">ALL PROJECTS </a>
                                            </div>
                                            <div class="themesflat-spacer clearfix" data-desktop="73" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container-fluid -->
                                <div class="bg-parallax-overlay overlay-black"></div>
                            </div>
                            <!-- END PROJECT -->

                            <!-- ICONBOX -->
                            <div class="row-iconbox">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                                            <div class="themesflat-headings style-1 text-center clearfix">
                                                <h2 class="heading font-size-30">ALL SERVICES</h2>
                                                <div class="sep has-icon width-125 clearfix">
                                                    <div class="sep-icon">
                                                        <span class="sep-icon-before sep-center sep-solid"></span>
                                                        <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                                        <span class="sep-icon-after sep-center sep-solid"></span>
                                                    </div>
                                                </div>
                                                <p class="sub-heading font-weight-400">Are you interested in finding out how we can make your project <br> a success? Please constact us.</p>
                                            </div>
                                            <div class="themesflat-spacer clearfix" data-desktop="57" data-mobile="35" data-smobile="35"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->

                                    <div class="themesflat-row gutter-30 clearfix">
                                        <div class="col span_1_of_4">
                                            <div class="themesflat-icon-box icon-left accent-color style-2 clearfix">
                                                <div class="icon-wrap">
                                                    <i class="autora-icon-build"></i>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#">DESIGN-BUILD</a></h5>
                                                    <p class="sub-heading">We develop and understand project expectations and then manage those needs with a design team. Innovation should happen throughout a project. </p>
                                                </div>
                                            </div><!-- /.themesflat-icon-box -->
                                            <div class="themesflat-spacer clearfix" data-desktop="62" data-mobile="35" data-smobile="35"></div>
                                            <div class="themesflat-icon-box icon-left accent-color style-2 clearfix">
                                                <div class="icon-wrap font-size-35 line-height-50">
                                                    <i class="autora-icon-hat-outline"></i>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#">PRECONSTRUCTION SERVICES</a></h5>
                                                    <p class="sub-heading margin-top-18">Autora Construction Services provides the right resources and expertise to evaluate concepts through our industry leading Preconstruction Services team.</p>
                                                </div>
                                            </div><!-- /.themesflat-icon-box -->                                      
                                        </div><!-- /.col-md-4 -->

                                        <div class="col span_1_of_4">
                                            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>
                                            <div class="themesflat-icon-box icon-left accent-color style-2 clearfix">
                                                <div class="icon-wrap">
                                                    <i class="autora-icon-author-outline"></i>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#">CONSTRUCTION MANAGEMENT</a></h5>
                                                    <p class="sub-heading">We work closely with architects and designers to understand the project, and ultimately develop a targeted solution that optimizes every stage of the build. </p>
                                                </div>
                                            </div><!-- /.themesflat-icon-box -->
                                            <div class="themesflat-spacer clearfix" data-desktop="62" data-mobile="35" data-smobile="35"></div>
                                            <div class="themesflat-icon-box icon-left accent-color style-2 clearfix">
                                                <div class="icon-wrap ">
                                                    <i class="autora-icon-build-home"></i>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#">BUILDING ENVELOPES</a></h5>
                                                    <p class="sub-heading margin-top-18">Our in-house cladding teams supply and install a diverse range of solutions to new building and building envelope upgrade projects. </p>
                                                </div>
                                            </div><!-- /.themesflat-icon-box -->                                      
                                        </div><!-- /.col-md-4 -->

                                        <div class="col span_1_of_4">
                                            <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>
                                            <div class="themesflat-icon-box icon-left accent-color style-2 clearfix">
                                                <div class="icon-wrap">
                                                    <i class="autora-icon-building-outline"></i>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#">METAL BUILDING SERVICES</a></h5>
                                                    <p class="sub-heading"> In the past decade alone, we have completed more than 5 million square feet of metal building systems in Western Canada and US</p>
                                                </div>
                                            </div><!-- /.themesflat-icon-box -->
                                            <div class="themesflat-spacer clearfix" data-desktop="62" data-mobile="35" data-smobile="35"></div>
                                            <div class="themesflat-icon-box icon-left accent-color style-2 clearfix">
                                                <div class="icon-wrap font-size-35 line-height-50">
                                                    <i class="autora-icon-concrete"></i>
                                                </div>
                                                <div class="text-wrap">
                                                    <h5 class="heading"><a href="#">CONCRETE STRUCTURES</a></h5>
                                                    <p class="sub-heading margin-top-18">We employs a talented team of industry leading professionals capable of self-performing complex concrete work, considered on a project specific basis </p>
                                                </div>
                                            </div><!-- /.themesflat-icon-box -->                                      
                                        </div><!-- /.col-md-4 -->                                        
                                    </div><!-- /.row -->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="72" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END ICONBOX -->

                            <!-- TESTIMONIALS -->
                            <div class="row-testimonials parallax-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
                                            <div class="themesflat-carousel-box has-arrows arrow-center arrow-circle offset-v-24 clearfix" data-gap="30" data-column="1" data-column2="1" data-column3="1" data-auto="true">
                                                <div class="owl-carousel owl-theme">
                                                <?php
                                                    $args = array(
                                                        'post_type' => 'sliders',
                                                        'posts_per_page' => 0,
                                                        'tax_query' => array(
                                                            array(
                                                                'taxonomy' => 'slider_types',
                                                                'field' => 'slug',
                                                                'terms' => 'home_page_quotes_slider'
                                                            )
                                                        )
                                                    );
                                                    $loop = new WP_Query($args);
                                                    while ($loop->have_posts()) : $loop->the_post(); ?>
                                                    <div class="themesflat-testimonials style-1 max-width-70 align-center has-width w100 circle border-solid clearfix">
                                                        <div class="testimonial-item">
                                                            <div class="inner">
                                                                <div class="icon-wrap">
                                                                   <i class="fa fa-quote-left"></i>
                                                                </div>
                                                                <blockquote class="text">
                                                                    <p>“ <?php the_content(); ?> ”</p>
                                                                    <div class="sep has-width w80 accent-bg clearfix"></div>
                                                                    <h6 class="name"><?php the_title(); ?></h6>
                                                                </blockquote>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.themesflat-testimonials --> 
                                                    <?php endwhile; wp_reset_query(); ?>                                                
                                                </div>
                                            </div><!-- /.themesflat-carousel-box -->
                                            <div class="themesflat-spacer clearfix" data-desktop="68" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END TESTIMONIALS -->

                            <!-- QUOTE -->
                            <div class="row-quote bg-row-1">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="60" data-smobile="60"></div>
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
                                            <div class="themesflat-spacer clearfix" data-desktop="31" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END QUOTE -->

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
                                                        <li class="item-title active">
                                                            <span class="inner">Our focus</span>
                                                        </li>
                                                        <li class="item-title">
                                                            <span class="inner">Dedicated</span>
                                                        </li>
                                                        <li class="item-title">
                                                            <span class="inner">Committed</span>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content-wrap clearfix">
                                                        <div class="tab-content">
                                                            <div class="item-content">                                                            
                                                                <p>Our focus is to exceed your goals, meet your timelines and successfully manage your budget. We provide our clients with top-notch general contracting, construction management, site surveys and design build services.</p>
                                                                <div class="themesflat-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                                    <div class="inner">
                                                                        <span class="item">
                                                                            <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                            <span class="text">We have successfully completed projects in numerous states.</span>
                                                                        </span>
                                                                    </div>
                                                                </div><!-- /.themeslat-list -->
                                                                <div class="themesflat-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                                    <div class="inner">
                                                                        <span class="item">
                                                                            <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                            <span class="text">We is licensed to perform general contracting work in most states. </span>
                                                                        </span>
                                                                    </div>
                                                                </div><!-- /.themeslat-list -->
                                                                <div class="themesflat-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                                    <div class="inner">
                                                                        <span class="item">
                                                                            <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                            <span class="text">We will be open to obtaining new licensing if an opportunity arises</span>
                                                                        </span>
                                                                    </div>
                                                                </div><!-- /.themeslat-list -->                                                        
                                                            </div>
                                                        </div><!-- /.tab-content -->
                                                        <div class="tab-content">
                                                            <div class="item-content">                                                            
                                                                <p>Our focus is to exceed your goals, meet your timelines and successfully manage your budget. We provide our clients with top-notch general contracting, construction management, site surveys and design build services.</p>
                                                                <div class="themesflat-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                                    <div class="inner">
                                                                        <span class="item">
                                                                            <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                            <span class="text">We have successfully completed projects in numerous states.</span>
                                                                        </span>
                                                                    </div>
                                                                </div><!-- /.themeslat-list -->
                                                                <div class="themesflat-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                                    <div class="inner">
                                                                        <span class="item">
                                                                            <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                            <span class="text">We is licensed to perform general contracting work in most states. </span>
                                                                        </span>
                                                                    </div>
                                                                </div><!-- /.themeslat-list -->
                                                                <div class="themesflat-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                                    <div class="inner">
                                                                        <span class="item">
                                                                            <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                            <span class="text">We will be open to obtaining new licensing if an opportunity arises</span>
                                                                        </span>
                                                                    </div>
                                                                </div><!-- /.themeslat-list -->                                                        
                                                            </div>
                                                        </div><!-- /.tab-content -->
                                                        <div class="tab-content">
                                                            <div class="item-content">                                                            
                                                                <p>Our focus is to exceed your goals, meet your timelines and successfully manage your budget. We provide our clients with top-notch general contracting, construction management, site surveys and design build services.</p>
                                                                <div class="themesflat-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                                    <div class="inner">
                                                                        <span class="item">
                                                                            <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                            <span class="text">We have successfully completed projects in numerous states.</span>
                                                                        </span>
                                                                    </div>
                                                                </div><!-- /.themeslat-list -->
                                                                <div class="themesflat-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                                    <div class="inner">
                                                                        <span class="item">
                                                                            <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                            <span class="text">We is licensed to perform general contracting work in most states. </span>
                                                                        </span>
                                                                    </div>
                                                                </div><!-- /.themeslat-list -->
                                                                <div class="themesflat-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                                    <div class="inner">
                                                                        <span class="item">
                                                                            <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                            <span class="text">We will be open to obtaining new licensing if an opportunity arises</span>
                                                                        </span>
                                                                    </div>
                                                                </div><!-- /.themeslat-list -->                                                        
                                                            </div>
                                                        </div><!-- /.tab-content -->
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
                                                    <div class="accordion-item active">
                                                        <h3 class="accordion-heading"><span class="inner">Are there any hosting companies you recommend?</span></h3>
                                                        <div class="accordion-content">
                                                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</div>
                                                        </div>
                                                    </div><!-- /.accordion-item -->
                                                    <div class="accordion-item">
                                                        <h3 class="accordion-heading"><span class="inner">We use technology to do the job more quickly</span></h3>
                                                        <div class="accordion-content">
                                                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</div>
                                                        </div>
                                                    </div><!-- /.accordion-item -->
                                                    <div class="accordion-item ">
                                                        <h3 class="accordion-heading"><span class="inner">Employees are continually trained on safety issues</span></h3>
                                                        <div class="accordion-content">
                                                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</div>
                                                        </div>
                                                    </div><!-- /.accordion-item -->
                                                </div><!-- /.themesflat-accordion -->
                                            </div><!-- /.themesflat-content-box -->                                                
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END TABS -->

                            <!-- PARTNER -->
                            <div class="row-partner">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="83" data-mobile="60" data-smobile="60"></div>
                                            <div class="themesflat-carousel-box clearfix" data-gap="5" data-column="5" data-column2="3" data-column3="2" data-auto="true">
                                                <div class="owl-carousel owl-theme">
                                                    <div class="themesflat-partner style-1 align-center clearfix">
                                                        <div class="partner-item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                    <img src="assets/img/partners/partner-1.png" alt="Image" class="partner-default">
                                                                    <img src="assets/img/partners/partner-1-color.png" alt="Image" class="partner-color">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /themesflat-partner -->
                                                    <div class="themesflat-partner style-1 align-center clearfix">
                                                        <div class="partner-item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                    <img src="assets/img/partners/partner-2.png" alt="Image" class="partner-default">
                                                                    <img src="assets/img/partners/partner-2-color.png" alt="Image" class="partner-color">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /themesflat-partner -->
                                                    <div class="themesflat-partner style-1  align-center clearfix">
                                                        <div class="partner-item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                    <img src="assets/img/partners/partner-3.png" alt="Image" class="partner-default">
                                                                    <img src="assets/img/partners/partner-3-color.png" alt="Image" class="partner-color">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /themesflat-partner -->
                                                    <div class="themesflat-partner style-1 align-center clearfix">
                                                        <div class="partner-item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                    <img src="assets/img/partners/partner-4.png" alt="Image" class="partner-default">
                                                                    <img src="assets/img/partners/partner-4-color.png" alt="Image" class="partner-color">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /themesflat-partner -->
                                                    <div class="themesflat-partner style-1 align-center clearfix">
                                                        <div class="partner-item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                    <img src="assets/img/partners/partner-5.png" alt="Image" class="partner-default">
                                                                    <img src="assets/img/partners/partner-5-color.png" alt="Image" class="partner-color">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /themesflat-partner -->
                                                    <div class="themesflat-partner style-1 align-center clearfix">
                                                        <div class="partner-item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                    <img src="assets/img/partners/partner-1.png" alt="Image" class="partner-default">
                                                                    <img src="assets/img/partners/partner-1-color.png" alt="Image" class="partner-color">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /themesflat-partner -->
                                                    <div class="themesflat-partner style-1 align-center clearfix">
                                                        <div class="partner-item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                    <img src="assets/img/partners/partner-2.png" alt="Image" class="partner-default">
                                                                    <img src="assets/img/partners/partner-2-color.png" alt="Image" class="partner-color">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /themesflat-partner -->
                                                    <div class="themesflat-partner style-1  align-center clearfix">
                                                        <div class="partner-item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                    <img src="assets/img/partners/partner-3.png" alt="Image" class="partner-default">
                                                                    <img src="assets/img/partners/partner-3-color.png" alt="Image" class="partner-color">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /themesflat-partner -->
                                                    <div class="themesflat-partner style-1 align-center clearfix">
                                                        <div class="partner-item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                    <img src="assets/img/partners/partner-4.png" alt="Image" class="partner-default">
                                                                    <img src="assets/img/partners/partner-4-color.png" alt="Image" class="partner-color">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /themesflat-partner -->
                                                    <div class="themesflat-partner style-1 align-center clearfix">
                                                        <div class="partner-item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                    <img src="assets/img/partners/partner-5.png" alt="Image" class="partner-default">
                                                                    <img src="assets/img/partners/partner-5-color.png" alt="Image" class="partner-color">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /themesflat-partner -->                                                      
                                                </div>
                                            </div><!-- /.themesflat-carousel-box -->
                                            <div class="themesflat-spacer clearfix" data-desktop="66" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END PARTNER -->
                       </div><!-- /.page-content -->
                    </div><!-- /#inner-content -->
                </div><!-- /#site-content -->
            </div><!-- /#content-wrap -->
        </div><!-- /#main-content -->
<?php get_footer(); ?>