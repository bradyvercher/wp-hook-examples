<?php
/**
 * Static class example.
 *
 * Static classes are a form of procedural programming. The methods here can be
 * called like regular functions and the class name is the only thing needed
 * to modify hooks.
 */
class Hookex_Static_Class {
	public static function load() {
		add_action( 'init', array( __CLASS__, 'init2' ) );
	}

	public static function init1() {
		hookex_die();
	}

	public static function init2() {
		hookex_die();
	}
}

// Using array syntax with the class name to attach a method.
// An instance of a static class isn't needed to add or remove hooks, just the name.
add_action( 'init', array( 'Hookex_Static_Class', 'init1' ) );

// An alternative for setting up a group of hooks.
Hookex_Static_Class::load();
