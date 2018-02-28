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
			<div class="col-1 col-2-l">
				<header id="masthead" class="site-header">
					<div class="site-branding">
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
						?>
					</nav><!-- #site-navigation -->

					<nav class="social-navigation">
						<a href="https://www.twitter.com/sa_roar">Twitter</a>
						<a href="https://www.instagram.com/sa_roar">Instagram</a>
					</nav>

					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">Menu</button>
				</header><!-- #masthead -->
			</div>

			<div class="col-11 col-10-l">
				<div id="page" class="site">
					<div id="content" class="site-content">
						<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pursuit' ); ?></a>

		</div>
	</div>