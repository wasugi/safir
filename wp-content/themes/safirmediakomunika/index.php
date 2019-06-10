<?php get_header ();?>
<div id="primary" class="content-area mt-90">
	<main id="main" class="site-main" role="main">
		<?= webane_load_breadcrumbs(); ?>
<?php if ( is_home() && ! is_front_page() ) : ?>
	<div class="judul-arsip pt-20">
		<?php
			$title = esc_attr (get_field('blog_title', 'option') );
			if( !empty( $title ) ):
		?>
		<h2><?= $title; ?></h2>
		<?php
			endif;
			$subtite = esc_attr (get_field('blog_subtitle', 'option') );
			if( !empty( $subtite ) ):
		?>
		<span><?= $subtite; ?></span>
	<?php endif; ?>
	</div>
<?php endif; ?>

		<div class="container"><div class="row">

				<div class="col-lg-9 p-0 i-mobile">

					<?php

					if ( have_posts() ) :
							$counter = -1; while ( have_posts() ) : the_post();
							$counter++;

							if($counter == 0){

									get_template_part( 'tp/content', 'overlay' );

								}
								else{

									get_template_part( 'tp/content', 'list' );

								}


							endwhile;

							else :

								get_template_part( 'tp/content', 'none' );
							endif;

					echo webane_load_post_pagination(); ?>
				</div>

				<?php get_sidebar(); ?>

		</div></div>
	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer (); ?>
