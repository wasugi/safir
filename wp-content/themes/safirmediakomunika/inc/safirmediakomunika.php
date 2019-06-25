<?php
// load css and js
function webane_load_css_and_js(){
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
	wp_enqueue_style( 'Google-Fonts', 'https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i' );
	wp_enqueue_style( 'FontAne', get_template_directory_uri() . '/css/FontAne.css');
	wp_enqueue_style( 'ionicons', 'https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.0/css/ionicons.min.css');
	wp_enqueue_style( 'magnific-popup','https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css' );
	wp_enqueue_style( 'OwlCarouse','https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css' );
	wp_enqueue_style( 'plugins-css', get_template_directory_uri() . '/css/plugins.css' );
	wp_enqueue_style( 'safirmediakomunika', get_template_directory_uri() . '/css/safirmediakomunika.css');
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css');

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery' ,'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );

	//wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr-2.8.3.min.js' );
	//wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' );
	wp_enqueue_script( 'magnific', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js' );
	wp_enqueue_script( 'OwlCarousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js' );
	wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
	wp_enqueue_script( 'plugins-js', get_template_directory_uri() . '/js/plugins.js' );
	wp_enqueue_script( 'map', get_template_directory_uri() . '/js/gmap.js', array('jquery'), true );
	wp_enqueue_script( 'googlemap', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBddpckvgjXaGHbHLkaPaCVQh7A0j44lj0', array('jquery'), true );

	wp_enqueue_script( 'lazis', get_template_directory_uri() . '/js/main.js');

}
add_action( 'wp_enqueue_scripts', 'webane_load_css_and_js' );

/*
	1. Google
*/
function webane_google_map_init() {

	acf_update_setting('google_api_key', 'AIzaSyBddpckvgjXaGHbHLkaPaCVQh7A0j44lj0');
}

add_action('acf/init', 'webane_google_map_init');


/*
	2. Share and Comments and social media
*/
function webane_load_social_media() {
 global $webane;
 $whatsapp = esc_attr (get_field('no_whatsapp', 'option') );
 $facebook = esc_attr (get_field('id_facebook', 'option') );
 $instagram = esc_attr (get_field('id_instagram', 'option') );
 $twitter = esc_attr (get_field('id_twitter', 'option') );
 $youtube = esc_attr (get_field('link_youtube_chanel', 'option') );
?>
<div class="social-links">
<ul>
		<?php if( !empty( $whatsapp ) ): ?>
			<li class="whatsapp"><a href="https://wa.me/62<?php echo $whatsapp; ?>" class="whatsapp"  data-tooltip="Contact WhatsApp" target="_blank"><i class="ane-whatsapp"></i></a></li>
		<?php endif; if( !empty( $facebook ) ): ?>
			<li class="facebook"><a href="https://facebook.com/<?php echo $facebook; ?>" class="facebook"  data-tooltip="Facebook" target="_blank"><i class="ane-facebook"></i></a></li>
		<?php endif; if( !empty( $instagram ) ): ?>
			<li class="instagram"><a href="https://instagram.com/<?php echo $instagram; ?>" class="instagram" data-tooltip="Instagram" target="_blank"><i class="ane-instagram"></i></a></li>
		<?php endif; if( !empty( $twitter ) ): ?>
			<li class="twitter"><a href="https://twitter.com/<?php echo $twitter; ?>" class="twitter" data-tooltip="Twitter" target="_blank"><i class="ane-twitter"></i></a></li>
		<?php endif; if( !empty( $youtube ) ): ?>
			<li class="youtube"><a href="<?php echo $youtube; ?>" class="youtube" data-tooltip="Youtube" target="_blank"><i class="ane-youtube"></i></a></li>
		<?php endif; ?>
	</ul>
</div>
<?php
}

function webane_share_this_post()
{
        $content .= '<div class="social-share-buttons mt-20">';

        $title = get_the_title();
        $permalink = get_permalink($post->ID);

        $twitterHandler = (get_option('twitter_handler') ? '&amp;via='.esc_attr(get_option('twitter_handler')) : '');

        $twitter = 'https://twitter.com/intent/tweet?text=Hey! Read this: '.$title.'&amp;url='.$permalink.$twitterHandler.'';
        $facebook = 'https://www.facebook.com/sharer/sharer.php?u='.$permalink;
        $google = 'https://plus.google.com/share?url='.$permalink;
		$whatsapp = 'whatsapp://send?text=Share:'.$permalink;
		$linkedin = 'http://www.linkedin.com/shareArticle?mini=true&url='.$permalink;

        $content .= '<ul>';
		$content .= '<li>
		<div class="fb-like" data-href="'.$permalink.'" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true"></div></li>';
		$content .= '<li><div class="fb-share-button" data-href="'.$permalink.'" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$permalink.'" class="fb-xfbml-parse-ignore">Share</a></div></li>';
        $content .= '<li><a class="twitter" href="'.$twitter.'" target="_blank" rel="nofollow"><i class="ane-twitter"></i></a></li>';
        $content .= '<li><a class="whatsapp" href="'.$whatsapp.'" target="_blank" rel="nofollow"><i class="ane-whatsapp"></i></a></li>';
        $content .= '<li><a class="linkedin" href="'.$linkedin.'" target="_blank" rel="nofollow"><i class="ane-linkedin"></i></a></li>';
        $content .= '</ul></div><!-- .webane-share -->';

        return $content;
}

function webane_load_facebook_comment()
{
	$content .='
	<div class="fb-comments" data-href="'.get_permalink($post->ID).'" data-order-by="social" data-colorscheme="light" data-width="100%" data-numposts="5">
	</div>';
	return $content;
}

/*
	3. Posts
*/
// excerpt
function new_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'new_excerpt_length', 20 );
function change_excerpt( $text )
{
    $pos = strrpos( $text, '[');
    if ($pos === false)
    {
        return $text;
    }

    return rtrim (substr($text, 0, $pos) );
}
add_filter('get_the_excerpt', 'change_excerpt');
//breadcrumb
function webane_load_breadcrumbs()
{
    // Set variables for later use
    $here_text        = __( 'You are currently here!' );
    $home_link        = home_url('/');
    $home_text        = __( '<i class="ane-home3"></i>' );
    $link_before      = '<li class="parent-page">';
    $link_after       = '</li>';
    $link_attr        = ' rel="v:url" property="v:title"';
    $link             = $link_before . '<a' . $link_attr . ' href="%1$s">%2$s</a>' . $link_after;
    $delimiter        = '';              // Delimiter between crumbs
    $before           = '<li>'; // Tag before the current crumb
    $after            = '</li>';                // Tag after the current crumb
    $page_addon       = '';                       // Adds the page number if the query is paged
    $breadcrumb_trail = '';
    $category_links   = '';

    /**
     * Set our own $wp_the_query variable. Do not use the global variable version due to
     * reliability
     */
    $wp_the_query   = $GLOBALS['wp_the_query'];
    $queried_object = $wp_the_query->get_queried_object();

    // Handle single post requests which includes single pages, posts and attatchments
    if ( is_singular() )
    {
		$post_object = sanitize_post( $queried_object );
		$title          = apply_filters( 'the_title', $post_object->post_title );
        $parent         = $post_object->post_parent;
        $post_type      = $post_object->post_type;
        $post_id        = $post_object->ID;
        //$post_link      = $before . $title . $after;
        $parent_string  = '';
        $post_type_link = '';

        if ( 'post' === $post_type )
        {
            // Get the post categories
            $categories = get_the_category( $post_id );
            if ( $categories ) {
                // Lets grab the first category
                $category  = $categories[0];

                $category_links = get_category_parents( $category, true, $delimiter );
                $category_links = str_replace( '<a',   $link_before . '<a' . $link_attr, $category_links );
                $category_links = str_replace( '</a>', '</a>' . $link_after,             $category_links );
            }
        }

        if ( !in_array( $post_type, ['post', 'page', 'attachment'] ) )
        {
            $post_type_object = get_post_type_object( $post_type );
            $archive_link     = esc_url( get_post_type_archive_link( $post_type ) );

            $post_type_link   = sprintf( $link, $archive_link, $post_type_object->labels->singular_name );
        }
        // Get post parents if $parent !== 0
        if ( 0 !== $parent )
        {
            $parent_links = [];
            while ( $parent ) {
                $post_parent = get_post( $parent );

                $parent_links[] = sprintf( $link, esc_url( get_permalink( $post_parent->ID ) ), get_the_title( $post_parent->ID ) );

                $parent = $post_parent->post_parent;
            }
            $parent_links = array_reverse( $parent_links );
            $parent_string = implode( $delimiter, $parent_links );
        }
        // Lets build the breadcrumb trail
        if ( $parent_string ) {
            $breadcrumb_trail = $parent_string . $delimiter . $post_link;
        } else {
            $breadcrumb_trail = $post_link;
        }
        if ( $post_type_link )
            $breadcrumb_trail = $post_type_link . $delimiter . $breadcrumb_trail;
        if ( $category_links )
            $breadcrumb_trail = $category_links . $breadcrumb_trail;
    }
    // Handle archives which includes category-, tag-, taxonomy-, date-, custom post type archives and author archives
    if( is_archive() )
    {
        if (    is_category()
             || is_tag()
             || is_tax()
        ) {
            // Set the variables for this section
            $term_object        = get_term( $queried_object );
            $taxonomy           = $term_object->taxonomy;
            $term_id            = $term_object->term_id;
            $term_name          = $term_object->name;
            $term_parent        = $term_object->parent;
            $taxonomy_object    = get_taxonomy( $taxonomy );
            $current_term_link  = $before . $taxonomy_object->labels->singular_name . ': ' . $term_name . $after;
            $parent_term_string = '';

            if ( 0 !== $term_parent )
            {
                // Get all the current term ancestors
                $parent_term_links = [];
                while ( $term_parent ) {
                    $term = get_term( $term_parent, $taxonomy );

                    $parent_term_links[] = sprintf( $link, esc_url( get_term_link( $term ) ), $term->name );

                    $term_parent = $term->parent;
                }

                $parent_term_links  = array_reverse( $parent_term_links );
                $parent_term_string = implode( $delimiter, $parent_term_links );
            }

            if ( $parent_term_string ) {
                $breadcrumb_trail = $parent_term_string . $delimiter . $current_term_link;
            } else {
                $breadcrumb_trail = $current_term_link;
            }

        } elseif ( is_author() ) {

            $breadcrumb_trail = __( 'Author archive for ') .  $before . $queried_object->data->display_name . $after;

        } elseif ( is_date() ) {
            // Set default variables
            $year     = $wp_the_query->query_vars['year'];
            $monthnum = $wp_the_query->query_vars['monthnum'];
            $day      = $wp_the_query->query_vars['day'];

            // Get the month name if $monthnum has a value
            if ( $monthnum ) {
                $date_time  = DateTime::createFromFormat( '!m', $monthnum );
                $month_name = $date_time->format( 'F' );
            }

            if ( is_year() ) {

                $breadcrumb_trail = $before . $year . $after;

            } elseif( is_month() ) {

                $year_link        = sprintf( $link, esc_url( get_year_link( $year ) ), $year );

                $breadcrumb_trail = $year_link . $delimiter . $before . $month_name . $after;

            } elseif( is_day() ) {

                $year_link        = sprintf( $link, esc_url( get_year_link( $year ) ),             $year       );
                $month_link       = sprintf( $link, esc_url( get_month_link( $year, $monthnum ) ), $month_name );

                $breadcrumb_trail = $year_link . $delimiter . $month_link . $delimiter . $before . $day . $after;
            }

        } elseif ( is_post_type_archive() ) {

            $post_type        = $wp_the_query->query_vars['post_type'];
            $post_type_object = get_post_type_object( $post_type );

            $breadcrumb_trail = $before . $post_type_object->labels->singular_name . $after;

        }
    }
    if ( is_search() ) {
        $breadcrumb_trail = __( 'Pencarian untuk: ' ) . $before . get_search_query() . $after;
    }
    if ( is_404() ) {
        $breadcrumb_trail = $before . __( 'Error 404' ) . $after;
    }
    if ( is_paged() ) {
        $current_page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' );
        $page_addon   = $before . sprintf( __( ' ( Page %s )' ), number_format_i18n( $current_page ) ) . $after;
    }
    $breadcrumb_output_link  = '';
    $breadcrumb_output_link .= '<ol class="breadcrumb">';
    if (    is_home()
         || is_front_page()
    ) {
        // Do not show breadcrumbs on page one of home and frontpage
        if ( is_paged() ) {
            $breadcrumb_output_link .= '<li class="parent-page"> <a href="' . $home_link . '">' . $home_text . '</a></li>';
            $breadcrumb_output_link .= $page_addon;
        }
    } else {
        $breadcrumb_output_link .= '<li><a href="' . $home_link . '" rel="v:url" property="v:title">' . $home_text . '</a></li>';
        $breadcrumb_output_link .= $delimiter;
        $breadcrumb_output_link .= $breadcrumb_trail;
        $breadcrumb_output_link .= $page_addon;
    }
    $breadcrumb_output_link .= '</ol><!-- .breadcrumbs -->';

    return $breadcrumb_output_link;
}
// paginasi
function webane_load_post_pagination( \WP_Query $wp_query = null, $echo = true ) {
	if ( null === $wp_query ) {
		global $wp_query;
	}
	$pages = paginate_links( [
			'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
			'format'       => '?paged=%#%',
			'current'      => max( 1, get_query_var( 'paged' ) ),
			'total'        => $wp_query->max_num_pages,
			'type'         => 'array',
			'show_all'     => false,
			'end_size'     => 3,
			'mid_size'     => 1,
			'prev_next'    => true,
			'prev_text'    => __( '<i class="ane ane-chevron-left"></i>' ),
			'next_text'    => __( '<i class="ane ane-chevron-right"></i>' ),
			'add_args'     => false,
			'add_fragment' => ''
		]
	);
	if ( is_array( $pages ) ) {
		$pagination = '<div class="pagination-area mt-50"><ul>';
		foreach ( $pages as $page ) {
			$pagination .= '<li>' . str_replace( 'webane', 'webane', $page ) . '</li>';
		}
		$pagination .= '</ul></div>';
		if ( $echo ) {
			echo $pagination;
		} else {
			return $pagination;
		}
	}
	return null;
}

