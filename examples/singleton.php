<?php
/**
 * Singleton demonstration.
 *
 * A singleton is a class that can only be instantiated once and is accessible
 * everywhere since it's get_instance() method always returns the existing
 * instance.
 */
class Hookex_Singleton {
	private static $instance;

	public static function get_instance() {
		if ( null == self::$instance ) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	private function __construct() {
		add_action( 'init', array( $this, 'init' ) );
	}

	public function init() {
		hookex_die();
	}
}

/*
 * This can be called anywhere to retrieve the instance of the object without
 * worrying about hooks being attached multiple times.
 */
Hookex_Singleton::get_instance();
