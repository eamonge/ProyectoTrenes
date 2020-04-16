<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Horarios</title>
	<link rel="stylesheet" href="../css/estiloHorarios.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
	<header>
		<!-- <h1>Horarios</h1> -->
		<nav>
			<ul>
				<a href="../index.php" class="navItem HomeIcn"><i class="fas fa-home"></i></a>
				<a href="LoginUsuario.php" class="navItem">
					<li class="navList">Ingresar sesión</li>
				</a>
			</ul>
		</nav>
	</header>
	<section class="tablasubSecc">
		<form action="../includes/TS.insertTable.inc.php" method="POST">
			<table name="TBL" class="table">
				<tr>
					<th>Número de tren</th>
					<th>Hora de salida</th>
					<th>Nombre de la estación</th>
					<th>Estado de viaje</th>
				</tr>
				<?php
				include('../includes/load.horarios.table.php');
				?>
			</table>
			<button type="submit">Test</button>
		</form>
	</section>
	<script src="https://kit.fontawesome.com/03593bd05b.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>