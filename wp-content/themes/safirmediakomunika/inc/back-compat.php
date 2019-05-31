<?php
function sekolahane_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'sekolahane_upgrade_notice' );
}
add_action( 'after_switch_theme', 'sekolahane_switch_theme' );

function sekolahane_upgrade_notice() {
	$message = sprintf( __( 'Sekolahane requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'sekolahane' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/*function sekolahane_customize() {
	wp_die(
		sprintf(
			__( 'Sekolahane requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'sekolahane' ),
			$GLOBALS['wp_version']
		),
		'',
		array(
			'back_link' => true,
		)
	);
}
add_action( 'load-customize.php', 'sekolahane_customize' );

function sekolahane_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Sekolahane requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'sekolahane' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'sekolahane_preview' );
*/