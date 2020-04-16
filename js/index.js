var AjustesBtn = document.getElementById('OptAjustes');
var SectAjustes = document.getElementById('CMDisplayAjustes');

var ReservasBtn = document.getElementById('OptReserv');
var SectReservas = document.getElementById('CMDisplayReserv');

var clicktest = document.getElementById('exampleFormControlSelect1');


AjustesBtn.addEventListener('click', function () {
    SectAjustes.style.opacity = "1";
    SectAjustes.style.zIndex = "1";
    SectAjustes.style.transition = "all 300ms";

    SectReservas.style.opacity = "0";
    SectReservas.style.zIndex = "0";

});

ReservasBtn.addEventListener('click', function () {
    SectAjustes.style.zIndex = "0";
    SectAjustes.style.opacity = "0";

    SectReservas.style.opacity = "1";
    SectReservas.style.zIndex = "1";



    SectReservas.style.transition = "all 300ms";
    // SectAjustes.transition = "all 300ms";

});


// clicktest.addEventListener('change', function(){
//     var index = clicktest.selectedIndex;
//     alert('Selected index is: ' + index);
// });

// var selectElem = document.getElementById('select');
//var pElem = document.getElementById('p')

//When a new <option> is selected
// clicktest.addEventListener('change', function () {
//     var index = clicktest.selectedIndex;
//Add that data to the <p>
//     alert('selectedIndex: ' + index);
// });
// clicktest.addEventListener('click', function(){
//     var precio = document.getElementById('PRAIS');

//     switch (clicktest.selectedIndex) {
//         case 1:
//             // precio.innerHTML = 'A';
//             precio.innerText = 'AB';
//             break;
//         case 2:
//             precio.innerHTML = 'H';
//             break;

//     }
// });