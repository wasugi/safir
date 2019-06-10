<?php get_header (); ?>

<div id="primary" class="content-area mb-50 single-post single-post-wrapper mt-100">
	<main id="main" class="site-main" role="main">
		<?= webane_load_breadcrumbs(); ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 p-0">
					<?php

						if ( have_posts() ) :
							while ( have_posts() ) : the_post();

								get_template_part( 'tp/single', 'portfolio');

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
