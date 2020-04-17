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
<script>
class ubicacion {
  constructor(latitud,longitud) {
    this.lat = latitud;
    this.long = longitud;
  } 
}
function Dist(lat1, lon1, lat2, lon2) {
     rad = function (x) {
         return x * Math.PI / 180;
     }
 
     var R = 6378.137;//Radio de la tierra en km
     var dLat = rad(lat2 - lat1);
     var dLong = rad(lon2 - lon1);
     var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) + Math.cos(rad(lat1)) * Math.cos(rad(lat2)) * Math.sin(dLong / 2) * Math.sin(dLong / 2);
     var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
     var d = R * c;
     return d.toFixed(2);//Retorna tres decimales
}
function MileageCost(km){
    var calc=km/5.2;
    var total = parseFloat(calc);
    alert(total);
    if(total >= 300){
        var descuento=(calc-(calc*0.5));
        return descuento.toFixed(2);
    }else{
        return calc.toFixed(2);
    }
}
function Opciones(opc){
    //coordenadas de las opciones
    switch(opc) {
    case 1:
        return new ubicacion(9.9333296,-84.0833282);//San Jose, Costa Rica
        break;
    case 2:
        return new ubicacion(8.537981,-80.7821274); //Panama City, Panama
        break;
    case 3:
        return new ubicacion(12.1508,-86.2683); //Manague, Nicaragua
        break;
    case 4:
        return new ubicacion(14.1,-87.2167); //Tegucigalpa, Honduras
        break;
    case 5:
        return new ubicacion(13.69,-89.19); //San Salvador, El Salvador
        break;
    case 6:
        return new ubicacion(15.7834711,-90.2307587); //Guatemala, Guatemala
        break;
    case 7:
        return new ubicacion(17.25,-88.7666702); //Belmopan, Belize
        break;
    case 8:
        return new ubicacion(19.4284706,-99.1276627); //Mexico, Mexico
        break;
    case 9:
        return new ubicacion(38.89511, -77.03637); //Washington dc, USA
        break;
    case 10:
        return new ubicacion(45.41117,-75.69812); //Ottawa, Canada
        break;
    case 11:
        return new ubicacion(45.41117,-75.69812); //Reikiavik, Islandia
        break;
    case 12:
        return new ubicacion(53.33306,-6.24889); //Dublin, Irlanda
        break;
    case 13:
        return new ubicacion(51.5085300,-0.1257400); //Londres, Reino Unido
        break;
    case 14:
        return new ubicacion(40.4165,-3.70256); //Madrid, España
        break;
    case 15:
        return new ubicacion(48.8534,2.3486); //Paris, Francia
        break;
    case 16:
        return new ubicacion(52.52437,13.41053); //Berlin, Alemania
        break;
    case 17:
        return new ubicacion(44.41686,12.21); //Roma, Italia
        break;
    case 18:
        return new ubicacion(47.49801,19.03991); //Bdapest, Hungria
        break;
    case 19:
        return new ubicacion(52.2297707,21.0117798); //Warsaw, Polonia
        break;
    case 20:
        return new ubicacion(53.9000015,27.5666695); //Minsk
        break;
    case 21:
        return new ubicacion(50.45466,30.5238); //Kyiv
        break;
    case 22:
        return new ubicacion(42.69751,23.32415); //Sofia, Bulgaria
        break;
    case 23:
        return new ubicacion(39.91667,32.83333); //Ankara
        break;
    case 24:
        return new ubicacion(55.75222,37.61556); //Moscu
        break;
    case 25:
        return new ubicacion(35.6943893,51.4215088); //Tehran
        break;
    case 26:
        return new ubicacion(30.06263,31.24967); //Cairo
        break;
    case 27:
        return new ubicacion(37.50889,22.37944); //Tripoli
        break;
    case 28:
        return new ubicacion(12.10672,15.0444); //NDjameira
        break;
    case 29:
        return new ubicacion(9.02497,38.74689); //Addis
        break;
    case 30:
        return new ubicacion(-6.1722102,35.7394714); //Dooma
        break;
    case 31:
        return new ubicacion(-24.65451,25.90859); //Gaborone
        break;
    case 32:
        return new ubicacion(-29.31667,27.48333); //Maseru
        break;
    case 33:
        return new ubicacion(3.3499999,101.25); //Kuala
        break;
    case 34:
        return new ubicacion(1.352083,103.8198395); //Singapore
        break;
    case 35:
        return new ubicacion(-35.2834587,149.128067); //Camberra
        break;
    default:
        return new ubicacion(9.9333296,-84.0833282);//San Jose, Costa Rica
        // code block
    }
}
    function cambio(){
        var x = document.getElementById("SeleccionOrigen").selectedIndex;
        var y = document.getElementById("SeleccionDestino").selectedIndex;
        origen=Opciones(x);
        destino=Opciones(y);
        distancia=Dist(origen.lat, origen.long, destino.lat, destino.long);
        cobro=MileageCost(distancia);
        document.getElementById('PRAIS').value = cobro;
        //PRAIS
    }
</script>

<body>

    <div id="NavBar">
        <ul>
            <li><i class="fas fa-home"></i></li>
            <li>Panel de control</li>
            <li>Horarios</li>
            <li class="RightSideTxt"><i class="fas fa-sign-out-alt"></i></li>
            <li id="WelcomeText" class="RightSideTxt">Bienvenido <?php include('../includes/load.username.php');
                                                                    echo $nombreUsuario ?></li>
        </ul>
    </div>
    <div id="TravelImgDiv" class="jumbotron">
        <div id="ReservDiv" class="border p-4">
            <div id="SideLeft">
                <h1 class="STitle display-4">Reservación</h1>
                <hr>
                <form class="form">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Desde: </label>
                        <select name="OrigenSelect" class="form-control destinoClase" id="SeleccionOrigen" 
                        onchange="cambio()">
                            <option selected disabled></option>
                            <?php
                            $Origen = $_POST['OrigenSelect'];
                            $_SESSION['Origen'] = $Origen;                            
                            echo $options ?>
                        </select>
                        <label for="exampleFormControlSelect1">Hasta: </label>
                        <select name="DestinoSelect" class="form-control destinoClase" id="SeleccionDestino"
                        onchange="cambio()">
                            <option selected disabled></option>
                            <?php echo $options ?>
                        </select>
                        <label for="exampleFormControlSelect1">Elige el horario deseado: </label>
                        <select name="HorarioSelect" class="form-control" id="exampleFormControlSelect3">
                            <option selected disabled></option>
                            <?php echo $optionsHorarios ?>
                        </select>
                        <label for="exampleFormControlSelect1">Elige el tren: </label>
                        <select name="TrenSelect" class="form-control" id="exampleFormControlSelect4">
                            <option selected disabled></option>
                            <?php echo $optionsTrenes ?>
                        </select>
                        <label>Precio total:</label>
                        <br>
                        <input name="PriceTxt" id="PRAIS" class="form-control" type="text" value="">
                        
                        <p id="DineroP">USD</p>
                        <!-- <hr id="NinetydegHR"> -->
                    </div>
                    <?php
                    
                    ?>
                    <!-- <br> -->
                    <button type="button" class="btn mt small diagonal">Cancelar</button>
                    <a href="checkout.php"><button type="button" class="btn mt small diagonal">Ir a checkout</button></a>
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