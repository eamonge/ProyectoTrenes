<?php
session_start();
// $Username = $_SESSION['Usuario'];
$Correo = $_SESSION['Correo'];
// $UserID = $_SESSION['id'];

$server = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

$conn = mysqli_connect($server, $username, $password, $dbname);
$conn->query("SET CHARACTER SET utf8");

//Query para las estaciones
$query = "SELECT *
        FROM estaciones";
$result = mysqli_query($conn, $query);
$options = "";
while ($row = mysqli_fetch_array($result)) {
    $options = $options . "<option>$row[1], $row[2]</option>";
}

//Query para los horarios
$queryHorarios = " SELECT *
                FROM horarioestaciones";
$resultHorarios = mysqli_query($conn, $queryHorarios);
$optionsHorarios = "";

while ($rowHorarios = mysqli_fetch_array($resultHorarios)) {
    $optionsHorarios = $optionsHorarios . "<option>$rowHorarios[2]</option>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Panel de Control</title>
    <link rel="stylesheet" href="../css/panel.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div id="Navbar">
        <?php

        $conn = mysqli_connect("localhost", "root", "", "testdb");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $conn->query("SET CHARACTER SET utf8");

        $sql = "SELECT idUsuario
        ,Nombre
        ,PrimerApellido
        ,SegundoApellido
        ,Cedula
        ,Correo
        ,Contrasena
        ,FdN
        FROM usuarios
        WHERE Correo = '$Correo';";

        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            $nombre = $row['Nombre'];
            $PrimApellido = $row['PrimerApellido'];
            $SegndApellido = $row['SegundoApellido'];
            $Cedula = $row['Cedula'];
            $Correo = $row['Correo'];
            $Contrasena = $row['Contrasena'];
            $FdN = $row['FdN'];
        }
        $conn->close();
        ?>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="../includes/logout.user.inc.php">Log out</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Ir</a>
                <div class="dropdown-menu">
                    <a id="OptAjustes" class="dropdown-item" href="#">Ajustes</a>
                    <a id="OptReserv" class="dropdown-item" href="#">Reservaciones</a>
                    <a id="OptHorarios" class="dropdown-item" href="#">Horarios</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Bienvenido <?php echo $nombre ?></a>
            </li>
        </ul>
    </div>
    <div id="ContentMenuJT" class="jumbotron">
        <h1 class="display-4">Panel de Control</h1>
        <div id="CMDisplayAjustes" class="jumbotron JTContenido">
            <h1 class="lead">Ajustes de usuario</h1>
            <div id="formularioAjustes">
                <form class="border p-3 form AjustesGenForm" action="../includes/update.userUI.inc.php" method="POST">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="UsuarioTxt" class="form-control" value="<?php echo $nombre ?>">
                        <label>Primer Apellido</label>
                        <input type="text" name="PrimApTxt" class="form-control" value="<?php echo $PrimApellido ?>">
                        <label>Segundo Apellido</label>
                        <input type="text" name="SegApTxt" class="form-control" value="<?php echo $SegndApellido ?>">
                        <label>Cédula</label>
                        <input type="text" name="CedTxt" class="form-control" value="<?php echo $Cedula ?>">
                        <label>Fecha de Nacimiento</label>
                        <input type="date" name="FdNTxt" class="form-control" value="<?php echo $FdN ?>">
                        <label>Correo electrónico</label>
                        <input type="text" name="CorreoTxt" class="form-control" value="<?php echo $Correo ?>">
                        <label>Contraseña</label>
                        <input type="password" name="ContrsnTxt" class="form-control" placeholder="•••">
                        <label>Confirmar contraseña</label>
                        <input type="password" name="ConfCntrsnTxt" class="form-control">
                    </div>
                    <button class="btn mt small diagonal">Cancelar</button>
                    <button class="btn mt small diagonal">Guardar cambios</button>
                </form>
            </div>
        </div>
        <div id="CMDisplayReserv" class="jumbotron JTContenido">
            <h1 class="lead">Reservaciones</h1>
            <div>
                <form class="border p-3 form AjustesGenForm">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Desde: </label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <?php echo $options ?>
                        </select>
                        <label for="exampleFormControlSelect1">Hasta: </label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <?php echo $options ?>
                        </select>
                        <label for="exampleFormControlSelect1">Elige el horario deseado: </label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <?php echo $optionsHorarios ?>
                        </select>
                        <label for="exampleFormControlSelect1">Elige la Subcompañía: </label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <button type="button" class="btn mt small diagonal">Cancelar</button>
                    <a href="checkout.php"><button type="button" class="btn mt small diagonal">Reservar</button></a>
                </form>
            </div>
        </div>
        <div id="CMDisplayHorario" class="jumbotron JTContenido">
            <h1 class="lead">Here goes content Horarios</h1>
        </div>
    </div>
    <script src="../js/index.js"></script>
    <script src="https://kit.fontawesome.com/03593bd05b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>