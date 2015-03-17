<?php
/**
 * Demonstrate how the actions can be removed for each example.
 */

// Procedural
// removes examples/procedural.php
remove_action( 'init', 'hookex_init' );

// Instantiated object
// removes examples/object.php
global $hookex_object; // Declare global just to be safe or use in a different scope.
remove_action( 'init', array( $hookex_object, 'init' ) );

// Singleton
// removes examples/singleton.php
$singleton = Hookex_Singleton::get_instance();
remove_action( 'init', array( $singleton, 'init' ) );

// Static class
// removes examples/static-class.php
remove_action( 'init', array( 'Hookex_Static_Class', 'init1' ) );
remove_action( 'init', array( 'Hookex_Static_Class', 'init2' ) );

// Mixed class
// removes examples/mixed-class.php
global $hookex_mixed;
remove_action( 'init', array( $hookex_mixed, 'init1' ) );
remove_action( 'init', array( 'Hookex_Mixed_Class', 'init2' ) );

/*
 * The examples in examples/closure.php and examples/inaccessible-object.php
 * cannot be unhooked. :(
 */
