<?php
session_start();

include_once 'inc/config.php';
include_once 'inc/TYauth.php';

$o = new TYAuthV2(APP_ID, APP_SECRET);

if ($_REQUEST['code']) {
	
	$keys = array();
	$keys['code'] = $_REQUEST['code'];
	$keys['redirect_uri'] = TY_CALL_BACK;
	try {
		$token = $o->getAccessToken( 'code', $keys ) ;
		$_SESSION['ty_token'] = $token;
	} catch (Exception $e) {
		
	}
}

if (isset($_SESSION['ty_token']) && $_SESSION['ty_token']['access_token']) {
	header('location:/');
} else {
	header('location:/login.php');
}

