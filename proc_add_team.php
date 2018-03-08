<?php

	include('conexion.php');
	$liga=$_POST['inputLiga'];
	$team=$_POST['inputTeam'];
	
	//echo $liga.'<br>'.$team.'<br>';
	
	$sqlInsTeam="INSERT INTO $liga (nombre, jj, jjl, jjv, jg, jgl, jgv, je, jel, jev, jp, jpl, jpv, gf, gfl, gfv, gc, gcl, gcv, puntos) VALUES ('$team', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0) ";
	if($con->query($sqlInsTeam) === TRUE){
		echo "true";
	}else{
		echo "Error<br>".$con->error;
	}
?>