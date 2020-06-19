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
				<li class="login-option"><a onclick="logoutForm()">Cerrar sesión</a></li>
				<li><a href="parcelas-lista.php">Ver Parcelas</a></li>
				<li><a href="perfil.php">Ver Perfil</a></li>
				<li><a href="editar_perfil.php">Editar Perfil</a></li>
				<li><a href="contact-log.php">Contacto</a></li>
				<li><a href="faq.php">FAQ</a></li>
			</ul>
		</nav>
	</header>
	<!-- // -->

	<!-- Contacta: -->
	<div class="main-container">
		<h1 class="title">Contáctanos</h1>
		
		<div class="inf-text"><p>Hola, ¿con qué podemos ayudarte?<br><br>Recuerda explicar detalladamente su problema para que podamos solucionarlo.</p></div>
		<form action="index.php" method="post" onsubmit="enviar(event)" id="contact">
		
		
		<textarea name="comentarios" rows="10" cols="40" placeholder="Mensaje"></textarea>
	
		<div class="send-button-container">
			<button class="full" type="button">ENVIAR</button>
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