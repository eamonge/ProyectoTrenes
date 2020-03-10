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
    <ul id="menu">
        <li><input type="checkbox" name="list" id="nivel1-1"><label for="nivel1-1">Credit Card</label>
        <ul class="interior">
            <li>
              <div class="wrapper">
                <div class="payment">
                  
                  <h2>Credit Card</h2>
                  <div class="form">
                    
                    <div class="card space icon-relative">
                      <label class="label">Card number:</label>
                      <input type="text" class="input" data-mask="0000 0000 0000 0000" placeholder="Card Number">
                      <i class="far fa-credit-card"></i>
                    </div>
                    <div class="card-grp space">
                      <div class="card-item icon-relative">
                        <label class="label">Expiry date:</label>
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
                      <label class="label">Card holder:</label>
                      <input type="text" class="input" placeholder="Coding Market">
                      <i class="fas fa-user"></i>
                    </div>
                    <div class="btn">
                      Pay
                    </div> 
                    
                  </div>
                </div>
              </div>
            </li>
        </ul>
        </li>
        <li><input type="checkbox" name="list" id="nivel1-2"><label for="nivel1-2">PayPal</label>
        <ul class="interior">
            <li>a</li>
        </ul>
        </li>
    </ul>
</body>
</html>