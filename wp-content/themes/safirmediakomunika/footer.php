<?php
	$nama = get_field('nama_organisasi', 'option');
?>
<footer id="footer" class="pt-60 pb-60">
	<div class="container">
		<div class="row">
		
			<div class="col-md-3">
				<div class="f-about">
					<?php $Logo = esc_attr (get_field('f_logo', 'option') ); 
						if( !empty( $Logo ) ):
						?>
					<div class="f-about-img">
						<img src="<?php echo esc_attr ( ($Logo)); ?>" alt="<?= $nama; ?>" title="<?= $nama; ?>">
					</div>
					<?php endif;
						$about = get_field('organisasi_about', 'option');
						$link = get_field('organisasi_link', 'option');
						if( !empty( $about ) ):
					?>
					<div class="f-about-con">
						<?php echo $about; ?><br>
						<a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?> <i class="ane-point-right"></i></a>
					</div>
					<?php endif; ?>
			
				</div>
			</div>
			<div class="col-md-3">
				<div class="f-link">
					<div class="f-link-title">
						<h5 class="garis-bawah tit-link">
							<?php echo $contact = esc_attr (get_field('text_cu','option') ); ?>
						</h5>
					</div>
					<div class="f-link-con">
						<ul>
							<?php
								$Phone = esc_attr (get_field('telepon', 'option') );
								if( !empty( $Phone ) ):
							?>
							<li><i class="ane-phone3"></i> <?= $Phone; ?></li>
							<?php endif;
								$Email = esc_attr (get_field('email', 'option') );
								if( !empty( $Email ) ):
							?>
							<li><i class="ane-email4"></i> <?= $Email; ?></li>
							<?php endif;
								$Web = esc_attr (get_field('website', 'option') );
								if( !empty( $Web ) ):
							?>
							<li><i class="ane-earth"></i> <?= $Web; ?></li>
							<?php
								endif;
								$Alamat = get_field('alamat', 'option');
								$kab = get_field('kabupaten', 'option');
								$prov = get_field('provinsi', 'option');
								if( !empty( $Alamat ) ):
							?>
							<li><i class="ane-location2"></i> <?php echo $Alamat . " " . $kab. " " . $prov; ?></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="f-link">
					<div class="f-link-title">
						<h5 class="garis-bawah tit-link">
							<?php echo $usefullink = esc_attr (get_field('text_ul','option') ); ?>
						</h5>
					</div>
					<div class="f-link-con">
						<?php
							wp_nav_menu(  array(
							'theme_location' => 'menufooter',
							'container'      => 'nav-item',
							'fallback_cb'    => 'wp_page_menu',
							'depth'          => 4,
							)
							);
						?>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="ane-widget ane-widget-dark">
					<div class="f-link-title">
						<h5 class="garis-bawah tit-link">
							<?php echo $update = esc_attr (get_field('text_update','option') ); ?>
						</h5>
					</div>
				
					<?php //$the_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 3 )); 
									//while ( $the_query->have_posts() ) : $the_query->the_post();
									
									//get_template_part('tp/content','imagesmalltitle');
									
									//endwhile; wp_reset_postdata(); ?>
				</div>
			</div>
			
	
		</div>
	</div>
</footer>
<div class="footer-bwh">
	<div class="container">
		<div class="row">
			<div class="f-bwh-c">
				Copyright <?php echo webane_load_dynamic_copyright_year() . " " . $nama. " " . webane_load_designed_by(); ?>
			</div>
		
		</div>
	</div>
</div>

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="ane-circle-up"></i></a>
<!-- /.scroll-to-top -->
</div> <!--- webane-wrapper -->
<?php wp_footer(); ?>
</body>
</html>