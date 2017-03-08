<?php
session_start();
 
 	DEFINE('DB_USER','root');
 	DEFINE('DB_HOST','localhost');
 	DEFINE('DB_PASSWORD','');
 	DEFINE('DB_DATABASE','simpleituf');
 
 	$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
	
	$query = "SELECT * FROM adminlogin WHERE username='".$_POST['username']."' AND Password=PASSWORD('".$_POST['password']."');";
	$result = mysqli_query($dbc,$query);
	$row = mysqli_fetch_array($result);
	
	if($row){//Inloggad!
		$_SESSION['loggedin'] = TRUE;
	
		echo "inloggad";
		header("Location: index.php");
	}else{ // inte inloggad
	session_destroy();
	header("Location: index.php");
	}
?>