//Temperatura

function setTemp() {

    let temp = [];
    let tempFecha = [];
    contTemp=0;

    for (i=0; i<medicionesArray.length;i++){
        temp[contTemp]= medicionesArray[i]['temperatura'];
        tempFecha[contTemp]= medicionesArray[i]['fecha'].slice(5);
        contTemp++;
    }

    let getLast =  (arr = null, n = null) => {
        if (arr == null) return void 0;
        if (n === null) return arr[arr.length - 1];
        return arr.slice(Math.max(arr.length - n, 0));
    };

    temp = getLast(temp, 7);
    tempFecha = getLast(tempFecha, 7);

    let datosTemperatura = {
        labels: tempFecha,
        datasets: [
            {
                label: 'temperatura (ºC)',
                data: temp,
                fill: false,
                backgroundColor: '#820053',
                pointStyle: 'rectRot',
                pointRadius: 3,
            }
        ]
    };

    let opcionesTemperatura = {
        maintainAspectRatio : false,
        scales: {
            yAxes: [{
                ticks: {
                    suggestedMin: 0,
                    suggestedMax: 50
                }
            }]
        }
    };

    let ctxTemperatura = document.getElementById("chart-temperatura");

    let chartTemperatura= new Chart(ctxTemperatura, {
        type: 'line',
        data: datosTemperatura,
        options: opcionesTemperatura
    });



}




// Obtener los datos del servidor
/*var obj=fetch("../api/v1.0/vistas/temperatura.json").then(function (r) {
    return r.json();
}).then(function (j) {
    // procesar los datos
    procesarDatos(j);
});

var objT = JSON.parse(obj);

var fechas = objT.map(function(e) {
   return e.fecha;
});
console.log(fechas)
var valores = obj.map(function(e) {
   return e.valor;
});

var fechas
var valores

function procesarDatos(mediciones){
    fechas = mediciones.fecha.map(function(e) {
        return e;
    });
    valores = mediciones.map(function(e) {
        return e.valor;
    console.log(fechas)
});

}

let datosTemperatura = {
    labels: fechas,
    datasets: [
        {
            label: 'temperatura (ºC)',
            data: valores,
            fill: false,
            backgroundColor: '#820053',
            pointStyle: 'rectRot',
            pointRadius: 3,
        }
    ]
};
let opcionesTemperatura = {
    maintainAspectRatio : false,
    scales: {
            yAxes: [{
                ticks: {
                    suggestedMin: 0,
                    suggestedMax: 100
                }
            }]
        }
};


let ctxTemperatura = document.getElementById("chart-temperatura");

let chartTemperatura = new Chart(ctxTemperatura, {
    type: 'line',
    data: datosTemperatura,
    options: opcionesTemperatura
});*/
/*
//EJEMPLO STACKOVERFLOW 1
var obj=[];

// Obtener los datos del servidor
fetch('../api/v1.0/vistas/temperatura.json').then(function (r) {
    return r.json();
}).then(function (j) {
    // procesar los datos
    obj = j;
});

var fechas = obj.map(function(e) {
   return e.fecha;
});
var valores = obj.map(function(e) {
   return e.valor;
});;

/*var ctx = canvas.getContext('2d');
var config = {
   type: 'line',
   data: {
      labels: fechas,
      datasets: [{
        data: valores,
        label: 'temperatura (ºC)',
        fill: false,
        backgroundColor: '#820053',
        pointStyle: 'rectRot',
        pointRadius: 3,
      }]
   }
};*/
/*let datosTemperatura = {
    labels: ['lunes', 'martes', 'miércoles', 'jueves', 'viernes'],
    datasets: [
        {
            label: 'temperatura (%)',
            data: [80, 34, 45, 10, 30],
            fill: false,
            backgroundColor: '#820053',
            pointStyle: 'rectRot',
            pointRadius: 3,
        }
    ]
};

let opcionesTemperatura = {
    maintainAspectRatio : false,
    scales: {
            yAxes: [{
                ticks: {
                    suggestedMin: 0,
                    suggestedMax: 100
                }
            }]
        }
};
//var chart = new Chart(ctx, config);



    let ctxTemperatura = document.getElementById("chart-temperatura");
    let chartTemperatura = new Chart(ctxTemperatura,config);
*/


//EJEMPLO STACKOVERFLOW 2
/*var obj=[];

// Obtener los datos del servidor
for(i=0;i<1; i++){
    obj[i] = fetch('../api/v1.0/vistas/temperatura.json').then(function (r) {
        return r.json();
    }).then(function (j) {
        // procesar los datos
        return j;
    });

}

const CHART = document.getElementById('chart-temperatura');

var lineChart = new Chart(CHART, {
   type: 'line',
   data: {
      labels: Object.keys(obj),
      datasets: [{
         label: 'My first dataset',
         fill: false,
         lineTension: 0,
         backgroundColor: "rgba(75,192,192,0.4)",
         borderColor: "rgba(75,192,192,1)",
         borderCapStyle: 'butt',
         borderDash: [],
         borderDashOffset: 0.0,
         borderJointStyle: 'miter',
         data: Object.values(obj)
      }]
   }
})

*/


