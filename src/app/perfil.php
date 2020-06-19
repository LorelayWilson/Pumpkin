
<?php
function customPageHeader(){?>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/perfil.css">
<?php }
include_once('header.php');
?>


<html>
<body>

	<!-- HEADER -->
	<header>
		<a href="../index.php"><img src="img/logo.svg" alt="Logo de GTI" class="logo"> </a><!-- LOGO -->

		<nav>
			<input type="checkbox" id="check">
			<label for="check" class="check-btn">
				<i class="fas fa-bars"></i> <!-- MENU BURGER LINES -->
			</label>
			<ul class="menu">
  
				<li><a href="parcelas-lista.php?login=success&az=off&za=off&search=off">Ver parcelas</a></li>
				<li><a href="perfil.php">Ver perfil</a></li>
				<li><a href="faq.php">FAQ</a></li>
				<li><a href="editar_perfil.php">Editar perfil</a></li>
                <li class="login-option"><a onclick="logoutForm()">Cerrar sesión</a></li>
	
			</ul>
		</nav>
	</header>
    
    <form id='hiddenLogoutForm' style="display: none;" action="../api/includes/cerrar-sesion.php">
        <button type="submit" name="logout-submit">logout(should be hidden)</button>
    </form>
    
     <script>
        function logoutForm() {
            document.getElementById("hiddenLogoutForm").submit();
        }
    </script>
	<!-- // -->
		


	<!-- PAGE: -->
	<section class="perfil-container">
	
	<h2>Mi perfil</h2>
	
	<div class="container-data1">

       
        <div class="izq">
            <h3>Datos Personales</h3>
            <h4>Nombre: <p>José Carlos Padron</p> </h4>
            <h4>Email: <p>jcp1980@gmail.com</p></h4>
            <h4>Móvil:<p>662729120</p></h4>
        </div>

        <div class="der">
            <h3>Datos de la Empresa</h3>
            <h4>Empresa: <p>Nombre empresa</p></h4>
            <h4>Teléfono: <p>91123131313</p></h4>
        </div>
   
    </div>
	    
	    <div class="perfil-calltoaction">
			<button class="editar_perfil-button" onclick = "location='editar_perfil.php'">Editar perfil</button>
    </div>
	</section>
	
	
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