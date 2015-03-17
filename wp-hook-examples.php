<?php
/**
 * Plugin Name: WordPress Hook Examples
 * Description: Examples of various ways hooks can be added within plugins. Try to remove them all. DO NOT ACTIVATE ON A LIVE SITE!
 */

// Don't run in the admin.
if ( is_admin() ) {
	return;
}

/**
 * Helper method to die and display the calling method.
 */
function hookex_die() {
	// Don't die if the user doesn't have the 'manage_options' capability.
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}

	$dbt = debug_backtrace();

	$method  = empty( $dbt[1]['class'] ) ? '' : $dbt[1]['class'] . '::';
	$method .= $dbt[1]['function'] . '()';

	wp_die( 'Hookex strikes again!<br><br><code>' . $method . '</code>' );
}

/**
 * Include the examples.
 *
 * Try removing all the hooks preventing your site from displaying.
 * @link http://codex.wordpress.org/Function_Reference/remove_action
 */
include( dirname( __FILE__ ) . '/examples/procedural.php' );
include( dirname( __FILE__ ) . '/examples/object.php' );
include( dirname( __FILE__ ) . '/examples/singleton.php' );
include( dirname( __FILE__ ) . '/examples/static-class.php' );
include( dirname( __FILE__ ) . '/examples/mixed-class.php' );

/**
 * Examples of hooks that can't be easily manipulated because they're inaccessible.
 */
// include( dirname( __FILE__ ) . '/examples/inaccessible/closure.php' );
// include( dirname( __FILE__ ) . '/examples/inaccessible/inaccessible-object.php' );
