//LUMINOSIDAD
let datosLuminosidad = {
    labels: ['lunes', 'martes', 'miércoles', 'jueves', 'viernes'],
    datasets: [
        {
            label: 'luminosidad (%)',
            data: [4, 4, 9, 10, 30],
            fill: false,
            backgroundColor: '#820053',
            pointStyle: 'rectRot',
            pointRadius: 3,
        }
    ]
};

let opcionesLuminosidad = {
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

let ctxLuminosidad = document.getElementById("chart-luminosidad");

let chartLuminosidad = new Chart(ctxLuminosidad, {
    type: 'line',
    data: datosLuminosidad,
    options: opcionesLuminosidad
});
