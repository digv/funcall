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
		var_dump($token);
	} catch (Exception $e) {
		
	}
}

