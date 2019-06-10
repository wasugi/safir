<?php get_header ();?>

<div id="primary" class="content-area mt-100 pb-40">
	<main id="main" class="site-main" role="main">
	<?= webane_load_breadcrumbs(); ?>
		<section class="block-wrapper mt-15 category-layout-2">
		<div class="container">


					<div class="judul-arsip pt-20">
						<?php
							$title = esc_attr (get_field('service_title', 'option') );
							if( !empty( $title ) ):
						?>
						<h2><?= $title; ?></h2>
						<?php
							endif;
							$subtite = esc_attr (get_field('service_subtitle', 'option') );
							if( !empty( $subtite ) ):
						?>
						<span><?= $subtite; ?></span>
					<?php endif; ?>
					</div>
					<div class="row">
					<?php

					if ( have_posts() ) :
							while ( have_posts() ) : the_post();

								echo '<div class="col-md-4 mb-30">';
									get_template_part( 'tp/content', 'service' );
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
