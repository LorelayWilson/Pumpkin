<?php

session_start();

if (!isset($_SESSION['registrado']) || $_SESSION['registrado'] != 'ok'){
    http_response_code(401);
    die('{"error": "No autorizado"}');
}