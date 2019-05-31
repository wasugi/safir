<article id="post-<?php the_ID(); ?>" <?php post_class('ts-grid-box ts-grid-content box-home item'); ?>>
	<header class="entry-header">
		<?php 	$categories = get_the_terms( $post->ID, 'tema-taklim' );
				if( !empty($categories) ){
				foreach ($categories as $category){
				$term_link = get_term_link( $category );
				echo '<a class="post-cat ts-orange-bg" href="' . esc_url( $term_link ) . '">' . $category->name . '</a>';
				}}
		echo webane_content_post_image(); ?>
	</header>

	<div class="post-content">
		<?php the_title( sprintf( '<h3 class="post-title"><a href="%s" rel="bookmark" aria-label="Selengkapnya">', esc_url( get_permalink() ) ), '</a></h3>' );
			 echo webane_content_meta_date();
		?>
	</div>

	<footer class="entry-footer">
	</footer>
</article>