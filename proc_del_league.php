<?php

	include('conexion.php');
	$liga=$_POST['inputLiga'];
	//echo $liga.'<br>';
	
	$sqlGetIds="SELECT id FROM $liga ";
	$resGetIds=$con->query($sqlGetIds);
	$ban=false;
	$error='';
	if($resGetIds->num_rows > 0){
		while($rowGetIds=$resGetIds->fetch_assoc()){
			$id=$rowGetIds['id'];
			$sqlUpdTeam="UPDATE $liga SET jj='0', jjl='0', jjv='0', jg='0', jgl='0', jgv='0', je='0', jel='0', jev='0', jp='0', jpl='0', jpv='0', gf='0', gfl='0', gfv='0', gc='0', gcl='0', gcv='0', puntos='0' WHERE id='$id' ";
			if($con->query($sqlUpdTeam) === TRUE){
				$ban=true;
			}else{
				$ban=false;
				$error.='<br>'.$con->error;
				break;
			}
		}
	}else{
		echo "Error no existen equipos en ésta liga.";
	}
	if($ban) echo "true";
	else echo "Error al vaciar la tabla".$error;
?>