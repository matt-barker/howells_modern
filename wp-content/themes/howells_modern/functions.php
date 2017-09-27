<?php
/**
 * howells_modern functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package howells_modern
 */

if ( ! function_exists( 'howells_modern_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function howells_modern_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on howells_modern, use a find and replace
		 * to change 'howells_modern' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'howells_modern', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'howells_modern' ),
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

		
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 100,
			'width'       => 520,
			'flex-width'  => true
		) );
	}
endif;
add_action( 'after_setup_theme', 'howells_modern_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function howells_modern_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'howells_modern_content_width', 640 );
}
add_action( 'after_setup_theme', 'howells_modern_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function howells_modern_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'howells_modern' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'howells_modern' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'howells_modern_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function howells_modern_scripts() {
    //Enqueue Typekit fonts 
  
    wp_enqueue_script( 'howells-modern-typekit', 'https://use.typekit.net/lhg0rnq.js' );
  
    wp_enqueue_script( 'howells-modern-typekit-setup', get_template_directory_uri() . '/js/typekit.js', array(), true );
  
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 
      
    wp_enqueue_script( 'howells-modern-typekit-script', '' );
  
	wp_enqueue_style( 'howells_modern-style', get_stylesheet_uri() );

	wp_enqueue_script( 'howells_modern-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'howells_modern-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
  
    wp_localize_script('howells_modern-navigation', 'howells_modernScreenReaderText', array(
            'expand' => __( 'Expand child menu', 'howells_modern'),
            'collapse' => __( 'Collapse child menu', 'howells_modern'),
                ));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply');
	}
  

}
add_action( 'wp_enqueue_scripts', 'howells_modern_scripts' );


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

