<?php

session_start();
include(__DIR__.'/../api/includes/connection.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1437242e61.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <title><?= isset($PageTitle) ? $PageTitle : "GTI - Grado en Tecnologías Interactivas"?></title>

<!-- Additional tags here -->
<?php if (function_exists('customPageHeader')){
    customPageHeader();
}?>

</head>
<?php

//ir a src/docs/plantilla-header.txt para ver plantilla del header, mejor explicada