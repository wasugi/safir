<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<img src="<?= webane_image_thumbnail_url(); ?>" alt="">
		<div class="post-content">
			<?php the_title( sprintf( '<h4><a href="%s" rel="bookmark" aria-label="Selengkapnya">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
			<p><?php echo esc_html( get_the_excerpt() ); ?></p>
		</div>
	</header>
</article>