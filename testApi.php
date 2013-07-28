<?php
include_once 'inc/config.php';
include_once 'inc/TYauth.php';

session_start();
if (isset ( $_SESSION ['login'] ) && !empty($_SESSION ['login'])) {

} else {
	header ( 'location:/login.php' );
}

if (isset ( $_GET ['calling'] ) && $_GET ['called']) {
	$o = new TYAuthV2 ( APP_ID, APP_SECRET );
	$re = $o->makeCallWithAccount ( $_GET ['calling'], $_GET ['called'] );
	var_dump($re);

} else  {
	echo 'test';
}