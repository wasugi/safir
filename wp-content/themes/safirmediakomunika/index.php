<?php get_header ();?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
<?php if ( is_home() && ! is_front_page() ) : ?>
<section class="inner-banner style-two">
    <div class="container">
        <h3><?php single_post_title(); ?></h3>
        <?php echo webane_load_breadcrumbs();  ?>
		<ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Contact us</a></li>
        </ul><!-- /.breadcrumb -->
    </div><!-- /.container -->
</section><!-- /.inner-banner -->	
<?php endif; ?>
	
	<?php echo webane_load_breadcrumbs();  ?>
		<div class="container"><div class="row">
			
				<div class="col-lg-9 p-0 i-mobile">
					<?php if ( is_home() && ! is_front_page() ) : ?>
					<div class="ts-grid-box">
						<div class="clearfix entry-cat-header">
							<h2 class="ts-title float-left"><?php single_post_title(); ?></h2>
						</div>
					</div>
					<?php endif; 
					
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