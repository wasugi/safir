<?php
	$about = get_field('organisasi_about', 'option');
	if( !empty( $about ) ):
?>
<section>
	<div class="banner-home mb-60">
		<div class="row">
			<div class="col-md-12">
				<div class="banner-home-content">
					<div class="row align-items-center">
						<div class="col-lg-6 col-md-12">
							<div class="home-banner-text">
								<?php
									$sologan = get_field('organisasi_sologan', 'option');
									if( !empty( $sologan ) ):
								?>
								<span><?= $sologan; ?></span>
								<?php
									endif;
									$organisasi = get_field('nama_organisasi', 'option');
									if( !empty( $organisasi ) ):
								?>
								<h3><strong><?= $organisasi; ?></strong></h3>
								<p><?= $about; ?></p>
								<?php
									endif;
									$link = get_field('organisasi_link', 'option');
									if( !empty( $organisasi ) ):
								?>
								<a class="btn" href="<?php echo $link['url']; ?>" title="<?= $organisasi; ?>" alt="<?= $organisasi; ?>"><?php echo $link['title']; ?></a>
								<?php endif; ?>
							</div>
						</div>
							<div class="col-lg-6 col-md-12">
								<div class="home-banner-img">
									<?php $img = get_field('organisasi_photo', 'option');
										if( !empty( $img ) ){
											echo '<img src="'. $img .'" alt="" />';
										}
										else {
											echo'<img src="http://placehold.it/793x585" alt="" />';
										}
									?>
									
								</div>
							</div>
					</div>
						<a class="round-icon-btn" href="<?php echo $link['url']; ?>" title=""><i class="ion-ios-play-outline"></i></a>
				</div><!-- Shelter Video -->
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
