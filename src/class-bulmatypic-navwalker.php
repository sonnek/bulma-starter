<?php
/**
 * Navwalker
 *
 * @package Bulmatypic
 * @since 0.1.0
 */

/**
 * Bulmatypic Navwalker
 *
 * An extended WordPress Navwalker object that displays Bulma
 * framework's Navbar https://bulma.io/ in WordPress. Adapted from
 * Carlo Operio - https://www.linkedin.com/in/carlooperio/
 *
 * @see https://core.trac.wordpress.org/browser/tags/4.9.7/src//wp-includes/class-walker-nav-menu.php
 */
class Bulmatypic_Navwalker extends Walker_Nav_Menu {

	/**
	 * Starts the list before the elements are added.
	 *
	 * @since 0.1.0
	 *
	 *  @see Walker::start_lvl()
	 *
	 *  @param string   $output Used to append additional content (passed by reference).
	 *  @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {

		$output .= "<ul class='navbar-dropdown'>";
	}

	/**
	 *  Starts the element output.
	 *
	 * @since 0.1.0
	 * @see Walker::start_el()
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param WP_Post  $item   Menu item data object.
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 * @param int      $id     Current item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

		$li_classes = 'navbar-item ';

		$has_children = $args->walker->has_children;
		$li_classes  .= $has_children ? ' has-dropdown is-hoverable' : '';

		if ( $has_children ) :
			$output .= "<span class='" . $li_classes . "'>";
			$output .= "\n<li class='navbar-link'><a href='" . $item->url . "'>" . $item->title . '</a></li>';
		else :
			$output .= "<li class='" . $li_classes . "'><a href='" . $item->url . "'>" . $item->title . '</a></li>';
		endif;

		// Adds has_children class to the item so end_el can determine if the current element has children.
		if ( $has_children ) :
			$item->classes[] = 'has_children';
		endif;
	}

	/**
	 * Ends the element output, if needed.
	 *
	 * @since 0.1.0
	 *
	 *  @see Walker::end_el()
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param WP_Post  $item   Page data object. Not used.
	 * @param int      $depth  Depth of page. Not Used.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function end_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

		if (in_array( "has_children", $item->classes) ) :

			$output .= '</span>';
		endif;
		// $output .= '</a></li>';
	}

	/**
	 * Ends the list of after the elements are added.
	 *
	 * @since 0.1.0
	 *
	 * @see Walker::end_lvl()
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	// public function end_lvl ( &$output, $depth = 0, $args = array() ) {

	// 		$output .= "</ul>";
	// }
}
