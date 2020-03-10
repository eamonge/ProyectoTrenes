<<<<<<< HEAD
// $(document).ready(function () {
//     $('[data-toggle="tooltip"]').tooltip();
// });

var ContentMenu = document.getElementById('ContentMenu');

var AjustesBtn = document.getElementById('AjustesLnk');
var AjustesSecc = document.getElementById('AjustesPanel');

var ReservacionesBtn = document.getElementById('ReservLnk');
var ReservSecc = document.getElementById('ReservacionesPanel');

var HorariosBtn = document.getElementById('HorariosLnk');
var HorariosSecc = document.getElementById('HorariosPanel');

var NotifBtn = document.getElementById('NotifLnk');
var NotifSecc = document.getElementById('NotificacionesPanel');



AjustesBtn.addEventListener('click', function(){
    AjustesSecc.style.transition = "opacity 300ms";
    ReservSecc.style.opacity = "0";
    HorariosSecc.style.opacity = "0";
    AjustesSecc.style.opacity = "1";
    NotifSecc.style.opacity = "0";

    AjustesSecc.style.zIndex = "1";
    ReservSecc.style.zIndex = "0";
    HorariosSecc.style.zIndex = "0";
    NotifSecc.style.zIndex = "0";
});

ReservacionesBtn.addEventListener('click', function(){
    ReservSecc.style.transition = "opacity 300ms"
    AjustesSecc.style.opacity = "0";
    ReservSecc.style.opacity = "1"; 
    HorariosSecc.style.opacity = "0";
    NotifSecc.style.opacity = "0";

    AjustesSecc.style.zIndex = "0";
    ReservSecc.style.zIndex = "1";
    HorariosSecc.style.zIndex = "0";
    NotifSecc.style.zIndex = "0";
});

HorariosBtn.addEventListener('click', function(){
    HorariosSecc.style.transition = "opacity 300ms";
    AjustesSecc.style.opacity = "0";
    ReservSecc.style.opacity = "0";
    HorariosSecc.style.opacity = "1";
    NotifSecc.style.opacity = "0";

    AjustesSecc.style.zIndex = "0";
    ReservSecc.style.zIndex = "0";
    HorariosSecc.style.zIndex = "1";
    NotifSecc.style.zIndex = "0";
});

NotifBtn.addEventListener('click', function () {
    NotifSecc.style.transition = "opacity 300ms";
    AjustesSecc.style.opacity = "0";
    ReservSecc.style.opacity = "0";
    HorariosSecc.style.opacity = "0";
    NotifSecc.style.opacity = "1";

    AjustesSecc.style.zIndex = "0";
    ReservSecc.style.zIndex = "0";
    HorariosSecc.style.zIndex = "0";
    NotifSecc.style.zIndex = "1";
});

=======
var AbtUsbtn = document.getElementById('AbtUs');
var close = document.getElementById('CloseBtn');
var AbtUsInfoDiv = document.getElementById('DivAbtUs');
var bodyHTML = document.getElementById('TestA');

AbtUsbtn.addEventListener('click', function () {
    AbtUsInfoDiv.style.zIndex = "3";
    AbtUsInfoDiv.style.transition = "all 2s";
    AbtUsInfoDiv.style.top = "0vh";
    //AbtUsInfoDiv.style.opacity = "100";
    AbtUsInfoDiv.style.position = "fixed";
    AbtUsInfoDiv.style.opacity = "100";
    bodyHTML.style.overflowY = "hidden"
});

close.addEventListener('click', function () {
    //AbtUsInfoDiv.classList.toggle('hide');
    AbtUsInfoDiv.style.top = "-180vh";
    bodyHTML.style.overflowY = "scroll";
    //alert('hola');
    //AbtUsInfoDiv.style.opacity = "0";
    //AbtUsInfoDiv.style.marginTop = "-100px;"
    //AbtUsInfoDiv.style.position = "";
    //AbtUsInfoDiv.style.transition = "all 3s";
    //AbtUsInfoDiv.transition = "all 3s";
    //alert('hola');
});
>>>>>>> 0420fbc5e6a2dd0652a63ae262801935a088fa63
