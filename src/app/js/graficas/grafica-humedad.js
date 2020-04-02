//HUMEDAD
let datosHumedad = {
    labels: ['lunes', 'martes', 'miércoles', 'jueves', 'viernes'],
    datasets: [
        {
            label: 'Humedad (%)',
            data: [30, 34, 45, 99, 55],
            fill: false,
            backgroundColor: '#820053',
            pointStyle: 'rectRot',
            pointRadius: 3,
        }
    ]
};

let opcionesHumedad = {
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

let ctxHumedad = document.getElementById("chart-humedad");

let chartHumedad = new Chart(ctxHumedad, {
    type: 'line',
    data: datosHumedad,
    options: opcionesHumedad
});


