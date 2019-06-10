<?php get_header (); ?>

<div id="primary" class="content-area mb-50 single-post-wrapper mt-100">
	<main id="main" class="site-main" role="main">
		<?= webane_load_breadcrumbs(); ?>
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
						<?= webane_share_this_post(); ?>
					</div>
					<div class="comments-form ts-grid-box">
						<?= webane_load_facebook_comment(); ?>
					</div>

				</div>

				<?php get_sidebar(); ?>

			</div>
		</div>

	</main>
</div>

<?php get_footer (); ?>
