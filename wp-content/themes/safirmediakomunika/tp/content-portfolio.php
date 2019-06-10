<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="project-block-two">
		<div class="inner-box">
			<div class="image">
				<?php if ( has_post_thumbnail() ) {
					echo '<img src="'.webane_image_thumbnail_url().'" alt="" />';
				}
				else {
					echo webane_get_embedded_media( array('video','iframe') );
				}
				?>
				<div class="overlay-two">
					<div class="overlay-two-inner">
						<?php the_title( sprintf( '<h4><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
						<?php $categories = get_the_terms( $post->ID, 'kategori' );
							if( !empty($categories) ){
							foreach ($categories as $category){
							$term_link = get_term_link( $category );
							echo '<div class="text"><a href="' . esc_url( $term_link ) . '">' . $category->name . '</a></div>';
							}}
						?>
						<a href="<?php echo esc_url( get_permalink() ); ?>" class="arrow-box"><i class="ane-eye"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</article>
