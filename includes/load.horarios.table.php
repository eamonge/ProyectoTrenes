<?php

include('db.connect.inc.php');

$db->query("SET CHARACTER SET utf8");

$sql = "SELECT T.TrainNo AS 'Número de tren'
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
        
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["Número de tren"] . "</td><td>" . $row["Salida"] . "</td><td>"
                . $row["Nombre Estación"] . "</td><td>" . $row["Estado"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
$db->close();
