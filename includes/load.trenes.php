<?php

include('db.connect.inc.php');

$db->query("SET CHARACTER SET utf8");

$queryTrenes = " SELECT *
                FROM trenes";
$resultTrenes = mysqli_query($db, $queryTrenes);
$optionsTrenes = "";

while ($rowTrenes = mysqli_fetch_array($resultTrenes)) {
    $optionsTrenes = $optionsTrenes . "<option>$rowTrenes[1]</option>";
}

?>