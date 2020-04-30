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