<?php
	$Target = esc_attr (get_field('donasi_target') );
	$Button = esc_attr (get_field('donasi_button') );
	$Targetoutput = $Target;$targetdecimal = number_format( $Targetoutput , 0 , '.' , ',' );
	$Terkumpul = esc_attr (get_field('donasi_terkumpul') );
	$Terkumpuloutput = $Terkumpul;$Terkumpuldecimal = number_format( $Terkumpuloutput , 0 , '.' , ',' );
	$percent = round ( ( $Terkumpul / $Target ) * 100 );
	
	$days = ceil((strtotime(get_field('donasi_waktu')) - time())/(60*60*24));
	$k = 1;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header" <?= webane_image_background_style(); ?>>
		<div class="entry-header-meta">
			<div class="category-name-list mb-20">
				<span>
					<?php $categories = get_the_terms( $post->ID, 'kategori-ziswaf' );
						if( !empty($categories) ){
						foreach ($categories as $category){
						$term_link = get_term_link( $category );
						echo '<a class="post-cat" href="' . esc_url( $term_link ) . '">' . $category->name . '</a>';
						}}
					?>
				</span>
			</div>
			<?php the_title( sprintf( '<h2 class="post-title">', esc_url( get_permalink() ) ), '</h2>' ); 
				echo webane_single_donasi_meta();
				?>
		</div>
		<span><i>Rp.<?php echo esc_html( $Terkumpuldecimal ); ?></i> dari Target Rp. <?php echo esc_html( $targetdecimal ); ?></span>
			<div class="bardonasi">
				<div class="progress"> <div class="progress-bar" style="width: <?php echo $percent; ?>%;"><span><?php echo $percent; ?>%</span></div> </div>
			</div>
			<?php
			if ($days > 0) {
						echo '<a class="btn style3" href="#" title="'. $Button.'">'.$Button.'</a>';
					}else {
						echo '<div class="btn style3">Telah Berlalu</div>';
					}
			?>
	</header>
	<div class="row mt-20">
		<div class="col-lg-9">
			<div class="entry-content">
				<div class="share-this">
					<?= fungsi_share_webane(); ?>
				</div>
				<div class="post-list-item">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation">
								<a class="active" href="#Deskripsi" aria-controls="Deskripsi" role="tab" data-toggle="tab">
									<i class="ane-bubble2"></i>
									Deskripsi
								</a>
							</li>
							<li role="presentation">
								<a href="#Update" aria-controls="Update" role="tab" data-toggle="tab">
									<i class="ane-clock"></i>
									Update
								</a>
							</li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active ts-grid-box post-tab-list" id="Deskripsi">
								<?php the_content(); ?>
							</div>
							<!--ts-grid-box end -->

							<div role="tabpanel" class="tab-pane fade ts-grid-box post-tab-list" id="Update">
								<?php if( have_rows('donasi_update') ): ?>
								<div class="row">
								<?php
									while( have_rows('donasi_update') ): the_row(); 
									$Tanggal = get_sub_field('update_tanggal');
									$Update = get_sub_field('update_informasi');
								?>
								
									<div class="col-md-3 col-3">
										<?= $Tanggal; ?>
									</div>
									<div class="col-md-9 col-9">
										<?= $Update; ?>
									</div>
									<hr>
								<?php endwhile; ?>
								</div>
								<?php endif; ?>

							</div>
							<!--ts-grid-box end -->
						</div>
						<!-- tab content end-->
				</div>
				
				
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