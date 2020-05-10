<?php

function customPageHeader(){?>
    <link rel="stylesheet" type="text/css" href="css/landingpage.css">
    <link rel="stylesheet" type="text/css" href="css/recuperar.css">
<?php }
include_once('header.php');
?>

<body>

<!-- HEADER -->
<header>
    <img src="img/logo.svg" alt="Logo de GTI" class="logo"> <!-- LOGO -->
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
            <li class="login-option"><a href="#">Iniciar sesión</a></li>
            <li><a href="#HELLO">Inicio</a></li>
            <li><a href="#CONTACT">Contacto</a></li>
            <li><a href="#FAQ">FAQ</a></li>
            <!-- 	<label for="chk" class="hide-menu-btn">
                    <i class="fas fa-times"></i>
                </label> -->
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
            <p class="texto-correo">Introduzca su contraseña:</p>
        </div>
        <form action="#" id="buscador">
            <div class="contenedorBuscar">
                <input class="buscador" type="text" placeholder="Correo electrónico">
                <!--<input type="submit" value="Enviar">-->
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
            <li><a href="#">Link 1</a></li>
            <li>|</li>
            <li><a href="#">Link 2</a></li>
            <li>|</li>
            <li><a href="#">Link 3</a></li>
        </ul>
    </nav>
</footer>

</body>