<?php
	$Target = esc_attr (get_field('donasi_target') );
	$Button = esc_attr (get_field('donasi_button') );
	$Targetoutput = $Target;$targetdecimal = number_format( $Targetoutput , 0 , '.' , ',' );
	$Terkumpul = esc_attr (get_field('donasi_terkumpul') );
	$Terkumpuloutput = $Terkumpul;$Terkumpuldecimal = number_format( $Terkumpuloutput , 0 , '.' , ',' );
	$percent = round ( ( $Terkumpul / $Target ) * 100 );
	
	$days = ceil((strtotime(get_field('donasi_waktu')) - time())/(60*60*24));
	$k = 1;
	$Kategori = get_the_term_list( $post->ID, 'kategori-ziswaf', ' ', ', ' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('ane-donasi'); ?>>
	<header class="entry-header">
		<?= webane_content_image_url(); ?>
				<span><i>Rp. <?php echo esc_html( $Terkumpuldecimal ); ?></i> dari Target Rp. <?php echo esc_html( $targetdecimal ); ?></span>
				<div class="bardonasi">
					<div class="progress"> <div class="progress-bar" style="width: <?php echo $percent; ?>%;"><span><?php echo $percent; ?>%</span></div> </div>
				</div>
		<a class="btn" href="<?php echo esc_url( get_permalink() ); ?>" title=""><?php echo $Button; ?></a>
	</header>

	<div class="post-content">
		<span><?php echo $Kategori; ?></span>
		<span><?php echo " sisa " .$days. " Hari "; ?></span>
	</div>

	<footer class="entry-footer">
		<?php the_title( sprintf( '<h3 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
	</footer>
</article>