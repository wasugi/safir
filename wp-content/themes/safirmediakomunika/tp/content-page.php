<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="global-title">', esc_url( get_permalink() ) ), '</h2>' ); 
			?>
			
		</header>

		<div class="post-content-area">
			
			<?php echo webane_single_post_image(); ?>
			<div class="entry-content">
				<p><?php the_content(); ?></p>
			</div>
		</div>

</article>