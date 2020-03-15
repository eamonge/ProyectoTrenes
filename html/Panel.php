<?php
session_start();
// $Username = $_SESSION['Usuario'];
$Correo = $_SESSION['Correo'];
// $UserID = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Panel de Control</title>
    <link rel="stylesheet" href="../css/panel.css">
</head>

<body>
    <div id="SidePanel">
        <div id="HdrDiv">
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
                $nombreUsuario = $row['Nombre'];
            }
            $conn->close();
            ?>
            <p> <i class="fas fa-tachometer-alt"></i> <br>
                Panel de Control
                <br>
                Bienvenido <?php echo $nombreUsuario ?>
            </p>
            <hr>
        </div>
        <div id="SidePanelDv">
            <br><br>
            <li>
                <a id="AjustesLnk">
                    <i class="fas fa-cog" data-toggle="tooltip" data-placement="right" title="Ajustes"></i>
                    <!-- <span>Ajustes</span> -->
                </a>
            </li>
            <br>
            <li id="B">
                <a id="ReservLnk" data-toggle="tooltip" data-placement="right" title="Reservaciones">
                    <i class="fas fa-info-circle"></i>
                    <!-- <span>Reservaciones</span> -->
                </a>
            </li>
            <br>
            <!-- <li id="C">
                <a>
                    <i class="fas fa-id-card"></i>
                    <span>
                        Usuarios
                    </span>
                </a>
            </li>
            <br> -->
            <li id="D">
                <a id="HorariosLnk">
                    <i class="fas fa-calendar-alt" data-toggle="tooltip" data-placement="right" title="Horario"></i>
                    <!-- <span>Horarios</span> -->
                </a>
            </li>
            <br>
            <li id="F">
                <a id="NotifLnk">
                    <!-- <i class="fas fa-sign-out-alt"></i> -->
                    <i class="fas fa-bell" data-toggle="tooltip" data-placement="right" title="Notificaciones"></i>
                    <!-- <span>Notificaciones</span> -->
                </a>
            </li>
            <br>
            <li id="E">
                <a>
                    <i class="fas fa-sign-out-alt" data-toggle="tooltip" data-placement="right" title="Cerrar sesión"></i>
                    <!-- <span>Cerrar sesión</span> -->
                </a>
            </li>
        </div>
        <div id="ContentMenu" class="jumbotron jumbotron-fluid">
            <div id="ContContainer" class="container">
                <section id="AjustesPanel" class="ContenidoSecciones">
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
                    <h1>Ajustes</h1>
                    <hr>
                    <br>
                    <form>
                        <div id="FormGroupAjustes">
                            <h1>Usuario/Nombre:</h1>
                            <input id="Name" type="text" value="<?php echo $nombre ?>">
                            <hr id="One" class="InputBottom">

                            <h1>Primer Apellido:</h1>
                            <input id="PA" type="text" value="<?php echo $PrimApellido ?>">
                            <hr id="Two" class="InputBottom">

                            <h1>Segundo Apellido:</h1>
                            <input id="SA" type="text" value="<?php echo $SegndApellido ?>">
                            <hr id="Three" class="InputBottom">

                            <h1>Cédula:</h1>
                            <input id="CED" type="text" value="<?php echo $Cedula ?>">
                            <hr id="Four" class="InputBottom">


                            <h1>Correo:</h1>
                            <input id="CORR" type="text" value="<?php echo $Correo ?>">
                            <hr id="Five" class="InputBottom">

                            <h1>Contraseña:</h1>
                            <input id="PWD" type="password" value="<?php echo $Contrasena ?>">
                            <hr id="Six" class="InputBottom">

                            <h1>Fecha de Nacimiento:</h1>
                            <input id="DOB" type="text" value="<?php echo $FdN ?>">
                            <hr id="Seven" class="InputBottom">
                        </div>
                        <button id="Submit" type="submit" class="btn btn-primary">Submit</button>
                        <button id="Cancel" type="submit" class="btn btn-Cancel">Cancelar</button>
                        <br><br>
                        <hr id="ButtonHR">
                        <br><br>
                    </form>
                </section>
                <section id="ReservacionesPanel" class="ContenidoSecciones">
                    <h1>Reservaciones</h1>
                    <section id="TestOO" class="TiqueteInfo">
                        <section class="TiqueteInfoPanel1 panelSecciones">
                            <h1><i class="fas fa-3x fa-train"></i>
                                <br>
                                Tren Interamericano
                            </h1>
                        </section>
                        <section class="TiqueteInfoPanel2 panelSecciones">
                            <h3 class="DateH3 tiquetContentLeft">Feb 14 Sun</h3>
                            <br>
                            <h3 class="Station1H3 tiquetContentLeft">San José</h3>
                            <br>
                            <h3 class="Station2H3 tiquetContentLeft">Costa Rica</h3>
                        </section>
                        <section class="TiqueteInfoPanel3 panelSecciones">
                        </section>
                    </section>
                    <section class="TiqueteInfo">
                        <section class="TiqueteInfoPanel1 panelSecciones">
                            <h1><i class="fas fa-3x fa-train"></i>
                                <br>
                                Tren Interamericano
                            </h1>
                        </section>
                        <section class="TiqueteInfoPanel2 panelSecciones">
                        </section>
                        <section class="TiqueteInfoPanel3 panelSecciones">
                        </section>
                    </section>
                    <section class="TiqueteInfo">
                        <section class="TiqueteInfoPanel1 panelSecciones">
                            <h1><i class="fas fa-3x fa-train"></i>
                                <br>
                                Tren Interamericano
                            </h1>
                        </section>
                        <section class="TiqueteInfoPanel2 panelSecciones">
                        </section>
                        <section class="TiqueteInfoPanel3 panelSecciones">
                        </section>
                    </section>
                    <section class="TiqueteInfo">
                        <section class="TiqueteInfoPanel1 panelSecciones">
                            <h1><i class="fas fa-3x fa-train"></i>
                                <br>
                                Tren Interamericano
                            </h1>
                        </section>
                        <section class="TiqueteInfoPanel2 panelSecciones">
                        </section>
                        <section class="TiqueteInfoPanel3 panelSecciones">
                        </section>
                    </section>
                    <section class="TiqueteInfo">
                        <section class="TiqueteInfoPanel1 panelSecciones">
                        </section>
                        <section class="TiqueteInfoPanel2 panelSecciones">
                        </section>
                        <section class="TiqueteInfoPanel3 panelSecciones">
                        </section>
                    </section>
                    <section class="TiqueteInfo">
                        <section class="TiqueteInfoPanel1 panelSecciones">
                        </section>
                        <section class="TiqueteInfoPanel2 panelSecciones">
                        </section>
                        <section class="TiqueteInfoPanel3 panelSecciones">
                        </section>
                    </section>
                    <section class="TiqueteInfo">
                        <section class="TiqueteInfoPanel1 panelSecciones">
                        </section>
                        <section class="TiqueteInfoPanel2 panelSecciones">
                        </section>
                        <section class="TiqueteInfoPanel3 panelSecciones">
                        </section>
                    </section>
                    <section class="TiqueteInfo">
                        <section class="TiqueteInfoPanel1 panelSecciones">
                        </section>
                        <section class="TiqueteInfoPanel2 panelSecciones">
                        </section>
                        <section class="TiqueteInfoPanel3 panelSecciones">
                        </section>
                    </section>
                    <section class="TiqueteInfo">
                        <section class="TiqueteInfoPanel1 panelSecciones">
                        </section>
                        <section class="TiqueteInfoPanel2 panelSecciones">
                        </section>
                        <section class="TiqueteInfoPanel3 panelSecciones">
                        </section>
                    </section>



                    <!-- <section class="tabs">
                    <h1 class="LgoH1">1</h1>
                    </section>
                    <section class="tabs">
                    <h1 class="LgoH1">2</h1>
                </section>
                    <section class="tabs">
                    <h1 class="LgoH1">3</h1>
                </section>
                    <section class="tabs">
                    <h1 class="LgoH1">4</h1> -->
                </section>
                </section>
                <section id="HorariosPanel" class="ContenidoSecciones">
                    <h1>Horarios</h1>
                </section>
                <section id="NotificacionesPanel" class="ContenidoSecciones">
                    <h1>Notificaciones</h1>
                </section>
            </div>
        </div>
        <!-- <div id="ContentMenu">

        </div> -->
        <!-- <h1>Bienvenido</h1>
        <section class="sPanel Sect">
            <h3>
            <i class="fas fa-cog"></i>
                Ajustes</h3>
        </section>
        <section class="sPanel Sect">
            <h3>
            <i class="fas fa-exclamation"></i>
                Reservaciones</h3>
        </section>
        <section class="sPanel Sect">
            <h3>
            <i class="far fa-calendar-alt"></i>
                Horarios</h3>
        </section>
        <section class="sPanel Sect">
            <h3>
            <i class="fas fa-sign-out-alt"></i>
                Cerrar Sesión</h3>
        </section> -->

    </div>
    <script src="../js/index.js"></script>
    <script src="https://kit.fontawesome.com/03593bd05b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>