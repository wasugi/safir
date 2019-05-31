<?php
function Webane_Custom_Post_Type() {
	// service
	$labels = array(
		'name' 				=> 'Service',
		'singular_name' 	=> 'Service',
		'menu_name'			=> 'Service',
		'name_admin_bar'	=> 'Service',
		'add_new_item'          => 'Tambah Service Baru',
		'add_new'          => 'Tambah Service',
	);
	$args = array(
		'labels'			=> $labels,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'capability_type'	=> 'page',
		'public'            => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'has_archive'       => true,
		'hierarchical'		=> true,
		'menu_position'		=> 10,
		'menu_icon'			=> 'dashicons-heart',
		'supports'			=> array( 'title', 'editor', 'thumbnail')
	);
	register_post_type( 'service', $args );
	// portfolio
	$labels = array(
		'name' 				=> 'Portfolio',
		'singular_name' 	=> 'Portfolio',
		'menu_name'			=> 'Portfolio',
		'name_admin_bar'	=> 'Portfolio',
		'add_new_item'          => 'Tambah Portfolio Baru',
		'add_new'          => 'Tambah Portfolio',
		'featured_image'    => 'Image Portfolio',
		'set_featured_image'   => 'Set Portfolio Image',
		'remove_featured_image'   => 'Set Portfolio Image',
		'use_featured_image'   => 'Set Portfolio Image',
		
	);
	$args = array(
		'labels'			=> $labels,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'capability_type'	=> 'post',
		'public'            => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'has_archive'       => true,
		'hierarchical'		=> true,
		'menu_position'		=> 11,
		'menu_icon'			=> 'dashicons-art',
		'supports'			=> array( 'title', 'editor', 'thumbnail')
	);
	register_post_type( 'portfolio', $args );
	// Team
	$labels = array(
		'name' 				=> 'Team',
		'singular_name' 	=> 'Team',
		'menu_name'			=> 'Team',
		'name_admin_bar'	=> 'Team',
		'add_new_item'          => 'Tambah Team Baru',
		'add_new'          => 'Tambah Team',
		'featured_image'    => 'Photo Team',
		'set_featured_image'   => 'Set Photo Team',
		'remove_featured_image'   => 'Remove Photo Team',
		'use_featured_image'   => 'Use Photo Team',
	);
	$args = array(
		'labels'			=> $labels,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'capability_type'	=> 'post',
		'public'            => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'has_archive'       => true,
		'hierarchical'		=> true,
		'menu_position'		=> 12,
		'menu_icon'			=> 'dashicons-businessman',
		'supports'			=> array( 'title', 'editor', 'thumbnail')
	);
	register_post_type( 'team', $args );
	// Client
	$labels = array(
		'name' 				=> 'Client',
		'singular_name' 	=> 'Client',
		'menu_name'			=> 'Client',
		'name_admin_bar'	=> 'Client',
		'add_new_item'          => 'Tambah Client Baru',
		'add_new'          => 'Tambah Client',
		'featured_image'    => 'Client Logo',
		'set_featured_image'   => 'Set Client Logo',
		'remove_featured_image'   => 'Remove Client Logo',
		'use_featured_image'   => 'Use Client Logo',
	);
	$args = array(
		'labels'			=> $labels,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'capability_type'	=> 'post',
		'public'            => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'has_archive'       => true,
		'hierarchical'		=> true,
		'menu_position'		=> 13,
		'menu_icon'			=> 'dashicons-admin-multisite',
		'supports'			=> array( 'title', 'thumbnail')
	);
	register_post_type( 'client', $args );
}
add_action( 'init', 'Webane_Custom_Post_Type' );

//change title
function webane_change_title_text( $title ){
     $screen = get_current_screen();

     if  ( 'client' == $screen->post_type ) {
          $title = 'Name of Your Client';
     }
	 if  ( 'portfolio' == $screen->post_type ) {
          $title = 'Portfolio Title';
     }
	 if  ( 'team' == $screen->post_type ) {
          $title = 'Full Name of Your Team';
     }
	 if  ( 'service' == $screen->post_type ) {
          $title = 'Service Title';
     }
	 
     return $title;
}
  
add_filter( 'enter_title_here', 'webane_change_title_text' );
// Custom Posts taxonomies
function webane_taxonomies() {

	$labels = array(
		'name' => 'Kategori',
		'singular_name' => 'Kategori',
		'search_items' => 'Cari Kategori',
		'all_items' => 'Semua Kategori',
		'parent_item' => 'Parent Kategori',
		'parent_item_colon' => 'Parent Kategori:',
		'edit_item' => 'Edit Kategori',
		'update_item' => 'Update Kategori',
		'add_new_item' => 'Tambah Kategori',
		'new_item_name' => 'Kategori Baru',
		'menu_name' => 'Kategori'
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'kategori' )
	);

	register_taxonomy('kategori', array('portfolio'), $args);
	//keahlian
		$labels = array(
		'name' => 'Keahlian',
		'singular_name' => 'Keahlian',
		'search_items' => 'Cari Keahlian',
		'all_items' => 'Semua Keahlian',
		'parent_item' => 'Parent Keahlian',
		'parent_item_colon' => 'Parent Keahlian:',
		'edit_item' => 'Edit Keahlian',
		'update_item' => 'Update Keahlian',
		'add_new_item' => 'Tambah Keahlian',
		'new_item_name' => 'Keahlian Baru',
		'menu_name' => 'Keahlian'
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'keahlian' )
	);

	register_taxonomy('keahlian', array('team'), $args);
}

add_action( 'init' , 'webane_taxonomies' );

// add Custom Posts to feeds
function webane_custom_post_feed( $query ) {
        if ( $query->is_feed() )
            $query->set( 'post_type', array( 'post', 'service', 'portfolio', 'team', 'client' ) ); 
        return $query;
}
add_filter( 'pre_get_posts', 'webane_custom_post_feed' );