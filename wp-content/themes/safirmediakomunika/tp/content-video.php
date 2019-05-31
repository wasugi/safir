<article id="post-<?php the_ID(); ?>" <?php post_class('konten-video'); ?>>
	<header class="entry-header">
		<?php $categories = get_the_category();
		foreach ($categories as $category){
		echo '<a class="post-cat ts-orange-bg" href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
		}
		echo webane_get_embedded_media( array('video','iframe') ); ?>
	</header>

	<div class="overlay-post-content">
		<div class="post-content">
			<?php the_title( sprintf( '<h3 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
			 echo webane_content_meta_date();
			?>
		</div>
	</div>

	<footer class="entry-footer">
	</footer>
</article>