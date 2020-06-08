<html>
<?php

$PageTitle="Contact us GTI - Grado en Tecnologías Interactivas";//Opcional. Por defecto: GTI Tecnologias Interactivas

function customPageHeader(){?>
    <link rel="stylesheet" type="text/css" href="css/contact.css">
<?php }
include_once('header.php');
?>


<body>
    
  <!-- HEADER -->
	<header>
	    <a href="../index.php"><img src="img/logo.svg" alt="Logo de GTI" class="logo"> </a>
		 <!-- LOGO -->
<!-- 		<input type="checkbox" id="chk">
		<label for="chk" class="show-menu-btn">
			<i class="fas fa-bars"></i>
		</label> -->
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
	<!-- // -->

	<!-- Contacta: -->
	<div class="main-container">
		<h1 class="title">Contáctanos</h1>
		<form action="index.php" method="post" onsubmit="enviar(event)" id="contact">
		
		
		<input type="text" name="name" id="inputName" placeholder="Nombre y Apellidos" required>

		<input type="email" placeholder="Email" id="inputEmail" name="Email" required>

		<input type="tel" placeholder="Teléfono" id="inputPhone" name="Phone" required>

		<textarea name="comentarios" rows="10" cols="40" placeholder="Mensaje"></textarea>
	
		<div class="send-button-container">
			<button class="full" type="button">ENVIAR</button>
		</div>
	</form>
	</div>

      
</body>
</html>