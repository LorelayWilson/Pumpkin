<?php

$PageTitle="Tu parcela";//Opcional. Por defecto: GTI Tecnologias Interactivas

function customPageHeader(){?>
    <link rel="stylesheet" type="text/css" href="css/pagina-parcela.css">
<?php }
include_once('header.php');
?>

<body>

	<!-- HEADER -->
	<header>
		<a href="../index.php"><img src="img/logo.svg" alt="Logo de GTI" class="logo" /></a><!-- LOGO -->
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
				<li><a href="../index.php#CONTACT">Contacto</a></li>
			<!-- 	<label for="chk" class="hide-menu-btn">
					<i class="fas fa-times"></i> 
				</label> -->
			</ul>
		</nav>
	</header>
	<!-- // -->

    <!-- esto es para el logout, no deberia ser visible. añadir este bloque a todos los archivos donde se deba poder cerrar sesion -->
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
		<h1 class="title">Campo de patatas, Gandia</h1> <!-- PONER NOMBRE PARCELA -->


		<h3>Seleccionar sonda:</h3>

		<div class="map-chart-container">

			<div class="map-container" id="map-container-id">
				<script type="text/javascript" src="js/mapa.js"></script> <!-- Esto es el mapa de la parcela -->
				<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
				<button onclick="openChart()">sonda</button>
			</div>

			<script>
				var maxWidth = window.matchMedia("(max-width: 850px)");
				openChart(); // Call listener function at run time
				/*maxWidth.addListener(openChart)*/ // Attach listener function on state changes
				
				function openChart(){
					if (maxWidth.matches) {
						document.getElementById("chart-container-id").style.display = "flex";
						document.getElementById("map-container-id").style.display = "none"; 
					}
					else{
/*						document.getElementById("map-container-id").style.display = "flex";
						document.getElementById("chart-container-id").style.display = "flex";*/
					}
				}
			</script>

			<div class="chart-container" id="chart-container-id">
			
				<input type="checkbox" id="check">
				<i class="fas fa-times" id="quit" onclick="closeChart()"></i>
				<script>
					var maxWidth = window.matchMedia("(max-width: 850px)");
					closeChart();

					function closeChart(){
						if (maxWidth.matches) {
							document.getElementById("map-container-id").style.display = "block";
							document.getElementById("chart-container-id").style.display = "none";
						}
						else{
/*							document.getElementById("map-container-id").style.display = "flex";
							document.getElementById("chart-container-id").style.display = "flex";*/
						}
					}
				</script>
				
				<div class="name-and-select">

					<h3>Sonda 1</h3>
					<select onchange="showOption(this.value)"> 

						<option value="null">--Seleccionar--</option>

						<option value="humedad">Humedad</option>
		

						<option value="salinidad">Salinidad</option>
			
						<option value="temperatura">Temperatura</option>
						

						<option value="luminosidad">Luminosidad</option>
				
						<script>
							function showOption(parameter){

								if (parameter != 'null') {
									//reiniciamos todos a display: none
									document.getElementById("humedad").style.display = "none";
									document.getElementById("salinidad").style.display = "none";
									document.getElementById("temperatura").style.display = "none";
									document.getElementById("luminosidad").style.display = "none";
									document.getElementById("null").style.display = "none";
									//---y ahora display:none el parametro correspondiente
									document.getElementById(parameter).style.display = "block";
								}
								else{
									//como parametro es null, reiniciamos todos a display: none
									document.getElementById("humedad").style.display = "none";
									document.getElementById("salinidad").style.display = "none";
									document.getElementById("temperatura").style.display = "none";
									document.getElementById("luminosidad").style.display = "none";

									//añadir espacio en blanco
									document.getElementById("null").style.display = "block";

								}
							}
								
						</script>
					</select>
				</div>

				<!-- ------ GRAFICAS, EN PRINCIPIO TODAS OCULTAS MENOS HUMEDAD POR DEFECTO ------ -->
				<div class="chart" id="null">
					<!-- OPTION NULL -->
					<p>Selecciona un parámetro a mostrar
				</div>
				<div class="chart" id="humedad">
					<canvas id="chart-humedad"></canvas>
				</div>
				<div class="chart" id="salinidad">
					<canvas id="chart-salinidad"></canvas>
				</div>
				<div class="chart" id="temperatura">
					<canvas id="chart-temperatura"></canvas>
				</div>
				<div class="chart" id="luminosidad">
					<canvas id="chart-luminosidad"></canvas>
				</div>

			</div>
		</div>	
	</div>

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

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
	<script type="text/javascript" src="js/graficas/grafica-salinidad.js"></script>
	<script type="text/javascript" src="js/graficas/grafica-humedad.js"></script>
	<script type="text/javascript" src="js/graficas/grafica-temperatura.js"></script>
	<script type="text/javascript" src="js/graficas/grafica-luminosidad.js"></script>


	<!--<script src="js/sesion.js"></script>-->
</body>
</html>