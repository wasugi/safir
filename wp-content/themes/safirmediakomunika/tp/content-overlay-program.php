<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="ts-overlay-style mb-20">
		<div class="item">
			<div class="ts-post-thumb">
				<?php $categories = get_the_terms( $post->ID, 'jenis-program' );
						if( !empty($categories) ){
						foreach ($categories as $category){
						$term_link = get_term_link( $category );
						echo '<a class="post-cat ts-orange-bg" href="' . esc_url( $term_link ) . '">' . $category->name . '</a>';
						}}
				echo webane_content_image_url(); ?>
			</div>

			<div class="overlay-post-content">
				<div class="post-content">
				<?php the_title( sprintf( '<h3 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
						echo webane_content_meta_date(); ?>
				</div>
			</div>
		</div>
	</div>
</article>