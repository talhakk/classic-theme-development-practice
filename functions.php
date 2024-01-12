<?php
/**
 * Simple Approach Practice functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Simple_Approach_Practice
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
/**
 * Register Custom Post Type
 */
add_action('init','practice_register_post_types');
function practice_register_post_types(){
		register_post_type('team',[
		'label'=>null,
		'labels'=>[
			'name'               => 'Team', // name for the post type.
				'singular_name'      => 'Team', // name for single post of that type.
				'add_new'            => 'Add New Member', // to add a new post.
				'add_new_item'       => 'Adding Member', // title for a newly created post in the admin panel.
				'edit_item'          => 'Edit Member', // for editing post type.
				'new_item'           => 'New Member', // new post's text.
				'view_item'          => 'View Member', // for viewing this post type.
				'search_items'       => 'Search Members', // search for these post types.
				'not_found'          => 'Member Not Found', // if search has not found anything.
				'parent_item_colon'  => '', // for parents (for hierarchical post types).
				'menu_name'          => 'Team', // menu name.
		],
		'public'              => true,
		'menu_position'       => 5,
		'menu_icon'           => null,
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' )

		]);
		register_taxonomy('role',['team'],[
			'label'                 => '', // Default taken from $labels->name
			// Full list: wp-kama.com/function/get_taxonomy_labels
			'labels'                => [
				'name'              => 'Roles',
				'singular_name'     => 'Role',
				'search_items'      => 'Search Roles',
				'all_items'         => 'All Roles',
				'view_item '        => 'View Role',
				'edit_item'         => 'Edit Role',
				'update_item'       => 'Update Role',
				'add_new_item'      => 'Add New Role',
				'new_item_name'     => 'New Role Name',
				'menu_name'         => 'Roles',
				'back_to_items'     => '← Back to Roles',
		],
		'public'                => true,
		]);
		//register post type testimonials
		register_post_type('testimonials',[
			'label'=>null,
			'labels'=>[
			'name'               => 'Testimonials', // name for the post type.
				'singular_name'      => 'Testimonial', // name for single post of that type.
				'add_new'            => 'Add New Testimonial', // to add a new post.
				'add_new_item'       => 'Adding Testimonial', // title for a newly created post in the admin panel.
				'edit_item'          => 'Edit Testimonial', // for editing post type.
				'new_item'           => 'New Testimonial', // new post's text.
				'view_item'          => 'View Testimonial', // for viewing this post type.
				'search_items'       => 'Search Testimonials', // search for these post types.
				'not_found'          => 'Testimonial Not Found', // if search has not found anything.
				'parent_item_colon'  => '', // for parents (for hierarchical post types).
				'menu_name'          => 'Testimonials', // menu name.
			],
			'public'              => true,
			'menu_position'       => 5,
			'menu_icon'           => null,
			'supports' => array( 'title', 'thumbnail', 'excerpt' )

		]);
				//register post type Services
				register_post_type('services',[
					'label'=>null,
					'labels'=>[
					'name'               => 'Services', // name for the post type.
						'singular_name'      => 'Service', // name for single post of that type.
						'add_new'            => 'Add New Service', // to add a new post.
						'add_new_item'       => 'Adding Service', // title for a newly created post in the admin panel.
						'edit_item'          => 'Edit Service', // for editing post type.
						'new_item'           => 'New Service', // new post's text.
						'view_item'          => 'View Service', // for viewing this post type.
						'search_items'       => 'Search Service', // search for these post types.
						'not_found'          => 'Service Not Found', // if search has not found anything.
						'parent_item_colon'  => '', // for parents (for hierarchical post types).
						'menu_name'          => 'Services', // menu name.
					],
					'public'              => true,
					'menu_position'       => 5,
					'menu_icon'           => null,
					'supports' => array( 'title', 'editor','thumbnail', 'excerpt' )
		
				]);
				//register post type Services
				register_post_type('portfolio',[
					'label'=>null,
					'labels'=>[
					'name'               => 'Portfolio', // name for the post type.
						'singular_name'      => 'Portfolio', // name for single post of that type.
						'add_new'            => 'Add New Portfolio', // to add a new post.
						'add_new_item'       => 'Adding Portfolio', // title for a newly created post in the admin panel.
						'edit_item'          => 'Edit Portfolio', // for editing post type.
						'new_item'           => 'New Portfolio', // new post's text.
						'view_item'          => 'View Portfolio', // for viewing this post type.
						'search_items'       => 'Search Portfolio', // search for these post types.
						'not_found'          => 'Portfolio Not Found', // if search has not found anything.
						'parent_item_colon'  => '', // for parents (for hierarchical post types).
						'menu_name'          => 'Portfolio', // menu name.
					],
					'public'              => true,
					'menu_position'       => 5,
					'menu_icon'           => null,
					'supports' => array( 'title', 'editor','thumbnail', 'excerpt' )
		
				]);
				
}//register_post_type

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function simple_approach_practice_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Simple Approach Practice, use a find and replace
		* to change 'simple-approach-practice' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'simple-approach-practice', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'simple-approach-practice' ),
			'menu-2' => esc_html__( 'Footer', 'simple-approach-practice' )
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
			'simple_approach_practice_custom_background_args',
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
add_action( 'after_setup_theme', 'simple_approach_practice_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function simple_approach_practice_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'simple_approach_practice_content_width', 640 );
}
add_action( 'after_setup_theme', 'simple_approach_practice_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function simple_approach_practice_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'simple-approach-practice' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'simple-approach-practice' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Social', 'simple-approach-practice' ),
			'id'            => 'social',
			'description'   => esc_html__( 'Add social links here.', 'simple-approach-practice' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'simple_approach_practice_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function simple_approach_practice_scripts() {
	wp_enqueue_style( 'simple-approach-practice-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'simple-approach-practice-style', 'rtl', 'replace' );

    wp_enqueue_style( 'my-custom-css', get_template_directory_uri() . '/css/my-custom-css.css' );
	wp_enqueue_style('urban-insights','https://ankragency.com/wp-content/themes/urban_insight/assets/css/style.css?ver=1698880451');
	wp_enqueue_style('wp-block-library-css','https://ankragency.com/wp-includes/css/dist/block-library/style.min.css?ver=6.3');
    wp_enqueue_style('contact-form-7-css','https://ankragency.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.8.1');
	wp_enqueue_style('bootstrap_style-css','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css?ver=6.3');
	wp_enqueue_style('font_awesome-css','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css?ver=6.3');
	wp_enqueue_style('slick_style-css','https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css?ver=6.3');
	wp_enqueue_style('swiper_style-css','https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css?ver=6.3');
	wp_enqueue_style('urban_insight-style-css','https://ankragency.com/wp-content/themes/urban_insight/style.css?ver=1.0.0');
	wp_enqueue_style('style-style-css','https://ankragency.com/wp-content/themes/urban_insight/assets/css/style.css?ver=1698880451');
    



    wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'inline-js-included-default', get_template_directory_uri() . '/js/inline-default.js' );
	wp_enqueue_script( 'simple-approach-practice-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    wp_enqueue_script('contact-form-js','https://ankragency.com/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.8.1');
	wp_enqueue_script('custom-js-js','https://ankragency.com/wp-content/themes/urban_insight/js/custom.js?');
    wp_enqueue_script('urban_insight-navigation-js','https://ankragency.com/wp-content/themes/urban_insight/js/navigation.js?ver=1.0.0');
	wp_enqueue_script('wp-polyfill-inert-js','https://ankragency.com/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2');
	wp_enqueue_script('regenerator-runtime-js','https://ankragency.com/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.11');
	wp_enqueue_script('wp-polyfill-js','https://ankragency.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0');

   
	wp_enqueue_script('bootstrap-js','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js?ver=6.3');
	wp_enqueue_script('slick-js','https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js?ver=6.3');
	wp_enqueue_script('swiper-js','https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js?ver=6.3');
	
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'simple_approach_practice_scripts' );

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
/**
 * Register ACF fields If not exist
 */
require_once get_template_directory() . '/inc/acf-register-fields.php';
/**
 * Widgets Class
 */
require get_template_directory() . '/inc/widgets-class.php';

// register Practice_Contact widget
function register_practice_contact() {
    register_widget( 'Practice_Contact' );

}
add_action( 'widgets_init', 'register_practice_contact' );

/**
 * Walker Class
 */
require get_template_directory() . '/inc/walker-menu-class.php';
/**
 * Admin Notices
 */
add_action( 'admin_notices', 'practice_dependencies' );

function practice_dependencies() {
	//check if ACF exists, otherwise warning
	if (!class_exists('ACF')) {
		echo '<div class="error"><p>' . __( 'Warning: The theme needs Advanced Custom Fields to function', 'simple-approach-practice' ) . '</p></div>';
	
	}

}


