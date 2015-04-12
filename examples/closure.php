<?php
/**
 * Closure (or anonymous function) demonstration.
 *
 * Closures are a handy way to quickly define callbacks that won't need to be
 * reused or removed in the future. They're available in PHP 5.3+.
 *
 * Note the disadvantages to using closures in this article:
 * @link http://wprealm.com/blog/using-php-closures-in-wordpress/
 *
 * Technically, it IS possible to remove a closure hook callback,
 * but if more than one closure act on the same filter at the same
 * priority you have to make a choice, remove them all, or remove
 * only one (without knowing exactly which)
 *
 * @link http://wordpress.stackexchange.com/a/140989
 */
add_action( 'init', function() {
	hookex_die();
} );
