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
    ContentMenu.scrollTop = 0;
    ReservSecc.style.zIndex = "0";
    HorariosSecc.style.zIndex = "0";
    NotifSecc.style.zIndex = "0";
});

ReservacionesBtn.addEventListener('click', function(){
    ReservSecc.style.transition = "all 300ms"
    AjustesSecc.style.opacity = "0";
    ReservSecc.style.opacity = "1"; 
    HorariosSecc.style.opacity = "0";
    NotifSecc.style.opacity = "0";
    ContentMenu.scrollTop = 0;
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
    ContentMenu.scrollTop = 0;
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
    ContentMenu.scrollTop = 0;
    AjustesSecc.style.zIndex = "0";
    ReservSecc.style.zIndex = "0";
    HorariosSecc.style.zIndex = "0";
    NotifSecc.style.zIndex = "1";
});
