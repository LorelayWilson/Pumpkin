<?php

$PageTitle="Recuperar Contraseña"; //Opcional. Por defecto: GTI Tecnologias Interactivas

function customPageHeader(){?>
    <link rel="stylesheet" href="css/login.css">
<?php }
include_once('header.php');
?>

<body>
    <div class="login-text-container">
        <section class="login-text">
            <a href="#"> <img src="img/logoGTI2.svg" alt="logo"> </a>
            <h1>Recuperar contraseña</h1>
        </section>
        <p>
            Escriba su email y en breve le enviaremos un correo para volver a establecer la contraseña de su cuenta.
        </p>
        <section class="form">
            <p>Introduce tu email:</p>
            <input type="text" id="correo" placeholder="Correo electrónico">
            <div id="error"></div>
        </section>
        <section class="enviar">
            <a href="login.php" class="volver">
                <p>Volver</p>
            </a>
            <a href="#" onclick="validarDatos(document.getElementById('correo').value)" class="entrar">
                <p>Enviar</p>
            </a>
        </section>
    </div>
    
    <script src="contrasenya_olvidada.js"></script> //NO EXISTE ESTO!!
    
</body>

</html>
