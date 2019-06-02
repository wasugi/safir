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

						<div class="fact-counter style-two">

							<div class="row clearfix">

								<!--Column-->
								<div class="column counter-column col-lg-4 col-md-6 col-sm-12">
									<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
										<div class="count-outer count-box">
											<h6 class="counter-title">Completed projects</h6>
											<span class="count-text" data-speed="3000" data-stop="501">0</span>
										</div>
									</div>
								</div>

								<!--Column-->
								<div class="column counter-column col-lg-4 col-md-6 col-sm-12">
									<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
										<div class="count-outer count-box">
											<h6 class="counter-title">Expert team</h6>
											<span class="count-text" data-speed="2000" data-stop="45">0</span>
										</div>
									</div>
								</div>

								<!--Column-->
								<div class="column counter-column col-lg-4 col-md-6 col-sm-12">
									<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
										<div class="count-outer count-box">
											<h6 class="counter-title">Happy clients</h6>
											<span class="count-text" data-speed="2500" data-stop="304">0</span>
										</div>
									</div>
								</div>

							</div>

						</div>

					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Funfacts Section -->

	<!-- Gallery Section -->
	<section class="gallery-section">
		<div class="outer-container">
			<div class="four-item-carousel owl-carousel owl-theme">

				<!-- Project Block Two -->
				<div class="project-block-two">
					<div class="inner-box">
						<div class="image">
							<img src="images/gallery/25.jpg" alt="" />
							<!--Overlay Two-->
							<div class="overlay-two">
								<div class="overlay-two-inner">
									<h4><a href="portfolio-single.html">Graphics design</a></h4>
									<div class="text">Lorem ipsum, or lipsum as it is someone times known, is dummy.</div>
									<a href="portfolio-single.html" class="arrow-box fa fa-angle-right"></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Project Block Two -->
				<div class="project-block-two">
					<div class="inner-box">
						<div class="image">
							<img src="images/gallery/26.jpg" alt="" />
							<!--Overlay Two-->
							<div class="overlay-two">
								<div class="overlay-two-inner">
									<h4><a href="portfolio-single.html">Graphics design</a></h4>
									<div class="text">Lorem ipsum, or lipsum as it is someone times known, is dummy.</div>
									<a href="portfolio-single.html" class="arrow-box fa fa-angle-right"></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Project Block Two -->
				<div class="project-block-two">
					<div class="inner-box">
						<div class="image">
							<img src="images/gallery/27.jpg" alt="" />
							<!--Overlay Two-->
							<div class="overlay-two">
								<div class="overlay-two-inner">
									<h4><a href="portfolio-single.html">Graphics design</a></h4>
									<div class="text">Lorem ipsum, or lipsum as it is someone times known, is dummy.</div>
									<a href="portfolio-single.html" class="arrow-box fa fa-angle-right"></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Project Block Two -->
				<div class="project-block-two">
					<div class="inner-box">
						<div class="image">
							<img src="images/gallery/28.jpg" alt="" />
							<!--Overlay Two-->
							<div class="overlay-two">
								<div class="overlay-two-inner">
									<h4><a href="portfolio-single.html">Graphics design</a></h4>
									<div class="text">Lorem ipsum, or lipsum as it is someone times known, is dummy.</div>
									<a href="portfolio-single.html" class="arrow-box fa fa-angle-right"></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Project Block Two -->
				<div class="project-block-two">
					<div class="inner-box">
						<div class="image">
							<img src="images/gallery/25.jpg" alt="" />
							<!--Overlay Two-->
							<div class="overlay-two">
								<div class="overlay-two-inner">
									<h4><a href="portfolio-single.html">Graphics design</a></h4>
									<div class="text">Lorem ipsum, or lipsum as it is someone times known, is dummy.</div>
									<a href="portfolio-single.html" class="arrow-box fa fa-angle-right"></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Project Block Two -->
				<div class="project-block-two">
					<div class="inner-box">
						<div class="image">
							<img src="images/gallery/26.jpg" alt="" />
							<!--Overlay Two-->
							<div class="overlay-two">
								<div class="overlay-two-inner">
									<h4><a href="portfolio-single.html">Graphics design</a></h4>
									<div class="text">Lorem ipsum, or lipsum as it is someone times known, is dummy.</div>
									<a href="portfolio-single.html" class="arrow-box fa fa-angle-right"></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Project Block Two -->
				<div class="project-block-two">
					<div class="inner-box">
						<div class="image">
							<img src="images/gallery/27.jpg" alt="" />
							<!--Overlay Two-->
							<div class="overlay-two">
								<div class="overlay-two-inner">
									<h4><a href="portfolio-single.html">Graphics design</a></h4>
									<div class="text">Lorem ipsum, or lipsum as it is someone times known, is dummy.</div>
									<a href="portfolio-single.html" class="arrow-box fa fa-angle-right"></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Project Block Two -->
				<div class="project-block-two">
					<div class="inner-box">
						<div class="image">
							<img src="images/gallery/28.jpg" alt="" />
							<!--Overlay Two-->
							<div class="overlay-two">
								<div class="overlay-two-inner">
									<h4><a href="portfolio-single.html">Graphics design</a></h4>
									<div class="text">Lorem ipsum, or lipsum as it is someone times known, is dummy.</div>
									<a href="portfolio-single.html" class="arrow-box fa fa-angle-right"></a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Gallery Section -->