//box author

function webane_author_info_box( $content ) {

	global $post;

	if ( is_single() && isset( $post->post_author ) ) {

	$display_name = get_the_author_meta( 'display_name', $post->post_author );
	if ( empty( $display_name ) )
	$display_name = get_the_author_meta( 'nickname', $post->post_author );
	$user_description = get_the_author_meta( 'user_description', $post->post_author );
	$user_website = get_the_author_meta('url', $post->post_author);
	$user_posts = get_author_posts_url( get_the_author_meta( 'ID' , $post->post_author));

	if ( ! empty( $display_name ) )

	$author_details = '<p class="author_name">About ' . $display_name . '</p>';

	if ( ! empty( $user_description ) )

	$author_details .= '<p class="author_details">' . get_avatar( get_the_author_meta('user_email') , 90 ) . nl2br( $user_description ). '</p>';

	$author_details .= '<p class="author_links"><a href="'. $user_posts .'">View all posts by ' . $display_name . '</a>';

	if ( ! empty( $user_website ) ) {

	$author_details .= ' | <a href="' . $user_website .'" target="_blank" rel="nofollow">Website</a></p>';

	} else {
	$author_details .= '</p>';
	}

$content = $content . '<footer class="author_bio_section" >' . $author_details . '</footer>';
}
return $content;
}
add_action( 'the_content', 'webane_author_info_box' );
remove_filter('pre_user_description', 'wp_filter_kses');

