let map;
let infowindow;


class getCenter {

    constructor(pos) {
        //latitud
        this.lat = pos[0]['lat'];
        //longitud
        this.lng = pos[0]['lng'];
    }


    latMenor() {
        let i;
        for (i = 1; i < posiciones.length; i++) {
            if (this.lat > posiciones[i]['lat']) {
                this.lat = posiciones[i]['lat'];
            }
        }
        return Number(this.lat);
    }

    latMayor() {
        let i;

        for (i = 1; i < posiciones.length; i++) {
            if (this.lat < posiciones[i]['lat']) {
                this.lat = posiciones[i]['lat'];
            }
        }
        return Number(this.lat);
    }

    lngMenor() {
        let i;

        for (i = 1; i < posiciones.length; i++) {
            if (this.lng > posiciones[i]['lng']) {
                this.lng = posiciones[i]['lng'];
            }
        }
        return Number(this.lng);
    }

    lngMayor() {
        let i;

        for (i = 1; i < posiciones.length; i++) {
            if (this.lng < posiciones[i]['lng']) {
                this.lng = posiciones[i]['lng'];
            }
        }
        return Number(this.lng);
    }
}

//function initMap(){  centroLatitud = Number(posiciones[0]['lat']); centroLongitud = Number(posiciones[0]['lng']); /*inicializacion del mapa*/ var contenedorMapa = document.getElementById('map-container-id'); var opcionesMapa = { center:{lat: centroLatitud, lng: centroLongitud}, zoom: 16, mapTypeId: 'hybrid', styles: [ { featureType: 'poi', stylers: [{visibility:'off'}] }, { featureType: 'transit', stylers:[{visibility: 'off'}] } ], mapTypeControl: false, streetViewControl: false, rotateControl: false, }; var mapa = new google.maps.Map(contenedorMapa, opcionesMapa); var posicionesPoligono = new google.maps.MVCArray(); for (i = 0; i < posiciones.length; i++){ posicionesPoligono.push( new google.maps.LatLng( Number( posiciones[i]['lat'] ) , Number( posiciones[i]['lng'] ) ) ) } var opcionesPoligono = {path: posicionesPoligono, strokeColor:"#820053" , fillColor:"#fafafa"}; var poligono = new google.maps.Polygon(opcionesPoligono); poligono.setMap(mapa); }


function initMap() {

    centroLatitud1 = new getCenter(posiciones);
    x1 = centroLatitud1.latMenor();
    x2 = centroLatitud1.latMayor();

    centroLongitud1 = new getCenter(posiciones);
    y1 = centroLongitud1.lngMenor();
    y2 = centroLongitud1.lngMayor();

    centroLatitud = x1 + ((x2 - x1) / 2);
    centroLongitud = y1 + ((y2 - y1) / 2);
    //center.x = x1 + ((x2 - x1) / 2);

    var contenedorMapa = document.getElementById('map-container-id');
    var opcionesMapa = {
        center: {lat: centroLatitud, lng: centroLongitud},
        zoom: 16,
        mapTypeId: 'hybrid',
        styles: [
            {
                featureType: 'poi',
                stylers: [{visibility: 'off'}]
            },
            {
                featureType: 'transit',
                stylers: [{visibility: 'off'}]
            }

        ],

        mapTypeControl: false,
        streetViewControl: false,
        rotateControl: false,
    };

    var mapa = new google.maps.Map(contenedorMapa, opcionesMapa);

    var posicionesPoligono = new google.maps.MVCArray();


    for (i = 0; i < posiciones.length; i++) {
        posicionesPoligono.push(
            new google.maps.LatLng(
                Number(posiciones[i]['lat']),
                Number(posiciones[i]['lng'])
            )
        )
    }

    var opcionesPoligono = {path: posicionesPoligono, strokeColor: "#820053", fillColor: "#fafafa"};
    var poligono = new google.maps.Polygon(opcionesPoligono);

    poligono.setMap(mapa);

    //-----------------------------------------------------------

    //let posicionesSondas = []; // Chelodina l Callipepla Choloepus h... 38.996354, -0.169352

    let aux = [];

    //recorremos TODAS las posiciones
    for (var i = 0; i < posicionesTotales.length; i++) {

        var latlng = new google.maps.LatLng(posicionesTotales[i]['lat'], posicionesTotales[i]['lng']);

        //comprobamos si esas coordenadas estan contenidas en el poligono
        if (google.maps.geometry.poly.containsLocation(latlng, poligono)) {

            // aux.push({name: posicionesTotales[i]['id'], latLng: latlng})
            aux.push(posicionesTotales[i]);
        }

    }

    let posPosiciones = 0;

    let posicionesSondas = aux.filter(function (objeto) {
        if(typeof posiciones[posPosiciones] == 'undefined'){
            //console.log(posiciones[posPosiciones], objeto);
            return true;
        }else{
           // console.log(posiciones[posPosiciones], objeto);
            if(posiciones[posPosiciones].id != objeto.id){
                return true;
            }
        }
        posPosiciones++;
    });

    for (var i = 0; i < posicionesSondas.length; i++) {
        var latlng = new google.maps.LatLng(posicionesSondas[i]['lat'], posicionesSondas[i]['lng']);
        let marker = new google.maps.Marker({
            position: latlng,
            map: mapa,
            title: posicionesSondas[i].id
        });
        google.maps.event.addListener(marker,'click', function() {
            openChart();
            console.log("you clicked the marker "+marker.title);
            showName(marker.title);
        });
    }

    //console.log(marker)

}

//marker.addListener('click', openChart());

window.onload = initMap;

