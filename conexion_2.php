<?php
	
	date_default_timezone_set('America/Mexico_City');
	$host="localhost";
	$user="puraslin_pierre";
	$pass="Cf3c5c4g3Cc6Ag2d6";
	$db="puraslin_fermat";
	$con=mysqli_connect($host, $user, $pass, $db);
	if($con->connect_error){
		die("Connection failed: ".$con->connect_error);
	}
	//echo 'Hola';
	
	$mx="liga_mx";
	$ligas="ligas";
?>