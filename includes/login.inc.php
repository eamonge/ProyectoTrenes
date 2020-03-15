<?php

include('db.connect.inc.php');
$CorreoInput = $_POST['txtUsuario'];
$PWDInput = $_POST['txtClave'];

session_start();

try
{
    $sql = "SELECT *
    FROM usuarios
    WHERE Correo='$CorreoInput' AND Contrasena='$PWDInput'";
    $result = mysqli_query($db, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1)
    {
        $_SESSION['id'] = $CorreoInput;
        if (!empty($_SESSION['id']))
        {
            echo "<script type='text/javascript'>alert('Bienvenido $CorreoInput')</script>";
            // $_SESSION['txtUsuario'] = $UsernameInput;
            $_SESSION['Correo'] = $CorreoInput;
            header('Refresh:0;url=/ProyectoTrenes/html/Panel.php');
        }
    } else {
        echo "<script type='text/javascript'>alert('No existe el usuario $CorreoInput')</script>";
        header('Refresh:0;url=/ProyectoTrenes/html/LoginUsuario.php');
    }


} catch (Exception $ex)
{
    echo('Something went wrong');
}