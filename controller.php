<?php

$controller = isset($_GET['c']) ? $_GET['c'] : 'welcome';
if (file_exists($controller. '.php')) {
	
	include $controller. '.php';
	
} else  {
	
	include 'welcome.php';
}


