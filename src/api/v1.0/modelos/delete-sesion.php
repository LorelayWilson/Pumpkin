<?php
session_start(); //Iniciamos la sesión

unset($_SESSION['registered']); //Eliminamos el parámetro 'registrado' -->
session_destroy(); //Destruimos la sesión -->

$http_code = 200; //Devolvemos código 200
/*
if (isset($_SESSION['registered']) && $_SESSION['registered'] == 'ok') {
    unset($_SESSION['registered']); //Eliminamos el parámetro 'registrado' -->
    session_destroy(); //Destruimos la sesión -->
    $http_code = 200;

}*/
else {
    $http_code = 404;
}
