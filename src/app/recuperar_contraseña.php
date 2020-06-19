<?php

function customPageHeader(){?>
    <link rel="stylesheet" type="text/css" href="css/recuperar.css">
<?php }
include_once('header.php');
?>

<body>

<!-- HEADER -->
<header>
    <img src="img/logo.svg" alt="Logo de GTI" class="logo"> <!-- LOGO -->

    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="check-btn">
            <i class="fas fa-bars"></i> <!-- MENU BURGER LINES -->
        </label>
        <ul class="menu">
            <li class="login-option"><a href="login.php">Iniciar sesión</a></li>
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="contact.php">Contacto</a></li>
            <li><a href="faq.php">FAQ</a></li>

        </ul>
    </nav>
</header>
<!-- // -->

<!-- SECTION -->
<section class="recuperar-contraseña" id="contraseña">
    <div class="formulario-contraseña" id="formulario">
        <h1 class="texto-principal">Recupera tu contraseña</h1>
        <div class="relleno">
            <p class="texto-relleno">En breves le enviaremos un email para re-establecer su contraseña</p>
        </div>
        <div class="correo">
            <p class="texto-correo">Introduzca su email:</p>
        </div>
        <form action="#" id="buscador">
            <div class="contenedorBuscar">
                <input class="buscador" type="text" placeholder="Correo electrónico">
            </div>
        </form>
        <nav class="botones">
            <a href="#" class="btn btn-primary btn-lg text-center" id="volver"><div class="div-volver">Volver</div></a>
            <a href="#" class="btn btn-primary btn-lg text-center" id="enviar"><div class="div-enviar">Enviar</div></a>
        </nav>
    </div>
</section>
<!-- // -->

<!-- FOOTER -->
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