<?php
/**
 * WSU Surgery functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WSU_Surgery
 */

if ( ! function_exists( 'wsu_surgery_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wsu_surgery_setup() {
	global $content_width; 

	/**
	* Required WordPress variable.
	*/
	if (!isset($content_width)) {
		$content_width = 1170;
	}


	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on WSU Surgery, use a find and replace
	 * to change 'wsu_surgery' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wsu_surgery', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Main Navigation', 'wsu_surgery' ),
		'footer-menu' 	=>	__( 'Footer Menu', 'wsu_surgery' )
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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wsu_surgery_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'wsu_surgery_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wsu_surgery_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wsu_surgery_content_width', 640 );
}
add_action( 'after_setup_theme', 'wsu_surgery_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wsu_surgery_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wsu_surgery' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wsu_surgery' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'			=>	__( 'Homepage Sidebar', 'wsu_surgery' ),
		'id'			=>	'homepage-sidebar',
		'before_widget'	=>	'<div id="%1$s" class="widget text-left">',
		'after_widget'	=>	'</div>',
		'before_title'	=>	'<h2 class="widget-title">',
		'after_title'	=>	'</h2>',
	) );

	register_sidebar( array(
		'name'			=>	__( 'Homepage Twitter', 'wsu_surgery' ),
		'id'			=>	'homepage-twitter',
		'before_widget'	=>	'<div id="%1$s" class="widget text-left">',
		'after_widget'	=>	'</div>',
		'before_title'	=>	'<h2 class="widget-title">',
		'after_title'	=>	'</h2>',
	) );

	register_sidebar( array(
		'name'			=>	__( 'Faculty', 'wsu_surgery' ),
		'id'			=>	'faculty-sidebar',
		'before_widget'	=>	'<div id="%1$s" class="widget text-left">',
		'after_widget'	=>	'</div>',
		'before_title'	=>	'<h2 class="widget-title">',
		'after_title'	=>	'</h2>',
	) );

    register_sidebar( array(
		'name'          => esc_html__( 'Education', 'wsu_surgery' ),
		'id'            => 'education-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'wsu_surgery' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wsu_surgery_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wsu_surgery_scripts() {
	
	/* CSS */
	wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.0.0', 'all' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', false, '4.1.0' );
	wp_enqueue_style( 'wsu_surgery-style', get_stylesheet_uri() );

    /* Scripts */
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js', false, NULL, true );
    wp_enqueue_script( 'jquery' );

    //bootstrap
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.11.1', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.0.0', true );
	
	wp_enqueue_script( 'bxslider-js', get_template_directory_uri() . '/assets/js/jquery.bxslider.min.js', array('jquery'), '4.1.2', true );
	wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'sbd_base-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wsu_surgery_scripts' );

/**
 * Adds IE specific scripts
 * 
 * Respond.js has to be loaded after Theme styles
 *
 */
function wsu_surgery_print_ie_scripts() {
	 ?>
	 <!--[if lt IE 9]>
	 	<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js" type="text/javascript"></script><br />
	 	<script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js" type="text/javascript"></script><br />'
	 <![endif]-->
	 <?php 
	 
}
add_action( 'wp_head', 'wsu_surgery_print_ie_scripts');


/**
 * Registers an editor stylesheet for the theme.
 */
function add_editor_styles() {
    add_editor_style( get_template_directory_uri() . '/assets/css/editor-style.css' );
}
add_action( 'admin_init', 'add_editor_styles' );

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
*  Register Custom Navigation Walker
*/
require_once( get_template_directory() . '/inc/wp-bootstrap-navwalker.php' );

/*
 * Set specific page header page title image
 */
require get_template_directory() . '/inc/acf-field-group-sidebar.php';
//require get_template_directory() . '/inc/acf-field-groups.php';

/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML. 
 */
function wpdocs_my_search_form( $form ) {
    $form = '<form role="search" method="get" class="search-form" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . __( "I'm Looking for..." ) . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" class="form-control" placeholder="' . esc_attr__("I'm Looking for...") .'" autocomplete="' . esc_attr__("off") . '" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
    </div>
    </form>';
 
    return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );

/* 
*
* Add redirect wp search to custom search page
*/
function nice_search_redirect() {
	global $wp_rewrite;
	if ( !isset( $wp_rewrite ) || !is_object( $wp_rewrite ) || !$wp_rewrite->using_permalinks() )
		return;
 
	$search_base = $wp_rewrite->search_base;
	if ( is_search() && !is_admin() && strpos( $_SERVER['REQUEST_URI'], "/{$search_base}/" ) === false ) {
		wp_redirect( home_url( "/{$search_base}/" . urlencode( get_query_var( 's' ) ) ) );
		exit();
	}
}
 
add_action( 'template_redirect', 'nice_search_redirect' );





 /*
 * ACF Sidebar Loader
 */

function my_acf_load_sidebar( $field )
{
    //print_r( $field );
    //die;

    // reset choices
    $field['choices'] = array();
    $field['choices']['about-sidebar'] = 'About Sidebar';
    $field['choices']['education-sidebar'] = 'Education';
    $field['choices']['sidebar-1'] = 'Default Sidebar';
    $field['choices']['none'] = 'No Sidebar';

    return $field;
}

add_filter('acf/load_field/name=select_a_sidebar', 'my_acf_load_sidebar');
