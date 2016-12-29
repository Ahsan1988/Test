<?php
/*
Plugin Name: Memberium
Plugin URI: http://www.memberium.com
Description: Provide membership site functions for WordPress.
Version: 2.44.11
Author: David Bullock
Author URI: http://www.memberium.com/
License: Copyright (c) 2012, 2013, 2014, 2015 David Bullock
Text Domain: memberium
*/




if ( !defined( 'ABSPATH' ) ) {
	die();
}

if ( extension_loaded( 'IonCube Loader' ) && phpversion() >= '5.3' ) {
	define( 'MEMBERIUM_VERSION', '2.44.11' );
	define( 'MEMBERIUM_HOME', __FILE__ );
	require_once dirname( __FILE__ ) . '/membershipcore_class.php';
}
else {
	if ( is_admin() ) {
		if ( phpversion() < '5.3' ) {
			echo 'PHP 5.3 or newer is required.  You are running PHP v' . phpversion() . '.  Memberium disabled.';
			return;
		}
		if ( ! extension_loaded( 'IonCube Loader' ) ) {
			echo 'IonCube is required, but is not installed or available.  Memberium disabled.';
			return;
		}
	}
	else {
		return;
	}
}

