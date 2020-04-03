fetch('../../api/v1.0/modelos/sesion.php', {
    method: 'get',
}).then(function (respuesta) {
    if(respuesta.status != 200) {
        location.href = '../app/login.html';
    } else {

    }
})