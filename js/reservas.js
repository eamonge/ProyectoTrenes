// var sel = document.getElementById('SeleccionOrigen');
// var opt = sel.options[sel.selectedIndex];

// var sel2 = document.getElementById('SeleccionDestino');
// var opt2 = sel.options[sel.selectedIndex];

var precioViaje = document.getElementById('PRAIS');
precioViaje.value = '350';

// sel.addEventListener('click', function(){
//     TestSelect();
// });

var selectGroup = document.getElementsByClassName('destinoClase');

for (var i = 1; i < selectGroup.length; i++)
{
    selectGroup[i].addEventListener('change', function(){
        TestSelect();
    });
}

// sel2.addEventListener('click', function(){
//     TestSelect();
// });

function MileageCost(km)
{
    var calc = (km / 3.2);
    var total = parseFloat(calc);

    if (total >= 300)
    {
        var descuento1 = (calc - (calc*0.20) );
        return descuento1.toFixed(2);
    } else
    {
        return calc.toFixed(2);
    }

    
}

// var opciones = document.getElementsByClassName('OpcionesEstaciones');
// try {

//     for (var i = 0; i < opciones.length; i++) {
//         opciones.addEventListener('click', function () {
//             alert('It works');
//         });
//     }
// }
// catch (e) {
//     console.log('Error is ' + e);
// }

function TestSelect()
{
    var sum = 75;
    var oldsum = parseFloat(precioViaje.value.toFixed(2));
    var total = sum + oldsum;

    precioViaje.value = total.toString();

}

// if (sel.selectedIndex == 1 && sel2.selectedIndex == 1)
        // {
            
        //     precioViaje.value = MileageCost(0);

        // }else if (sel.selectedIndex == 1 && sel2.selectedIndex == 2)
        // {
            
        //     precioViaje.value = MileageCost(506.76);

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 3)
        // {
            
        //     precioViaje.value = MileageCost(345.66);

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 4)
        // {

        //     precioViaje.value = MileageCost(578.82);

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 5)
        // {

        //     precioViaje.value = MileageCost(1870.22);

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 6)
        // {

        //     precioViaje.value = MileageCost(876.98);

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 7)
        // {

        //     precioViaje.value = MileageCost(962.29);

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 8)
        // {

        //     precioViaje.value = "";

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 9)
        // {

        //     precioViaje.value = "";

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 11)
        // {

        //     precioViaje.value = "";

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 11)
        // {

        //     precioViaje.value = "";

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 12)
        // {

        //     precioViaje.value = "";

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 13)
        // {

        //     precioViaje.value = "";

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 14)
        // {

        //     precioViaje.value = "";

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 15)
        // {

        //     precioViaje.value = "";

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 16)
        // {

        //     precioViaje.value = "";

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 17)
        // {

        //     precioViaje.value = "";

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 18)
        // {

        //     precioViaje.value = "";

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 19)
        // {

        //     precioViaje.value = "";

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 20)
        // {

        //     precioViaje.value = "";

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 21)
        // {

        //     precioViaje.value = "";

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 22)
        // {

        //     precioViaje.value = "";

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 23)
        // {

        //     precioViaje.value = "";

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 24)
        // {

        //     precioViaje.value = "";

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 25)
        // {

        //     precioViaje.value = "";

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 26)
        // {

        //     precioViaje.value = "";

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 27)
        // {

        //     precioViaje.value = "";

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 28)
        // {

        //     precioViaje.value = "";

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 29)
        // {

        //     precioViaje.value = "";

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 30)
        // {

        //     precioViaje.value = "";

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 31)
        // {

        //     precioViaje.value = "";

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 32)
        // {

        //     precioViaje.value = "";

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 33)
        // {

        //     precioViaje.value = "";

        // } else if (sel.selectedIndex == 1 && sel2.selectedIndex == 34)
        // {

        //     precioViaje.value = "";

        // } else
        // {
        //     precioViaje.value = 3;
        // }