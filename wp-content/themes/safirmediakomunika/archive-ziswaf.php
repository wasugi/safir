<?php get_header ();?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	<?= fungsi_breadcrumbs_webane(); ?>
		<section class="block-wrapper mt-15">
		<div class="container">
					<?php
					$judul = get_field('donasi_title','option');
					if( !empty( $judul ) ):
					?>
					<div class="judul-arsip">
						<?php
						$subjudul = esc_attr (get_field('donasi_subtitle','option') );
						if( !empty( $subjudul ) ):
						?>
						<span><?= $subjudul; ?></span>
						<?php endif; ?>
						<h2><?= $judul; ?></h2>
					</div>
					<?php endif; ?>
						
					<?php if ( have_posts() ) : ?>
					<div class="row">
						<?php while ( have_posts() ) : the_post();
								echo '<div class="col-md-4">';
								get_template_part( 'tp/content', 'ziswaf');
								echo '</div>';	
							endwhile;
													
							else :
											
								get_template_part( 'tp/content', 'none' );
						?>
					</div>
					<?php endif;
						
					echo fungsi_paginasi_webane(); ?>
				
				
					
		</div>
	</section>
	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer (); ?>