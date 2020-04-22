<?php

session_start();
$Correo = $_SESSION['Correo'];

include('db.connect.inc.php');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$db->query("SET CHARACTER SET utf8");

$sql = "DELETE FROM usuarios 
WHERE Correo='$Correo'";

if ($db->query($sql) === TRUE) {
    echo '<script>alert("Usuario eliminado exitosamente. ¡Nos vemos pronto!")</script>';
    header('Refresh:1;url=/ProyectoTrenes/includes/logout.user.inc.php');
} else {
    echo "Error updating record: " . $db->error;
}

$db->close();
?>