<?php
/**
 * Masthead and Top Navbar Functions
 *
 * @package bulmatypic
 * @since 0.5.0
 */

// Custom menu walker.
function bulmatypic_navbar() {
	$items_wrap = '<span id="%1$s" class="%2$s">%3$s</span>';
		wp_nav_menu( array(
			'theme_location' => 'primary-menu',
			'depth'          => 0,
			'container'      => 'div id="navigation"',
			'menu_class'     => 'navbar-start',
			'fallback_cb'    => 'bulmapress_navwalker::fallback',
			'items_wrap'     => $items_wrap,
			'walker'         => new Bulmatypic_Navwalker(),
		));
		wp_nav_menu( array(
			'theme_location' => 'navbar-right',
			'depth'          => 0,
			'container'      => 'div id="navigation"',
			'menu_class'     => 'navbar-end',
			'items_wrap'     => $items_wrap,
			'fallback_cb'    => 'bulmapress_navwalker::fallback',
			'walker'         => new Bulmatypic_Navwalker(),
		));
}
