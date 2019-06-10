<article id="post-<?php the_ID(); ?>" <?php post_class('ts-grid-box ts-grid-content box-home item'); ?>>
	<header class="entry-header">
		<?php $categories = get_the_category();
		foreach ($categories as $category){
		echo '<a class="post-cat ts-orange-bg" href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
		}
		echo webane_content_post_image(); ?>
	</header>

	<div class="post-content">
		<?php the_title( sprintf( '<h3 class="post-title"><a href="%s" rel="bookmark" aria-label="Selengkapnya">', esc_url( get_permalink() ) ), '</a></h3>' );
			 echo webane_load_times_ago();
		?>
	</div>

	<footer class="entry-footer">
	</footer>
</article>
