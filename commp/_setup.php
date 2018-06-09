<?php 
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
/**
 * 
 * Config Template 
 * 
 * This hook is called during each page load, after the theme is initialized. 
 * It is generally used to perform basic setup, registration, and init actions for a theme.
 * 
 * @link {https://codex.wordpress.org/Plugin_API/Action_Reference/after_setup_theme}
 * @since 1.0
 * 
 */
add_action( 'after_setup_theme', function() {
    /*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyfifteen
	 * If you're building a theme based on twentyfifteen, use a find and replace
	 * to change 'twentyfifteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'girl' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	#add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	
	/**
	 * Reg Menu Wordpress
	 * see https://codex.wordpress.org/Function_Reference/register_nav_menu
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'girl' ),
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
	
} );
/**
 * Remove Bar Admin
 * @since 1.0
 */
add_filter('show_admin_bar', '__return_false');

add_action( 'wp_enqueue_scripts', function() {
	/**
	 * Config Style Template
	 * @link {https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts}
	 * @since 1.0
	 * @author Trangfox
	 */
	global $ver;
	//Style
    wp_enqueue_style( 'ninja-spa-style', get_template_directory_uri().'/style.css', '', $ver );
	wp_enqueue_style( 'ninja-spa-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', '', '4.1.1' );
	//Script
	wp_enqueue_script( 'ninja-spa-bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), true, '4.1.1' );

} );

add_action( 'init', 'disable_emojis' );

if ( !function_exists( 'disable_emojis' ) ) {
    /**
     * Disable the emoji's by Ninjafox
     * @since 1.0
     * @author ninjafox
     */
    function disable_emojis() {
        remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
        remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
        remove_action( 'wp_print_styles', 'print_emoji_styles' );
        remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
        remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
        remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
        remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
        add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
        add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
    }
}
if ( !function_exists( 'disable_emojis_tinymce' ) ) {
    /**
    * Filter function used to remove the tinymce emoji plugin.
    * 
    * @param array $plugins 
    * @return array Difference betwen the two arrays
    */
    function disable_emojis_tinymce( $plugins ) {
        if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
        } else {
        return array();
        }
    }
}
if (!function_exists( 'disable_emojis_remove_dns_prefetch' ) ) {
    /**
    * Remove emoji CDN hostname from DNS prefetching hints.
    *
    * @param array $urls URLs to print for resource hints.
    * @param string $relation_type The relation type the URLs are printed for.
    * @return array Difference betwen the two arrays.
    */
    function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
        if ( 'dns-prefetch' == $relation_type ) {
        /** This filter is documented in wp-includes/formatting.php */
        $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );  
        $urls = array_diff( $urls, array( $emoji_svg_url ) );
        }
        return $urls;
    }
}