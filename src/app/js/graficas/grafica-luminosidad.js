//LUMINOSIDAD
function setLuz() {

    let luz = [];
    let luzFecha = [];
    contLuz = 0;

    for (i = 0; i < medicionesArray.length; i++) {
        luz[contLuz] = medicionesArray[i]['luminosidad'];
        luzFecha[contLuz] = medicionesArray[i]['fecha'].slice(5);
        contLuz++;
    }

    let getLast = (arr = null, n = null) => {
        if (arr == null) return void 0;
        if (n === null) return arr[arr.length - 1];
        return arr.slice(Math.max(arr.length - n, 0));
    };

    luz = getLast(luz, 7);
    luzFecha = getLast(luzFecha, 7);

    let datosLuminosidad = {
        labels: luzFecha,
        datasets: [
            {
                label: 'luminosidad (%)',
                data: luz,
                fill: false,
                backgroundColor: '#820053',
                pointStyle: 'rectRot',
                pointRadius: 3,
            }
        ]
    };

    let opcionesLuminosidad = {
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

    let ctxLuminosidad = document.getElementById("chart-luminosidad");

    let chartLuminosidad = new Chart(ctxLuminosidad, {
        type: 'line',
        data: datosLuminosidad,
        options: opcionesLuminosidad
    });
}
