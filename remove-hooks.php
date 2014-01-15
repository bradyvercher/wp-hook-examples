<?php
/**
 * Demonstrate how the actions can be removed for each example.
 */

// Procedural
remove_action( 'init', 'hookex_init' );

// Instantiated object
global $hookex_object; // Declare global just to be safe or use in a different scope.
remove_action( 'init', array( $hookex_object, 'init' ) );

// Singleton
$singleton = Hookex_Singleton::get_instance();
remove_action( 'init', array( $singleton, 'init' ) );

// Static class
remove_action( 'init', array( 'Hookex_Static_Class', 'init1' ) );
remove_action( 'init', array( 'Hookex_Static_Class', 'init2' ) );

// Mixed class
global $hookex_mixed;
remove_action( 'init', array( $hookex_mixed, 'init1' ) );
remove_action( 'init', array( 'Hookex_Mixed_Class', 'init2' ) );
