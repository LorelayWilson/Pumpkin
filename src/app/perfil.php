
<?php
function customPageHeader(){?>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/perfil.css">
<?php }
include_once('header.php');
?>

<?php
    $conexion=mysqli_connect('localhost', 'root','','bbdd_pumpkin');
?>

<body>

	<!-- HEADER -->
	<header>
		<a href="../index.php"><img src="img/logo.svg" alt="Logo de GTI" class="logo"> </a><!-- LOGO -->
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
                <!--
                <li><a href="#WHO">Ver parcelas</a></li>
				<li><a href="#WHY">Ver perfil</a></li>
				<li><a href="#DATA">FAQ</a></li>
				<li><a href="#CONTACT">Editar perfil</a></li>
				<li class="login-option"><a href="login.php">Salir</a></li>
				-->
				<!-- <li><a href="#HELLO">Inicio</a></li> -->
				<li><a href="parcelas-lista.php">Ver parcelas</a></li>
				<li><a href="perfil.php">Ver perfil</a></li>
				<li><a href="faq.php">FAQ</a></li>
				<li><a href="editar_perfil.php">Editar perfil</a></li>
                <li class="login-option"><a onclick="logoutForm()">Cerrar sesión</a></li>
			<!-- 	<label for="chk" class="hide-menu-btn">
					<i class="fas fa-times"></i> 
				</label> -->
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

        <?php

        ?>
       
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
				<li><a href="#">Link 1</a></li>
				<li>|</li>
				<li><a href="#">Link 2</a></li>
				<li>|</li>
				<li><a href="#">Link 3</a></li>
			</ul>
		</nav>
	</footer>

</body>

</html>