// next and prev posts
function webane_prev_next_post()
{
	$prev_post = get_previous_post();
	$prev_thumbImg = wp_get_attachment_image_src( get_post_thumbnail_id($prev_post->ID), 'thumbnail');
	$prev_img = $thumbImg['0'];
	$next_post = get_next_post();
	$next_thumbImg = wp_get_attachment_image_src( get_post_thumbnail_id($next_post->ID), 'thumbnail');
	$next_img = $thumbImg['0'];
    $next_title = esc_html( get_the_title($next_post->ID) );
    $prev_title = esc_html( get_the_title($prev_post->ID) );

	if (!empty( $prev_post )){
	$content .= '<div class="post-previous float-left">
					<a href="'. $prev_post->guid .'">';
	$content .= '<span>Sebelumnya</span>
					<p>'. $prev_post->post_title. '</p>
					</a>
				</div>';
	}

	if (!empty( $next_post )) {
	$content .= '<div class="post-next float-right">
					<a href="'. get_permalink( $next_post->ID ) .'">';
	$content .= '<span>Sesudahnya</span>
					<p>'. $next_post->post_title. '</p>
					</a>
				</div>';
	}
	return $content;
}
// times ago
function times_ago($seconds = 1, $time=false){
	$time = "";
	$d = $seconds;
	//$seconds = (int)strtotime($seconds);
		if ( ! is_numeric($seconds)) $seconds = 1;
		if ( ! is_numeric($time)) $time = current_time('timestamp', $gmt = 0);
		//if ( ! is_numeric($time)) $time = time()+25200;
		if ($time <= $seconds) $seconds = 1;
		else $seconds = $time - $seconds;
		$str = '';
		$years = floor($seconds / 31536000);
		$months = floor($seconds / 2628000);
		$weeks = floor($seconds / 604800);
		$days = floor($seconds / 86400);
		$hours = floor($seconds / 3600);
	    $minutes = floor($seconds / 60);
		if ($year > 5) :
			$str = date_i18n( get_option('date_format'), strtotime(get_the_time("Y-m-d")));
			if($time) :
				$str .= " ". esc_html(get_the_time( )) ;
			endif;
		elseif ($years > 0) :
			$str =  sprintf( _n( '%s tahun lalu', '%s tahun lalu', $years, 'musi' ), $years );
		elseif ($months > 0) :
			$str =  sprintf( _n( '%s bulan lalu', '%s bulan lalu', $months, 'musi' ), $months );
		elseif ($weeks > 0) :
			$str =  sprintf( _n( '%s minggu lalu', '%s minggu lalu', $weeks, 'musi' ), $weeks );
		elseif ($days > 0) :
			$str =  sprintf( _n( '%s hari lalu', '%s hari lalu', $days, 'musi' ), $days );
		elseif ($hours > 0) :
			$str =  sprintf( _n( '%s jam lalu', '%s jam lalu', $hours, 'musi' ), $hours );
		elseif ($minutes > 0) :
			$str =  sprintf( _n( '%s menit lalu', '%s menit lalu', $minutes, 'musi' ), $minutes );
		else :
			$str =  sprintf( _n( '%s detik lalu', '%s detik lalu', $seconds, 'musi' ), $seconds );
		endif;
	return (trim($str));
}

