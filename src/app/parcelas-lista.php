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

   <?php  $sql = "SELECT nombre,localidad,ccaa,id FROM campos WHERE user='".$_SESSION['user']."';";

    //$statement = mysqli_stmt_init($connection);
    $result = mysqli_query($connection, $sql);
    ?>

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
                <p>Total <b><?php echo mysqli_num_rows($result); ?></b> parcelas</p>
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
                <form method="get">
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



        <!--------------------------------------->

            <?php


            if (isset($_SESSION['user'])) {

                if (!empty($result) && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                            <a href="pagina-parcela.php?id=' . $row['id'] . '" style="color: #292929;">
                            <div class="result-box">

                                <div class="id-box">
                                    <p>'. $row['id'] .'</p>
                                </div>
                
                                <div class="text-box">
                                    <div class="title-box">
                                        <p>' . $row["nombre"] . '</p>
                                    </div>
                                    <div class="location-box">
                                        <p>' . $row["localidad"] . '</p>
                                        <p>' . $row["ccaa"] . '</p>
                                    </div>
                                </div>
                            </div>
                            </a>
                        ';
                    }
                }
                else{
                    echo "<p>No se han obtenido resultados de parcelas</p>";
                }
            }
            else
            {
                echo "<p>No se ha verificado el usuario. <a href='login.php'>Vuelve a iniciar sesion</a></p>";
            }
            mysqli_close($connection);

            ?>

        <!--------------------------------------->


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


<!-- 	<script src="js/sesion.js"></script>-->
</body>
</html>