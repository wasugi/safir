<?php get_header (); ?>

<div id="primary" class="content-area mb-50">
	<main id="main" class="site-main" role="main">
		<?php echo fungsi_breadcrumbs_webane(); ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-9 p-0">
					<?php 
					
						if ( have_posts() ) : 
							while ( have_posts() ) : the_post();
								
								get_template_part( 'tp/content', 'page');
								
							endwhile;
												
							else :
										
								get_template_part( 'tp/content', 'none' );

						endif;
					?>	
					<div class="share-this ts-grid-box mt-20">
						<?= fungsi_share_webane(); ?>
					</div>
					<div class="comments-form ts-grid-box">
						<?php echo fungsi_komen_facebook_webane(); ?>
					</div>

				</div>
				
				<?php get_sidebar(); ?>
				
			</div>
		</div>

	</main>
</div>

<?php get_footer (); ?>