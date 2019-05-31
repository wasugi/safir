<?php
	$Kategori = get_the_term_list( $post->ID, 'kategori-agenda', ' ', ', ' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('ane-donasi'); ?>>
	<header class="entry-header">
		<?= webane_content_image_url(); ?>
		<a class="btn" href="<?php echo esc_url( get_permalink() ); ?>" title="">Detail Agenda</a>
	</header>

	<div class="post-content">
		<span><?php echo $Kategori; ?></span>
		<?php
			$mulai = ceil((strtotime(get_field('event_date')) - time())/(60*60*24));
				$k=1;
				if ($mulai > 0) {
						echo '<span>'. $mulai .' hari lagi</span>';
					}else if ($mulai == 0) {
						echo '<span>berlangsung</span>';
					}else {
						echo '<span>Berlalu</span>';
					}
		?>
	</div>

	<footer class="entry-footer">
		<?php the_title( sprintf( '<h3 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
	</footer>
</article>