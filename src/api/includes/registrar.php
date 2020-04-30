<?php

if (isset($_POST['register-submit']))
{
    require 'connection.php';

    $user = $_POST['user'];
    $role = $_POST['role'];
    $nie = $_POST['nie'];
    $password = $_POST['password'];
    $passwordRepeat= $_POST['password-repeat'];

    if (empty($user) || empty($role) || empty($nie) || empty($password) ||empty($passwordRepeat))
    {
        header("Location:../../app/register.php?error=emptyfields&user=".$user."&role=".$role."&nie=".$nie);
        exit();
    }
    else if ($role < 1 || $role > 3 )
    {
        header("Location:../../app/register.php?error=invalidrole1");
        exit();

    }
    else if ($password != $passwordRepeat)
    {
        header("Location:../../app/register.php?error=differentpasswords");
        exit();
    }
    else
    {
        $sql = "SELECT user FROM usuarios WHERE user=?";
        $statement = mysqli_stmt_init($connection);

        if (!mysqli_stmt_prepare($statement, $sql))
        {
            header("Location:../../app/register.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($statement,"s", $user);
            mysqli_stmt_execute($statement);
            mysqli_stmt_store_result($statement);
            $resultCheck = mysqli_stmt_num_rows($statement);
            if ($resultCheck > 0)
            {
                header("Location:../../app/register.php?error=usertaken");
                exit();
            }
            else
            {
                $sql = "INSERT INTO usuarios(user,rol,contraseña,nie) VALUE (?,?,?,?)
";
                $statement = mysqli_stmt_init($connection);
                if (!mysqli_stmt_prepare($statement, $sql))
                {
                    header("Location:../../app/register.php?error=sqlerror2");
                    exit();
                }
                else
                {
                    mysqli_stmt_bind_param($statement,"siss", $user, $role, $password, $nie);
                    mysqli_stmt_execute($statement);

                    header("Location:../../app/register.php?register=success");
                    exit();

                }
            }
        }
    }
    mysqli_stmt_close($statement);
    mysqli_close($connection);

}
else
{
    header("Location:../../index.php");
    exit();

}