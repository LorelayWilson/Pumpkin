
<?php
function customPageHeader(){?>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/perfil.css">
<?php }
include_once('header.php');
?>

<?php

$sqlPersona = "SELECT nie, nombre, apellido, email, telefono FROM clientes WHERE nie='140';";
$sqlEmpresa = "SELECT id, nombre, email, telefono FROM empresas WHERE id='1';";


//$statement = mysqli_stmt_init($connection);
$resultPersona = mysqli_query($connection, $sqlPersona);
$resultEmpresa = mysqli_query($connection, $sqlEmpresa);


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
  
				<li class="login-option"><a onclick="logoutForm()">Cerrar sesión</a></li>
				<li><a href="parcelas-lista.php?login=success&az=off&za=off&search=off">Ver parcelas</a></li>
				<li><a href="perfil.php">Ver Perfil</a></li>
				<li><a href="editar_perfil.php">Editar Perfil</a></li>
				<li><a href="contact-log.php">Contacto</a></li>
				<li><a href="faq.php">FAQ</a></li>
	
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
            <?php
            if (!empty($resultPersona) && mysqli_num_rows($resultPersona) > 0) {
                while ($row = mysqli_fetch_assoc($resultPersona)) {
                    echo ' <h3>Datos Personales</h3>
                            <h4>Nombre: <p>'.$row['nombre'].' '.$row['apellido'].'</p> </h4>
                            <h4>Email: <p>'.$row['email'].'</p></h4>
                            <h4>Móvil:<p>'.$row['telefono'].'</p></h4>';
                }
            }
            else{
                echo '<h3>Datos Personales</h3>
                            <h4>Nombre: <p>Jose García Remón</p> </h4>
                            <h4>Email: <p>josgar@gmail.com</p></h4>
                            <h4>Móvil:<p>611221296</p></h4>\';';
            }
            ?>
        </div>
        <div class="der">
        <?php
        if (!empty($resultEmpresa) && mysqli_num_rows($resultEmpresa) > 0) {
            while ($row = mysqli_fetch_assoc($resultEmpresa)) {
                echo ' <h3>Datos de la Empresa</h3>
                        <h4>Empresa: <p>'.$row['nombre'].'</p></h4>
                        <h4>Teléfono: <p>'.$row['telefono'].'</p></h4>
                        ';

            }
        }
        else{
            echo '<h3>Datos de la Empresa</h3>
            <h4>Empresa: <p>Nombre empresa</p></h4>
            <h4>Teléfono: <p>91123131313</p></h4>';
        }

        ?>



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