<?php
/**
 * Masthead and Top Navbar Functions
 *
 * @package bulmatypic
 * @since 0.5.0
 */

// Custom navbar.
function bulmatypic_navbar() {
	wp_nav_menu( array(
		'theme_location' => 'navbar-left',
		'depth'          => 0,
		'container'      => '',
		'menu_class'     => 'navbar-start',
		'fallback_cb'    => 'Bulmapress_Navwalker::fallback',
		'walker'         => new Bulmatypic_Navwalker(),
	));
	wp_nav_menu( array(
		'theme_location' => 'navbar-right',
		'depth'          => 0,
		'container'      => '',
		'menu_class'     => 'navbar-end',
		'fallback_cb'    => 'Bulmapress_Nvwalker::fallback',
		'walker'         => new Bulmatypic_Navwalker(),
	));
}

function bulmatypic_branding() {
	if ( has_custom_logo() ) :
		the_custom_logo();
	else :
		if ( is_front_page() && is_home() ) :
			echo '<h1 class="site-title navbar-item"><a href="' . esc_url( get_home_url( '/' ) ) . '" rel="home">' . esc_html( get_bloginfo( 'name' ) ) . '</a></h1>';
		else :
			echo '<p class="site-title navbar-item"><a href="' . esc_url( get_home_url( '/' ) ) . '" rel="home">' . esc_html( get_bloginfo( 'name' ) ) . '</a></p>';
		endif;
		$bulmatypic_description = get_bloginfo( 'description', 'display' );
		if ( $bulmatypic_description || is_customize_preview() ) :
			echo '<p class="site-description navbar-item">' . $bulmatypic_description . '</p>'; /* WPCS: xss ok. */
		endif;
	endif;
}
