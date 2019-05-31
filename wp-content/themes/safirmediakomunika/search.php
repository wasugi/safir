<?php get_header ();?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="block-wrapper mt-15 category-layout-2">
		<div class="container"><div class="row">
			
				<div class="col-lg-9">
					<?php echo fungsi_breadcrumbs_webane(); ?>
					<div class="ts-grid-box">
						<div class="clearfix entry-cat-header">
							<h2 class="ts-title float-left"><?php printf( __( 'Search Results for: %s', 'webane' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h2>
						</div>
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
				
				<?php get_sidebar(); ?>
					
		</div></div>
	</section>
	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer (); ?>