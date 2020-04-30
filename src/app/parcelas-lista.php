<?php

$PageTitle="Lista de parcelas";//Opcional. Por defecto: GTI Tecnologias Interactivas

function customPageHeader(){?>
    <link rel="stylesheet" type="text/css" href="css/parcelas-lista.css">
    <style>
        a{
            text-decoration: none;
        }
    </style>
<?php }
include_once('header.php');
?>


<body>


	<header>
		<a href="../index.php"><img src="img/logo.svg" alt="Logo de GTI" class="logo" /></a><!-- LOGO -->
		<nav>
			<input type="checkbox" id="check">
			<label for="check" class="check-btn">
				<i class="fas fa-bars"></i> <!-- MENU BURGER LINES -->
			</label>
			<ul class="menu">
                <li class="login-option"><a onclick="logoutForm()">Cerrar sesión</a></li>
				<li><a href="contact.php">Contacto</a></li>
				<li><a href="#">Editar perfil</a></li>
				<li><a href="#">Ver perfil</a></li>
			</ul>
		</nav>
	</header>

	<!-- // -->


    <!--
    esto es para el logout, no deberia ser visible.
    añadir este bloque a todos los archivos donde se deba poder cerrar sesion.
    Tambien añadir: <a onclick="logoutForm()">Cerrar sesión</a> en el header
    -->
    <form id='hiddenLogoutForm' style="display: none;" action="../api/includes/cerrar-sesion.php">
        <button type="submit" name="logout-submit">logout(should be hidden)</button>
    </form>

    <script>
        function logoutForm() {
            document.getElementById("hiddenLogoutForm").submit();
        }
    </script>
    <!-- // -->


	<div class="main-container">

		<h1 class="title">Mis parcelas</h1>

		<h3>Seleccionar parcela:</h3>

		<div id="tablaParcelas">
			<!--aqui va el script-->
		</div>

		<script type="text/JavaScript">

			fetch('../api/v1.0/vistas/campos.json').then(function (respuesta) {
				return respuesta.json(); })
			.then(function (datosJson) {
				let tabla = document.getElementById('tablaParcelas');
				tabla.innerHTML = `
					<table>
					<thead>
						<th>Nombre de parcela</th>

					</thead>
					<tbody>
						${datosJson.map(function(dato){
							return `
								<tr>
									<td>${dato.nombre}</td>
									<td><a href="pagina-parcela.php"> >> </a></td>
								</tr>
							`
						}).join('')}
					</tbody>
				`;})
		</script>
	</div>
		<!--<div class="accordion"> HTML ACCORDION
			<button class="ccaa">Andalucia</button>
			<div class="panel-parcela">
				<ul>
					<li class="parcela"><a href="pagina-parcela.html">Olivar Manuel e Hijos S.L, Villaviciosa, Córdoba</a></li>
					<li class="parcela"><a href="pagina-parcela.html">Legumbres Menendez, Dos Hermanas, Sevilla</a></li> 
				</ul>
			</div>
			<button class="ccaa">Comunidad Valenciana</button>
			<div class="panel-parcela">
				<ul>
					<li class="parcela"><a href="pagina-parcela.html">Campo Laureles, Gandía, Valencia</a></li>
					<li class="parcela"><a href="pagina-parcela.html">Verduras Jesus, Xeraco, Valencia</a></li> 
				</ul>
			</div>
			<button class="ccaa">Pais Vasco</button>
			<div class="panel-parcela">
				<ul>
					<li class="parcela"><a href="pagina-parcela.html">Arantxu de Guinea SL, Pasajes, San Sebastián</a></li> 
				</ul>
			</div>
			<button class="ccaa">Región de Murcia</button>
			<div class="panel-parcela">
				<ul>
					<li class="parcela"><a href="pagina-parcela.html">Villalobos y Hermanos, Cartagena, Murcia</a></li>
					<li class="parcela"><a href="pagina-parcela.html">Naranjas Morales, Torrenevada, Murcia</a></li> 
					<li class="parcela"><a href="pagina-parcela.html">Lechugas Rodriguez, Cartagena, Murcia</a></li> 
					<li class="parcela"><a href="pagina-parcela.html">Verde que te quiero verde SA, Manzananueva, Murcia</a></li> 
				</ul>
			</div>
		</div>
	</div>-->


<!--	<script> SCRIPT ACCORDION
		var acc = document.getElementsByClassName("ccaa");
		var i;

		for (i = 0; i < acc.length; i++) {
		  acc[i].addEventListener("click", function() {
		    this.classList.toggle("active");
		    var panel = this.nextElementSibling;
		    if (panel.style.display === "block") {
		      panel.style.display = "none";
		    } else {
		      panel.style.display = "block";
		    }
		  });
		}
	</script>-->

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


<!-- 	<script src="js/sesion.js"></script>-->
</body>
</html>