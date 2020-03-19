session_start(); <!-- Iniciamos la sesión -->

unset($_SESSION['registrado']); <!-- Eliminamos el parámetro 'registrado' -->
session_destroy(); <!-- Destruimos la sesión -->

$http_code = 200; <!-- Devolvemos código 200 -->