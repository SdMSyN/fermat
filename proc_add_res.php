<?php
	include('conexion.php');
	$liga=$_POST['inputLiga'];
	$local=$_POST['inputLocal'];
	$resA=$_POST['inputResLocal'];
	$resB=$_POST['inputResVis'];
	$vis=$_POST['inputVis'];
	
	//echo $liga.'<br>'.$local.'<br>'.$localRes.'<br>'.$visRes.'<br>'.$vis;
	
	//Obtenemos datos equipos
	$sqlGetDataTeamA="SELECT * FROM $liga WHERE id='$local' ";
	$sqlGetDataTeamB="SELECT * FROM $liga WHERE id='$vis' ";
	$resGetTeamA=$con->query($sqlGetDataTeamA);
	$resGetTeamB=$con->query($sqlGetDataTeamB);
	$rowGetTeamA=$resGetTeamA->fetch_assoc();
	$rowGetTeamB=$resGetTeamB->fetch_assoc();
	
	$sqlUpdResA="UPDATE $liga SET ";
	$sqlUpdResB="UPDATE $liga SET ";
	//Si gana el equipo local
	if($resA > $resB){
		$jjA=$rowGetTeamA['jj']+1; $jjLA=$rowGetTeamA['jjl']+1; $jgA=$rowGetTeamA['jg']+1; $jgLA=$rowGetTeamA['jgl']+1; $gfA=$rowGetTeamA['gf']+$resA; $gfLA=$rowGetTeamA['gfl']+$resA; $gcA=$rowGetTeamA['gc']+$resB; $gcLA=$rowGetTeamA['gcl']+$resB; $pts=$rowGetTeamA['puntos']+3;
		
		$jjB=$rowGetTeamB['jj']+1; $jjVB=$rowGetTeamB['jjv']+1; $jpB=$rowGetTeamB['jp']+1; $jpVB=$rowGetTeamB['jpv']+1; $gfB=$rowGetTeamB['gf']+$resB; $gfVB=$rowGetTeamB['gfv']+$resB; $gcB=$rowGetTeamB['gc']+$resA; $gcVB=$rowGetTeamB['gcv']+$resA;
		
		$sqlUpdResA.="jj='$jjA', jjl='$jjLA', jg='$jgA', jgl='$jgLA', gf='$gfA', gfl='$gfLA', gc='$gcA', gcl='$gcLA', puntos='$pts' WHERE id='$local' ";
		$sqlUpdResB.="jj='$jjB', jjv='$jjVB', jp='$jpB', jpv='$jpVB', gf='$gfB', gfv='$gfVB', gc='$gcB', gcv='$gcVB' WHERE id='$vis' ";
	}else if($resA == $resB){ //Si es un empate
		$jjA=$rowGetTeamA['jj']+1; $jjLA=$rowGetTeamA['jjl']+1; $jeA=$rowGetTeamA['je']+1; $jeLA=$rowGetTeamA['jel']+1; $gfA=$rowGetTeamA['gf']+$resA; $gfLA=$rowGetTeamA['gfl']+$resA; $gcA=$rowGetTeamA['gc']+$resB; $gcLA=$rowGetTeamA['gcl']+$resB; $ptsA=$rowGetTeamA['puntos']+1;
		
		$jjB=$rowGetTeamB['jj']+1; $jjVB=$rowGetTeamB['jjv']+1; $jeB=$rowGetTeamB['je']+1; $jeVB=$rowGetTeamB['jev']+1; $gfB=$rowGetTeamB['gf']+$resB; $gfVB=$rowGetTeamB['gfv']+$resB; $gcB=$rowGetTeamB['gc']+$resA; $gcVB=$rowGetTeamB['gcv']+$resA; $ptsB=$rowGetTeamB['puntos']+1;
		
		$sqlUpdResA.="jj='$jjA', jjl='$jjLA', je='$jeA', jel='$jeLA', gf='$gfA', gfl='$gfLA', gc='$gcA', gcl='$gcLA', puntos='$ptsA' WHERE id='$local' ";
		$sqlUpdResB.="jj='$jjB', jjv='$jjVB', je='$jeB', jev='$jeVB', gf='$gfB', gfv='$gfVB', gc='$gcB', gcv='$gcVB', puntos='$ptsB' WHERE id='$vis' ";
	}else if($resA < $resB){ //Si gana el equipo visitante
		$jjA=$rowGetTeamA['jj']+1; $jjLA=$rowGetTeamA['jjl']+1; $jpA=$rowGetTeamA['jp']+1; $jpLA=$rowGetTeamA['jpl']+1; $gfA=$rowGetTeamA['gf']+$resA; $gfLA=$rowGetTeamA['gfl']+$resA; $gcA=$rowGetTeamA['gc']+$resB; $gcLA=$rowGetTeamA['gcl']+$resB;
		
		$jjB=$rowGetTeamB['jj']+1; $jjVB=$rowGetTeamB['jjv']+1; $jgB=$rowGetTeamB['jg']+1; $jgVB=$rowGetTeamB['jgv']+1; $gfB=$rowGetTeamB['gf']+$resB; $gfVB=$rowGetTeamB['gfv']+$resB; $gcB=$rowGetTeamB['gc']+$resA; $gcVB=$rowGetTeamB['gcv']+$resA; $ptsB=$rowGetTeamB['puntos']+3;
		
		$sqlUpdResA.="jj='$jjA', jjl='$jjLA', jp='$jpA', jpl='$jpLA', gf='$gfA', gfl='$gfLA', gc='$gcA', gcl='$gcLA' WHERE id='$local' ";
		$sqlUpdResB.="jj='$jjB', jjv='$jjVB', jg='$jgB', jgv='$jgVB', gf='$gfB', gfv='$gfVB', gc='$gcB', gcv='$gcVB', puntos='$ptsB' WHERE id='$vis' ";
	}else{
		echo "Error no contemplado.";
	}
	
	
	if($con->query($sqlUpdResA) === TRUE && $con->query($sqlUpdResB) === TRUE){
		echo "true";
	}else{
		echo "Error<br>".$con->error;
	}
	
?>