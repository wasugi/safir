<article id="post-<?php the_ID(); ?>" <?php post_class('style-list'); ?>>
	<div class="row">
		<header class="entry-header col-md-4 col-5">
			<?php $categories = get_the_category();
			foreach ($categories as $category){
			echo '<a class="post-cat ts-orange-bg" href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
			}
			if ( has_post_thumbnail() ) {
				echo webane_content_post_image(); 
			}
			else {
				echo webane_get_embedded_media( array('video','iframe') );
			}
			?>
		</header>

		<div class="post-content col-md-8 col-7">
			<?php the_title( sprintf( '<h3 class="post-title"><a href="%s" rel="bookmark" aria-label="Selengkapnya">', esc_url( get_permalink() ) ), '</a></h3>' );
				 echo webane_content_meta_date();
			?>
			<div class="post-content hidden-mobile">
				<?php the_excerpt(); ?>
			</div>
		</div>

		<footer class="entry-footer">
		</footer>
	</div>
</article>