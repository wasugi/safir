<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.2&appId=352619118625171&autoLogAppEvents=1"></script>
<div class="webane-wrapper">

<header class="header-style-one">
    <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
        <div class="container clearfix">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="logo-box clearfix">
				<?php 
					$logoimg = get_theme_mod( 'logo', get_template_directory_uri().'/img/logo.png' );
					if ( has_custom_logo() ) {
					the_custom_logo();
					}
					else {
						echo '<a class="navbar-brand" href="' .get_home_url(). '" rel="home"><img src="' .$logoimg. '" title="' .get_bloginfo( 'name' ).'" alt="' .get_bloginfo( 'name' ).'"></a>';
					}
				?>
                
                <button class="menu-toggler" data-target="#main-nav-bar">
                    <i class="ane-menu"></i>
                </button>
            </div><!-- /.logo-box -->

            <!-- Collect the nav links, forms, and other content for toggling -->
                <?php
					wp_nav_menu(  array(
					'theme_location' => 'menuutama',
					'container'       => 'div',
					'container_class' => 'main-navigation',
					'container_id'    => 'main-nav-bar',
					'echo'            => true,
					'fallback_cb'    => 'wp_page_menu',
					'items_wrap'      => '<ul class="navigation-box">%3$s</ul>',
					'depth'          => 4,
					)
					);
				?>
				
            <div class="right-side-box">
                <a href="login.html" class="login-btn">Log In</a>
            </div>
            <!-- /.right-side-box -->
        </div>
        <!-- /.container -->
    </nav>
</header><!-- /.header-style-one -->