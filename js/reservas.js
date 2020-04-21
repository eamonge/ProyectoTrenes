class ubicacion {
    constructor(latitud, longitud) {
        this.lat = latitud;
        this.long = longitud;
    }
}
function Dist(lat1, lon1, lat2, lon2) {
    rad = function (x) {
        return x * Math.PI / 180;
    }

    var R = 6378.137;//Radio de la tierra en km
    var dLat = rad(lat2 - lat1);
    var dLong = rad(lon2 - lon1);
    var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) + Math.cos(rad(lat1)) * Math.cos(rad(lat2)) * Math.sin(dLong / 2) * Math.sin(dLong / 2);
    var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
    var d = R * c;
    return d.toFixed(2);//Retorna tres decimales
}
function MileageCost(km) {
    var calc = km / 5.2;
    var total = parseFloat(calc);
    alert(total);
    if (total >= 300) {
        var descuento = (calc - (calc * 0.5));
        return descuento.toFixed(2);
    } else {
        return calc.toFixed(2);
    }
}
function Opciones(opc) {
    //coordenadas de las opciones
    switch (opc) {
        case 1:
            return new ubicacion(9.9333296, -84.0833282);//San Jose, Costa Rica
            break;
        case 2:
            return new ubicacion(8.537981, -80.7821274); //Panama City, Panama
            break;
        case 3:
            return new ubicacion(12.1508, -86.2683); //Manague, Nicaragua
            break;
        case 4:
            return new ubicacion(14.1, -87.2167); //Tegucigalpa, Honduras
            break;
        case 5:
            return new ubicacion(13.69, -89.19); //San Salvador, El Salvador
            break;
        case 6:
            return new ubicacion(15.7834711, -90.2307587); //Guatemala, Guatemala
            break;
        case 7:
            return new ubicacion(17.25, -88.7666702); //Belmopan, Belize
            break;
        case 8:
            return new ubicacion(19.4284706, -99.1276627); //Mexico, Mexico
            break;
        case 9:
            return new ubicacion(38.89511, -77.03637); //Washington dc, USA
            break;
        case 10:
            return new ubicacion(45.41117, -75.69812); //Ottawa, Canada
            break;
        case 11:
            return new ubicacion(45.41117, -75.69812); //Reikiavik, Islandia
            break;
        case 12:
            return new ubicacion(53.33306, -6.24889); //Dublin, Irlanda
            break;
        case 13:
            return new ubicacion(51.5085300, -0.1257400); //Londres, Reino Unido
            break;
        case 14:
            return new ubicacion(40.4165, -3.70256); //Madrid, España
            break;
        case 15:
            return new ubicacion(48.8534, 2.3486); //Paris, Francia
            break;
        case 16:
            return new ubicacion(52.52437, 13.41053); //Berlin, Alemania
            break;
        case 17:
            return new ubicacion(44.41686, 12.21); //Roma, Italia
            break;
        case 18:
            return new ubicacion(47.49801, 19.03991); //Bdapest, Hungria
            break;
        case 19:
            return new ubicacion(52.2297707, 21.0117798); //Warsaw, Polonia
            break;
        case 20:
            return new ubicacion(53.9000015, 27.5666695); //Minsk
            break;
        case 21:
            return new ubicacion(50.45466, 30.5238); //Kyiv
            break;
        case 22:
            return new ubicacion(42.69751, 23.32415); //Sofia, Bulgaria
            break;
        case 23:
            return new ubicacion(39.91667, 32.83333); //Ankara
            break;
        case 24:
            return new ubicacion(55.75222, 37.61556); //Moscu
            break;
        case 25:
            return new ubicacion(35.6943893, 51.4215088); //Tehran
            break;
        case 26:
            return new ubicacion(30.06263, 31.24967); //Cairo
            break;
        case 27:
            return new ubicacion(37.50889, 22.37944); //Tripoli
            break;
        case 28:
            return new ubicacion(12.10672, 15.0444); //NDjameira
            break;
        case 29:
            return new ubicacion(9.02497, 38.74689); //Addis
            break;
        case 30:
            return new ubicacion(-6.1722102, 35.7394714); //Dooma
            break;
        case 31:
            return new ubicacion(-24.65451, 25.90859); //Gaborone
            break;
        case 32:
            return new ubicacion(-29.31667, 27.48333); //Maseru
            break;
        case 33:
            return new ubicacion(3.3499999, 101.25); //Kuala
            break;
        case 34:
            return new ubicacion(1.352083, 103.8198395); //Singapore
            break;
        case 35:
            return new ubicacion(-35.2834587, 149.128067); //Camberra
            break;
        default:
            return new ubicacion(9.9333296, -84.0833282);//San Jose, Costa Rica
        // code block
    }
}
function cambio() {
    var x = document.getElementById("SeleccionOrigen").selectedIndex;
    var y = document.getElementById("SeleccionDestino").selectedIndex;
    origen = Opciones(x);
    destino = Opciones(y);
    distancia = Dist(origen.lat, origen.long, destino.lat, destino.long);
    cobro = MileageCost(distancia);
    document.getElementById('PRAIS').value = cobro;
    //PRAIS
}

// sfd();

var sfd = document.getElementById('BtnNext');
sfd.addEventListener('click', function () {
    localStorage.clear();

    var Origin2 = document.getElementById("SeleccionOrigen");
    var Origennn = Origin2.options[Origin2.selectedIndex].text;
    
    var Dest2 = document.getElementById("SeleccionDestino");
    var Destinoooo = Dest2.options[Dest2.selectedIndex].text;
    


    var horario = document.getElementById('HorarioSelect');
    var Horarioo = horario.options[horario.selectedIndex].text;
    
    var TrainSct = document.getElementById('TrainSct');
    var Train = TrainSct.options[TrainSct.selectedIndex].text;
    
    var precioTotal = document.getElementById('PRAIS'); 

    localStorage.setItem('Origin', Origennn);    
    localStorage.setItem('Destiny', Destinoooo);
    localStorage.setItem('Horario', Horarioo);
    localStorage.setItem('Tren', Train);
    localStorage.setItem('Price', precioTotal.value);
});

// function sfd() {
//     localStorage.clear();

//     var Origin2 = document.getElementById("SeleccionOrigen").selectedIndex;
// var Dest2 = document.getElementById("SeleccionDestino").selectedIndex;
// var horario = document.getElementById('HorarioSelect').selectedIndex;
// var precioTotal = document.getElementById('PRAIS'); 

//     localStorage.setItem('Origin', Origin2);
//     localStorage.setItem('Destiny', Dest2);
//     localStorage.setItem('Horario', horario);
//     localStorage.setItem('Price', precioTotal.value);

//     console.log(localStorage);
// }
