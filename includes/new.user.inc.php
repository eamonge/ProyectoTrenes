<?php

include('db.connect.inc.php');

$UsernameInput = $_POST['txtNombre'];
$PrimApellido = $_POST['txtApellido1'];
$SegApellido = $_POST['txtApellido2'];
$CedUsuario = $_POST['txtCed'];
$CorrUsuario = $_POST['txtCorreo'];
$CntrsnaUsuario = $_POST['txtPWD'];
$ConfirmarCntrsna = $_POST['txtPWDConf'];
$FechaDeNac = $_POST['txtFDN'];

$HashPwd = hash("sha256", $CntrsnaUsuario);



if ($CntrsnaUsuario == $ConfirmarCntrsna)
{

    $sql = "INSERT INTO usuarios(Nombre, PrimerApellido, SegundoApellido, Cedula, Correo, Contrasena, FdN, TipoUsuario)
    VALUES('$UsernameInput', '$PrimApellido', '$SegApellido', '$CedUsuario', '$CorrUsuario', '$HashPwd', '$FechaDeNac', 0);";

    if (!mysqli_query($db, $sql))
    {
        echo ("Error description: " . mysqli_error($db));
    } else
    {
        echo '<script>alert("Usuario ingresado exitosamente")</script>';
        header('Refresh:1;url=/ProyectoTrenes/html/RegistroUsuario.php');
    }

    // echo "<script> alert('HO'); </script>";
    // header('Refresh:0;url=/ProyectoTrenes/html/RegistroUsuario.php');
} else
{
    echo '"<script>alert("Las contraseñas deben de coincidir")</script>"';
    header('Refresh:1;url=/ProyectoTrenes/html/RegistroUsuario.php');
}

mysqli_close($db);