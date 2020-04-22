<?php

require_once '../includes/conection.php';

define('API_VERSION', 'v1.0');

// Truncate URL after version
$uri = explode(API_VERSION. '/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))[1];

// Convert to array
$uri_array = explode('/', $uri);

// Pop and store first element of the array
$resource = array_shift($uri_array);

// Request method (in lowercase)
$operation = strtolower($_SERVER['REQUEST_METHOD']);

// Output format
$view = "json";

$http_code = "404";

// Associated array for output data stream
$output = array();

@include "modelos/$operation-$resource.php";
@include "vistas/$view.php"; 
//---------------------------------------------------z--------------------------------------------------