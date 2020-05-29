<?php
function customPageHeader(){?>

    <link rel="stylesheet" type="text/css" href="css/editar_perfil.css">
    
<?php }
include_once('header.php');
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
    
	    <ul class="tab">
				
				<!-- <li><a href="#HELLO">Inicio</a></li> -->
				<li>
				    <input type="radio" name="tab" checked id="tab1" class="tabs">
				    <label for="tab1">Información personal</label>
				    <div class="tab-content">

                        <FORM action="../api/includes/aplicar-cambios-perfil.php" method="post" id="info-personal">

                        <div class="col1">

                            <p>Nombre: (*)</p>
                            <input type="text" name="name">
                            <p>Apellidos: (*)</p>
                            <input type="text" name="surname">
                            <p>Email: (*)</p>
                            <input type="text" name="email">
                            <p>NIE: (*)</p>
                            <input type="text" name="nie">

                        </div>

                        <div class="col2"> 
                             <p>Móvil: (*)</p>
                            <input type="text" name="phone">
                            <p>Nombre de la empresa</p>
                            <input type="text" name="company-name">
                            <p>Email de la empresa</p>
                            <input type="text" name="company-email">
                            <p>Teléfono</p>
                            <input type="text" name="telephone">
                        </div>
                    
				        <button class="special-button" type="submit" name="update1">Aplicar cambios</button>  <!-- backend: este botón tiene que mandar los datos de los input a la base de datos y sobreescribir los antiguos-->
                        </FORM>
                    </div>
				</li>
				<li>
                    
				    <input type="radio" name="tab" id="tab2" class="tabs">
				    <label for="tab2">Dirección</label>
				    <div class="tab-content">
                        <FORM action="../api/includes/aplicar-cambios-perfil.php" method="post" id="info-company">
                            <div>
                                <p>Provincia:</p>
                                <input type="text" name="provincia">
                                <p>Población:</p>
                                <input type="text" name="poblacion">
                                <p>Código Postal:</p>
                                <input type="text" name="cp">

                                <button class="editar_perfil-button" type="submit" name="update2">Aplicar cambios</button>  <!-- backend: este botón tiene que mandar los datos de los input a la base de datos y sobreescribir los antiguos-->
                            </div>
                        </FORM>

                    </div>
				</li>
				<li>
				    <input type="radio" name="tab" id="tab3" class="tabs">
				    <label for="tab3">Seguridad</label>
				    <div class="tab-content">
                        <FORM action="../api/includes/aplicar-cambios-perfil.php" method="post" id="info-company">
                        <div>
                            <p>Contraseña actual: (*)</p>
                            <input type="password" name="oldpass">
                            <p>Contraseña nueva</p>
                            <input type="password" name="pass1">
                            <p>Repita nueva contraseña</p>
                            <input type="password" name="pass2">

                            <button class="editar_perfil-button" type="submit" name="update3">Aplicar cambios</button>  <!-- backend: este botón tiene que mandar los datos de los input a la base de datos y sobreescribir los antiguos-->
				        </div>
                        </FORM>
				    </div>
				</li>
			</ul>
	
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

