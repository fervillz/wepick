<?php
/**
 * functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WePick
 */


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Theme options file.
 */
require get_template_directory() . '/inc/theme-options.php';

/**
 * Post type how it works file.
 */
require get_template_directory() . '/inc/how-it-works.php';

/**
 * Post type how it works file.
 */
require get_template_directory() . '/inc/screenshots.php';


if ( ! function_exists( 'wepick_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wepick_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on DevriX Starter, use a find and replace
	 * to change 'wepick' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wepick', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'wepick' ),
		'float_menu' => esc_html__( 'Floating Menu', 'wepick' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wepick_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'wepick_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wepick_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wepick_content_width', 640 );
}
add_action( 'after_setup_theme', 'wepick_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wepick_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wepick' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wepick_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wepick_scripts() {

	// Enqueue the only styling file here that is build with Gulp
	wp_enqueue_style( 'wepick-style', get_template_directory_uri() . '/assets/css/master.css', null, '1.0.0.2' );

	// Enqueue font poppins
	wp_enqueue_style( 'poppins', 'https://fonts.googleapis.com/css?family=Poppins:400,700' );

	// And the only JS file that is build with Gulp
	wp_enqueue_script( 'wepick-scripts', get_template_directory_uri() . '/assets/scripts/bundle.min.js', array( "jquery" ), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wepick_scripts' );

/**
 * Remove the margin-top styling added to the HTML tag by default from WordPress
 */
function wepick_remove_html_margin() {
	remove_action( 'wp_head', '_admin_bar_bump_cb' );
}
add_action( 'get_header', 'wepick_remove_html_margin' );
