<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header" <?= webane_image_background_style(); ?>>
		<div class="entry-header-meta">
			<div class="category-name-list mb-20">
				<span>
					<?php $categories = get_the_terms( $post->ID, 'kategori' );
						if( !empty($categories) ){
						foreach ($categories as $category){
						$term_link = get_term_link( $category );
						echo '<a class="post-cat" href="' . esc_url( $term_link ) . '">' . $category->name . '</a>';
						}}
					?>

				</span>
			</div>
			<?php the_title( sprintf( '<h2 class="post-title">', esc_url( get_permalink() ) ), '</h2>' );
				$waktu = esc_attr (get_field('portfolio_date') );
			?>
			<ul class="post-meta-info">
				<li><i class="ane-clock"></i><?= $waktu ?></li>
				<?php
					$layout = esc_attr (get_field('portfolio_layout') );
					if( !empty( $layout ) ):
				 ?>
				<li><i class="ane-display"></i><?= $layout ?></li>
				<?php
				endif;
				$version = esc_attr (get_field('portfolio_version') );
				if( !empty( $version ) ):
				 ?>
				 <li><i class="ane-cog"></i>Version: <?= $version ?></li>
			 <?php endif;
			 $clients = get_field('portfolio_client');
			 if( $clients ):
				 foreach( $clients as $client ):
			 ?>
			 <li><i class="ane-home3"></i>
	    	<a href="<?php echo $clients = get_field('website', $client->ID ); ?>" target="_blank"><?php echo get_the_title( $client->ID ); ?></a>
	    </li>
		<?php endforeach; endif; ?>
				<li><i class="ane-eye"></i><?php echo webane_load_post_views(get_the_ID()); ?></li>
			</ul>
		</div>
	</header>
	<div class="row mt-20">
		<div class="col-lg-9">
			<div class="entry-content">
				<div class="share-this">
					<?php echo webane_share_this_post();
					$images = get_field('gallery');
					$thumbnail = 'thumbnail';
					$full = 'full';
					$medium = 'medium';

					?>
				</div>
				<div class="gallery-img">
					<div class="row">
					<?php $counter = -1; foreach( $images as $image ):
					$counter++ ?>

						<div class="col-lg-3 col-md-4 col-sm-4 col-6 p-0">
							<a href="<?php echo $image['sizes']['large']; ?>" class="gallery-popup">
								<img class="img-fluid" src="<?php echo $image['sizes']['medium']; ?>" alt="">
							</a>
						</div>
					<?php endforeach; ?>
					</div>
				</div>
				<?php the_content(); ?>

				<div class="post-navigation clearfix">
					<?= webane_prev_next_post(); ?>
				</div>

				<div class="comments-form">
					<?= webane_load_facebook_comment(); ?>
				</div>
					<?php panggil_konten_terkait(); ?>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
</article>
