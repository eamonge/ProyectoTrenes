<?php

session_start();
$Correo = $_SESSION['Correo'];

include('../includes/load.horarios.php');
include('../includes/load.estaciones.php');
include('../includes/load.trenes.php');
// $Destino = $_POST['DestinoSelect'];
// $Horario = $_POST['HorarioSelect'];
// $NumTren = $_POST['TrenSelect'];
// $CostoTotal = $_POST['PriceTxt'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservaciones</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/reservas.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
</head>

<body>

    <div id="NavBar">
        <ul>
            <li><i class="fas fa-home"></i></li>
            <a href="Panel.php"><li>Panel de control</li></a>
            <a href="Horarios2.php"><li>Horarios</li></a>
            <a href="../includes/logout.user.inc.php"><li class="RightSideTxt"><i class="fas fa-sign-out-alt"></i></li></a>
            <li id="WelcomeText" class="RightSideTxt">Bienvenido <?php include('../includes/load.username.php');
                                                                    echo $nombreUsuario ?></li>
        </ul>
    </div>
    <div id="TravelImgDiv" class="jumbotron">
        <div id="ReservDiv" class="border p-4">
            <div id="SideLeft">
                <h1 class="STitle display-4">Reservación</h1>
                <hr>
                <form action="../includes/new.reserva.inc.php" method="POST" class="form">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Desde: </label>
                        <select name="OrigenTxt" class="form-control destinoClase" id="SeleccionOrigen" 
                        onchange="cambio()">
                            <option disabled></option>
                            <?php
                            $Origen = $_POST['OrigenSelect'];
                            $_SESSION['Origen'] = $Origen;                            
                            echo $options ?>
                        </select>
                        <label for="exampleFormControlSelect1">Hasta: </label>
                        <select name="DestinoTxt" class="form-control destinoClase" id="SeleccionDestino"
                        onchange="cambio()">
                            <option disabled></option>
                            <?php echo $options ?>
                        </select>
                        <label for="exampleFormControlSelect1">Elige el horario deseado: </label>
                        <select name="HorarioSalidaTxt" class="form-control" id="HorarioSelect">
                            <option disabled></option>
                            <?php echo $optionsHorarios ?>
                        </select>
                        <label for="exampleFormControlSelect1">Elige el tren: </label>
                        <select name="TrenSelect" class="form-control" id="TrainSct">
                            <option disabled></option>
                            <?php echo $optionsTrenes ?>
                        </select>
                        <label>Precio total:</label>
                        <br>
                        <input name="PrecioTxt" id="PRAIS" class="form-control" type="text" value="">
                        
                        <p id="DineroP">USD</p>
                        <label>Número de tarjeta</label>
                        <input class="form-control secinputs" type="password">
                        <label>Fecha vencimiento</label>
                        <input class="form-control secinputs" type="date">
                        <label>CVC</label>
                        <input class="form-control secinputs" type="password">
                        <label>Titular de la tarjeta</label>
                        <input class="form-control secinputs" type="text">
                    </div>
                    <button type="button" class="btn mt small diagonal">Cancelar</button>
                    <button id="BtnNext" type="submit" class="btn mt small diagonal">Ir a checkout</button>
                </form>
            </div>
            <div id="SideRight">
                <h1 class="STitle display-4">Lorem</h1>
                <hr>
                <!-- <br> -->
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur unde nesciunt aperiam et, harum sunt non fugit porro minus praesentium laborum obcaecati ipsum quaerat, quidem adipisci illum? Officiis, fugit obcaecati.Vitae, voluptatem reprehenderit? Delectus explicabo minima adipisci molestiae natus quis dolore eum neque, asperiores vitae tenetur voluptate iure et facilis, animi inventore dolor consectetur exercitationem laborum ut. Ipsa, reiciendis dolorem!
                </p>
                <!-- <br> -->
            </div>
        </div>
    </div>
    <div id="DestinoDetails" class="jumbotron">
        <h1 class="display-4">¡Disfrute tranquilo!</h1>
        <h3>Visite a nuestros asociados que son encargados de ofrecerles servicios adicionales y mejores paquetes turísticos</h3>
        <div class="card">
            <img class="card-img-top" src="https://www.visitcostarica.com/sites/default/files/s3fs-public/directory/local-agency/GWA.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Green World Adventures</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="../img/euroventure.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Euroventure</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="../img/exodus_travels.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Exodus Travels</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>

    </div>
    <!-- <div class="jumbotron">
        <h1>B</h1>

    </div>
    <div class="jumbotron">
        <h1>C</h1>

    </div> -->

    <!-- <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Bienvenido</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Ir</a>
            <div class="dropdown-menu">
                <a id="OptSobNos" class="dropdown-item" href="Panel.php">Panel de Control</a>
                <a id="OptSobNos" class="dropdown-item" href="#InfoJT">Sobre nosotros</a>
                <a id="OptServ" class="dropdown-item" href="#ServiciosIJT">Servicios</a>
                <a id="OptMejLug" class="dropdown-item" href="#MejoresLugaresJT">Recomendaciones</a>
                <a id="OptComent" class="dropdown-item" href="#CommentariosJT">Comentarios</a>
                <a id="OptComent" class="dropdown-item" href="Reservas.php">Reservaciones</a>
            </div>
        </li>
    </ul> -->

    <script src="../js/reservas.js"></script>
    <script src="https://kit.fontawesome.com/03593bd05b.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>