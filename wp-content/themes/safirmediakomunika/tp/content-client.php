<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="item">
		<?php $url = esc_attr (get_field('website') );
		if( !empty( $url ) ):
		?>
		<a href="<?= $url; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" target="_blank">
			<img src="<?= webane_image_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
		</a>
	<?php endif; ?>
	</div><!-- /.item -->
</article>
