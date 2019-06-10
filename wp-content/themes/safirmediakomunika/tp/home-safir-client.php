<section class="brand-carousel-wrapper no-pad-top pb-40">
    <div class="container">
        <div class="content-clients owl-carousel owl-theme" id="a-unique-id-brand">
          <?php $the_query = new WP_Query(array('post_type' => 'client', 'posts_per_page' => 8 ));
              while ( $the_query->have_posts() ) : $the_query->the_post();
                get_template_part('tp/content','client');
              endwhile; wp_reset_postdata(); ?>
        </div><!-- /.content-clients -->
    </div><!-- /.container -->
</section><!-- /.brand-carousel-wrapper -->
