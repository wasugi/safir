	<!-- Funfacts Section -->
	<section class="funfacts-section">
		<div class="container">
			<div class="row clearfix">

				<!-- Title Column -->
				<?php
					$title = esc_attr (get_field('portfolio_title', 'option') );
					if( !empty( $title ) ):
				?>
				<div class="title-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<h3><?= $title; ?></h3>
						<?php
							$subtite = esc_attr (get_field('portfolio_subtitle', 'option') );
							if( !empty( $subtite ) ):
						?>
						<div class="text"><?= $subtite; ?></div>
					<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>
				<!-- Counter Column -->
				<div class="counter-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<?php if( have_rows('portfolio_funfact', 'option') ): ?>
						<div class="fact-counter style-two">

							<div class="row clearfix">
								<?php while( have_rows('portfolio_funfact', 'option') ): the_row();

									$fakta = get_sub_field('fact_title');
									$data = get_sub_field('fact_value');
								?>
								<!--Column-->
								<div class="column counter-column col-lg-4 col-md-6 col-sm-12">
									<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
										<div class="count-outer count-box">
											<h6 class="counter-title"><?= $fakta; ?></h6>
											<span class="count-text" data-speed="3000" data-stop="501"><?= $data; ?></span>
										</div>
									</div>
								</div>
								<?php endwhile; ?>


							</div>

						</div>
					<?php endif; ?>

					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Funfacts Section -->

	<!-- Gallery Section -->
	<section class="gallery-section pb-100">
		<div class="outer-container">
			<div class="four-item-carousel owl-carousel owl-theme">

				<?php $the_query = new WP_Query(array('post_type' => 'portfolio', 'posts_per_page' => 8 ));
						while ( $the_query->have_posts() ) : $the_query->the_post();

						get_template_part('tp/content', 'portfolio');

				endwhile; wp_reset_postdata(); ?>

			</div>
		</div>
	</section>
	<!-- End Gallery Section -->
