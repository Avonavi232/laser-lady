<?php

if ( ! function_exists( 'laserlady_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function laserlady_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on laserlady, use a find and replace
		 * to change 'laserlady' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'laserlady', get_template_directory() . '/languages' );

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
	}
endif;
add_action( 'after_setup_theme', 'laserlady_setup' );

/*Remove autoformatting in the text editor*/
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

/*Clean head from unnescessary tags*/
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'index_rel_link');

//Delete emoji
add_filter('emoji_svg_url', '__return_false');
function disable_emojicons_tinymce($plugins) {
	if (is_array($plugins)) {
		return array_diff($plugins, array('wpemoji'));
	} else {
		return array();
	}
}

function disable_wp_emojicons() {
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');

	add_filter('tiny_mce_plugins', 'disable_emojicons_tinymce');
}

add_action('init', 'disable_wp_emojicons');


function remove_comments_from_admin_page() {
	remove_menu_page('edit-comments.php');
}

add_action('admin_menu', 'remove_comments_from_admin_page');



/**
 * Enqueue scripts and styles.
 */
function laserlady_scripts() {
	wp_enqueue_style(
		'fonts',
		( get_template_directory_uri() . '/public/fonts/fonts.css' ),
		array(),
		filemtime( get_template_directory() . '/public/fonts/fonts.css' )
	);

	wp_enqueue_style(
		'icomoon',
		( get_template_directory_uri() . '/public/icomoon/style.css' ),
		array(),
		filemtime( get_template_directory() . '/public/icomoon/style.css' )
	);

	wp_enqueue_style(
		'styles',
		( get_template_directory_uri() . '/style.css' ),
		array(),
		filemtime( get_template_directory() . '/style.css' )
	);

	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js', array(), '', false );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/public/js/main.js', array(), filemtime( get_template_directory() . '/public/js/main.js' ), true );
}
add_action( 'wp_enqueue_scripts', 'laserlady_scripts' );

//Menu
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
}


