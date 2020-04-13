<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="../css/estiloHorarios.css">
</head>

<body>
    <form action="../includes/TS.insertTable.inc.php" method="POST">
        <table name="TBL" class="table">
            <!-- <tr>
					<th>Número de tren</th>
					<th>Salida</th>
					<th>Nombre de la estación</th>
					<th>Estado</th>
				</tr> -->
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
						,HE.HoraSalida AS 'Salida'
						,ES.NombreEstacion AS 'Nombre Estación'
						,CASE
							WHEN T.Estado = 0 THEN 'A Tiempo'
							ELSE 'Atrasado'
						END AS 'Estado'
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
                    echo "<tr><td>" . $row["Número de tren"] . "</td><td>" . $row["Salida"] . "</td><td>"
                        . $row["Nombre Estación"] . "</td><td>" . $row["Estado"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        <!-- </table> -->
        <button type="submit">Test</button>
    </form>
</body>

</html>