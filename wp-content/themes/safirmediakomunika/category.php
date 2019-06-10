<?php get_header ();?>

<div id="primary" class="content-area mt-90">
	<main id="main" class="site-main" role="main">
	<?= webane_load_breadcrumbs(); ?>
		<section class="block-wrapper mt-15 category-layout-2">
		<div class="container"><div class="row">

				<div class="col-lg-9 i-mobile">

					<div class="judul-arsip">
						<h2><?php single_cat_title(); ?></h2>
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

					echo webane_load_post_pagination(); ?>
				</div>

				<?php get_sidebar(); ?>

		</div></div>
	</section>
	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer (); ?>
