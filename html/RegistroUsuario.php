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
                <form action="../includes/new.user.inc.php" method="POST"  id="FormularioUsuario" class="border p-3 form">
                    <div class="form-group">
                        <label for="inputnombre">Nombre Completo</label>
                        <input type="text" name="txtNombre" class="form-control" id="inputnombre" placeholder="Ingrese su nombre">

                        <label for="inputprimerapellido">Primer apellido</label>
                        <input type="text" name="txtApellido1" class="form-control" id="inputprimerapellido" placeholder="Ingrese su primer apellido">

                        <label for="inputsegundoapellido">Segundo apellido</label>
                        <input type="text" name="txtApellido2" class="form-control" id="inputsegundoapellido" placeholder="Ingrese su segundo apellido">

                        <label for="inputcedula">Cédula</label>
                        <input type="text" name="txtCed" class="form-control" id="inputpassword" placeholder="Ingrese su cédula">

                        <label for="inputemail">Correo electrónico</label>
                        <input type="email" name="txtCorreo" class="form-control" id="inputemail" placeholder="Ingrese su correo">

                        <label for="inputFDN">Fecha de nacimiento</label>
                        <input type="date" name="txtFDN" class="form-control" id="inputFDN" placeholder="Ingrese su fecha de nacimiento">

                        <label for="">Contraseña</label>
                        <input type="password" name="txtPWD" class="form-control" id="inputpassword" placeholder="Ingrese su Contraseña">

                        <label for="">Confirmar contraseña</label>
                        <input type="password" name="txtPWDConf" class="form-control" id="inputpassword" placeholder="Ingrese su Contraseña">
                    </div>
                    <button  class="btn mt small diagonal">Cancelar</button>
                    <button type="submit" class="btn mt small diagonal">Agregar</button>
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