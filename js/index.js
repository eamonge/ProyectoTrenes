var AjustesBtn = document.getElementById('OptAjustes');
var SectAjustes = document.getElementById('CMDisplayAjustes');

var ReservasBtn = document.getElementById('OptReserv');
var SectReservas = document.getElementById('CMDisplayReserv');

var DeleteBtn = document.getElementById('OptDelete');
var SectDelete = document.getElementById('CMDDelete');


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

});

DeleteBtn.addEventListener('click', function(){
    SectAjustes.style.zIndex = "0";
    SectAjustes.style.opacity = "0";
    SectReservas.style.opacity = "0";
    SectReservas.style.zIndex = "0";

    
    SectDelete.style.opacity = "1";
    SectDelete.style.zIndex = "1";
    SectDelete.style.transition = "all 300ms";
});