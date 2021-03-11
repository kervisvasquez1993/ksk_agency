<?php
/**
 * ksk_agency functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ksk_agency
 */
require( dirname( __FILE__ ) . '/post-type/portafolio.php' );
require( dirname( __FILE__ ) . '/post-type/usuarios.php' );
require get_template_directory().'/inc/querys.php';
require get_template_directory().'/inc/widget-personalizado.php';

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'ksk_agency_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ksk_agency_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ksk_agency, use a find and replace
		 * to change 'ksk_agency' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ksk_agency', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		add_image_size( "square", "350", "350", true );
		add_image_size( "portrait", "350", "724", true );
		add_image_size( "cajas", "400", "375", true );
		add_image_size( "medianos", "700", "400", true );
		add_image_size( "blog", "966", "644", true );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		// titulos seo

		add_theme_support( "title-tag");

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'ksk_agency' ),
				'menu-footer' => esc_html__( 'Menu Footer', 'ksk_agency' ),
			'menu_redes_sociales' => esc_html__( 'Menu redes Sociales', "ksk_agency" )
				
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'ksk_agency_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'ksk_agency_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ksk_agency_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ksk_agency_content_width', 640 );
}
add_action( 'after_setup_theme', 'ksk_agency_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ksk_agency_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ksk_agency' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ksk_agency' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s text-center texto-primario">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar2', 'ksk_agency' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here.', 'ksk_agency' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s text-center texto-primario">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ksk_agency_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

 /*
	


 */
function ksk_agency_scripts() {
	wp_enqueue_style( "normalize", get_template_directory_uri()."/css/normalize.css", array(), "8.0.1" );
	wp_enqueue_style('google_font', "https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,600;1,400&family=Raleway:ital,wght@0,700;1,500&display=swap", array(), "1.0.0");
	wp_enqueue_style( 'ksk_agency-style', get_stylesheet_uri(), array("normalize", "google_font"), _S_VERSION );
	// hoja de estylos secundarias
	wp_enqueue_style( 'ksk_agency-style-secundario', get_stylesheet_directory_uri().'/css/style.css', array('ksk_agency-style'), '1.0.0');
	wp_enqueue_style( "slicknavCss", get_template_directory_uri()."/css/slicknav.min.css", array(), "1.0.0" );
	wp_style_add_data( 'ksk_agency-style', 'rtl', 'replace' );
	// incluir js 
    wp_enqueue_script( "slicknavJs", get_template_directory_uri()."/js/jquery.slicknav.min.js", array('jquery'), "1.0.0", true );
	wp_enqueue_script( "scripts", get_template_directory_uri()."/js/scripts.js", array("jquery", "slicknavJs"), "1.0.0", true );
	wp_enqueue_script( 'ksk_agency-navigation', get_template_directory_uri().'/js/navigation.js', array(), _S_VERSION, true );
    if(is_page('galeria')):
	    wp_enqueue_style( 'lightboxCSS', get_stylesheet_directory_uri().'/css/lightbox.min.css', array(), '1.0.0');
		wp_enqueue_script( "lightboxJs", get_template_directory_uri()."/js/lightbox.min.js", array(), "1.0.0", true );
    endif;
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ksk_agency_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function ksk_agency_hero_image()
{
	// obtener id de la pagina pricipal
	$front_page_id = get_option("page_on_front");
	//obtener hero 
	$id_imagen = get_field('imagen_hero', $front_page_id);
	$imagen  = wp_get_attachment_image_src($id_imagen, 'full')[0];
	//style 
	wp_register_style("custom", false);
	wp_enqueue_style("custom");
	$iamgen_destacada_css = "
		body.home .site-header
	    {
		  background-image: linear-gradient( rgba(0,0,0,0.75), rgba(0,0,0,0.75) ), url($imagen) !important;
		}	
	";
	wp_add_inline_style('custom', $iamgen_destacada_css);
}

add_action( "init", 'ksk_agency_hero_image' );