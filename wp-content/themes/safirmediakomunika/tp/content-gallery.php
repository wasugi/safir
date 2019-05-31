<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="ts-post-thumb">
		<?php 
			echo webane_content_image_url();
			$categories = get_the_category();
			foreach ($categories as $category){
			echo '<a class="post-cat" href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
			}
		?>
	</header>
			
	<div class="post-content">
		<?php the_title( sprintf( '<h3 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
		echo webane_content_meta_date();
		?>
	</div>
</article>