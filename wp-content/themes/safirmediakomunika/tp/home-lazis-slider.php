<?php 
		while( have_rows('webane_slider', 'option') ): the_row(); 
										
		$bg = get_sub_field('slider_bg');
		$image = get_sub_field('slider_img');
		$judul = get_sub_field('slider_title');
		$deskripsi = get_sub_field('slider_desc');
		$link = get_sub_field('slider_url');
		?>
<section class="webane-slider d-flex" style="background: url(<?= $bg; ?>) center center no-repeat;">
    <div class="container my-auto">
        
		<div class="slider-active owl-carousel">
			<div class="row">
				<div class="col-lg-6 d-flex ">
					<div class="banner-content my-auto">
						<h3><?= $judul; ?> </h3>
						<p><?= $deskripsi; ?></p>
						<a href="#" class="banner-btn"><span class="inner-text">Get Started</span></a>
					</div>
					<!-- /.banner-content -->
				</div>
				<!-- /.col-lg-6 -->
				<div class="col-lg-6 text-right">
					<img src="<?= $image; ?>" alt="">
				</div>
				<!-- /.col-lg-6 -->
			</div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<?php endwhile; ?>