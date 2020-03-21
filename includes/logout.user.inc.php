<?php
session_start();
// Unset all of the session variables.
unset($_SESSION['Correo']);
// Finally, destroy the session.    
session_destroy();

// Include URL for Login page to login again.
// header("Location: login.php");
echo "<script type='text/javascript'>alert('Has terminado sesión. Por favor volver a ingresar')</script>";
header('Refresh:2;url=/ProyectoTrenes/index.php');
exit;
?>