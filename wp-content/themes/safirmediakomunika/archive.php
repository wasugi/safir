<?php get_header ();?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	<?php echo fungsi_breadcrumbs_webane(); ?>
		<section class="block-wrapper mt-15 category-layout-2">
		<div class="container"><div class="row">
			
				<div class="col-lg-9 i-mobile">
					
					<div class="judul-arsip">
						<?php the_archive_title( '<h2>', '</h2>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
					</div>
					<?php  
					
					if ( have_posts() ) :
							$counter = -1; while ( have_posts() ) : the_post();
							$counter++; 
							
							if($counter == 0){ 
									
									get_template_part( 'tp/content', 'overlay' );
									
								} 
								else{ 
									
									get_template_part( 'tp/content', 'list' );
									
								} 
									
							
							endwhile;
													
							else :
											
								get_template_part( 'tp/content', 'none' );
							endif;
						
					echo fungsi_paginasi_webane(); ?>
				</div>
				
				<?php get_sidebar(); ?>
					
		</div></div>
	</section>
	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer (); ?>