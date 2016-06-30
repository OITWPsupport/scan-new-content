<?php
/*
Plugin Name: Boise State Scan New Content
Description: Triggers an accessibility scan of each new or updated page and post. Adds an 
admin menu and form for maintaining associated info.
Version: 0.1.7
Author: David Lentz
 */

defined( 'ABSPATH' ) or die( 'No hackers' );

if( ! class_exists( 'Boise_State_Scan_New_Content_Plugin_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}

$updater = new Boise_State_Scan_New_Content_Plugin_Updater( __FILE__ );
$updater->set_username( 'davidmlentz' );
$updater->set_repository( 'scan-new-content' );
/*
	$updater->authorize( 'abcdefghijk1234567890' ); // Your auth code goes here for private repos
*/
$updater->initialize();

