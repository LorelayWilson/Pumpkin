<?php

//session_start();

if (!isset($_SESSION['registered']) || $_SESSION['registered'] != 'ok') {
http_response_code(401);
die('{"error":"No autorizado"}');

//exit;
    //
    //../../app/login.html
}