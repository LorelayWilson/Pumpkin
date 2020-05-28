<?php

//ESTO ES PARA LA BBDD, LOCAL
$bbdd_server = 'localhost';
$bbdd_user = 'root';
$bbdd_password ='';
$bbdd = 'bbdd_pumpkin';

//ESTO ES PARA EL SERVIDOR
/*$bbdd_server = 'localhost';
$bbdd_user = 'liflores_Wilson';
$bbdd_password = 'Asdf1234**';
$bbdd = 'liflores_Pumpkin';*/

$connection = mysqli_connect($bbdd_server, $bbdd_user, $bbdd_password, $bbdd);

if(!$connection)
{
    die("Conexion fallida: ". mysqli_connect_error());
}

/*mysqli_query($connection, 'SET NAME utf8');*/