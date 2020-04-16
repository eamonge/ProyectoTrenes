<?php

include('db.connect.inc.php');

if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$db->query("SET CHARACTER SET utf8");

$sql = "SELECT idUsuario
              ,Nombre
              ,PrimerApellido
              ,SegundoApellido
              ,Cedula
              ,Correo
              ,Contrasena
              ,FdN
        FROM usuarios
        WHERE Correo = '$Correo';";
$result = $db->query($sql);

while ($row = $result->fetch_assoc()) {
    $nombreUsuario = $row['Nombre'];
}
$db->close();
?>