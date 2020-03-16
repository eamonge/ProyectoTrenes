<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Usuario Login</title>
</head>

<body>
    <form action="../includes/new.user.inc.php" method="POST">
        <p>Ingrese sus datos para registrarse</p>
        <p>Ingrese su nombre</p>
        <input type="text" name="txtNombre">
        <p>Ingrese su primer apellido</p>
        <input type="text" name="txtApellido1">
        <p>Ingrese su segundo apellido</p>
        <input type="text" name="txtApellido2">
        <p>Ingrese cédula</p>
        <input type="text" name="txtCed">
        <p>Ingrese su correo electronico</p>
        <input type="text" name="txtCorreo">
        <p>Ingrese su contraseña</p>
        <input type="text" name="txtPWD">
        <p>Reconfirmar contraseña</p>
        <input type="text" name="txtPWDConf">
        <p>Ingrese fecha de nacimiento</p>
        <input type="date" name="txtFDN">
        <p><button>Ingresar</button></p>
    </form>
</body>
<footer>
</footer>

</html>