// meta post

function webane_single_post_meta()
{
	$display_name = get_the_author_meta( 'display_name', $post->post_author );
	if ( empty( $display_name ) )
	$display_name = get_the_author_meta( 'nickname', $post->post_author );
	$waktu = get_the_date('j F Y');

    return '
	<ul class="post-meta-info">
		<li class="author">'. get_avatar( get_the_author_meta('user_email') , 90 ) . nl2br( $display_name ). '</li>
		<li><i class="ane-clock"></i> '. $waktu .'</li>
		<li><i class="ane-eye"></i>' . webane_load_post_views(get_the_ID()).'</li>
	</ul>
	';
}

function webane_load_times_ago()
{
	$timestamp = esc_attr( get_the_time( 'U' ) );

    return '
	<div class="post-meta-info">
		<i class="ane-clock"></i>
		'. times_ago($timestamp) . '
	</div>
	';
}
// jumlah view

function webane_count_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
// track post views
function webane_tract_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;
    }
    webane_count_post_views($post_id);
}
add_action( 'wp_head', 'webane_tract_post_views');

function webane_load_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
/*
	4. Media Video and images
*/
//embeded video
function webane_get_embedded_media($type = array())
{
    $content = do_shortcode(apply_filters('the_content', get_the_content()));
    $embed = get_media_embedded_in_content($content, $type);

    if (in_array('audio', $type)):
        $output = str_replace('?visual=true', '?visual=false', $embed[0]); else:
        $output = $embed[0];
    endif;

    return $output;
}

