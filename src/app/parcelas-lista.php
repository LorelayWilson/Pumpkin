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
				<li><a href="parcelas-lista.php">Ver Parcelas</a></li>
				<li><a href="perfil.php">Ver Perfil</a></li>
				<li><a href="editar_perfil.php">Editar Perfil</a></li>
				<li><a href="contact-log.php">Contacto</a></li>
				<li><a href="faq.php">FAQ</a></li>
			</ul>
		</nav>
	</header>

	<!-- // -->

   <?php

   $sql = "SELECT nombre,localidad,ccaa,id FROM campos WHERE user='".$_SESSION['user']."';";
   $sqlAZ = "SELECT nombre,localidad,ccaa,id FROM campos WHERE user='".$_SESSION['user']."' ORDER BY nombre ASC;";
   $sqlZA = "SELECT nombre,localidad,ccaa,id FROM campos WHERE user='".$_SESSION['user']."' ORDER BY nombre DESC;";

   //$statement = mysqli_stmt_init($connection);
    $result = mysqli_query($connection, $sql);
    $resultAZ = mysqli_query($connection, $sqlAZ);
    $resultZA = mysqli_query($connection, $sqlZA);

   $search = mysqli_real_escape_string($connection, $_GET['search']);

   $sqlSearch = "SELECT nombre,localidad,ccaa,id FROM campos WHERE user='" . $_SESSION['user'] . "' 
                    AND (
                    nombre LIKE '%" . $search . "%' OR 
                    localidad LIKE '%" . $search . "%' OR 
                    ccaa LIKE '%" . $search . "%'
                    )";

   $resultSearch = mysqli_query($connection, $sqlSearch);

   $numResults = mysqli_num_rows($result);
   $numResultsSearch = mysqli_num_rows($resultSearch);
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
            <form method="get" action="parcelas-lista.php">
                <input type="hidden" name="az" value="off">
                <input type="hidden" name="za" value="off">
                <input class="search" type="text" placeholder="Buscar nombre de parcela, localidad..." name="search">
                <button type="submit" name="submit-search" class="full">Buscar</button>
            </form>
        </div>

        <div class="line-separator"></div>

        <div class="container-tools">
            <div class="number-results">
                <p>Total <b><?php
                        if ($_GET['search']!='off'){
                            echo $numResultsSearch;
                        }else{
                            echo  $numResults;
                        }
                        ?></b> parcelas</p>
            </div>
            <div class="order-results">

                <!--FORM ORDER ID (original)-->
                <form method="get" action="parcelas-lista.php">
                    <input type="hidden" name="search" value="off">
                    <input type="hidden" name="az" value="off">
                    <input type="hidden" name="za" value="off">
                    <button type="submit">
                        <img src="img/ordenar-id.png">
                    </button>
                </form>

                <!--FORM ORDER AZ-->
                <form method="get" action="parcelas-lista.php">
                    <input type="hidden" name="search" value="off">
                    <input type="hidden" name="az" value="on">
                    <input type="hidden" name="za" value="off">
                    <button type="submit">
                        <img src="img/ordenar-az.png">
                    </button>
                </form>

                <!--FORM ORDER ZA-->
                <form method="get" action="parcelas-lista.php">
                    <input type="hidden" name="search" value="off">
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

            if (isset($_SESSION['user']) && $_GET['az']=='on'&& $_GET['za']=='off' && $_GET['search']=='off' ){

                if (!empty($resultAZ) && mysqli_num_rows($resultAZ) > 0) {
                    while ($row = mysqli_fetch_assoc($resultAZ)) {
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
                                        <p>' . $row["localidad"] . ',</p>
                                        <p>' . $row["ccaa"] . '</p>
                                    </div>
                                </div>
                            </div>
                            </a>
                        ';
                    }
                }
            }
            else if (isset($_SESSION['user']) && $_GET['za']=='on' && $_GET['az']=='off' && $_GET['search']=='off'){

                if (!empty($resultZA) && mysqli_num_rows($resultZA) > 0) {
                    while ($row = mysqli_fetch_assoc($resultZA)) {
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
                                        <p>' . $row["localidad"] . ',</p>
                                        <p>' . $row["ccaa"] . '</p>
                                    </div>
                                </div>
                            </div>
                            </a>
                        ';
                    }
                }
            }
            //search is on
            else if (isset($_SESSION['user']) && $_GET['az']=='off' && $_GET['za']=='off' && $_GET['search']!='off'){
                echo "<p><a href='parcelas-lista.php?login=success&az=off&za=off&search=off' class='reset-search'>Resetear búsqueda.</a></p>";

                if (isset($_GET['submit-search'])) {

                    if (!empty($resultSearch) && mysqli_num_rows($resultSearch) > 0) {
                        while ($row = mysqli_fetch_assoc($resultSearch)) {
                            echo '
                            <a href="pagina-parcela.php?id=' . $row['id'] . '" style="color: #292929;">
                            <div class="result-box">

                                <div class="id-box">
                                    <p>' . $row['id'] . '</p>
                                </div>
                
                                <div class="text-box">
                                    <div class="title-box">
                                        <p>' . $row["nombre"] . '</p>
                                    </div>
                                    <div class="location-box">
                                        <p>' . $row["localidad"] . ',</p>
                                        <p>' . $row["ccaa"] . '</p>
                                    </div>
                                </div>
                            </div>
                            </a>
                        ';
                        }
                        /*echo "<div style='margin-bottom: 50%;'></div>";*/
                    }
                    else{
                        echo "<p class='no-result'>No se han obtenido resultados.</p>";
                    }
                }
                else{
                    echo "<p>submit-search not set</p>";

                }




            }
            else if (isset($_SESSION['user']) && $_GET['az']=='off' && $_GET['za']=='off' && $_GET['search']=='off'){
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
                                        <p>' . $row["localidad"] . ',</p>
                                        <p>' . $row["ccaa"] . '</p>
                                    </div>
                                </div>
                            </div>
                            </a>
                        ';
                    }
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


<!-- 	<script src="js/sesion.js"></script>-->
</body>
</html>