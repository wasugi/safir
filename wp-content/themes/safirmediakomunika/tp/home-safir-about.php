<section class="webane-about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="webane-about-us-text">
                    <?php
						$link = get_field('organisasi_link', 'option');
						$nama = esc_attr (get_field('nama_organisasi', 'option') );
						if( !empty( $nama ) ):
					?>
					<span><?= $nama; ?></span>
					<?php
						endif;
						$sologan = esc_attr (get_field('organisasi_sologan', 'option') );
						if( !empty( $sologan ) ):
					?>
					<h3><?= $sologan; ?></h3>
					<?php
						endif;
						$about = esc_attr (get_field('organisasi_about', 'option') );
						if( !empty( $about ) ):
					?>
                    <p><?= $about; ?></p>
					<?php endif; ?>
					<a href="<?php echo $link['url']; ?>" class="btn-putih"><span class="inner-text"><?php echo $link['title']; ?></span></a>
                </div>
            </div>
				<?php
						$photo = esc_attr (get_field('organisasi_photo', 'option') );
						if( !empty( $photo ) ):
					?>
            <div class="col-lg-6 text-md-center">
                <div class="webane-about-us-img wow fadeInRight">
                    <img src="<?= $photo; ?>" alt="<?= $sologan; ?>">
                    <a href="<?php echo $link['url']; ?>" class="video-popup"><i
                            class="ane-mug"></i></a>
                </div>
            </div>
				<?php endif; ?>
        </div>
    </div>
</section>
<!-- /.webane-about-us -->