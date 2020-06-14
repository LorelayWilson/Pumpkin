<?php

$PageTitle="Iniciar sesión - Grado en Tecnologías Interactivas";//Opcional. Por defecto: GTI Tecnologias Interactivas

function customPageHeader(){?>
    <link rel="stylesheet" type="text/css" href="css/login.css">
<?php }
include_once('header.php');
?>

<html>
<body>

  <header>
      <a href="../index.php"><img src="../app/img/logo.svg" alt="Logo de GTI" class="logo" /></a>
			<nav>
			<input type="checkbox" id="check">
			<label for="check" class="check-btn">
				<i class="fas fa-bars"></i> <!-- MENU BURGER LINES -->
			</label>
			<ul class="menu">
				<li class="login-option"><a href="login.php">Iniciar sesión</a></li>
				<li><a href="../index.php">Inicio</a></li>
				<li><a href="contact.php">Contacto</a></li>
				<li><a href="faq.php">FAQ</a></li>
		
			</ul>
		</nav>
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
                    echo "<p>Contraseña incorrecta. Prueba de nuevo.</p>";

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

                <a class="recupera" href="recuperar_contraseña.php">Recupera tu contraseña</a>
                <div class="login-button-container">
                    <button class="full" type="submit" name="login-submit">ENTRAR</button>
                </div>
            </form>
        
    </div>
        
   <footer>
		<img src="img/logo-white.png" alt="Logo de GTI versión blanca" > <!-- LOGO (WHITE) -->
		<nav>
			<ul>
				<li><a href="https://twitter.com/">Twitter</a></li>
				<li>|</li>
				<li><a href="https://www.instagram.com/">Instagram</a></li>
				<li>|</li>
				<li><a href="http://youtube.com/">Youtube</a></li>
			</ul>
		</nav>
</footer>
</body>
</html>