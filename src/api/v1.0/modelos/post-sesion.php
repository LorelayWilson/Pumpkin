<?php
 //

if (isset($_POST['password']) && $_POST['password'] != '' && isset($_POST['user']) && $_POST['user'] != '') {

    $user = $_POST['user'];
$password = $_POST['password'];
$conexion = mysqli_connect("localhost", "root", "", "bbdd_pumpkin");
$consulta ="SELECT  user.id as userId,
user.name as userName,
user.password as userPassword,
user.rol as userRol,
role.*  FROM `user`, `role` WHERE user.name='$user' and user.password='$password' and user.rol = role.id ";
$resultado=mysqli_query($conexion, $consulta);
//------------------
//$mostrar=mysqli_fetch_array($resultado)
    
//--------------------------------
    
filas = mysqli_num_rows($resultado);
    /*if($filas>0)*/

if($filas>0){
    session_start();
        $_SESSION['registered'] = 'ok';
        $http_code = 200;
    
} else{
    $http_code = 401;
    echo "No existe el usuario";
    
}
}
else {
    $http_code = 400;
    echo "Falta el usuario o la contraseña";
}
/*
if (isset($_POST['contraseña']) && $_POST['contraseña'] != '' && isset($_POST['nombre_usuario']) && $_POST['nombre_usuario'] != '') {
    $user = $_POST['nombre_usuario'];
$password = $_POST['contraseña'];
$conexion = mysqli_connect("localhost", "root", "", "bbdd_pumpkin_parcelas");
$consulta ="SELECT  usuarios.id_usuario as usuarioId,
usuarios.nombre_usuario as usuarioNombre,
usuarios.contraseña as usuarioContraseña,
usuarios.id_rol as usuarioRol,
roles.*  FROM `usuarios`, `roles` WHERE usuario.nombre_usuario='$user' and usuarios.contraseña='$password' and usuarios.id_rol = roles.id_rol ";
$resultado=mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if($filas>0){
    session_start();
        $_SESSION['registered'] = 'ok';
        $http_code = 200;
    
} else{
   
    $http_code = 401;
    echo "No existe el usuario";
    
}
}
else {
    $http_code = 400;
}*/
