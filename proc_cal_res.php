<?php
	include('conexion.php');
	$liga=$_POST['inputLiga'];
	$local=$_POST['inputLocal'];
	$vis=$_POST['inputVis'];
	
	//echo $liga.'<br>'.$local.'<br>'.$localRes.'<br>'.$visRes.'<br>'.$vis;
	
	//Obtenemos datos equipos
	$sqlGetDataTeamA="SELECT * FROM $liga WHERE id='$local' ";
	$sqlGetDataTeamB="SELECT * FROM $liga WHERE id='$vis' ";
	$resGetTeamA=$con->query($sqlGetDataTeamA);
	$resGetTeamB=$con->query($sqlGetDataTeamB);
	$rowGetTeamA=$resGetTeamA->fetch_assoc();
	$rowGetTeamB=$resGetTeamB->fetch_assoc();
	
	//Calculo de probabilidades
	$res="Probabilidades: ";
	$resTmpA=(($rowGetTeamA['jgl']/$rowGetTeamA['jjl'])+($rowGetTeamB['jpv']/$rowGetTeamB['jjv']))/2;
	$res.="\n\tGana local: ".$resTmpA;
	$resTmpB=(($rowGetTeamA['jel']/$rowGetTeamA['jjl'])+($rowGetTeamB['jev']/$rowGetTeamB['jjv']))/2;
	$res.="\n\tEmpate: ".$resTmpB;
	$resTmpC=(($rowGetTeamA['jpl']/$rowGetTeamA['jjl'])+($rowGetTeamB['jgv']/$rowGetTeamB['jjv']))/2;
	$res.="\n\tPierde local: ".$resTmpC;
	
	//Calculo de goles
	$res.="\nGoles:";
	$resTmpGL=(($rowGetTeamA['gfl']/$rowGetTeamA['jjl'])+($rowGetTeamB['gcv']/$rowGetTeamB['jjv']))/2;
	$resTmpGV=(($rowGetTeamA['gcl']/$rowGetTeamA['jjl'])+($rowGetTeamB['gfv']/$rowGetTeamB['jjv']))/2;
	$res.="\n\t".$resTmpGL." vs ".$resTmpGV;
	
	echo $res;
	
	/*$res='<br>';
	$resTmpA=(($rowGetTeamA['jjl']/$rowGetTeamA['jgl'])+($rowGetTeamB['jjv']/$rowGetTeamB['jpv']))/2;
	$res.='Gana local: '.$resTmpA;
	$resTmpB=(($rowGetTeamA['jjl']/$rowGetTeamA['jel'])+($rowGetTeamB['jjv']/$rowGetTeamB['jev']))/2;
	$res.='<br>Empate: '.$resTmpB;
	$resTmpC=(($rowGetTeamA['jjl']/$rowGetTeamA['jpl'])+($rowGetTeamB['jjv']/$rowGetTeamB['jgv']))/2;
	$res.='<br>Pierde local: '.$resTmpC;*/
	
	
?>