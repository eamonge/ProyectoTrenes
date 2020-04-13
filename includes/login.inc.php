<?php

//Llama al archivo conexción BD
include('db.connect.inc.php');

//Agarra las variable del correo + contraseña
$CorreoInput = $_POST['txtUsuario'];

//Variable contraseña
$PWDInput = $_POST['txtClave'];
$hash = hash("sha256", $PWDInput);


//Inicia las sesiones
session_start();

//Try catch; medida preventiva ante caidas en conexción u otros
try
{
    /*
    Se hace consulta a la BD 
    Busca el usuario que tenga correo y contraseña ingresada
    */
    $sql = "SELECT Nombre
                  ,Contrasena
                  ,TipoUsuario
    FROM usuarios
    WHERE Correo='$CorreoInput' AND Contrasena='$hash'";

    //Establece conexción y ejecuta la consulta
    $result = mysqli_query($db, $sql);

    //
    $count = mysqli_fetch_array($result);

    $_SESSION['type'] = $count['TipoUsuario'];
    $_SESSION['id'] = $CorreoInput;

    if (!empty($_SESSION['id'])) {    
        
        if ($_SESSION['type'] == 1)
        {
            echo "<script type='text/javascript'>alert('Bienvenido $CorreoInput')</script>";
            // $_SESSION['txtUsuario'] = $UsernameInput;
            $_SESSION['Correo'] = $CorreoInput;
            header('Refresh:2;url=/ProyectoTrenes/html/LandingAUI.php');
            
        } else 
        {
            echo "<script type='text/javascript'>alert('Bienvenido $CorreoInput')</script>";
            // $_SESSION['txtUsuario'] = $UsernameInput;
            $_SESSION['Correo'] = $CorreoInput;
            header('Refresh:2;url=/ProyectoTrenes/html/LoggedUserindex.php');
        }
    }
    else {
        echo "<script type='text/javascript'>alert('Usuario o contraseña no válida')</script>";
        header('Refresh:5;url=/ProyectoTrenes/html/LoginUsuario.php');
    }
} catch (Exception $ex)
{
    echo('Something went wrong');
}