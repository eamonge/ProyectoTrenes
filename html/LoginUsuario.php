<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/diseñologin.css">
</head>

<body>
    <div id="marco" STYLE="color: orange">
        <form action="../includes/login.inc.php" method="POST">
            <b id="TitLoginPagina">Iniciar sesión</b>
            <p class="marcoTagInfo">Correo</p>
            <input type="text" name="txtUsuario" size="50" placeholder="Username" style="height:20px">
            <p class="marcoTagInfo">Contraseña</p>
            <input type="password" name="txtClave" size="50" placeholder="Password" style="height:20px">
            <br>
            <br>
            <button type="submit">Ingresar</button>
            <button>Cancelar</button>
        </form>
    </div>
    <script src="https://kit.fontawesome.com/03593bd05b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>