/*
//VERSION CLASE

//TEMPERATURA

// Obtener los datos del servidor
fetch('../api/v1.0/vistas/temperatura.json').then(function (r) {
    return r.json();
}).then(function (j) {
    // procesar los datos
    procesarDatos(j);
});


function procesarDatos(mediciones) {
    mediciones = mediciones.sort(function (a, b) {
        if (a.fecha < b.fecha) return -1;
        if (a.fecha > b.fecha) return 1;
        return 0;
    });

    let datosTemperatura = {
    labels: [],
    datasets: [
        {
            label: 'temperatura (ºC)',
            data: [],
            fill: false,
            backgroundColor: '#820053',
            pointStyle: 'rectRot',
            pointRadius: 3,
        }
        ]
    };

    // recorrer las mediciones
    let fechas = [];
    let valores = [];

    mediciones.forEach(function (temperatura) {
        let i = fechas.indexOf(temperatura.fecha);
        if(i < 0) {
            fechas.push(temperatura.fecha);
            valores.push(parseFloat(temperatura.valor));
        } else {
            valores[i] += parseFloat(temperatura.valor);
        }
    });


    datosTemperatura.labels = fechas;
    datosTemperatura.datasets[0].data = valores;

    CrearGrafica();

}

let opciones = {
     scales: {
     yAxes: [{
     stacked: true
     }]
     },
     legend: {
     position: 'left',
     align: 'end'
     },
     title: {
        display: true,
     text: 'text'
     },
     tooltips: {
     backgroundColor: '#fff',
     titleFontColor: '#000',
     titleAlign: 'center',
     bodyFontColor: '#333',
     borderColor: '#666',
     borderWidth: 1,
     }
};


function CrearGrafica() {
    let ctxTemperatura = document.getElementById("chart-temperatura");
    let chartTemperatura = new Chart(ctxTemperatura, {
        type: 'line',
        data: datosTemperatura,
        options: opciones
    });
}
*/
//-------------------------------------------------------





/*function procesarDatos(mediciones) {
    mediciones = mediciones.sort(function (a, b) {
        if (a.fecha < b.fecha) return -1;
        if (a.fecha > b.fecha) return 1;
        return 0;
    });

    let datosTemperatura = {
    labels: ['lunes', 'martes', 'miércoles', 'jueves', 'viernes'],
    datasets: [
        {
            label: 'temperatura (%)',
            data: [80, 34, 45, 10, 30],
            fill: false,
            backgroundColor: '#820053',
            pointStyle: 'rectRot',
            pointRadius: 3,
        }
        ]
    };

    // recorrer las mediciones
    let fechas = [];
    let valores = [];
    mediciones.forEach(function (temperatura) {
        let i = fechas.indexOf(temperatura.fecha);
        if(i < 0) {
            fechas.push(temperatura.fecha);
            valores.push(parseFloat(temperatura.valor));
        } else {
            valores[i] += parseFloat(temperatura.valor);
        }
    });
    datos.labels = fechas;
    datos.datasets[0].data = valores;

    CrearGrafica();
}

let opciones = {
 scales: {
 yAxes: [{
 stacked: true
 }]
 },
 legend: {
 position: 'left',
 align: 'end'
 },
 title: {
    display: true,
 text: 'Ventas de la semana'
 },
 tooltips: {
 backgroundColor: '#fff',
 titleFontColor: '#000',
 titleAlign: 'center',
 bodyFontColor: '#333',
 borderColor: '#666',
 borderWidth: 1,
 }
};


function CrearGrafica() {
    let ctxTemperatura = document.getElementById("chart-temperatura");
    let chartTemperatura = new Chart(ctxTemperatura, {
        type: 'line',
        data: datosTemperatura,
        options: opciones
    });
}*/


/*//TEMPERATURA

// Obtener los datos del servidor
fetch("../../../api/v1.0/vistas/temperatura.json").then(function (r) {
    return r.json();
}).then(function (j) {
    // procesar los datos
    procesarDatos(j);
});

function procesarDatos(mediciones) {
    mediciones = mediciones.sort(function (a, b) {
        if (a.fecha < b.fecha) return -1;
        if (a.fecha > b.fecha) return 1;
        return 0;
    });
    // recorrer las mediciones
    let fechas = [];
    let totales = [];
    mediciones.forEach(function (temperatura) {
        let i = fechas.indexOf(temperatura.fecha);
        if(i < 0) {
            fechas.push(temperatura.fecha);
            totales.push(parseFloat(temperatura.valor));
        } else {
            totales[i] += parseFloat(temperatura.valor);
        }
    });
    datos.labels = fechas;
    datos.datasets[0].data = totales;

    CrearGrafica();
}

function CrearGrafica() {
    let ctxTemperatura = document.getElementById("chart-temperatura");
    let chartTemperatura = new Chart(ctxTemperatura, {
        type: 'line',
        data: datos,
        options: opciones
    });
}

*/

/*

let datosTemperatura = {
    labels: ['lunes', 'martes', 'miércoles', 'jueves', 'viernes'],
    datasets: [
        {
            label: 'temperatura (%)',
            data: [80, 34, 45, 10, 30],
            fill: false,
            backgroundColor: '#820053',
            pointStyle: 'rectRot',
            pointRadius: 3,
        }
    ]
};

let opcionesTemperatura = {
    maintainAspectRatio : false,
    scales: {
            yAxes: [{
                ticks: {
                    suggestedMin: 0,
                    suggestedMax: 100
                }
            }]
        }
};

let ctxTemperatura = document.getElementById("chart-temperatura");

let chartTemperatura = new Chart(ctxTemperatura, {
    type: 'line',
    data: datosTemperatura,
    options: opcionesTemperatura
});
*/