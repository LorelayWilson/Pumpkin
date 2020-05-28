<?php
function customPageHeader(){?>
    
    <link rel="stylesheet" type="text/css" href="css/main.css">
    
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
				<li><a href="#DATA">FAQ</a></li>
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
                        
                        <div class="col1">
                        <p>Nombre: (*)</p>
				        <input type="text" name="nombre">
				        <p>Apellidos: (*)</p>
				        <input type="text" name="apellidos">
				        <p>Email: (*)</p>
				        <input type="text" name="email">
                        <p>DNI: (*)</p>
				        <input type="text" name="dni">
                       
                        </div>
                        
                        <div class="col2"> 
                         <p>Móvil: (*)</p>
				        <input type="text" name="movil">
                        <p>Nombre de la empresa</p>
				        <input type="text" name="nombre de la empresa">
				        <p>Web de la empresa</p>
				        <input type="text" name="web de la empresa">
				        <p>Teléfono</p>
				        <input type="text" name="telefono">
                        </div>
                    
				        <button class="special-button" type="submit" name="update-personal-info-submit">Aplicar cambios</button>  <!-- backend: este botón tiene que mandar los datos de los input a la base de datos y sobreescribir los antiguos-->
				    </div>
				</li>
				<li>
                    
				    <input type="radio" name="tab" id="tab2" class="tabs">
				    <label for="tab2">Dirección</label>
				    <div class="tab-content">
                        <div>
                            <p>País:</p>
                            <input type="text" name="nombre de la empresa">
                            <p>Provincia:</p>
                            <input type="text" name="web de la empresa">
                            <p>Población:</p>
                            <input type="text" name="telefono">
                            <p>Código Postal:</p>
                            <input type="text" name="telefono">

                            <button class="editar_perfil-button" type="submit" name="update-personal-info-submit">Aplicar cambios</button>  <!-- backend: este botón tiene que mandar los datos de los input a la base de datos y sobreescribir los antiguos-->
                        </div>
				    </div>
				</li>
				<li>
				    <input type="radio" name="tab" id="tab3" class="tabs">
				    <label for="tab3">Seguridad</label>
				    <div class="tab-content">
                        <div>
                            <p>Contraseña actual: (*)</p>
                            <input type="text" name="contraseña">
                            <p>Contraseña nueva</p>
                            <input type="text" name="contraseña nueva">
                            <p>Repita nueva contraseña</p>
                            <input type="text" name="confirmar contraseña">

                            <button class="editar_perfil-button" type="submit" name="update-personal-info-submit">Aplicar cambios</button>  <!-- backend: este botón tiene que mandar los datos de los input a la base de datos y sobreescribir los antiguos-->
				        </div>
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

