<?php
function panggil_konten_terkait() {
	global $post; ?>
<div class="konten-terkait">
	<?php
		$custom_taxterms = wp_get_object_terms( $post->ID, 'category', array('fields' => 'ids') );
		// arguments
		$args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => 3, // you may edit this number
			'orderby' => 'rand',
			'tax_query' => array(
				array(
					'taxonomy' => 'category',
					'field' => 'id',
					'terms' => $custom_taxterms
				)
			),
			'post__not_in' => array ($post->ID),
		);
		$related_items = new WP_Query( $args ); ?>

		<h2 class="global-title mt-20">
			Tema Terkait
		</h2>
		<div class="most-populers owl-carousel">
			<?php if ($related_items->have_posts()) : ?>
				<?php while ( $related_items->have_posts() ) : $related_items->the_post();
					get_template_part( 'tp/content', get_post_format() );
				 endwhile; 
				 else :
				 echo 'Tidak ada konten terkait';
				 ?>
			<?php endif; wp_reset_query(); ?>
		</div>
</div>

<?php } ?>
