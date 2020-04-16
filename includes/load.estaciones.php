<?php 

include('db.connect.inc.php');


$db->query("SET CHARACTER SET utf8");

//Query para las estaciones
$query = "SELECT *
        FROM estaciones";
$result = mysqli_query($db, $query);
$options = "";
while ($row = mysqli_fetch_array($result)) {
    $options = $options . "<option value='1'>$row[1], $row[2]</option>";
}

?>