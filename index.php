<?php
session_start();

if (isset($_SESSION['login']) && $_SESSION['login']) {
	
} else {
	header('location:/login.php');
}
