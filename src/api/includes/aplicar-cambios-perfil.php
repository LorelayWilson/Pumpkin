<?php
/**
 * Created by PhpStorm.
 * User: DENIS FELST
 * Date: 29/05/2020
 * Time: 10:20
 */
if(isset($_POST['update1']))
{
    $nie = $_POST['nie']; //140 admin
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $companyName = $_POST['company-name']; // ID empresa... hay que configurar
    $companyEmail = $_POST['company-email']; //
    $companyPhone = $_POST['telephone'];


    $sqlClient = "INSERT into clientes values(140,".$name.",".$surname.",".$email.",".$phone.",1) where nie=140;";
    $sqlCompany = "INSERT into empresas values(1,".$companyName.",".$companyEmail.",".$companyPhone.") where id=1;" ;

    //$statement = mysqli_stmt_init($connection);
/*    $result = mysqli_query($connection, $sqlClient);
    $row = mysqli_fetch_assoc($result);*/
    if(mysqli_query($connection, $sqlClient) || mysqli_query($connection, $sqlCompany) ){
        echo "Datos insertados correctamente.";
        header("Location:../../app/perfil.php?insert=success");
        exit();
    }
    else{
        header("Location:../../app/perfil.php?insert=error");
        exit();
    }

}