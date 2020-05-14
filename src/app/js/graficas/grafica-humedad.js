//HUMEDAD

function setHum() {

    let hum = [];
    let humFecha = [];
    contHum = 0;

    for (i = 0; i < medicionesArray.length; i++) {
        hum[contHum] = medicionesArray[i]['humedad'];
        humFecha[contHum] = medicionesArray[i]['fecha'].slice(5);
        contHum++;
    }

    let getLast = (arr = null, n = null) => {
        if (arr == null) return void 0;
        if (n === null) return arr[arr.length - 1];
        return arr.slice(Math.max(arr.length - n, 0));
    };

    hum = getLast(hum, 7);
    humFecha = getLast(humFecha, 7);

    let datosHumedad = {
        labels: humFecha,
        datasets: [
            {
                label: 'Humedad (%)',
                data: hum,
                fill: false,
                backgroundColor: '#820053',
                pointStyle: 'rectRot',
                pointRadius: 3,
            }
        ]
    };

    let opcionesHumedad = {
        maintainAspectRatio: false,
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

}
