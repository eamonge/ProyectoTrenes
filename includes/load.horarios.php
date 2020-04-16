<?php

include('db.connect.inc.php');

$db->query("SET CHARACTER SET utf8");

$queryHorarios = " SELECT *
                FROM horarioestaciones";
$resultHorarios = mysqli_query($db, $queryHorarios);
$optionsHorarios = "";

while ($rowHorarios = mysqli_fetch_array($resultHorarios)) {
    $optionsHorarios = $optionsHorarios . "<option>$rowHorarios[1]</option>";
}

?>