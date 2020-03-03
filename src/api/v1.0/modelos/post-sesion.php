<?php

if(isset($_POST['key']) && $_POST['key'] != '' && $_POST['user'] && $_POST['user'] != ''){

    $key = $_POST['key'];
    $user = $_POST['user'];

    $name = "SELECT `name, role` FROM `user` WHERE `name` = $user AND `password` = $key";

    if($res = mysqli_query($conection, $name)) {

            $row = mysqli_fetch_assoc($res);
            session_start();
            $_SESSION['registrado'] = 'ok';
            $_SESSION['name'] = $row["name"];
            $_SESSION['role'] = $row["role"];
            $http_code = 200;

    } else{

        //error de autentificación
        $http_code = 401;
        die('{"error" : "no autorizado"}');
    }

} else {

    //petición mal formada. Error del cliente.
    $http_code = 400;
    die('{"error" : "faltan parámetros"}');
}
