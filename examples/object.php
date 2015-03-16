<?php
/**
 * Object instance demonstration.
 *
 * A basic example of instantiating an object and assigning it to a global variable.
 */
class Hookex_Object {
	public function __construct() {
		add_action( 'init', array( $this, 'init' ) );
	}

	public function init() {
		hookex_die();
	}
}

// Plugins are generally loaded in the global scope, however, in some cases they
// may be loaded within a particular function or method's scope, so it's a good
// idea to explicitly assign the main plugin object instance to a global
// variable if you want it to be accessible elsewhere.
$GLOBALS['hookex_object'] = new Hookex_Object();
