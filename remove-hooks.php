<?php
/**
 * Demonstrate how the actions can be removed for each example.
 */

/*
 * Procedural
 * removes examples/procedural.php
 */
remove_action( 'init', 'hookex_init' );

/*
 * Instantiated object
 * removes examples/object.php
 */
global $hookex_object; // Declare global just to be safe or use in a different scope.
remove_action( 'init', array( $hookex_object, 'init' ) );

/*
 * Singleton
 * removes examples/singleton.php
 */
$singleton = Hookex_Singleton::get_instance();
remove_action( 'init', array( $singleton, 'init' ) );

/*
 * Static class
 * removes examples/static-class.php
 */
remove_action( 'init', array( 'Hookex_Static_Class', 'init1' ) );
remove_action( 'init', array( 'Hookex_Static_Class', 'init2' ) );

/*
 * Mixed class
 * removes examples/mixed-class.php
 */
global $hookex_mixed;
remove_action( 'init', array( $hookex_mixed, 'init1' ) );
remove_action( 'init', array( 'Hookex_Mixed_Class', 'init2' ) );

/*
 * The example in examples/inaccessible-object.php takes a bit more effort...
 * To accomplish it, we'll create a helper function:
 */

/**
 * Remove an anonymous object filter.
 *
 * @link http://wordpress.stackexchange.com/a/57088 WordPress Stackexchange answer
 *
 * @param string $tag      Hook name.
 * @param string $class    Class name
 * @param string $method   Method name
 * @param int    $priority Hook priority
 */
function hookex_remove_anonymous_object_filter( $tag, $class, $method, $priority = 10 ) {
	global $wp_filter;

	if ( empty( $wp_filter[ $tag ] ) ) {
		return;
	}

	// Clone array so original array pointer is preserved
	$filters = $wp_filter[ $tag ];

	foreach ( $filters as $_priority => $filter ) {
		if ( $_priority !== $priority ) {
			continue;
		}

		foreach ( $filter as $identifier => $function ) {
			if (
				is_array( $function )
				&& is_array( $function['function'] )
				&& is_a( $function['function'][0], $class )
				&& $method === $function['function'][1]
			) {
				remove_filter( $tag, array( $function['function'][0], $method ), $_priority );
			}
		}
	}
}

/*
 * Now we'll remove the filter added by the inaccessible object
 * removes examples/inaccessible-object.php
 */
hookex_remove_anonymous_object_filter( 'init', 'Hookex_Inaccessible_Object', 'init' );

/*
 * The example in examples/closure.php cannot be __reliably__ unhooked. :(
 */
