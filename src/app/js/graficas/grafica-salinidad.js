//SALINIDAD
let datosSalinidad = {
    labels: ['lunes', 'martes', 'miércoles', 'jueves', 'viernes'],
    datasets: [
        {
            label: 'Salinidad (%)',
            data: [3, 22, 31, 21, 87],
            fill: false,
            backgroundColor: '#820053',
            pointStyle: 'rectRot',
            pointRadius: 3,
        }
    ]
};

let opcionesSalinidad = {
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

let ctxSalinidad = document.getElementById("chart-salinidad");

let chartSalinidad = new Chart(ctxSalinidad, {
    type: 'line',
    data: datosSalinidad,
    options: opcionesSalinidad
});


