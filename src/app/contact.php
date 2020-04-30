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
			</ul>
		</nav>
	</header>
	<!-- // -->

	<!-- Contacta: -->
	<div class="main-container">
		<form action="index.php" method="post" onsubmit="enviar(event)" id="contact">
		<h1 class="title">Contáctanos</h1>
		<div class="inp1">
			<label>Nombre:</label><br>
			<input type="text" name="name" id="inputName" placeholder="Nombre" required>
		</div>
		<div class="inp2">
			<label>Apellidos:</label><br>
			<input type="text" name="surname" id="inputSurname" placeholder="Apellidos" required>
		</div>
		<div class="inp3">
			<label>Email:</label><br>
			<input type="email" placeholder="Correo electrónico" id="inputEmail" name="Email" required>
		</div>
		<div class="inp4">
			<label>Teléfono:</label><br>
			<input type="tel" placeholder="Número de teléfono" id="inputPhone" name="Phone" required>
		</div>
		<div class="inp5">
			<label>Introduce tu mensaje:</label><br>
			<textarea name="comentarios" rows="10" cols="40"></textarea>
		</div>
		<div class="send-button-container">
			<button class="full" type="button">ENVIAR</button>
		</div>
	</form>
	</div>


      
</body>
</html>