<?php
/*
$bbdd_server = 'localhost';
$bbdd_user = 'liflores_Lorelay';
$bbdd_password ='Asdf1234*';
$bbdd = 'liflores_Pumpkin';
*/
$bbdd_server = 'localhost';
$bbdd_user = 'liflores_Wilson';
$bbdd_password = 'Asdf1234**';
$bbdd = 'liflores_Pumpkin';

$connection = mysqli_connect($bbdd_server, $bbdd_user, $bbdd_password, $bbdd);

if(!$connection)
{
    die("Conexion fallida: ". mysqli_connect_error());
}

/*mysqli_query($connection, 'SET NAME utf8');*/