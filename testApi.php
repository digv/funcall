<?php
include_once 'inc/config.php';
include_once 'inc/TYauth.php';

session_start();

$o = new TYAuthV2(APP_ID, APP_SECRET);
$re = $o -> makeCallWithAccount('18930924030', '18001854030');
var_dump($re);