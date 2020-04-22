<?php
session_start();

include('db.connect.inc.php');

$SearchEmail = $_POST['SearchEmail'];

$_SESSION['SearchEmailInput'] = $SearchEmail;

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
        WHERE Correo = '$SearchEmail';";
$result = $db->query($sql);

while ($row = $result->fetch_assoc()) {
    $nombreUsuario = $row['Nombre'];
}
$db->close();
header('Refresh:0;url=/ProyectoTrenes/html/PanelAUI.php');
?>