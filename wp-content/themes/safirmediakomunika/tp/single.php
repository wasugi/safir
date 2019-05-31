<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header" <?= webane_image_background_style(); ?>>
		<div class="entry-header-meta">
			<div class="category-name-list mb-20">
				<span>
					<?php $categories = get_the_category();
						foreach ($categories as $category){
						echo '<a class="post-cat" href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
						}
					?>
				</span>
			</div>
			<?php the_title( sprintf( '<h2 class="post-title">', esc_url( get_permalink() ) ), '</h2>' ); 
				echo webane_single_post_meta();
				?>
		</div>
	</header>
	<div class="row mt-20">
		<div class="col-lg-9">
			<div class="entry-content">
				<div class="share-this">
					<?= fungsi_share_webane(); ?>
				</div>
				
				<?php the_content(); ?>
				
				<div class="post-navigation clearfix">
					<?= webane_prev_next_post_single(); ?>
				</div>
	
				<div class="comments-form">
					<?= fungsi_komen_facebook_webane(); ?>
				</div>
					<?php panggil_konten_terkait(); ?>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
</article>