<?php
/**
 * php environment variables
 */
	error_reporting( E_ALL | E_STRICT );
	ini_set( 'display_errors', 0 );
	ini_set( 'log_errors', 1 );
	ini_set( 'track_errors', 1 );
	ini_set( 'ignore_repeated_errors', 1 );
	ini_set( 'ignore_repeated_soruce', 1 );
	ini_set( 'magic_quotes_gpc', 0 );
	ini_set( 'magic_quotes_runtime', 0 );
	date_default_timezone_set( 'Europe/Amsterdam' );


/**
 * display errors
 * application environment
 */
	if ( ( isset( $_SERVER['PHP_ENV'] ) && $_SERVER['PHP_ENV'] === 'development' ) || php_sapi_name() === 'cli' ) {
		define( 'APPLICATION_ENV', 'development' );
		ini_set( 'display_errors', 1 );
	} else {
		define( 'APPLICATION_ENV', 'production' );
	}

	define( 'APPLICATION_PATH', realpath( __DIR__ ) );
	define( 'APPLICATION_EOL', php_sapi_name() === 'cli' ? PHP_EOL : '<br />' );


/**
 * include paths
 */
	set_include_path(
		'controls' . PATH_SEPARATOR .
		'vendor' . PATH_SEPARATOR .
		get_include_path()
	);


/**
 * autoloader
 */
	require 'vendor/autoload.php';
	include 'index.ctrl.php';
