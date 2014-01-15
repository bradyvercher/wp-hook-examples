<?php
/**
 * Basic procedural hook demonstration.
 */
function hookex_init() {
	hookex_die();
}
add_action( 'init', 'hookex_init' );
