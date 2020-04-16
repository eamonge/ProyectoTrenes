<?php

session_start();
$Correo = $_SESSION['Correo'];

include('db.connect.inc.php');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$db->query("SET CHARACTER SET utf8");

$UsernameInput = $_POST['UsuarioTxt'];
$PrimApellido = $_POST['PrimApTxt'];
$SegApellido = $_POST['SegApTxt'];
$CedUsuario = $_POST['CedTxt'];
$CorrUsuario = $_POST['CorreoTxt'];
$CntrsnaUsuario = $_POST['ContrsnTxt'];
// $ConfirmarCntrsna = $_POST['txtPWDConf'];
$FechaDeNac = $_POST['FdNTxt'];

$sql = "UPDATE usuarios SET
        Nombre='$UsernameInput'
        ,PrimerApellido='$PrimApellido'
        ,SegundoApellido='$SegApellido'
        ,Cedula='$CedUsuario'
        ,Correo='$CorrUsuario'
        ,Contrasena='$CntrsnaUsuario'
        ,FdN='$FechaDeNac'
        WHERE Correo='$Correo'";

if ($db->query($sql) === TRUE) {
    echo '<script>alert("Usuario modificado exitosamente. Por favor volver a ingresar.")</script>';
    header('Refresh:1;url=/ProyectoTrenes/includes/logout.user.inc.php');
} else {
    echo "Error updating record: " . $db->error;
}

$db->close();
?>