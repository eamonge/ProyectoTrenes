<?php

session_start();

$Origen = $_SESSION['Origen'];
$precioSesh = $_SESSION['Price'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/diseño.css">
  <link rel="stylesheet" type="text/css" href="../css/menu.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Checkout</title>
</head>

<body>
  <div id="NavBar">
    <ul>
      <li data-toggle="tooltip" data-placement="bottom" title="Cerrar sesión"><i class="fas fa-sign-out-alt"></i></li>
      <li data-toggle="tooltip" data-placement="bottom" title="Panel de control">Panel de control</i></li>
      <li data-toggle="tooltip" data-placement="bottom" title="Inicio">Inicio</li>
    </ul>

  </div>
  <div id="wrapper" class="jumbotron">
    <div id="ASide" class="jumbotron divsections">
      <h1>Tarjeta de Crédito</h1>
      <hr>
      <form class="p-3 form">
        <div>
          <label>Número de tarjeta</label>
          <input type="password" id="PWDInput">
          <i id="PWDToggle" class="far fa-eye" style="margin: 0; color: #2494A2"></i>
          <br><br>
          <section>
            <label>Fecha de vencimiento</label>
            <input type="date" class="sidebysidecontent">
            <br>
            <label>CVC</label>
            <input type="password" class="sidebysidecontent">
            <br>
          </section>
          <label>Titular de la tarjeta</label>
          <input type="password">
        </div>
        <br>
        <!-- <button id="PayBtn" type="button">Pagar</button> -->
        <button class="btn"><span>Pagar</span>
      </form>
    </div>
    <div id="BSide" class="jumbotron divsections">
      <h1>Información de compra</h1>
      <label>Usuario:</label>
      <input type="text" class="BInputs" value="Nombre" disabled>
      <label>Origen:</label>
      <input type="text" class="BInputs" value="Origen" disabled>
      <label>Destino:</label>
      <input type="text" class="BInputs" value="Destinto" disabled>
      <label>Salida:</label>
      <input type="text" class="BInputs" value="Salida" disabled>
      <label>Precio:</label>
      <input type="text" class="BInputs" value="Precio" disabled>
    </div>

  </div>


  <script src="../js/checkout.js"></script>
  <script src="https://kit.fontawesome.com/03593bd05b.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>