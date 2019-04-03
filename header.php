<?php
	$custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0];
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('header-fixed page no-sidebar header-style-2 topbar-style-2 menu-has-search'); ?>>

<div id="wrapper" class="animsition">
    <div id="page" class="clearfix">
        <!-- Header Wrap -->
        <div id="site-header-wrap">
            <!-- Top Bar -->        
            <div id="top-bar">
                <div id="top-bar-inner" class="container">
                    <div class="top-bar-inner-wrap">
                        <div class="top-bar-content">
                            <div class="inner">
                                <span class="address content">4946 Marmora Road, Central New</span>
                                <span class="phone content">+61 3 8376 6284</span>
                                <span class="time content">Mon-Sat: 8am - 6pm</span>
                            </div>                            
                        </div><!-- /.top-bar-content -->

                        <div class="top-bar-socials">
                            <div class="inner">
                                <span class="text">Follow us:</span>
                                <span class="icons">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fa fa-rss"></i></a>
                                </span>
                            </div>
                        </div><!-- /.top-bar-socials -->
                    </div>                    
                </div>
            </div><!-- /#top-bar -->

            <!-- Header -->
            <header id="site-header">
                <div id="site-header-inner" class="container">                    
                    <div class="wrap-inner clearfix">
                        <div id="site-logo" class="clearfix">
                            <div id="site-log-inner">
                                <a href="home.html" rel="home" class="main-logo">
                                    <img src="<?php echo $custom_logo__url; ?>" alt="Autora" width="186" height="39" data-retina="assets/img/logo-small@2x.png" data-width="186" data-height="39">
                                </a>
                            </div>
                        </div><!-- /#site-logo -->

                        <div class="mobile-button">
                            <span></span>
                        </div><!-- /.mobile-button -->

						<nav id="main-nav" class="main-nav">
							<?php wp_nav_menu([
								'theme_location' => 'top',
								'container' => null,
								'items_wrap' => '<ul id="menu-primary-menu" class="menu">%3$s</ul>'
								]); 
							?>
						</nav>

                        <div id="header-search">
                            <a href="#" class="header-search-icon">
                                <span class="search-icon fa fa-search">
                                </span>
                            </a>

                            <form role="search" method="get" class="header-search-form" action="#">
                                <label class="screen-reader-text">Search for:</label>
                                <input type="text" value="" name="s" class="header-search-field" placeholder="Search...">
                                <button type="submit" class="header-search-submit" title="Search">Search</button>
                            </form>
                        </div><!-- /#header-search -->
                    </div><!-- /.wrap-inner -->                    
                </div><!-- /#site-header-inner -->
            </header><!-- /#site-header -->
        </div><!-- #site-header-wrap -->