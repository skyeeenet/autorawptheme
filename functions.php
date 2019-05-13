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
include_once(__DIR__.'/inc/footer_tags_widget.php');
include_once(__DIR__.'/inc/footer_recent_posts_widget.php');
include_once(__DIR__.'/inc/footer_info_widget.php');
include_once(__DIR__.'/inc/recent_posts_widget.php');
include_once(__DIR__.'/inc/tags_widget.php');
include_once(__DIR__.'/inc/breadcrumbs.php');

if ( ! function_exists( 'autora_setup' ) ) :

	function autora_setup() {

		load_theme_textdomain( 'autora', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		register_nav_menu('top', 'Header-menu');
		register_nav_menu('bottom', 'Footer-menu');

		add_theme_support( 'post-thumbnails' );

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

	register_sidebar([
		'name' => 'Footer Tags',
		'id' => 'footer_tags', //исп.для вывода в шаблоне
		'description' => 'Footer Tags',
	]);

	register_sidebar([
		'name' => 'Footer Recent Posts',
		'id' => 'footer_recent_posts', //исп.для вывода в шаблоне
		'description' => 'Footer Recent Posts',
	]);

	register_sidebar([
		'name' => 'Footer Info',
		'id' => 'footer_info', //исп.для вывода в шаблоне
		'description' => 'Footer Information',
	]);

	//сайдбар правой панели
	register_sidebar([
		'name' => 'Правый блок на архивных страницах',
		'id' => 'right_panel', 
		'description' => 'Можете размещать недавние посты, облако тегов, соц.сети',
	]);

	register_widget('Widget_Header'); //Регистрируем виджет
	register_widget('Widget_Social'); //Регистрируем виджет
	register_widget('FooterTagsWidget'); //Регистрируем виджет
	register_widget('FooterRecentPostsWidget'); //Регистрируем виджет
	register_widget('FooterInfoWidget'); //Регистрируем виджет
	register_widget('RecentPostsWidget'); //Регистрируем виджет
	register_widget('TagsWidget'); //Регистрируем виджет
	
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
		'has_archive' => false //должены ли эти записи быть доступными на отдельной странице /flats
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

	register_post_type('blog', [

		//передаем настройки
		'labels' => [
			'name' => 'Blog',//отображается в админке. Основное название
			'singular_name' => 'Blog',
			'add_new' => 'Add new',
			'add_new_item' => 'Add Blog',
			'edit_item' => 'Edit Blog',
			'new_item' => 'New Blog',
			'view_item' => 'View Blog',
			'search_items' => 'Search Blog',
			'not_found' => 'Not found',
			'not_found_in_trash' => 'Not found in trash',
			'parent_item_colon' => '',
			'menu_name' => 'Blog',
		],
		'description' => '',
		'public' => true,
		'menu_position' => 13,
		'menu_icon' => 'dashicons-format-quote',
		'hierarchical' => false,
		'supports' => array('title', 'editor', 'thumbnail', 'comments'),
		'taxonomies' => array(),
		'has_archive' => true //должены ли эти записи быть доступными на отдельной странице /flats
	]); 

	register_taxonomy('tags', array('blog'), array(
		'labels' => array(
			'name' => 'Tags',
			'sungular_name' => 'Tag',
			'search_items' => 'Search Tag',
			'all_items' => 'All Tags',
			'view_item' => 'View Tags',
			'edit_item' => 'Edit Tag',
			'update_item' => 'Update Tag',
			'add_new_item' => 'Add New Tag',
			'new_item_name' => 'Add New',
			'menu_name' => 'Tags',
		),
		'description' => '',
		'public' => true,
		'hierarchical' => false,
	));
	
	register_post_type('info_block', [

		//передаем настройки
		'labels' => [
			'name' => 'Info Blocks',//отображается в админке. Основное название
			'singular_name' => 'Info Block',
			'add_new' => 'Add new',
			'add_new_item' => 'Add Info Block',
			'edit_item' => 'Edit Info Block',
			'new_item' => 'New Info Block',
			'view_item' => 'View Info Block',
			'search_items' => 'Search Info Block',
			'not_found' => 'Not found',
			'not_found_in_trash' => 'Not found in trash',
			'parent_item_colon' => '',
			'menu_name' => 'Info Blocks',
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

	register_taxonomy('info_block_types', array('info_block'), array(
		'labels' => array(
			'name' => 'Info Block Types',
			'sungular_name' => 'Info Block Type',
			'search_items' => 'Search Info Block Type',
			'all_items' => 'All Info Block Type',
			'view_item' => 'View Info Block Type',
			'edit_item' => 'Edit Info Block Type',
			'update_item' => 'Update Info Block Type',
			'add_new_item' => 'Add New Info Block Type',
			'new_item_name' => 'Add New',
			'menu_name' => 'Info Block Types',
		),
		'description' => '',
		'public' => true,
		'hierarchical' => true,
	));

	register_taxonomy('team', array('info_block'), array(
		'labels' => array(
			'name' => 'Teams',
			'sungular_name' => 'Team',
			'search_items' => 'Search Team',
			'all_items' => 'All Teams',
			'view_item' => 'View Team',
			'edit_item' => 'Edit Team',
			'update_item' => 'Update Team',
			'add_new_item' => 'Add New Team',
			'new_item_name' => 'Add New',
			'menu_name' => 'Teams',
		),
		'description' => '',
		'public' => true,
		'hierarchical' => true,
	));

	register_taxonomy('gallery', array('info_block'), array(
		'labels' => array(
			'name' => 'Gallery',
			'sungular_name' => 'Gallery',
			'search_items' => 'Search Gallery',
			'all_items' => 'All Gallery',
			'view_item' => 'View Gallery',
			'edit_item' => 'Edit Gallery',
			'update_item' => 'Update Gallery',
			'add_new_item' => 'Add New Gallery',
			'new_item_name' => 'Add New',
			'menu_name' => 'Gallery',
		),
		'description' => '',
		'public' => true,
		'hierarchical' => true,
	));

	register_post_type('projects', [

		//передаем настройки
		'labels' => [
			'name' => 'Projects',//отображается в админке. Основное название
			'singular_name' => 'Project',
			'add_new' => 'Add new',
			'add_new_item' => 'Add Project',
			'edit_item' => 'Edit Project',
			'new_item' => 'New Project',
			'view_item' => 'View Project',
			'search_items' => 'Search Project',
			'not_found' => 'Not found',
			'not_found_in_trash' => 'Not found in trash',
			'parent_item_colon' => '',
			'menu_name' => 'Projects',
		],
		'description' => '',
		'public' => true,
		'menu_position' => 22,
		'menu_icon' => 'dashicons-format-quote',
		'hierarchical' => false,
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies' => array(),
		'has_archive' => true //должены ли эти записи быть доступными на отдельной странице /flats
	]); 

	register_taxonomy('tags', array('projects'), array(
		'labels' => array(
			'name' => 'Tags',
			'sungular_name' => 'Tag',
			'search_items' => 'Search Tag',
			'all_items' => 'All Tags',
			'view_item' => 'View Tags',
			'edit_item' => 'Edit Tag',
			'update_item' => 'Update Tag',
			'add_new_item' => 'Add New Tag',
			'new_item_name' => 'Add New',
			'menu_name' => 'Tags',
		),
		'description' => '',
		'public' => true,
		'hierarchical' => false,
	));
});
 /*Таблетка*/
if (!is_admin()) {
wp_deregister_script('jquery');
wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"), false, '1.12.4');
wp_enqueue_script('jquery');
}

function autora_scripts() {
	wp_enqueue_style( 'autora-style', get_stylesheet_uri() );

	wp_enqueue_script('script-0', get_template_directory_uri().'/assets/js/jquery.min.js',array(), false, false);
	wp_enqueue_script('script-5', get_template_directory_uri().'/assets/js/owl.carousel.min.js',array(),false, false);
	wp_enqueue_script('script-9', get_template_directory_uri().'/assets/js/owl.carousel2.thumbs.js',null, false);
	wp_enqueue_script("jquery-effects-core", array(), false, false);
	wp_enqueue_script('script-1', get_template_directory_uri().'/assets/js/plugins.js',array(),false, true);
	wp_enqueue_script('script-2', get_template_directory_uri().'/assets/js/tether.min.js',array(),false, true);
	wp_enqueue_script('script-3', get_template_directory_uri().'/assets/js/bootstrap.min.js',array(),false, true);
	wp_enqueue_script('script-4', get_template_directory_uri().'/assets/js/animsition.js',array(),false, true);
	wp_enqueue_script('script-6', get_template_directory_uri().'/assets/js/countto.js',array(),false, true);
	wp_enqueue_script('script-7', get_template_directory_uri().'/assets/js/equalize.min.js',array(),false, true);
	wp_enqueue_script('script-8', get_template_directory_uri().'/assets/js/jquery.isotope.min.js',array(),false, true);
	wp_enqueue_script('jquery-cookie', get_template_directory_uri().'/assets/js/jquery.cookie.js',array(),false, true);
	wp_enqueue_script('gmap', get_template_directory_uri().'/assets/js/gmap3.min.js',array(),false, true);
	wp_enqueue_script('script-10', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAIEU6OT3xqCksCetQeNLIPps6-AYrhq-s&region=GB',array(),false, true);
	wp_enqueue_script('script-11', get_template_directory_uri().'/assets/js/shortcodes.js',array(),false, true);
	wp_enqueue_script('script-12', get_template_directory_uri().'/assets/js/main.js',array(),false, true);
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

