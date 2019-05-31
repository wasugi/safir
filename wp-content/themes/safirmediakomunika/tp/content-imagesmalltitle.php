<article id="post-<?php the_ID(); ?>" <?php post_class('post-content media'); ?>>
	<?php
	if ( has_post_thumbnail() ) {
		echo '<img class="d-flex sidebar-img" src="' .webane_image_thumbnail_url_small().'" alt="' . esc_html( get_the_title() ). '">';
	}
	else {
		echo '<div class="d-flex sidebar-video">
			'.webane_get_embedded_media( array('video','iframe') ).'
			</div>';
	}
	?>
	<div class="media-body">
			<?php the_title( sprintf( '<h4 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' );
				echo webane_content_meta_date();
			?>
		</div>
</article>