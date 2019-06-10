<?php get_header ();?>

<div id="primary" class="content-area mt-100 pb-40">
	<main id="main" class="site-main" role="main">
	<?= webane_load_breadcrumbs(); ?>
		<section class="block-wrapper mt-15 category-layout-2">
		<div class="container">


					<div class="judul-arsip pt-20">

						<h2 class="mb-30"><?php single_term_title(); ?></h2>

					<?php
						$terms = get_terms( 'kategori' );
								 if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
									 echo '<ul class="portfolio-kategori text-center">';
									 foreach ( $terms as $term ) {
										 echo '<li>' . $term = '<a class="btn btn-primary '.$term->name.'" href="' . get_term_link( $term ) . '" title="' . sprintf( __( 'Tampilkan Portfolio Webane dalam %s', 'my_localization_domain' ), $term->name ) . '">' . $term->name . '</a>' . '</li>';

									 }
									 echo '</ul>';
								 }
					?>
					</div>
					<div class="row">
					<?php

					if ( have_posts() ) :
							while ( have_posts() ) : the_post();

								echo '<div class="col-md-4">';
									get_template_part( 'tp/content', 'portfolio' );
								echo '</div>';

							endwhile;

							else :
								get_template_part( 'tp/content', 'none' );
							endif;

					echo webane_load_post_pagination(); ?>

				</div>
		</div>
	</section>
	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer (); ?>
