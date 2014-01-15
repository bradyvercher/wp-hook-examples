<?php
/**
 * Mixed class example.
 *
 * This approach mixes a few of the examples, instantiating an object that
 * contains some static methods.
 */
class Hookex_Mixed_Class {
	public function __construct() {
		add_action( 'init', array( $this, 'init1' ) );
		add_action( 'init', array( __CLASS__, 'init2' ) );
	}

	public static function init1() {
		hookex_die();
	}

	public static function init2() {
		hookex_die();
	}
}

$GLOBALS['hookex_mixed'] = new Hookex_Mixed_Class();
