<?php

//require('../../includes/conexion.php');

$connection = mysqli_connect("localhost", "root", "", "bbdd_pumpkin_parcelas");

//session_start();
if (!isset($_SESSION['registered']) || $_SESSION['registered'] != 'ok') {
    http_response_code(401);
    die('{"ERROR" : "Non-authorized user"}');
} else{

$sql = "SELECT  usuarios.*, clientes.*, campos.*, localizacion.lat as latitud, localizacion.lng as longitud
                FROM `usuarios`, `clientes`, `campos`, `localizacion` WHERE usuarios.id_usuarios=clientes.id_usuario and clientes.id_clientes=campos.id_clientes and campos.id_campos = localizacion.id_localizacion ";

$filters = array();

//$resultado=mysqli_query($conexion, $consulta);

// GET da acceso a...
// en forma de array asociativo
/*
if (isset($_GET['lat'])) {
    array_push($filters, 'localizacion.lat = ' . $_GET['lat']);
}
if (isset($_GET['lng'])) {
    array_push($filters, 'localizacion.lng = ' . $_GET['lng']);
}*/
/*
if (isset($_GET['inicio'])) {
    array_push($filters, "ventas.fecha >= '" . $_GET['inicio']) . "'";
}
if (isset($_GET['fin'])) {
    array_push($filters, "ventas.fecha <= '" . $_GET['fin']) . "'";
}*/

// Si hay filtros, a la sentencia sql le concatenamos AND para que se añada como filtro.
if (count($filters) > 0) {
    $sql .= ' AND ' . join(' AND ', $filters);
}

$res = mysqli_query($connection, $sql);

 while($mostrar=mysqli_fetch_array($res)){

           $arr = array('lat' => $mostrar['latitud'], 'lng' => $mostrar['longitud'],);

echo json_encode($arr);
    }

/*

while($row = mysqli_fetch_assoc($res)) {
    $vendedor = array("id" => $row["vendedor"],
        "nombre" => $row["nombreVendedor"],
        "apellidos" => $row["apellidosVendedor"]);

    $cliente = array("id" => $row["cliente"],
        "nombre" => $row["nombreCliente"]);

    $row["vendedor"] = $vendedor;
    $row["cliente"] = $cliente;

    // Destroy variables (free memory)
    unset($row["nombreVendedor"]);
    unset($row["apellidosVendedor"]);
    unset($row["nombreCliente"]);

    array_push($output, $row);
}*/

$http_code = 200;
}