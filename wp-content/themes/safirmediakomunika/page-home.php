<?php
	/*
	* Template Name: Landing Page
	*/
	get_header();
?>
<div id="primary" class="content-area mb-50">
	<main id="main" class="site-main" role="main">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
			if( have_rows('webane_slider', 'option') ):
				get_template_part('tp/home', 'safir-slider');
			endif;
			get_template_part('tp/home', 'safir-services');
			get_template_part('tp/home', 'safir-about');
			get_template_part('tp/home', 'safir-portfolios');
			get_template_part('tp/home', 'lazis-kabar');
		?>
	</article>
	</main>
</div>
<?php get_footer(); ?>