<section class="webane-service">
    <div class="container">

        <div class="row d-flex">
            <div class="col-lg-3 text-right my-auto">
                <div class="row">
				<?php $the_query = new WP_Query(array('post_type' => 'service', 'posts_per_page' => 2 ));
					while ( $the_query->have_posts() ) : $the_query->the_post();?>

                    <div class="col-lg-12 col-md-6">
                      <?php get_template_part('tp/content','service'); ?>
                    </div>
                   <?php endwhile; wp_reset_postdata();  ?>
                </div><!-- /.row -->
            </div>
			<?php
				$img = esc_attr (get_field('service_img', 'option') );
				$title = esc_attr (get_field('service_title', 'option') );
			if( !empty( $img ) ):
			?>
            <div class="col-lg-6 text-center my-auto">
                <img src="<?= $img; ?>" alt="<?= $title; ?>" class="featured-image wow fadeInUp">
            </div>
			<?php endif; ?>
            <div class="col-lg-3 text-left my-auto">
                <div class="row">
                    <?php $the_query = new WP_Query(array('post_type' => 'service', 'posts_per_page' => 2,'offset' => 2 ));
					while ( $the_query->have_posts() ) : $the_query->the_post();?>
					         <div class="col-lg-12 col-md-6">
                        <?php get_template_part('tp/content','service'); ?>
                    </div><!-- /.col-lg-12 -->
                    <?php endwhile; wp_reset_postdata();  ?>
                </div><!-- /.row -->
            </div>
        </div>
    </div>
</section>
<!-- /.webane-service -->
