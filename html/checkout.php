<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/diseño.css">
    <link rel="stylesheet" type="text/css" href="../css/menu.css">
    <title>Checkout</title>
    <script>
      function actualizar(precioTiquete){
        var tiquete = document.getElementById("tiquete").value;
        document.getElementById('total').innerHTML = "$"+(precioTiquete * tiquete);
      }
      function boton(){
        alert("Recivido");
      }
  </script>
</head>
<body>

      <div class="payment">
        
        <h2>Tarjeta Credito</h2>
        <div class="form">
          
          <div class="card space icon-relative">
            <label class="label">Numero de tarjeta:</label>
            <input type="text" class="input" data-mask="0000 0000 0000 0000" placeholder="Numero de tarjeta">
            <i class="far fa-credit-card"></i>
          </div>
          <div class="card-grp space">
            <div class="card-item icon-relative">
              <label class="label">Fecha de vencimiento:</label>
              <input type="text" name="expiry-data" class="input" data-mask="00 / 00"  placeholder="00 / 00">
              <i class="far fa-calendar-alt"></i>
            </div>
            <div class="card-item icon-relative">
              <label class="label">CVC:</label>
              <input type="text" class="input" data-mask="000" placeholder="000">
              <i class="fas fa-lock"></i>
            </div>
          </div>
            
          <div class="card space icon-relative">
            <label class="label">Titular de la tarjeta:</label>
            <input type="text" class="input" placeholder="Titular">
            <i class="fas fa-user"></i>
          </div>
          
          <div class="btn" onclick="boton();">
            Pagar
          </div> 
        </div>
</div>
<div class="preview">
  <!--Aqui se carga la informacion previa a la compra-->
  <h2>Informacion de compra</h2>
  <label class="label2">Usuario:</label>
  <input type="text" class="input" value="Eduardo" disabled>
  <label class="label2">Estacion</label>
  <input type="text" class="input" value="San Jose" disabled>
  <label class="label2">Tren</label>
  <input type="text" class="input" value="Thomas el ChuChu" disabled>
  <label class="label2">Hora de Salida</label>
  <input type="text" class="input" value="09:00" disabled>
  <label class="label2">Hora de Llegada</label>
  <input type="text" class="input" value="10:00" disabled>
  <label class="label2">Destinos</label>
  <input type="text" class="input" value="Cartago" disabled>
  <label class="label2">Tiquetes</label>
  <input type="number" class="input" value="0" id="tiquete" onchange="actualizar(15);//precio del tiquete">
  <center>
  <label class="label2">Total: </label>
  <label class="label2" id="total">$ 0 </label>
  </center>

  

</div>
        
</body>
</html>