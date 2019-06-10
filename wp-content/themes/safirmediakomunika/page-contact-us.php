<?php
	/*
	* Template Name: Contact Us
	*/
get_header (); ?>

<div id="primary" class="content-area mb-50 single-post-wrapper mt-100">
	<main id="main" class="site-main" role="main">
		<?php echo webane_load_breadcrumbs();?>
		<div class="google-map mb-50">
						<?php
							$location = get_field('gmap', 'option');
							if( !empty($location) ):
						?>
							<div class="acf-map">
							<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
							<a class="directions" href="https://www.google.com/maps?saddr=My+Location&daddr=<?php echo $location['lat'] . ',' . $location['lng']; ?>"><?php _e('Get Directions to','roots'); ?> <?php echo $location['address']; ?></a> <!-- Output the title -->
							</div>
							</div>
							<?php endif; ?>
		</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-9">


					<?php	if ( have_posts() ) :
							while ( have_posts() ) : the_post();

								get_template_part( 'tp/content', 'page');

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
