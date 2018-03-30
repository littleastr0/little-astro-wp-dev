<?php
/**
 * Little Astronaut functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Little_Astronaut
 */

if ( ! function_exists( 'littleastro_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function littleastro_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Little Astronaut, use a find and replace
		 * to change 'littleastro' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'littleastro', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'littleastro' ),
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
		add_theme_support( 'custom-background', apply_filters( 'littleastro_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'littleastro_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function littleastro_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'littleastro_content_width', 640 );
}
add_action( 'after_setup_theme', 'littleastro_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function littleastro_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'littleastro' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'littleastro' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'littleastro' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'littleastro' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'littleastro_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function littleastro_scripts() {
	wp_enqueue_style( 'littleastro-style', get_stylesheet_uri() );

	wp_enqueue_script( 'littleastro-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'littleastro-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'littleastro_scripts' );

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

/*** Custom Navigation Walker **/

require_once('wp_bootstrap_navwalker.php');

/*** Replace elipses in the_excerpt with a link **/

function new_excerpt_more($more) {
    global $post;
	return '... <a class="moretag" href="'. get_permalink($post->ID) . '"> Read more &raquo;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


/*** Registers an editor stylesheet for the theme. */
function wpdocs_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );

/** search form ***/

add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'gallery' ) );
/* Global footer customization --- social media icons and contact info through global custom fields */


add_action('admin_menu', 'add_gcf_interface');

function add_gcf_interface() {

	add_theme_page( 'Customize Footer Social Media', 'Customize Footer Social Media', 'administrator', 'social-media-footer', 'editglobalcustomfields' );
}

function editglobalcustomfields() {
	?>
	<div class='wrap'>
	<h2>Edit Footer Social Media/h2>
	<p>Use this page to edit cont<act info and social media links in the footer on all pages</p>

	<form method="post" action="options.php">
	<?php wp_nonce_field('update-options') ?>

	<p><strong>Enter Facebook Username. I.e., <i>Facebook.com/USERNAME</i></strong><br />
	<input type="text" name="facebook-username" size="45" value="<?php echo get_option('facebook-username'); ?>" /></p>

	<p><input type="submit" name="Submit" value="Set Facebook Username" /></p>
	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="facebook-username" /> <!---this might be important -->

	</form>

	<form method="post" action="options.php">
	<?php wp_nonce_field('update-options') ?>

	<p><strong>Enter Twitter Username. I.e., <i>Twitter.com/USERNAME</i></strong><br />
	<input type="text" name="twitter-username" size="45" value="<?php echo get_option('twitter-username'); ?>" /></p>

	<p><input type="submit" name="Submit" value="Update Twitter Username" /></p>
	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="twitter-username" /> <!---this might be important -->

	</form>
	<form method="post" action="options.php">
	<?php wp_nonce_field('update-options') ?>

	<p><strong>Enter Instagram Username. I.e., <i>Instagram.com/USERNAME</i></strong><br />
	<input type="text" name="instagram-username" size="45" value="<?php echo get_option('instagram-username'); ?>" /></p>

	<p><input type="submit" name="Submit" value="Update Instagram Username" /></p>
	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="instagram-username" /> <!---this might be important -->

	</form>
	<form method="post" action="options.php">
	<?php wp_nonce_field('update-options') ?>

	<p><strong>Enter LinkedIn Username. I.e., <i>linkedin.com/in/USERNAME</i></strong><br />
	<input type="text" name="linkedin-username" size="45" value="<?php echo get_option('linkedin-username'); ?>" /></p>

	<p><input type="submit" name="Submit" value="Update LinkedIn Username" /></p>
	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="linkedin-username" /> <!---this might be important -->

	</form>
	<?php
}

?>
