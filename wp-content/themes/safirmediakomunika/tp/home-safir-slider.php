<?php
		while( have_rows('webane_slider', 'option') ): the_row();
		$bg = get_sub_field('slider_bg');
		?>
<section class="webane-slider d-flex" style="background: url(<?= $bg; ?>) center center no-repeat;">
    <div class="container my-auto">

		<div class="slider-active owl-carousel">
			<div class="row">
				<div class="col-lg-6 d-flex ">
					<div class="banner-content my-auto">
						<?php
						$judul = get_sub_field('slider_title');
						if( !empty( $judul ) ): ?>
						<h3><?= $judul; ?> </h3>
						<?php
						endif;
						$deskripsi = get_sub_field('slider_desc');
						if( !empty( $deskripsi ) ): ?>
						<p><?= $deskripsi; ?></p>
						<?php
						endif;
						$link = get_sub_field('slider_url');
						if( !empty( $link ) ): ?>
						<a href="<?php echo $link['url']; ?>" class="banner-btn"><span class="inner-text"><?php echo $link['title']; ?></span></a>
					<?php endif; ?>
					</div>
				</div>
				<!-- /.col-lg-6 -->
				<div class="col-lg-6 text-right">
					<?php
					$image = get_sub_field('slider_img');
					if( !empty( $image ) ): ?>
					<img src="<?= $image; ?>" alt="">
				<?php endif; ?>
				</div>
				<!-- /.col-lg-6 -->
			</div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<?php endwhile; ?>
