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


		<nav id="branding" class="navbar" role="navigation" aria-label="main navigation">
			<div class="navbar-brand">
				<a class="navbar-item" href="https://bulma.io">
					<img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
				</a>

				<a role="button" class="navbar-burger" data-target="primary-menu" aria-label="menu" aria-expanded="false">
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
				</a>
			</div>
			<div id="primary-menu" class="navbar-menu">
				<ul class="navbar-start">
					<li class="navbar-item"><a href="#">Item 1</a></li>
					<li class="navbar-item"><a href="#">Item 2</a></li>
					<li class="navbar-item has-dropdown is-hoverable">
						Item 3
						<ul class="navbar-dropdown">
							<li class="navbar-item"><a href="#">Submenu Item 1</a></li>
							<li class="navbar-item"><a href="#">Submenu Item 2</a></li>
						</ul>
					</li>
				</ul>

				<ul class="navbar-end">
					<li class="navbar-item"><a href="#">End Item</a></li>
				</ul>
			</div>
		</nav>















		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bulmatypic' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary-menu',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
