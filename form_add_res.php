<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fermat</title>
	<meta name="description" content="...">
	<meta name="author" content="Luigi Pérez Calzada">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/dashboard.css" rel="stylesheet">
	<link href="css/micss.css" rel="stylesheet">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<?php
		include('conexion.php');
		isset($_GET['liga'])? $liga=$_GET['liga'] : $liga="liga_mx" ;
		$dateNow=date("Y-m-d");
		
		//Obtenemos el nombre de las tablas de la base de datos
		//$sqlGetTables="SELECT TABLE_NAME as name FROM information_schema.TABLES WHERE TABLE_SCHEMA='fermat' ";
		$sqlGetTables="SELECT nombre FROM $ligas ";
		$resGetTables=$con->query($sqlGetTables);
		$optTables='';
		while($rowGetTables = $resGetTables->fetch_assoc()){
			if($liga == $rowGetTables['nombre'])
				$optTables.='<li class="active"><a href="form_add_res.php?liga='.$rowGetTables['nombre'].'">'.$rowGetTables['nombre'].'</a></li>';
			else
				$optTables.='<li><a href="form_add_res.php?liga='.$rowGetTables['nombre'].'">'.$rowGetTables['nombre'].'</a></li>';
		}
	
		//Obtenemos los equipos de la liga
		$sqlGetTeams="SELECT id, nombre FROM $liga ORDER BY nombre";
		$resGetTeams=$con->query($sqlGetTeams);
		$optTeams='<option></option>';
		while($rowGetTeams=$resGetTeams->fetch_assoc()){
			$optTeams.='<option value="'.$rowGetTeams['id'].'">'.$rowGetTeams['nombre'].'</option>';
		} 
		
		//Obtenemos tabla general de equipos
		$sqlGetTeamsData="SELECT * FROM $liga ORDER BY puntos DESC, nombre ASC";
		$resGetTeamsData=$con->query($sqlGetTeamsData);
		$optTeamsData='<table class="table table-hover"><thead><tr><th>#</th><th>Nombre</th><th>JJ</th><th>JJL</th><th>JJV</th><th>JG</th><th>JGL</th><th>JGV</th><th>JE</th><th>JEL</th><th>JEV</th><th>JP</th><th>JPL</th><th>JPV</th><th>GF</th><th>GFL</th><th>GFV</th><th>GC</th><th>GCL</th><th>GCV</th><th>Puntos</th></tr></thead><tbody>';
		$count=1;
		while($rowGetTeamsData=$resGetTeamsData->fetch_assoc()){
			$optTeamsData.='<tr><td>'.$count.'</td><td>'.$rowGetTeamsData['nombre'].'</td>';
			$optTeamsData.='<td><b>'.$rowGetTeamsData['jj'].'</b></td>';
			$optTeamsData.='<td>'.$rowGetTeamsData['jjl'].'</td>';
			$optTeamsData.='<td>'.$rowGetTeamsData['jjv'].'</td>';
			$optTeamsData.='<td><b>'.$rowGetTeamsData['jg'].'</b></td>';
			$optTeamsData.='<td>'.$rowGetTeamsData['jgl'].'</td>';
			$optTeamsData.='<td>'.$rowGetTeamsData['jgv'].'</td>';
			$optTeamsData.='<td><b>'.$rowGetTeamsData['je'].'</b></td>';
			$optTeamsData.='<td>'.$rowGetTeamsData['jel'].'</td>';
			$optTeamsData.='<td>'.$rowGetTeamsData['jev'].'</td>';
			$optTeamsData.='<td><b>'.$rowGetTeamsData['jp'].'</b></td>';
			$optTeamsData.='<td>'.$rowGetTeamsData['jpl'].'</td>';
			$optTeamsData.='<td>'.$rowGetTeamsData['jpv'].'</td>';
			$optTeamsData.='<td><b>'.$rowGetTeamsData['gf'].'</b></td>';
			$optTeamsData.='<td>'.$rowGetTeamsData['gfl'].'</td>';
			$optTeamsData.='<td>'.$rowGetTeamsData['gfv'].'</td>';
			$optTeamsData.='<td><b>'.$rowGetTeamsData['gc'].'</b></td>';
			$optTeamsData.='<td>'.$rowGetTeamsData['gcl'].'</td>';
			$optTeamsData.='<td>'.$rowGetTeamsData['gcv'].'</td>';
			$optTeamsData.='<td><b>'.$rowGetTeamsData['puntos'].'</b></td>';
			$optTeamsData.='</tr>';
			$count++;
		}
		$optTeamsData.='</tbody></table>';
	?>
</head>
<body>
	
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Fermat</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
			<!-- Menú de ligas -->
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ligas <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<?= $optTables; ?>
					</ul>
				</li>
			</ul>
        </div>
      </div>
    </nav>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-md-2 sidebar">
				<ul class="nav nav-sidebar">
					<?= $optTables; ?>
				</ul>
			</div>
		
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Menú de operaciones: <?= $liga; ?></h1>

				<div class="row placeholders">
					<div class="col-xs-24 col-sm-12 placeholder">
						<form id="formResult" class="form-horizontal">
							<input type="hidden" name="inputLiga" value="<?= $liga; ?>">
							<div class="row">
								<div class="col-sm-3">
									<select class="form-control" name="inputLocal" id="inputLocal">
										<?= $optTeams; ?>
									</select>
								</div>
								<div class="col-sm-2">
									<input type="number" name="inputResLocal" id="inputResLocal" class="form-control">
								</div>
								<div class="col-sm-2">
									<h2>VS</h2>
								</div>
								<div class="col-sm-2">
									<input type="number" name="inputResVis" id="inputResVis" class="form-control">
								</div>
								<div class="col-sm-3">
									<select class="form-control" name="inputVis" id="inputVis">
										<?= $optTeams; ?>
									</select>
								</div>
							</div>
							
							<button class="btn btn-primary">Reportar resultado <span class="glyphicon glyphicon-cloud-upload"></span></button>
						</form>
					</div>
				</div>

				<h2 class="sub-header">Tabla general</h2>
					<div class="table-responsive">
						<?= $optTeamsData; ?>
					</div>
			</div>
		</div>
    </div>
	
<script type="text/javascript">
	$(document).ready(function(){
		$('#formResult').validate({
			rules:{
				inputLocal:{required: true},
				inputResLocal:{required: true},
				inputResVis:{required: true},
				inputVis:{required: true}
			},
			messages:{
				inputLocal: "Selecciona el equipo local",
				inputResLocal: "Resultado del equipo local",
				inputResVis: "Resultado del equipo visitante",
				inputVis: "Selecciona el equipo visitante"
			},
			tooltip_options:{
				inputLocal:{trigger: "focus", placement:'bottom'},
				inputResLocal:{trigger: "focus", placement:'bottom'},
				inputResVis:{trigger: "focus", placement:'bottom'},
				inputVis:{trigger: "focus", placement:'bottom'}
			},
			submitHandler: function(form){
				$.ajax({
					type: "POST",
					url: "proc_add_res.php",
					data: $("form#formResult").serialize(),
					success: function(msg){
						//alert(msg);
						if(msg=="true"){
							setTimeout(function(){
								location.reload();
							}, 1000);
						}else{
							alert(msg);
						}
					},
					error: function(){
						alert("Error al añadir resultado");
					}
				});
			}
		});
	});
</script>
	
</body>
</html>