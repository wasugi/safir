<article id="post-<?php the_ID(); ?>" <?php post_class('konten-video'); ?>>
		<header class="entry-header">
			<?php 
			echo webane_get_embedded_media( array('video','iframe') );
			the_title( sprintf( '<h2 class="post-title lg">', esc_url( get_permalink() ) ), '</h2>' ); 
			echo webane_single_post_meta();
			?>
		</header>

		<div class="post-content-area">
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</div>

		<div class="post-navigation clearfix">
			<?= webane_prev_next_post_single(); ?>
		</div>
</article>