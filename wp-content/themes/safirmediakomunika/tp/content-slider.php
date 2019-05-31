<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="item" <?= webane_image_background_style(); ?>>
		<?php $categories = get_the_category();
			foreach ($categories as $category){
			echo '<a class="post-cat ts-orange-bg" href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
			}
		?>
		
		<div class="overlay-post-content">
			<div class="post-content">
				<?php the_title( sprintf( '<h2 class="post-title lg"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
				echo webane_content_meta_date(); ?>
			</div>
		</div>
	</header>
</article>