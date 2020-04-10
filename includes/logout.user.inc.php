<?php
session_start();

// Unset all of the session variables.
unset($_SESSION['Correo']);

// Finally, destroy the session.    
session_destroy();

echo "<script type='text/javascript'>alert('Has terminado sesión. Por favor volver a ingresar')</script>";
header('Refresh:2;url=/ProyectoTrenes/index.php');
exit;
?>