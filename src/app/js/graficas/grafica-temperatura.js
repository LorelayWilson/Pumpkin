//TEMPERATURA

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