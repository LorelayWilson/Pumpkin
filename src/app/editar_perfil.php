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
	
				<li>
				    <input type="radio" name="tab" checked id="tab1" class="tabs">
				    <label for="tab1">Información personal</label>
				    <div class="tab-content">

                        <FORM action="../api/includes/aplicar-cambios-perfil.php" method="post" id="info-personal">
                        
                            <div class="container2">
                                <div class="col1">

                                    <p>Nombre: (*)</p>
                                    <input type="text" name="name">
                                    <p>Apellidos: (*)</p>
                                    <input type="text" name="surname">
                                    <p>Email: (*)</p>
                                    <input type="text" name="email">
                                    <p>NIE: (*)</p>
                                    <input type="text" name="nie">
                                    <p>Móvil: (*)</p>
                                    <input type="text" name="phone">

                                </div>

                                <div class="col2"> 
                             
                                <p>Nombre de la empresa</p>
                                <input type="text" name="company-name">
                                <p>Email de la empresa</p>
                                <input type="text" name="company-email">
                                <p>Teléfono</p>
                                <input type="text" name="telephone">
                                </div>
                            </div>
                    
				             <button class="editar_perfil-button" type="submit" name="update1">Aplicar cambios</button>  <!-- backend: este botón tiene que mandar los datos de los input a la base de datos y sobreescribir los antiguos-->
                        </FORM>
                    </div>
				</li>
				<li>
                    
				    <input type="radio" name="tab" id="tab2" class="tabs">
				    <label for="tab2">Dirección</label>
				    <div class="tab-content">
                        <FORM action="../api/includes/aplicar-cambios-perfil.php" method="post" id="info-company">
                             <div class="container2">
                                <div>
                                    <p>País:</p>
                                    <input type="text" name="país">
                                    <p>Provincia:</p>
                                    <input type="text" name="provincia">
                                    <p>Población:</p>
                                    <input type="text" name="poblacion">
                                    <p>Código Postal:</p>
                                    <input type="text" name="cp">
                                </div>
                            </div>
                            <button class="editar_perfil-button" type="submit" name="update2">Aplicar cambios</button>  <!-- backend: este botón tiene que mandar los datos de los input a la base de datos y sobreescribir los antiguos-->
                        </FORM>

                    </div>
				</li>
				<li>
				    <input type="radio" name="tab" id="tab3" class="tabs">
				    <label for="tab3">Seguridad</label>
				    <div class="tab-content">
                        <FORM action="../api/includes/aplicar-cambios-perfil.php" method="post" id="info-company">
                             <div class="container2">
                                <div>
                                    <p>Contraseña actual: (*)</p>
                                    <input type="password" name="oldpass">
                                    <p>Contraseña nueva</p>
                                    <input type="password" name="pass1">
                                    <p>Repita nueva contraseña</p>
                                    <input type="password" name="pass2">
                                </div>
                            </div>
                            <button class="editar_perfil-button" type="submit" name="update3">Aplicar cambios</button>  <!-- backend: este botón tiene que mandar los datos de los input a la base de datos y sobreescribir los antiguos-->
                        </FORM>
				    </div>
				</li>
			</ul>
	
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

