<?php
/**
 * autora functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package autora
 */

if ( ! function_exists( 'autora_setup' ) ) :

	function autora_setup() {

		load_theme_textdomain( 'autora', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );


		add_theme_support( 'title-tag' );


		add_theme_support( 'post-thumbnails' );

		register_nav_menu('top', 'Header-menu');

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'autora_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'autora_setup' );

function autora_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'autora_content_width', 640 );
}
add_action( 'after_setup_theme', 'autora_content_width', 0 );

function autora_widgets_init() {

	register_sidebar([
		'name' => 'Slider',
		'id' => 'home_page_slider', //исп.для вывода в шаблоне
		'description' => 'Slider for home page'
	]);
}
add_action( 'widgets_init', 'autora_widgets_init' );


function autora_scripts() {
	wp_enqueue_style( 'autora-style', get_stylesheet_uri() );

	wp_enqueue_script( 'autora-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script('jquery', get_template_directory_uri().'/assets/js/jquery.min.js',null, false);
	wp_enqueue_script('script-1', get_template_directory_uri().'/assets/js/plugins.js',null, false);
	wp_enqueue_script('script-2', get_template_directory_uri().'/assets/js/tether.min.js',null, false);
	wp_enqueue_script('script-3', get_template_directory_uri().'/assets/js/bootstrap.min.js',null, false);
	wp_enqueue_script('script-4', get_template_directory_uri().'/assets/js/animsition.js',null, false);
	wp_enqueue_script('script-5', get_template_directory_uri().'/assets/js/owl.carousel.min.js',null, false);
	wp_enqueue_script('script-6', get_template_directory_uri().'/assets/js/countto.js',null, false);
	wp_enqueue_script('script-7', get_template_directory_uri().'/assets/js/equalize.min.js',null, false);
	wp_enqueue_script('script-8', get_template_directory_uri().'/assets/js/jquery.isotope.min.js',null, false);
	wp_enqueue_script('script-9', get_template_directory_uri().'/assets/js/owl.carousel2.thumbs.js',null, false);
	wp_enqueue_script('jquery-cookie', get_template_directory_uri().'/assets/js/jquery.cookie.js',null, false);
	wp_enqueue_script('script-10', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAIEU6OT3xqCksCetQeNLIPps6-AYrhq-s&region=GB',null, false);
	wp_enqueue_script('script-11', get_template_directory_uri().'/assets/js/shortcodes.js',null, false);
	wp_enqueue_script('script-12', get_template_directory_uri().'/assets/js/main.js',null, false);
	wp_enqueue_script('script-13', get_template_directory_uri().'/includes/rev-slider/js/jquery.themepunch.tools.min.js',null, false);
	wp_enqueue_script('script-14', get_template_directory_uri().'/includes/rev-slider/js/jquery.themepunch.revolution.min.js',null, false);
	wp_enqueue_script('script-15', get_template_directory_uri().'/assets/js/rev-slider.js',null, false);
	wp_enqueue_script('script-16', get_template_directory_uri().'/includes/rev-slider/js/extensions/revolution.extension.actions.min.js',null, true);
	wp_enqueue_script('script-17', get_template_directory_uri().'/includes/rev-slider/js/extensions/revolution.extension.carousel.min.js',null, true);
	wp_enqueue_script('script-18', get_template_directory_uri().'/includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js',null, true);
	wp_enqueue_script('script-19', get_template_directory_uri().'/includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js',null, true);
	wp_enqueue_script('script-20', get_template_directory_uri().'/includes/rev-slider/js/extensions/revolution.extension.migration.min.js',null, true);
	wp_enqueue_script('script-21', get_template_directory_uri().'/includes/rev-slider/js/extensions/revolution.extension.navigation.min.js',null, true);
	wp_enqueue_script('script-22', get_template_directory_uri().'/includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js',null, true);
	wp_enqueue_script('script-23', get_template_directory_uri().'/includes/rev-slider/js/extensions/revolution.extension.video.min.js',null, true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'autora_scripts' );

require get_template_directory() . '/inc/custom-header.php';

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/template-functions.php';

require get_template_directory() . '/inc/customizer.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

