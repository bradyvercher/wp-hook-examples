<?php
/**
 * Inaccessible object demonstration.
 *
 * This class is exactly the same as the Hookex_Object class, but it's not
 * assigned to a variable when a new instance is created.
 */
class Hookex_Inaccessible_Object {
	public function __construct() {
		add_action( 'init', array( $this, 'init' ) );
	}

	public function init() {
		hookex_die();
	}
}

// Notice that the object is instantiated, but it isn't assigned to a variable.
// This means there isn't a reference to manipulate the object, so actions and
// filters cannot be removed.
new Hookex_Inaccessible_Object();

// Recommended approaches:

// If the object is instantiated in a plugin's main scope, it is essentially in
// the global scope and can be accessed later.
// $object = new Hookex_Inaccessible_Object();

// Another option is to store the object reference in the global scope explicitly.
// $GLOBALS['object'] = new Hookex_Inaccessible_Object();
