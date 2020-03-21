<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario nuevo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/diseñoRegistro.css">
</head>

<body>
    <div id="PictureLeftPanel" class="jumbotron">
    </div>
    <div id="ContentPanel" class="jumbotron">
        <section>
            <nav>
                <ul>
                    <a href="../index.php" class="navItem HomeIcn" style="color: #56BDA2"><i class="fas fa-home"></i></a>
                    <a href="LoginUsuario.php" class="navItem">
                        <li class="navList">Ingresar sesión</li>
                    </a>
                    <a href="Horarios2.php" class="navItem">
                        <li class="navList">Horarios</li>
                    </a>
                </ul>
            </nav>
            <br>
            <div id="formulario">
                <h1 class="bd-title">Registro de nuevo cliente</h1>
                <form id="FormularioUsuario" class="border p-3 form">
                    <div class="form-group">
                        <label for="inputnombre">Nombre Completo</label>
                        <input type="text" class="form-control" id="inputnombre" placeholder="Ingrese su nombre">

                        <label for="inputprimerapellido">Primer apellido</label>
                        <input type="text" class="form-control" id="inputprimerapellido" placeholder="Ingrese su primer apellido">

                        <label for="inputsegundoapellido">Segundo apellido</label>
                        <input type="text" class="form-control" id="inputsegundoapellido" placeholder="Ingrese su segundo apellido">

                        <label for="inputFDN">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="inputFDN" placeholder="Ingrese su fecha de nacimiento">

                        <label for="inputemail">Correo electr&oacutenico</label>
                        <input type="email" class="form-control" id="inputemail" placeholder="Ingrese su ID">

                        <label for="">Contrase&ntildea</label>
                        <input type="password" class="form-control" id="inputpassword" placeholder="Ingrese su Contraseña">

                        <label for="">Confirmar contraseña</label>
                        <input type="password" class="form-control" id="inputpassword" placeholder="Ingrese su Contraseña">
                    </div>
                    <!-- <div class="form-group">
                <label for="inputprimerapellido">Primer apellido</label>
                <input type="text" class="form-control" id="inputprimerapellido" placeholder="Ingrese su primer apellido">
            </div> -->
                    <!-- <div class="form-group">
                <label for="inputsegundoapellido">Segundo apellido</label>
                <input type="text" class="form-control" id="inputsegundoapellido" placeholder="Ingrese su segundo apellido">
            </div>
            <div class="form-group">
                <label for="inputFDN">Fecha de nacimiento</label>
                <input type="date" class="form-control" id="inputFDN" placeholder="Ingrese su fecha de nacimiento">
            </div>
            <div class="form-group">
                <label for="inputemail">Correo electr&oacutenico</label>
                <input type="email" class="form-control" id="inputemail" placeholder="Ingrese su ID">
            </div>
            <div class="form-group">
                <label for="">Contrase&ntildea</label>
                <input type="password" class="form-control" id="inputpassword" placeholder="Ingrese su Contraseña">
            </div>
            <div class="form-group">
                <label for="">Confirmar contraseña</label>
                <input type="password" class="form-control" id="inputpassword" placeholder="Ingrese su Contraseña">
            </div> -->
                    <!-- <button type="button" class="btn">Cancelar</button>
                    <button type="button" class="btn">Registrarse</button> -->
                    <!-- <button type="button" class="btn-5">Button 5</button> -->
                    <button class="btn mt small diagonal">Cancelar</button>
                    <button class="btn mt small diagonal">Agregar</button>
                </form>
            </div>
        </section>

    </div>

    <script src="https://kit.fontawesome.com/03593bd05b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>