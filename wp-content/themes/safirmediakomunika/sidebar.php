<?php
if ( ! is_active_sidebar( 'default-sidebar' ) ) {
	return;
}
?>
<aside class="col-lg-3">
	<div class="right-sidebar">
		<?php dynamic_sidebar( 'default-sidebar' ); ?>
	</div>
</aside>