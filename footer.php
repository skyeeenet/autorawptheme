        <!-- Footer -->
        <?php
	        $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0];
        ?>
        <footer id="footer" class="clearfix">
            <div id="footer-widgets" class="container">
                <div class="themesflat-row gutter-30">

                    <div class="col span_1_of_3">
                        <div class="widget widget_text">
                            <div class="textwidget">
                                <p>
                                <?php if ( is_active_sidebar( 'footer_info' ) ) : ?>
                                    <?php dynamic_sidebar( 'footer_info' ); ?>
                                <?php endif; ?>
                                </p>


                            </div>
                        </div><!-- /.widget_text -->
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                    </div><!-- /.col -->

                    <?php if ( is_active_sidebar( 'footer_recent_posts' ) ) : ?>
                                <?php dynamic_sidebar( 'footer_recent_posts' ); ?>
                            <?php endif; ?>

                    <div class="col span_1_of_3">
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>

                        <div class="widget widget_tags">
                            <?php if ( is_active_sidebar( 'footer_tags' ) ) : ?>
                                <?php dynamic_sidebar( 'footer_tags' ); ?>
                            <?php endif; ?>
                        </div>
                    </div><!-- /.col -->

                    <div class="col span_1_of_3">
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>

                        <div class="widget widget_instagram">
                            <h2 class="widget-title margin-bottom-30"><span>INSTAGRAM PHOTOS</span></h2>
                            <div class="instagram-wrap data-effect clearfix col3 g10">
                                <div class="instagram_badge_image has-effect-icon">
                                    <a href="#" target="_blank" class="data-effect-item">
                                        <span class="item"><img src="assets/img/instagram/instagram-1-83x83.jpg" alt="Image" ></span>
                                        <div class="overlay-effect bg-color-2"></div>
                                        <div class="elm-link">
                                            <span class="icon-3"></span>
                                        </div>
                                    </a>                                    
                                </div>

                                <div class="instagram_badge_image has-effect-icon">
                                    <a href="#" target="_blank" class="data-effect-item">
                                        <span class="item"><img src="assets/img/instagram/instagram-2-83x83.jpg" alt="Image" ></span>
                                        <div class="overlay-effect bg-color-2"></div>
                                        <div class="elm-link">
                                            <span class="icon-3"></span>
                                        </div>
                                    </a>
                                    
                                </div>

                                <div class="instagram_badge_image has-effect-icon">
                                    <a href="#" target="_blank" class="data-effect-item">
                                        <span class="item"><img src="assets/img/instagram/instagram-3-83x83.jpg" alt="Image"></span>
                                        <div class="overlay-effect bg-color-2"></div>
                                        <div class="elm-link">
                                            <span class="icon-3"></span>
                                        </div>
                                    </a>                                    
                                </div>

                                <div class="instagram_badge_image has-effect-icon">
                                    <a href="#" target="_blank" class="data-effect-item">
                                        <span class="item"><img src="assets/img/instagram/instagram-4-83x83.jpg" alt="Image"></span>
                                        <div class="overlay-effect bg-color-2"></div>
                                        <div class="elm-link">
                                            <span class="icon-3"></span>
                                        </div>
                                    </a>
                                </div>

                                <div class="instagram_badge_image has-effect-icon">
                                    <a href="#" target="_blank" class="data-effect-item">
                                        <span class="item"><img src="assets/img/instagram/instagram-5-83x83.jpg" alt="Image"></span>
                                        <div class="overlay-effect bg-color-2"></div>
                                        <div class="elm-link">
                                            <span class="icon-3"></span>
                                        </div>
                                    </a>                                    
                                </div>

                                <div class="instagram_badge_image has-effect-icon">
                                    <a href="#" target="_blank" class="data-effect-item">
                                        <span class="item"><img src="assets/img/instagram/instagram-6-83x83.jpg" alt="Image"></span>
                                        <div class="overlay-effect bg-color-2"></div>
                                        <div class="elm-link">
                                            <span class="icon-3"></span>
                                        </div>
                                    </a>                                    
                                </div>
                            </div>
                        </div><!-- /.widget_instagram -->
                    </div><!-- /.col -->
                </div><!-- /.themesflat-row -->
            </div><!-- /#footer-widgets -->
        </footer><!-- /#footer -->

        <!-- Bottom -->
        <div id="bottom" class="clearfix has-spacer">
            <div id="bottom-bar-inner" class="container">
                <div class="bottom-bar-inner-wrap">
                    <div class="bottom-bar-content">
                        <div id="copyright">© <span class="text">Construction Template. Design <a href="#" class="text-accent">by @Niche_Theme</a></span> 
                        </div>
                    </div><!-- /.bottom-bar-content -->

                    <div class="bottom-bar-menu">
                    <?php wp_nav_menu([
								'theme_location' => 'bottom',
								'container' => null,
								'items_wrap' => '<ul class="bottom-nav">%3$s</ul>'
								]); 
							?>
                    </div><!-- /.bottom-bar-menu -->
                </div><!-- /.bottom-bar-inner-wrap -->                
            </div><!-- /#bottom-bar-inner -->
        </div><!-- /#bottom -->

    </div><!-- /#page -->
</div><!-- /#wrapper -->

<a id="scroll-top"></a>
<?php wp_footer(); ?>
</body>
</html>
