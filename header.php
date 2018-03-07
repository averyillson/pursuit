<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pursuit
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="container-full">
		<div class="row clear">
			<div class="col-2  col-1-m col-2-l col-2-xl">
				<header id="masthead" class="site-header">
					<div class="site-branding">
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="none block-l main-navigation">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
						?>
					</nav><!-- #site-navigation -->

					<nav class="social-navigation">
						<a href="https://www.twitter.com/sa_roar"><span class="icon-twitter"></span></a>
						<a href="https://www.instagram.com/sa_roar"><span class="icon-instagram"></span></a>
					</nav>
				</header><!-- #masthead -->
				<button class="none-l menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="icon-menu"></span></button>
				<nav id="site-navigation" class="none-l mobile-navigation">
					<a href="/about"><span class="icon-profile"></span></a>
					<a href="/stories"><span class="icon-pen"></span></a>
					<a href="/photos"><span class="icon-camera"></span></a>
					<a href="/video"><span class="icon-video-camera"></span></a>
				</nav><!-- #site-navigation -->
			</div>

			<div class="col-10 col-11-m col-10-l col-10-xl">
				<div id="page" class="site">
					<div id="content" class="site-content">
						<a class="skip-link sr" href="#content"><?php esc_html_e( 'Skip to content', 'pursuit' ); ?></a>

		</div>
	</div>
