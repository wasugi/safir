<?php
if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

if ( ! function_exists( 'webane_theme_setup' ) ) :

	function webane_theme_setup() {

		load_theme_textdomain( 'safirmediakomunika' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 454, 299, array( 'center', 'top' ) );
		add_image_size( 'medium', 850, 560, array( 'center', 'top' ) );
		update_option('medium_size_w', 850);
		update_option('medium_size_h', 560);	
		update_option('medium_crop', 1);
		update_option('large_size_w', 1020);
		update_option('large_size_h', 672);
		update_option('large_crop', 1);
		update_option('thumbnail_size_w', 454);
		update_option('thumbnail_size_h', 299);
		update_option('thumbnail_crop', 1);
		
		register_nav_menus( array(
			'menuutama' => __( 'Menu Utama',  'webane' ),
			'menukedua'  => __( 'Menu Kedua', 'webane' ),
			'menufooter'  => __( 'Menu Footer', 'webane' ),
		) );
		add_theme_support( 'post-formats', array(
			'video','gallery'
		) );

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 65,
				'width'       => 179,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

	}
endif;
add_action( 'after_setup_theme', 'webane_theme_setup' );

// widget
function fungsi_widget_webane() {
	
    register_sidebar( array(
        'name'          => 'Default Sidebar',
        'id'            => 'default-sidebar',
        'before_widget' => '<div class="ts-grid-box widgets">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );	
    register_sidebar( array(
        'name'          => 'Gallery Sidebar',
        'id'            => 'gallery-sidebar',
        'before_widget' => '<div class="ts-grid-box widgets">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

}

// cleanup
add_action( 'widgets_init', 'fungsi_widget_webane' );
function webane_remove_wp_version_strings( $src ) {
	global $wp_version;
	parse_str( parse_url($src, PHP_URL_QUERY), $query );
	if ( !empty( $query['ver'] ) && $query['ver'] === $wp_version ) {
		$src = remove_query_arg( 'ver', $src );
	}
	return $src;
}
add_filter( 'script_loader_src', 'webane_remove_wp_version_strings' );
add_filter( 'style_loader_src', 'webane_remove_wp_version_strings' );

function webane_remove_meta_version() {
	return '';
}
add_filter( 'the_generator', 'webane_remove_meta_version' );


require get_template_directory().'/inc/safirmediakomunika.php';
require get_template_directory().'/inc/webane.php';
require get_template_directory().'/inc/custompost.php';
require get_template_directory().'/inc/option.php';
require get_template_directory().'/inc/related.php';
require get_template_directory().'/inc/widgets.php';
require get_template_directory().'/inc/fungsi-iklan.php';

/*-------------------------------------------*
 *				navwalker
 *------------------------------------------*/
require_once( get_template_directory()  . '/inc/menu/admin-megamenu-walker.php');
require_once( get_template_directory()  . '/inc/menu/meagmenu-walker.php');
require_once( get_template_directory()  . '/inc/menu/mobile-navwalker.php');