function webane_single_post_image()
{
	if ( has_post_thumbnail() ) {
	$thumbImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium');
	$imgurl = $thumbImg['0'];
	$imgcaption = get_post(get_post_thumbnail_id())->post_content;
	$posturl .= esc_html( get_permalink($post->ID) );
	$posttitle .= esc_html( get_the_title($post->ID) );
    }
	return '
	<div class="post-media post-featured-image">
		<a href="'. $posturl .'" aria-label="Selengkapnya '. $posttitle .'">
			<img src="'. $imgurl .'" title="'. $posttitle .'" alt="'. $posttitle .'">
		</a>
		<div class="image-caption">'. $imgcaption .'</div>
	</div>
	';
}
function webane_content_post_image()
{
	if ( has_post_thumbnail() ) {
	$thumbImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium');
	$imgurl = $thumbImg['0'];
	$posturl .= get_permalink();
	$imgalt = esc_html( get_the_title($post->ID) );
    }
	return '
	<div class="ts-post-thumb">
		<a href="'. $posturl .'" aria-label="Selengkapnya '. $imgalt .'">
			<img class="img-fluid" src="'. $imgurl .'" title="'. $imgalt .'" alt="'. $imgalt .'">
		</a>
	</div>
	';
}
function webane_content_image_url()
{
	if ( has_post_thumbnail() ) {
	$thumbImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium');
	$imgurl = $thumbImg['0'];
	$posturl = get_permalink();
    $imgalt = esc_html( get_the_title($post->ID) );
	}
	return '
		<a href="'. $posturl .'" aria-label="Read more '. $imgalt .'">
			<img class="img-fluid" src="'. $imgurl .'" alt="'.$imgalt.'" title="'.$imgalt.'">
		</a>
	';
}
function webane_image_background_style ()
{
	if ( has_post_thumbnail() ) {
	$thumbImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium');
	$imgurl = $thumbImg['0'];
	}
	return '
			style="background-image:url('. $imgurl .')";
	';
}
function webane_image_thumbnail_url ()
{
	if ( has_post_thumbnail() ) {
	$thumbImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail');
	$imgurl = $thumbImg['0'];
	}
	return $imgurl;
}
function webane_image_thumbnail_url_small ()
{
	if ( has_post_thumbnail() ) {
	$thumbImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'verysmall');
	$imgurl = $thumbImg['0'];
	}
	return $imgurl;
}
