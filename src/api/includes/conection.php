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

$conection = mysqli_connect($bbdd_server, $bbdd_user, $bbdd_password, $bbdd);

mysqli_query($conection, 'SET NAME utf8');