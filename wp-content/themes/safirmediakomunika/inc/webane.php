<?php
// default logo on login form
function webane_load_login_form_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(https://4.bp.blogspot.com/-jF3KjigDQCY/W7-WgeouSoI/AAAAAAAAAYc/zLuvSenN5oI7fuC_TnDIf14n9FUW40tXwCLcBGAs/s1600/login.png);
            padding-bottom: 20px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'webane_load_login_form_logo' );
// fungsi iklan webane
function webane_ads_on_admin()
{
	$imageku = 'https://4.bp.blogspot.com/-J2K6WKNTj2E/W7-WgY1y9uI/AAAAAAAAAYg/GSYOwtOOJEEydFWCbxxfTGK5XtAM1cI7wCLcBGAs/s1600/webane-indonesia-ads.jpg';
	$output = '<a href="https://webane.com"><img style="width:100%;" src="'.$imageku.'"></a>';

	add_settings_error('webane_ads_on_admin', esc_attr( 'settings_updated' ), $output, 'notice-warning');

	settings_errors( 'webane_ads_on_admin' );
}
add_action( 'admin_notices', 'webane_ads_on_admin' );
// Fungsi design by
function webane_load_designed_by()
{
$webane_site = 'https://webane.com/';
$content .= '| Created with love by <a href="'.$webane_site.'" target="_blank" rel="nofollow" title="Web Design Webane Indonesia" alt="Web Design Webane Indonesia" >Webane Indonesia</a>';
return $content;
}
// year copyright
function webane_load_dynamic_copyright_year() {
	global $wpdb;
	$copyright_dates = $wpdb->get_results("
	SELECT
	YEAR(min(post_date_gmt)) AS firstdate,
	YEAR(max(post_date_gmt)) AS lastdate
	FROM
	$wpdb->posts
	WHERE
	post_status = 'publish'
	");
	$output = '';
	if($copyright_dates) {
		$copyright = "&copy; " . $copyright_dates[0]->firstdate;
		if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
		$copyright .= '-' . $copyright_dates[0]->lastdate;
		}
		$output = $copyright;
	}
	return $output;
}