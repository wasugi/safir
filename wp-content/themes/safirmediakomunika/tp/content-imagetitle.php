<article id="post-<?php the_ID(); ?>" <?php post_class('post-content media'); ?>>
	<img class="d-flex sidebar-img" src="<?= webane_image_thumbnail_url(); ?>" alt="<?php echo esc_html( get_the_title() ); ?>">
		<div class="media-body">
			<?php the_title( sprintf( '<h4 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' );?>
		</div>
</article>