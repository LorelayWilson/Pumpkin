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

<html>
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
				<li><a href="pagina-parcela.php">Ver Parcelas</a></li>
				<li><a href="perfil.php">Ver Perfil</a></li>
				<li><a href="editar_perfil.php">Editar Perfil</a></li>
				<li><a href="contact.php">Contacto</a></li>
				<li><a href="faq.php">FAQ</a></li>
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

        <div class="container-search">
            <input class="search" type="text" placeholder="Buscar nombre de parcela..." name="search">
            <button type="button" class="full">Buscar</button>
        </div>

        <div class="line-separator"></div>

        <div class="container-tools">
            <div class="number-results">
                <p>Total <b>5</b> parcelas</p>
            </div>
            <div class="order-results">
                <!--FORM ORDER AZ-->
                <form method="get">
                    <input type="hidden" name="az" value="on">
                    <input type="hidden" name="za" value="off">
                    <button type="submit">
                        <img src="img/ordenar-az.png">
                    </button>
                </form>

                <!--FORM ORDER ZA-->
                <form action="../api/includes/acceso.php" method="get">
                    <input type="hidden" name="az" value="off">
                    <input type="hidden" name="za" value="on">
                    <button type="submit">
                        <img src="img/ordenar-za.png">
                    </button>
                </form>

            </div>
        </div>

        <!--RESULTS-->
        <div class="container-results">

            <!--each one of the result boxes-->
            <div class="result-box">

                <div class="id-box">
                    <p>6</p>
                </div>

                <div class="text-box">
                    <div class="title-box">
                        <p>Plataneras</p>
                    </div>
                    <div class="location-box">
                        <p>Tenerife</p>
                        <p>Canarias</p>
                    </div>
                </div>

            </div>

            <div class="result-box">

                <div class="id-box">
                    <p>20</p>
                </div>

                <div class="text-box">
                    <div class="title-box">
                        <p>Campo girasoles</p>
                    </div>
                    <div class="location-box">
                        <p>El Mercat de Valencia</p>
                        <p>Valencia</p>
                    </div>
                </div>

            </div>

            <div class="result-box">

                <div class="id-box">
                    <p>8</p>
                </div>

                <div class="text-box">
                    <div class="title-box">
                        <p>Plataneras Bollullo S.L.</p>
                    </div>
                    <div class="location-box">
                        <p>Tenerife</p>
                        <p>Canarias</p>
                    </div>
                </div>

            </div>

            <div class="result-box">

                <div class="id-box">
                    <p>6</p>
                </div>

                <div class="text-box">
                    <div class="title-box">
                        <p>Plataneras Bollullo S.L.</p>
                    </div>
                    <div class="location-box">
                        <p>Tenerife</p>
                        <p>Canarias</p>
                    </div>
                </div>

            </div>

            <div class="result-box">

                <div class="id-box">
                    <p>6</p>
                </div>

                <div class="text-box">
                    <div class="title-box">
                        <p>Plataneras Bollullo S.L.</p>
                    </div>
                    <div class="location-box">
                        <p>Tenerife</p>
                        <p>Canarias</p>
                    </div>
                </div>

            </div>

            <div class="result-box">

                <div class="id-box">
                    <p>6</p>
                </div>

                <div class="text-box">
                    <div class="title-box">
                        <p>Plataneras Bollullo S.L.</p>
                    </div>
                    <div class="location-box">
                        <p>Tenerife</p>
                        <p>Canarias</p>
                    </div>
                </div>

            </div>

        </div>

        <!--------------------------------------->

            <!--AQUI EL PHP-->

        <!--------------------------------------->



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