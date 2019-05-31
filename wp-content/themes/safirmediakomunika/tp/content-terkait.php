<div class="item">
	<?php $categories = get_the_category();
		foreach ($categories as $category){
		echo '<a class="post-cat ts-yellow-bg" href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';

		}
	?>
	<div class="ts-post-thumb">
		<a href="<?php echo esc_url( get_permalink() ); ?>">
			<img class="img-fluid" 
				src="<?php if ( has_post_thumbnail() ) {
				$thumbImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail');
				$thumbImgUrl = $thumbImg['0'];
				echo $thumbImgUrl;
				}
			?>" alt="<?php echo esc_html( get_the_title() ); ?>">
		</a>
	</div>
	<div class="post-content">
		<?php the_title( sprintf( '<h3 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );?>
		
		<span class="post-date-info">
			<i class="ane-clock"></i>
			<?php echo esc_html ( get_the_date('j F Y') ); ?>
		</span>
	</div>
</div>