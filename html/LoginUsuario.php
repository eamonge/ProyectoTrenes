<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Usuario Login</title>
</head>

<body>
    <div>
        <form action="../includes/login.inc.php" method="POST">
            <p>Ingrese sus datos para iniciar sesion</p>
            <p>Ingrese su Usuario <input type="text" name="txtUsuario"></p>
            <p>Ingrese su clave <input type="password" name="txtClave"></p>
            <p><button onclick="Login(txtUsuario.value,txtClave.value)">Ingresar</button></p>
        </form>
    </div>

</body>
<footer>
</footer>

</html>