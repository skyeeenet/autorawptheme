<?php
/**
 * autora functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package autora
 */

include_once(__DIR__.'/inc/header_info_widget.php');
include_once(__DIR__.'/inc/header_social_widget.php');

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
		'name' => 'Header Info',
		'id' => 'header_widget', //исп.для вывода в шаблоне
		'description' => 'Header info',
	]);

	register_sidebar([
		'name' => 'Header Socials',
		'id' => 'header_socials', //исп.для вывода в шаблоне
		'description' => 'Social networks in header',
	]);

	register_widget('Widget_Header'); //Регистрируем виджет
	register_widget('Widget_Social'); //Регистрируем виджет
}
add_action( 'widgets_init', 'autora_widgets_init' );

add_action('init', function() {

	register_post_type('sliders', [

		//передаем настройки
		'labels' => [
			'name' => 'Sliders',//отображается в админке. Основное название
			'singular_name' => 'Slider',
			'add_new' => 'Add new',
			'add_new_item' => 'Add slider',
			'edit_item' => 'Edit slider',
			'new_item' => 'New Slider',
			'view_item' => 'View slider',
			'search_items' => 'Search slider',
			'not_found' => 'Not found',
			'not_found_in_trash' => 'Not found in trash',
			'parent_item_colon' => '',
			'menu_name' => 'Sliders',
		],
		'description' => '',
		'public' => true,
		'menu_position' => 25,
		'menu_icon' => 'dashicons-format-quote',
		'hierarchical' => false,
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies' => array(),
		'has_archive' => true //должены ли эти записи быть доступными на отдельной странице /flats
	]); 

	register_taxonomy('slider_types', array('sliders'), array(
		'labels' => array(
			'name' => 'Slider Types',
			'sungular_name' => 'Slider Type',
			'search_items' => 'Search Sldier Type',
			'all_items' => 'All Sliders Type',
			'view_item' => 'View Slider Type',
			'edit_item' => 'Edit Slider Type',
			'update_item' => 'Update Slider Type',
			'add_new_item' => 'Add New Slider Type',
			'new_item_name' => 'Add New',
			'menu_name' => 'Slider Types',
		),
		'description' => '',
		'public' => true,
		'hierarchical' => true,
	));
});

function autora_scripts() {
	wp_enqueue_style( 'autora-style', get_stylesheet_uri() );

	wp_enqueue_script('script-0', get_template_directory_uri().'/assets/js/jquery.min.js',array(), false, true);
	wp_enqueue_script('script-1', get_template_directory_uri().'/assets/js/plugins.js',array(),false, true);
	wp_enqueue_script('script-2', get_template_directory_uri().'/assets/js/tether.min.js',array(),false, true);
	wp_enqueue_script('script-3', get_template_directory_uri().'/assets/js/bootstrap.min.js',array(),false, true);
	wp_enqueue_script('script-4', get_template_directory_uri().'/assets/js/animsition.js',array(),false, true);
	wp_enqueue_script('script-5', get_template_directory_uri().'/assets/js/owl.carousel.min.js',array(),false, true);
	wp_enqueue_script('script-6', get_template_directory_uri().'/assets/js/countto.js',array(),false, true);
	wp_enqueue_script('script-7', get_template_directory_uri().'/assets/js/equalize.min.js',array(),false, true);
	wp_enqueue_script('script-8', get_template_directory_uri().'/assets/js/jquery.isotope.min.js',array(),false, true);
	wp_enqueue_script('script-9', get_template_directory_uri().'/assets/js/owl.carousel2.thumbs.js',null, true);
	wp_enqueue_script('jquery-cookie', get_template_directory_uri().'/assets/js/jquery.cookie.js',array(),false, true);
	wp_enqueue_script('script-10', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAIEU6OT3xqCksCetQeNLIPps6-AYrhq-s&region=GB',array(),false, true);
	wp_enqueue_script('script-11', get_template_directory_uri().'/assets/js/shortcodes.js',array(),false, true);
	wp_enqueue_script('script-12', get_template_directory_uri().'/assets/js/main.js',array(),false, true);
	wp_enqueue_script('script-13', get_template_directory_uri().'/includes/rev-slider/js/jquery.themepunch.tools.min.js',array(),false, true);
	wp_enqueue_script('script-14', get_template_directory_uri().'/includes/rev-slider/js/jquery.themepunch.revolution.min.js',array(),false, true);
	wp_enqueue_script('script-15', get_template_directory_uri().'/assets/js/rev-slider.js',array(),false, true);
	wp_enqueue_script('script-16', get_template_directory_uri().'/includes/rev-slider/js/extensions/revolution.extension.actions.min.js',array(),false, true);
	wp_enqueue_script('script-17', get_template_directory_uri().'/includes/rev-slider/js/extensions/revolution.extension.carousel.min.js',array(),false, true);
	wp_enqueue_script('script-18', get_template_directory_uri().'/includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js',array(),false, true);
	wp_enqueue_script('script-19', get_template_directory_uri().'/includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js',array(),false, true);
	wp_enqueue_script('script-20', get_template_directory_uri().'/includes/rev-slider/js/extensions/revolution.extension.migration.min.js',array(),false, true);
	wp_enqueue_script('script-21', get_template_directory_uri().'/includes/rev-slider/js/extensions/revolution.extension.navigation.min.js',array(),false, true);
	wp_enqueue_script('script-22', get_template_directory_uri().'/includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js',array(),false, true);
	wp_enqueue_script('script-23', get_template_directory_uri().'/includes/rev-slider/js/extensions/revolution.extension.video.min.js',array(),false, true);
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

