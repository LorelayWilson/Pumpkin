<?php

$PageTitle="Iniciar sesión - Grado en Tecnologías Interactivas";//Opcional. Por defecto: GTI Tecnologias Interactivas

function customPageHeader(){?>
    <link rel="stylesheet" type="text/css" href="css/login.css">
<?php }
include_once('header.php');
?>


<body>

  <header>
      <a href="../index.php"><img src="../app/img/logo.svg" alt="Logo de GTI" class="logo" /></a>

	</header>

	<!-- LOGIN: -->

    <div class = "login-text-container">
        
        
        <!-- Formulario para entrar a la app -->
        
           
            <h1 class="login">INICIAR SESIÓN</h1>

            <?php
            //POSIBLES ERRORES LOGIN
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                    echo "<p>Hay campos en blanco.</p>";

                } else if ($_GET['error'] == "sqlerror") {
                    echo "<p>Error en la consulta con la base de datos. <br><a href='contact.php'>Contacta con nosotros.</a></p>";

                } else if ($_GET['error'] == "wrongpwd") {
                    echo "<p>Contraseña incorrecta.</p>";

                } else if ($_GET['error'] == "pwderror") {
                    echo "<p>Error desconocido con la contraseña.<br><a href='contact.php'>Contacta con nosotros.</a></p>";

                } else if ($_GET['error'] == "nouser") {
                    echo "<p>No existe el usuario.<br><a href='contact.php'>Contacta con nosotros.</a></p>";

                }else
                    echo "<p>Error desconocido.<br><a href='contact.php'>Contacta con nosotros.</a></p>";
            }
            //MENSAJE LOGOUT
            if (isset($_GET['logoutsuccess'])) {
                echo "<p>Has cerrado sesión.</p>";
            }
            ?>

            <form action="../api/includes/acceso.php" method="post" id="login"> <!--onsubmit="enviar(event)" -->  <!-- Creamos el cuadro donde se escribirá el usuario -->
            
                <input type="text" placeholder="Usuario" id="inputUser" name="user">
                <input type="password" placeholder="Contraseña" id="inputKey" name="password">

                <a class="recupera" href="#">Recupera tu contraseña</a>
                <div class="login-button-container">
                    <button class="full" type="submit" name="login-submit">ENTRAR</button>
                </div>
            </form>
        
    </div>
        
      
</body>
</html>