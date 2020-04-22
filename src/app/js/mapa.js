
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
    
    //Fijar vista
    map.setTilt(0);
    
    cargarPosiciones();
    cargarParcelas();
    abrirInfoWindow();
    
    infowindow=new google.maps.InfoWindow();
}

function cargarPosiciones(){
    fetch('../posiciones.json').then(function(r){
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
    })
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
