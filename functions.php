<?php
/**
 * _s functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _s
 */

if ( ! function_exists( '_s_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function _s_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on _s, use a find and replace
	 * to change '_s' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( '_s', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary Menu', '_s' ),
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
	add_theme_support( 'custom-background', apply_filters( '_s_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // _s_setup
add_action( 'after_setup_theme', '_s_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function _s_content_width() {
	$GLOBALS['content_width'] = apply_filters( '_s_content_width', 640 );
}
add_action( 'after_setup_theme', '_s_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function _s_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', '_s' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', '_s_widgets_init' );

/**
 * Enqueue scripts and styles.
*/
function _s_scripts() {
	wp_enqueue_style( '_s-style', get_stylesheet_uri() );
    
    wp_register_style( '_s-animate', get_template_directory_uri() . '/assets/css/animate.css' );
	wp_enqueue_style( '_s-animate' );
    
    wp_register_style( '_s-font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style( '_s-font-awesome' );
    
    wp_register_style( '_s-flaticon', get_template_directory_uri() . '/assets/fonts/flaticon/flaticon.css' );
	wp_enqueue_style( '_s-flaticon' );
    
    wp_register_style( '_s-owl-carousel', get_template_directory_uri() . '/assets/owl-carousel/owl.carousel.css' );
	wp_enqueue_style( '_s-owl-carousel' );
    
    wp_register_style( '_s-owl-theme', get_template_directory_uri() . '/assets/owl-carousel/owl.theme.css' );
	wp_enqueue_style( '_s-owl-theme' );
    
    wp_register_style( '_s-bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( '_s-bootstrap' );
    
    wp_register_style( '_s-style1', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( '_s-style1' );
    
    wp_register_style( '_s-responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
	wp_enqueue_style( '_s-responsive' );

	wp_enqueue_script( '_s-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( '_s-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
    
    wp_enqueue_script( '_s-bootstrap-min', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array(), '20130115', true );
    
    wp_enqueue_script( '_s-jquery-easing-min', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array(), '20130115', true );
    
    wp_enqueue_script( '_s-jquery-sticky-min', get_template_directory_uri() . '/assets/js/jquery.sticky.min.js', array(), '20130115', true );
    
    wp_enqueue_script( '_s-smoothscroll-min', get_template_directory_uri() . '/assets/js/smoothscroll.min.js', array(), '20130115', true );
    
    wp_enqueue_script( '_s-jquery-inview-min', get_template_directory_uri() . '/assets/js/jquery.inview.min.js', array(), '20130115', true );
    
    wp_enqueue_script( '_s-jquery-countTo-min', get_template_directory_uri() . '/assets/js/jquery.countTo.min.js', array(), '20130115', true );
    
    wp_enqueue_script( '_s-jquery-shuffle-min', get_template_directory_uri() . '/assets/js/jquery.shuffle.min.js', array(), '20130115', true );
    
    wp_enqueue_script( '_s-jquery-BlackAndWhite-min', get_template_directory_uri() . '/assets/js/jquery.BlackAndWhite.min.js', array(), '20130115', true );
    
    wp_enqueue_script( '_s-owl-carousel', get_template_directory_uri() . '/assets/owl-carousel/owl.carousel.min.js', array(), '20130115', true );
    
    wp_enqueue_script( '_s-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), '20130115', true );
    
    wp_register_script('jquery', 'https://maps.googleapis.com/maps/api/js', false, '1.3.2');
    wp_enqueue_script('jquery');
    
    wp_enqueue_style( '_s-wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,700,800|Roboto+Slab:400,700,300', false );
    

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_s_scripts' );

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

