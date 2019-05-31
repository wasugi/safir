<?php get_header ();?>

<div id="primary" class="content-area arsip-gallery">
	<main id="main" class="site-main" role="main">
		<?= fungsi_breadcrumbs_webane(); ?>
		<section class="block-wrapper mt-15 category-layout-2">
		<div class="container"><div class="row">
			
				<div class="col-lg-12">
					
					<div class="judul-arsip">
						<h2><?php single_cat_title(); ?></h2>
					</div>
				
					<div class="row">
						<?php if ( have_posts() ) :
							while ( have_posts() ) : the_post();
								echo '<div class="col-lg-4 col-md-6 mb-15">';
									get_template_part( 'tp/content', get_post_format() );
								echo '</div>';		
							endwhile;
													
							else :
											
								get_template_part( 'tp/content', 'none' );
							endif;
						?>
					</div>
					<?= fungsi_paginasi_webane(); ?>
				</div>
				
		</div></div>
	</section>
	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer (); ?>