<?php
	mb_internal_encoding("UTF-8");
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	session_start();
	
	$message = false;
	
	define("DB_HOST", "localhost");
	define("DB_USER", "root");
	define("DB_PASSWORD", "");
	define("DB_NAME", "landing-order1");
	
	require_once "D:/OpenServer/domains/landingpage1.local/functions/functions.php";
	require_once "D:/OpenServer/domains/landingpage1.local/functions/request.php";
?>