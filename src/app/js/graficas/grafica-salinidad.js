//SALINIDAD
function setSal() {

    let sal = [];
    let salFecha = [];
    contSal = 0;

    for (i = 0; i < medicionesArray.length; i++) {
        sal[contSal] = medicionesArray[i]['salinidad'];
        salFecha[contSal] = medicionesArray[i]['fecha'].slice(5);
        contSal++;
    }

    let getLast = (arr = null, n = null) => {
        if (arr == null) return void 0;
        if (n === null) return arr[arr.length - 1];
        return arr.slice(Math.max(arr.length - n, 0));
    };

    sal = getLast(sal, 7);
    salFecha = getLast(salFecha, 7);

    let datosSalinidad = {
        labels: salFecha,
        datasets: [
            {
                label: 'Salinidad (%)',
                data: sal,
                fill: false,
                backgroundColor: '#820053',
                pointStyle: 'rectRot',
                pointRadius: 3,
            }
        ]
    };

    let opcionesSalinidad = {
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

    let ctxSalinidad = document.getElementById("chart-salinidad");

    let chartSalinidad = new Chart(ctxSalinidad, {
        type: 'line',
        data: datosSalinidad,
        options: opcionesSalinidad
    });

}
