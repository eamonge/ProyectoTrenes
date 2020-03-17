<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/diseño.css">
    <link rel="stylesheet" type="text/css" href="../css/menu.css">
    <title>Checkout</title>
</head>
<body>

      <div class="payment">
        
        <h2>Tarjeta Credito</h2>
        <div class="form">
          
          <div class="card space icon-relative">
            <label class="label">Numero de tarjeta:</label>
            <input type="text" class="input" data-mask="0000 0000 0000 0000" placeholder="Card Number">
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
          <div class="btn">
            Pagar
          </div> 
        </div>
</div>
<div class="preview">
  <h2>Informacion de compra</h2>
  <label class="label">Usuario:</label>
  <input type="text" class="input">
  <label class="label">Estacion</label>
  <input type="text" class="input">
  <label class="label">Tren</label>
  <input type="text" class="input">
  <label class="label">Hora de Salida</label>
  <input type="text" class="input">
  <label class="label">Hora de Entrada</label>
  <input type="text" class="input">
  <label class="label">Monto</label>
  <input type="text" class="input">

</div>
        
</body>
</html>