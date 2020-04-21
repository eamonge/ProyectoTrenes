// var toggle = document.getElementById('PWDToggle');
// var inputpwd = document.getElementById("PWDInput");

// toggle.addEventListener('click', function(){
//     if (inputpwd === "password")
//     {
//         inputpwd.type = "text";
//     } else 
//     {
//         inputpwd.type = "password";
//     }
// });

var Origen = document.getElementById('OrigenOutput');
var Destino = document.getElementById('DestinOutput');
var Salida = document.getElementById('SalidaOutput');
var Precio = document.getElementById('PrecioOutput');

console.log(localStorage.key(0));
console.log(localStorage.key(1));
console.log(localStorage.key(2));
console.log(localStorage.key(3));
console.log(localStorage.key(4));

var testkey = localStorage.key(0);

// Origen.value = `${localStorage.getItem('Origin')}`;
Destino.value = `${localStorage.getItem('Destiny')}`;
Salida.value = `${localStorage.getItem('Horario')}`;
Precio.value = `${localStorage.getItem('Price')}`;


for (var i = 0; i < localStorage.length; i++)
{
    var key = localStorage.key(i); 
    var value = localStorage.getItem(key); 
    
    Origen.innerHTML += `${key}: ${value}`;
}

