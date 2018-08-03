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

		

		<nav id="navbar" class="navbar has-shadow is-spaced">
			<div class="container">
			<div class="navbar-brand">
				<a class="navbar-item" href="https://bulma.io">
					<img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
				</a>

				<a class="navbar-item is-hidden-desktop" href="https://github.com/jgthms/bulma" target="_blank">
					<span class="icon" style="color: #333;">
						<i class="fab fa-lg fa-github-alt"></i>
					</span>
				</a>

				<a class="navbar-item is-hidden-desktop" href="https://twitter.com/jgthms" target="_blank">
					<span class="icon" style="color: #55acee;">
						<i class="fab fa-lg fa-twitter"></i>
					</span>
				</a>

				<div id="navbarBurger" class="navbar-burger burger" data-target="navMenuDocumentation">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>

			<div id="navMenuDocumentation" class="navbar-menu">
				<div class="navbar-start">
					<a class="navbar-item bd-navbar-item-documentation  is-active" href="/documentation">
						<span class="icon has-text-primary">
							<i class="fas fa-book"></i>
						</span>
						<span class="is-hidden-touch is-hidden-widescreen">
							Docs
						</span>
						<span class="is-hidden-desktop-only">
							Documentation
						</span>
					</a>

					
						<a class="navbar-item bd-navbar-item-videos " href="https://bulma.io/videos/">
							<span class="icon has-text-success">
								<i class="fas fa-play-circle"></i>
							</span>

							<span>Videos</span>
						</a>
					
						<a class="navbar-item bd-navbar-item-blog " href="https://bulma.io/blog/">
							<span class="icon bd-has-text-rss">
								<i class="fas fa-rss"></i>
							</span>

							<span>Blog</span>
						</a>
					
						<a class="navbar-item bd-navbar-item-expo " href="https://bulma.io/expo/">
							<span class="icon has-text-star">
								<i class="fas fa-star"></i>
							</span>

							<span>Expo</span>
						</a>
					
						<a class="navbar-item bd-navbar-item-love " href="https://bulma.io/love/">
							<span class="icon has-text-danger">
								<i class="fas fa-heart"></i>
							</span>

							<span>Love</span>
						</a>
					

					<div class="navbar-item has-dropdown is-hoverable">
						
						<a class="navbar-link" href="https://bulma.io/more">
							More
						</a>

						<div id="moreDropdown" class="navbar-dropdown">
							
								<a class="navbar-item " href="https://bulma.io//bulma-start">
									<span>
										<span class="icon has-text-success">
											<i class="fas fa-rocket"></i>
										</span>
										<strong>Bulma start</strong>
										<br>
										A tiny npm package to get started
									</span>
								</a>
								
									<hr class="navbar-divider">
								
							
								
								<a class="navbar-item " href="https://bulma.io//made-with-bulma">
									<span>
										<span class="icon has-text-primary">
											<i class="fas fa-certificate"></i>
										</span>
										<strong>Made with Bulma</strong>
										<br>
										The official community badge
									</span>
								</a>
								
									<hr class="navbar-divider">
								
							
								
								<a class="navbar-item " href="https://bulma.io//alternative-to-bootstrap">
									<span>
										<span class="icon has-text-bootstrap">
											<i class="fas fa-exchange-alt"></i>
										</span>
										<strong>Coming from Bootstrap</strong>
										<br>
										See how Bulma is an alternative to Bootstrap
									</span>
								</a>
								
									<hr class="navbar-divider">
								
							
								
								<a class="navbar-item " href="https://bulma.io//backers">
									<span>
										<span class="icon has-text-patreon">
											<i class="fab fa-patreon"></i>
										</span>
										<strong>Patreon backers</strong>
										<br>
										Everyone who is supporting Bulma
									</span>
								</a>
								
									<hr class="navbar-divider">
								
							
								
								<a class="navbar-item " href="https://bulma.io//extensions">
									<span>
										<span class="icon has-text-orange">
											<i class="fas fa-plug"></i>
										</span>
										<strong>Bulma extensions</strong>
										<br>
										Side projects to enhance Bulma
									</span>
								</a>
								
							
						</div>
					</div>
				</div>

				<div class="navbar-end">
					<a class="navbar-item is-hidden-touch is-hidden-desktop-only" href="https://github.com/jgthms/bulma" target="_blank">
						<span class="icon" style="color: #333;">
							<i class="fab fa-lg fa-github-alt"></i>
						</span>
					</a>

					<a class="navbar-item is-hidden-touch is-hidden-desktop-only" href="https://twitter.com/jgthms" target="_blank">
						<span class="icon" style="color: #55acee;">
							<i class="fab fa-lg fa-twitter"></i>
						</span>
					</a>

					<div class="navbar-item">
						<div class="field is-grouped is-grouped-multiline">
							<p class="control">
								<a class="bd-patreon-button" href="https://www.patreon.com/jgthms" target="_blank">
			<img
			src="https://bulma.io/images/become-a-patron.png"
			srcset="https://bulma.io/images/become-a-patron.png 1x,
							https://bulma.io/images/become-a-patron@2x.png 2x,
							https://bulma.io/images/become-a-patron@3x.png 3x"
			alt="Become a Patron"
			width="148"
			height="36">

		</a>

							</p>
							<p class="control">
								<a class="button is-primary" href="https://github.com/jgthms/bulma/releases/download/0.7.1/bulma-0.7.1.zip">
									<strong>Download</strong>
								</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			</div>
		</nav>















		<!-- <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bulmatypic' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>#site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
