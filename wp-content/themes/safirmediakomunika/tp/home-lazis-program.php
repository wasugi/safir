<section>
	<div class="program-kerja">
		<div class="container">
			<div class="row">
				<?php
					$judul = get_field('program_title','option');
					if( !empty( $judul ) ):
				?>
				<div class="judul-arsip">
					<?php
					$subjudul = esc_attr (get_field('program_subtitle','option') );
					if( !empty( $subjudul ) ):
					?>
					<span><?= $subjudul; ?></span>
					<?php endif; ?>
					<h2><?= $judul; ?></h2>
				</div>
				<?php endif; ?>
			</div>
			<div class="row">
				<?php $the_query = new WP_Query(array('post_type' => 'program', 'posts_per_page' => 4 )); 
						while ( $the_query->have_posts() ) : $the_query->the_post();
						echo '<div class="col-md-3 p-1">';
						get_template_part( 'tp/content', 'program' );		
						echo '</div>';		
					endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
</section>