<?php
/**
 * Bootstrap PHPUnit tests.
 *
 * @package Two_Factor
 */

// Composer autoloader must be loaded before WP_PHPUNIT__DIR will be available.
require_once dirname( __DIR__ ) . '/vendor/autoload.php';

// Give access to tests_add_filter() function.
require_once getenv( 'WP_PHPUNIT__DIR' ) . '/includes/functions.php';

// Activate this plugin.
tests_add_filter(
	'muplugins_loaded',
	function() {
		require dirname( __DIR__ ) . '/two-factor.php';
	}
);

// Start up the WP testing environment.
require getenv( 'WP_PHPUNIT__DIR' ) . '/includes/bootstrap.php';
