<?php
/**
 * This page should handle all of the import requests.
 *
 * @package Business-Card-Generator
 */
global $http, $html, $app;
if ( !defined( 'ROOT' ) ) define( 'ROOT', dirname( __FILE__ ) );
require_once( ROOT.'/m.inc.php' );
tryDef( 'CURRENT_PAGE_NAME', false );
if ( !isset( $app ) ) $app = new App(  );
// Import requests can now be handled.
?>