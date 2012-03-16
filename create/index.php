<?php
/**
 * The Create page (I wanted to avoid using .htaccess so I ended up putting this file into a new dir)
*
* @package Business-Card-Generator
*/
global $http, $html, $app;
if ( !defined( 'ROOT' ) ) define( 'ROOT', dirname( dirname( __FILE__ ) ) );
require_once( ROOT.'/m.inc.php' );
tryDef( 'CURRENT_PAGE_NAME', __( 8 ) );
function footer_hook(  ) {
    global $html, $http;
    $html->code( '<script src="'.$http->where( 'bootstrap-tab-js' ).'"></script><script src="'.$http->where( 'app-js' ).'"></script><link rel="stylesheet" href="'.$http->where( 'app-css' ).'">' );
}
tryReq( 'top.inc.php' );
$html->row( array( 'width'=>12, 'title'=>11, 'p'=>array( 12 ) ) );
tryReq( 'app.inc.php' );
if ( !isset( $app ) ) $app = new App(  );
$app->launch(  );
tryReq( 'bottom.inc.php' );
?>