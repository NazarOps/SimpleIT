<?php
		
	session_start();
	DEFINE('DB_USER','root');
	DEFINE('DB_HOST','localhost');
	DEFINE('DB_PASSWORD','');
	DEFINE('DB_DATABASE','SimpleITUF');

	$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
	
	mysqli_query($dbc,"CREATE DATABASE IF NOT EXISTS simpleituf;");
	
	$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

	
?>