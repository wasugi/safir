<li class="isi-event">
<article id="post-<?php the_ID(); ?>" <?php post_class('post-content media'); ?>>
	<img class="d-flex sidebar-img" src="<?= webane_image_thumbnail_url_small(); ?>" alt="<?php echo esc_html( get_the_title() ); ?>">
		<div class="media-body">
			<?php the_title( sprintf( '<h4 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' );
				$provinsi = esc_attr (get_field('provinsi') );
						?>
				<ul class="post-meta-info">
					<li><i class="ane-location2"></i> <?= $provinsi; ?></li>
					<li><i class="ane-calendar"></i>
					<?php
					$mulai = ceil((strtotime(get_field('event_date')) - time())/(60*60*24));
					$akhir = ceil((strtotime(get_field('event_end')) - time())/(60*60*24));
					$k=1;
					if ($mulai > 0) {
							echo ''. $mulai .' hari lagi';
						}else if ($mulai == 0) {
							echo "berlangsung";
						}else {
							echo "Berlalu";
						}
					?>
					
					</li>
				</ul>
			
		</div>
</article>
</li>