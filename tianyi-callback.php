<?php
include_once 'inc/config.php';
include_once 'inc/TYauth.php';

session_start();

$o = new TYAuthV2(APP_ID, APP_SECRET);

if ($_REQUEST['code']) {
	
	$keys = array();
	$keys['code'] = $_REQUEST['code'];
	$keys['redirect_uri'] = TY_CALL_BACK;
	try {
		$token = $o->getAccessToken( 'code', $keys ) ;
		$_SESSION['ty_token'] = $token;
		$_SESSION['login'] = "天翼用户_". $token['open_id'];
	} catch (Exception $e) {
		
	}
}
//var_dump($_SESSION);
/*if (isset($_SESSION['ty_token']) && $_SESSION['ty_token']['access_token']) {
	header('location:/');
} else {
	header('location:/login.php');
}
*/
