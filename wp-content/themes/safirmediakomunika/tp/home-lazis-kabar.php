	<section class="block-wrapper mt-30 mb-40">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="category-box-item-3 pb-40">
						<div class="row">
							<div class="col-lg-6 post-tab-list">
								
								<h2 class="global-title mt-20">
									Kabar
								</h2>
								<?php $the_query = new WP_Query(array('post_type' => 'post', 'cat' => get_cat_ID('Kabar'), 'posts_per_page' => 6 )); 
								$counter = -1; while ( $the_query->have_posts() ) : $the_query->the_post();
								$counter++; 
							
								if($counter == 0){ 
									
									get_template_part( 'tp/content', 'overlay' );
									
								} 
								else{ 
									
									get_template_part( 'tp/content', 'imagesmalltitle' );
									
								} 
								
								endwhile; wp_reset_postdata();  ?>
							</div>
							<div class="col-lg-6 post-tab-list">
								<h2 class="global-title mt-20">
									Artikel
								</h2>
								<?php $the_query = new WP_Query(array('post_type' => 'post', 'cat' => get_cat_ID('Artikel'), 'posts_per_page' => 6 )); 
								$counter = -1; while ( $the_query->have_posts() ) : $the_query->the_post();
								$counter++; 
							
								if($counter == 0){ 
									
									get_template_part( 'tp/content', 'overlay' );
									
								} 
								else{ 
									
									get_template_part( 'tp/content', 'imagesmalltitle' );
									
								} 
								
								endwhile; wp_reset_postdata(); ?>
							</div>
						</div>

					</div>

					
				</div> <!-- end col-lg-9 -->
				<div class="col-lg-3">
					<?php get_template_part ('tp/iklan','hbanner255x343'); ?>
					<div class="widget-home">
						<h2 class="global-title mt-20">
							<i class="ane-book"></i> Event
						</h2>
							

								<div class="post-tab-list">
									<?php $the_query = new WP_Query(array('post_type' => 'agenda', 'posts_per_page' => 5 ));
									
									while ( $the_query->have_posts() ) : $the_query->the_post();
									
										get_template_part('tp/content','agenda-list');
									
									endwhile; wp_reset_postdata(); ?>
									
								</div>
								
					</div>
					
				</div>
			</div>
			<!-- row end-->
		</div>
		<!-- container end-->
	</section>
	<!-- end  blog wrapper -->
