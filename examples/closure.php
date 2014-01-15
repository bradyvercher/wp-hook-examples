<?php
/**
 * Closure (or anonymous function) demonstration.
 *
 * Closures are a handy way to quickly define callbacks that won't need to be
 * reused or removed in the future. They're available in PHP 5.3+.
 *
 * Note the disadvantages to using closures in this article:
 * @link http://wprealm.com/blog/using-php-closures-in-wordpress/
 */
add_action( 'init', function() {
	hookex_die();
} );
