<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="webane-service-content">
			<i class="<?= $icon = esc_attr (get_field('service_icon') ); ?>"></i>
			<?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
			<p><?= $sd = esc_attr (get_field('service_sd') ); ?></p>
	</div>
</article>
