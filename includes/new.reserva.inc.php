<?php

include('db.connect.inc.php');

$UsernameInput = $_POST['UsuarioTxt'];
$OrigenViaje = $_POST['OrigenTxt'];
$DestinoViaje = $_POST['DestinoTxt'];
$SalidaEstacion = $_POST['HorarioSalidaTxt'];
$PrecioViaje = $_POST['PrecioTxt'];
// $Hora = $_POST['HorarioSelect'];

$sql = "INSERT INTO reservaciones2(NombreCliente, EstacionInicio, EstacionFinal, HorarioSalida, PrecioViaje)
    VALUES ('$UsernameInput', '$OrigenViaje', '$DestinoViaje', '$SalidaEstacion', '$PrecioViaje');";

    if (!mysqli_query($db, $sql))
    {
        echo ("Error description: " . mysqli_error($db));
    } else
    {
        echo '<script>alert("Reserva ingresado exitosamente")</script>';
        header('Refresh:0;url=/ProyectoTrenes/html/Reservas.php');
    }

    // echo "<script> alert('HO'); </script>";
    // header('Refresh:0;url=/ProyectoTrenes/html/RegistroUsuario.php');

mysqli_close($db);






?>