<?php
//$conexion = mysqli_connect("localhost", "root", "", "bbdd_pumpkin_parcelas");

/*require_once('../api/v1.0/modelos/post-sesion.php');*/
require_once('../api/includes/acceso.php');
?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>sssssssss</title>
    <style>
        td {
            border: solid 1px black;
        }
    </style>
</head>

<script>
    fetch('../api/v1.0/sesion').then(function (response) {
        if (response.status != 200) {
            location.href = '..';
        }
    })
</script>

<body>

<!--DANI-->
<a href="javascript:fetch('../api/v1.0/sesion',{method:'delete'}).then(function(respuesta) {
  if(respuesta.status == 200) location.href = '..';
})">Cerrar sesion</a>

<!--
    DENIS
<a href="javascript:fetch('../api/v1.0/sesion',{method:'delete'}).then(
function(respuesta) {
if(respuesta.status == 200) location.href = 'login.html';
})"> Cerrar sesión </a>-->

<br>

<!-- --------------------------------------------------------------------------------------------------------
-->





<?php
    
       while($mostrar=mysqli_fetch_array($resultado)){

           $arr = array('id' => $mostrar['id_usuario'], 'usuario' => $mostrar['usuario'], 'rol' => $mymindistellingmyno = array('id' => $mostrar['rol_id'], 'nombre' => $mostrar['nombre_rol']), );
           echo json_encode($arr);
    }
    require_once('../api/v1.0/modelos/get-parcelas.php');
    ?>
    <br>
    <br>
    <br>
<a href="parcelas-lista.html"> VER LISTADO DE PARCELAS </a>
    
</body>
</html>