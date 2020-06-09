<?php

if(isset($_POST['login-submit']))
{
    require 'connection.php';

    $user = $_POST['user'];
    $password = $_POST['password'];

    if(empty($user) || empty($password))
    {
        header("Location:../../app/login.php?error=emptyfields");
        exit();
    }
    else
    {
        $sql = "SELECT * FROM usuarios WHERE user=?;";
        $statement = mysqli_stmt_init($connection);

        if (!mysqli_stmt_prepare($statement,$sql))
        {
            header("Location:../../app/login.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($statement, "s", $user);
            mysqli_stmt_execute($statement);
            $result = mysqli_stmt_get_result($statement);

            //check if we actually got result from database
            if ($row = mysqli_fetch_assoc($result))
            {
                //$passwordCheck = password_verify($password,$row['contraseña']); //stores boolean
                if ($password != $row['contrasenya'])
                {
                    header("Location:../../app/login.php?error=wrongpwd");
                    exit();
                }
                elseif ($password == $row['contrasenya'])
                {
                    session_start();
                    $_SESSION['user']=$row['user'];
                    $_SESSION['nie']=$row['nie'];

                    header("Location:../../app/parcelas-lista.php?login=success&az=off&za=off&search=off");
                    exit();
                }
                else//in case somehow the password check comparisson is not working
                {
                    header("Location:../../app/login.php?error=pwderror");
                    exit();
                }
            }
            else
            {
                header("Location:../../app/login.php?error=nouser");
                exit();
            }
        }
    }
}
else
{
    header("Location:../../app/login.php?notset");
    exit();

}
