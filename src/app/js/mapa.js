
let map;
let infowindow;
function initMap(){
    
    /*inicializacion del mapa*/
    map = new google.maps.Map(document.getElementById('map-container-id'), {
        center:{ lat: 38.9965055, lng: -0.1674364},
        zoom: 15,
        mapTypeId: 'hybrid',
        styles: [
                    {
                        featureType: 'poi',
                        stylers: [{visibility:'off'}]
                    }, 
                    {
                        featureType: 'transit',
                        stylers:[{visibility: 'off'}]
                    }

                ],
        mapTypeControl: false,
        streetViewControl: false,
        rotateControl: false,
    });

//--------------------------------------------------------
    var marker = new google.maps.Marker({
        position: {lat: 38.996243, lng: -0.168021},
        label: "1",
        animation: google.maps.Animation.DROP,
        map: map,
    });
    marker.addListener('click', function() {
        openChart();
    });

/*
    var triangleCoords = [
        {lat: 38.997062, lng: -0.169131},
        {lat: 38.995790, lng: -0.170502},
        {lat: 38.995757, lng: -0.167680},
        {lat: 38.996349, lng: -0.167154}

    ];

    // Construct the polygon.
    var bermudaTriangle = new google.maps.Polygon({
        paths: triangleCoords,
        strokeColor: '#FF0000',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: '#FF0000',
        fillOpacity: 0.35
    });
    bermudaTriangle.setMap(map);
}
*/


//---------------------------------------------------------

    //Fijar vista
    map.setTilt(0);
    
    cargarPosiciones();
    cargarParcelas();
    abrirInfoWindow();
    
    infowindow=new google.maps.InfoWindow();
}

function cargarPosiciones(){
/*    fetch('posiciones.json').then(function(r){
        return r.json();
    }).then(function(j){
        j.forEach(function(position){
            var marker = new google.maps.Marker({
                position:position,
                label: "" + position.id.toString(),
                animation: google.maps.Animation.DROP,
                map: map
            })
        })
    })*/

/*
        var triangleCoords = [
            {lat: 38.997062, lng: -0.169131},
            {lat: 38.995790, lng: -0.170502},
            {lat: 38.995757, lng: -0.167680},
            {lat: 38.996349, lng: -0.167154}

        ];

        // Construct the polygon.
        var bermudaTriangle = new google.maps.Polygon({
            paths: triangleCoords,
            strokeColor: '#FF0000',
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: '#FF0000',
            fillOpacity: 0.35
        });
        bermudaTriangle.setMap(map);
    }
*/

}

function cargarParcelas(){
    
    fetch('../parcelas.json').then(function(r){
        return r.json();
    }).then(function(j){
        let bounds = new google.maps.LatLngBounds();
        j.forEach(function(parcela){
            let polygon = new google.maps.Polygon({
                paths: parcela.vertices,
                strokeColor: parcela.color,
                strokeOpacity: 0.8,
                strokeWeight: 2,
                fillColor: parcela.color,
                fillOpacity: 0.35,
                map: map
            });
            polygon.getPath().getArray().forEach(function(v){
                bounds.extend(v);
            })
            polygon.addListener('click', () => {
                openInfoWindow(`<b>${parcela.nombre}</b>`, parcela.vertices);
            })
        });
        
        map.fitBounds(bounds);
    })       
}

function abrirInfoWindow(contenido, posicion){
    infowindow.setContent(contenido);
    infowindow.open(map, posicion);
}
