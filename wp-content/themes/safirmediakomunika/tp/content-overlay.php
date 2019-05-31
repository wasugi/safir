<article id="post-<?php the_ID(); ?>" <?php post_class('content-overlay konten-video'); ?>>
	<?php if ( has_post_thumbnail() ) {
		echo '<header class="entry-header" ' .webane_image_background_style(). '>';
	}
	else {
		echo 
		'<header class="entry-header">
		'.webane_get_embedded_media( array('video','iframe') ).'
		';
	}
	?>
		<div class="entry-header-meta">
			<div class="category-name-list mb-20">
				<span>
					<?php $categories = get_the_category();
						foreach ($categories as $category){
						echo '<a class="post-cat" href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
						}
					?>
				</span>
			</div>
			<?php the_title( sprintf( '<h2 class="post-title"><a href="%s" rel="bookmark" aria-label="Selengkapnya">', esc_url( get_permalink() ) ), '</a></h2>' ); 
				echo webane_single_post_meta();
				?>
		</div>
	</header>
</article>