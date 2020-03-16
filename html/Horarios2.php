<!DOCTYPE html>
<html>

<head>
	<title>HorariosUI</title>
</head>

<body>
	<h1>Horarios</h1>
	<section class="tablasubSecc">
		<table>
			<tr>
				<th>Número de tren</th>
				<th>Día de operación</th>
				<th>Fecha</th>
				<th>Llegada</th>
				<th>Salida</th>
				<th>Nombre de la estación</th>
				<th></th>
			</tr>
			<?php
			$conn = mysqli_connect("localhost", "root", "", "testdb");
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			//Establece el charset del display de la info de BD como UTF (soporta tildes)
			$conn->query("SET CHARACTER SET utf8");
			//Consulta BD
			$sql = "SELECT
                        T.TrainNo AS 'Número de tren'
                        ,HO.Fecha AS 'Dia de operación'
                        ,HD.Fecha AS 'Fecha'
                        ,HE.HoraLlegada  AS 'Llegada'
                        ,HE.HoraSalida AS 'Salida'
                        ,ES.NombreEstacion AS 'Nombre estación'
                  FROM trenes AS T
                  INNER JOIN horarios AS HO
                  ON T.Id = HO.idTren
                  INNER JOIN horarioestaciones AS HE
                  ON HO.Horarioid = HE.Id
                  INNER JOIN estaciones AS ES
                  ON HE.IdEstacion = ES.id
                  INNER JOIN horariosdias AS HD
				  ON HD.idHorario = HO.Id;";
				  
				  //Ejecutar el resultado o la consulta
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// output data of each row
				while ($row = $result->fetch_assoc()) {
					echo "<tr><td>" . $row["Número de tren"] . "</td><td>" . $row["Dia de operación"] . "</td><td>"
						. $row["Fecha"] . "</td><td>" . $row["Llegada"] . "</td><td>" . $row["Salida"] . "</td><td>"
						. $row["Nombre estación"] . "</td><td>" . "<i class='fas fa-edit'></i>" . "</td></tr>";
				}
				echo "</table>";
			} else {
				echo "0 results";
			}
			$conn->close();
			?>
		</table>
		<button>Guardar</button>
		<button>Cancelar</button>
	</section>
	<script src="https://kit.fontawesome.com/03593bd05b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>