<?php get_header (); ?>

<div id="primary" class="content-area mb-50 single-post">
	<main id="main" class="site-main" role="main">
		<?= fungsi_breadcrumbs_webane(); ?>	
		<div class="container">
			<div class="row">
				<div class="col-lg-12 p-0">
					<?php  
						
						if ( have_posts() ) : 
							while ( have_posts() ) : the_post();
								
								get_template_part( 'tp/single', get_post_format() );
								
							endwhile;
												
							else :
										
								get_template_part( 'tp/content', 'none' );

						endif;
					?>
					
				</div>
			</div>
		</div>

	</main>
</div>

<?php get_footer (); ?>