<?php
  
//Insert ads after second paragraph of single post content.
 
add_filter( 'the_content', 'webane_iklan_single_post_9' );
 
function webane_iklan_single_post_9( $content ) {
    $banner = esc_attr (get_field('ibp_img', 'option') );
    $url = esc_attr (get_field('ibp_url', 'option') );
	$nama = esc_attr (get_field('ibp_nama', 'option') );
    if( !empty($banner) ) {
	$ad_code = '<div class="post-banner">
				<a href="' .$url. '" target="_blank" alt="'. $nama .'" title="'. $nama .'">
				<img class="img-fluid" src="' .$banner. '" alt="'. $nama .'" title="'. $nama .'">
				</a>
				<div class="post-banner-info">Iklan Forbis <i class="ane-bell"></i></div>
				</div>';
	}
    if ( is_singular('post') && ! is_admin() ) {
        return prefix_insert_after_paragraph( $ad_code, 4, $content );
    }
     
    return $content;
}

add_filter( 'the_content', 'webane_iklan_single_post_taklim' );
 
function webane_iklan_single_post_taklim( $content ) {
    $banner = esc_attr (get_field('ibt_img', 'option') );
    $url = esc_attr (get_field('ibt_url', 'option') );
	$nama = esc_attr (get_field('ibt_nama', 'option') );
    if( !empty($banner) ) {
	$ad_code = '<div class="post-banner">
				<a href="' .$url. '" target="_blank" alt="'. $nama .'" title="'. $nama .'">
				<img class="img-fluid" src="' .$banner. '" alt="'. $nama .'" title="'. $nama .'">
				</a>
				<div class="post-banner-info">Iklan Forbis</div>
				</div>';
	}
    if ( is_singular('taklim') && ! is_admin() ) {
        return prefix_insert_after_paragraph( $ad_code, 10, $content );
    }
     
    return $content;
}
add_filter( 'the_content', 'webane_iklan_single_post_program' );
 
function webane_iklan_single_post_program( $content ) {
	$banner = esc_attr (get_field('ibpr_img', 'option') );
    $url = esc_attr (get_field('ibpr_url', 'option') );
	$nama = esc_attr (get_field('ibpr_nama', 'option') );
    if( !empty($banner) ) {
	$ad_code = '<div class="post-banner">
				<a href="' .$url. '" target="_blank" alt="'. $nama .'" title="'. $nama .'">
				<img class="img-fluid" src="' .$banner. '" alt="'. $nama .'" title="'. $nama .'">
				</a>
				<div class="post-banner-info">Iklan Forbis</div>
				</div>';
	}
    if ( is_singular('program') && ! is_admin() ) {
        return prefix_insert_after_paragraph( $ad_code, 10, $content );
    }
     
    return $content;
}
  
// Parent Function that makes the magic happen
  
function prefix_insert_after_paragraph( $insertion, $paragraph_id, $content ) {
    $closing_p = '</p>';
    $paragraphs = explode( $closing_p, $content );
    foreach ($paragraphs as $index => $paragraph) {
 
        if ( trim( $paragraph ) ) {
            $paragraphs[$index] .= $closing_p;
        }
 
        if ( $paragraph_id == $index + 1 ) {
            $paragraphs[$index] .= $insertion;
        }
    }
     
    return implode( '', $paragraphs );
}