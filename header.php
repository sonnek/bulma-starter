<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bulmatypic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bulmatypic' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$bulmatypic_description = get_bloginfo( 'description', 'display' );
			if ( $bulmatypic_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $bulmatypic_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="navbar" role="navigation" aria-label="main navigation">
			<div class="navbar-brand">
				<a class="navbar-item" href="https://bulma.io">
					<img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
				</a>

				<button class="navbar-burger" aria-controls="primary-menu" aria-expanded="false">
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
				</button>
			</div>
			<div id="primary-menu" class="navbar-menu menu" aria-expanded="false">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'primary-menu',
					'depth'          => 0,
					'container'      => 'div id="navigation"',
					'menu_class'     => 'navbar-start',
					'fallback_cb'    => 'bulmapress_navwalker::fallback',
					'walker'         => new Bulmatypic_Navwalker(),
				));
				wp_nav_menu( array(
					'theme_location' => 'navbar-right',
					'depth'          => 0,
					'container'      => 'div id="navigation"',
					'menu_class'     => 'navbar-end',
					'fallback_cb'    => 'bulmapress_navwalker::fallback',
					'walker'         => new Bulmatypic_Navwalker(),
				));
				?>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

