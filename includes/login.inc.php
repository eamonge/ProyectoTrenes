<?php

include('db.connect.inc.php');

$UsernameInput = $_POST['txtUsuario'];
$PWDInput = $_POST['txtClave'];

session_start();

try
{
    $sql = "SELECT *
    FROM usuarios
    WHERE Nombre='$UsernameInput' AND Contrasena='$PWDInput'";
    $result = mysqli_query($db, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1)
    {
        $_SESSION['id'] = $UsernameInput;
        if (!empty($_SESSION['id']))
        {
            echo "<script type='text/javascript'>alert('Bienvenido $UsernameInput')</script>";
            $_SESSION['Usuario'] = $UsernameInput;
            header('Refresh:0;url=/ProyectoTrenes/html/Panel.php');
        }
    } else {
        echo "<script type='text/javascript'>alert('No existe el usuario $UsernameInput')</script>";
        header('Refresh:0;url=/ProyectoTrenes/html/LoginUsuario.php');
    }


} catch (Exception $ex)
{
    echo('Something went wrong');
}