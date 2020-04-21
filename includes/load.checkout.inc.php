<?php

$UsernameInput = $_POST['UsuarioTxt'];
$OrigenViaje = $_POST['OrigenTxt'];
$DestinoViaje = $_POST['DestinoTxt'];
$SalidaEstacion = $_POST['HorarioSalidaTxt'];
$PrecioViaje = $_POST['PrecioTxt'];

$_SESSION['Origen'] = $OrigenViaje;

?>