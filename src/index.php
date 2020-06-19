<?php

//$PageTitle="GTI Tecnologias Interactivas";//Opcional. Por defecto: GTI Tecnologias Interactivas

function customPageHeader(){?>
    <link rel="stylesheet" type="text/css" href="app/css/landingpage.css">
    <link rel="stylesheet" type="text/css" href="app/css/main.css">
<?php }
include_once('app/header.php');
?>
<html>
<body>

<!-- HEADER -->
<header>
    <a href="index.php"><img src="app/img/logo.svg" alt="Logo de GTI" class="logo"> </a><!-- LOGO -->
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
            <li class="login-option"><a href="app/login.php">Iniciar sesión</a></li>
            <!-- <li><a href="#HELLO">Inicio</a></li> -->
            <li><a href="#WHO">Quiénes somos</a></li>
            <li><a href="#WHY">Por qué elegirnos</a></li>
            <li><a href="#DATA" id="hide-data">Parámetros</a></li>
            <li><a href="#CONTACT">Contacto</a></li>
            <li><a href="app/faq.php">FAQ</a></li>
            <!-- 	<label for="chk" class="hide-menu-btn">
                    <i class="fas fa-times"></i>
                </label> -->
        </ul>
    </nav>
</header>
<!-- // -->

<!-- LANDINGPAGE: -->

<!-- MAIN SECTION "HELLO" -->
<section class="hello-container" id="HELLO">
    <!--  		<img src="app/img/agua-blanco.png" alt="Mujer con sombrero">  --><!-- HELLO BACKGROUND -->
    <div class="hello-title">
        <h1 class="title">Monitoriza tus campos.</h1>
        <h2>Descubre nuestras sondas de alta tecnología.</h2>
    </div>

    <div class="hello-calltoaction">
        <button class="full" onclick = "location='app/contact.php'">CONSULTAR</button>
        <button class="empty login-button" onclick = "location='app/login.php'">INICIAR SESIÓN</button>
    </div>
    <div class="arrow-down hello-img">
        <a href="#WHO"><img src="app/img/flecha-blanca.png" alt="Flecha bajar"></a> <!-- ARROW DOWN -->
    </div>
</section>
<!-- // -->

<!-- WHO ARE WE SECTION "WHO" -->
<section class="who-container" id="WHO">
    <h1 class="title">¿Quiénes somos?</h1>
    <div class="cont">
        <div class="who-text-container">
            <article>
                Grado en Tecnologías Interactivas es una empresa que se preocupa por optimizar el mantenimiento de tus cultivos.<br>Usamos sensores avanzados con la tecnología PUMPKIN para conocer las condiciones de las cosechas y de informar al agricultor de cualquier anomalía que pueda afectar a la producción.
            </article>
        </div>
        <!-- <div class="separator"></div> --> <!-- SEPARATOR -->
        <div class="video-container">
            <iframe class="video" src="https://www.youtube.com/embed/gWmRhnGWPjY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <div class="arrow-down">
        <a href="#WHY"><img src="app/img/flecha-blanca.png" alt="Flecha bajar"></a> <!-- ARROW DOWN -->
    </div>
</section>
<!-- // -->

<!-- WHY US SECTION "WHY" -->
<section class="why-container" id="WHY">
    <!-- <img src="#" alt="Campo de trigo"> --><!-- BACKGROUND -->
    <h1 class="title">¿Por qué elegirnos?</h1>
    <div class="why-text-container-all">
        <div class="why-text-container1">
            <div class="why-text">
                <p>Monitorización de cultivos en todo tipo de zonas.</p>
            </div>
            <div class="why-text">
                <div class="separator"></div> <!-- SEPARATOR -->
            </div>
            <div class="why-text">
                <p>Soporte técnico y garantía.</p>
            </div>
            <div class="why-text hide-separator">
                <div class="separator"></div>
            </div>
        </div>

        <div class="why-text-container2">
            <div class="why-text">
                <p>Incremento de productividad en el sector agrario.</p>
            </div>
            <div class="why-text">
                <div class="separator"></div> <!-- SEPARATOR -->
            </div>
            <div class="why-text">
                <p>Compromiso con el medioambiente.</p>
            </div>
        </div>
    </div>

    <div class="arrow-down hide-arrow">
        <a href="#DATA"><img src="app/img/flecha-blanca.png" alt="Flecha bajar"></a> <!-- ARROW DOWN -->
    </div>
</section>
<!-- // -->

<!-- DATA PARAMETERS SECTION "DATA" -->
<section class="data-container" id="DATA">
    <!-- <img src="app/img/leafes.png" alt="Hojas verdes"> --> <!-- BACKGROUND -->
    <h1 class="title">Controla tus datos:</h1>

    <div class="data-text">
        <div class="icon-box">
            <h4>HUMEDAD</h4>
            <img src="app/img/agua-blanco.png" alt="icono gotas">
        </div>
        <div class="icon-box">
            <h4>SALINIDAD</h4>
            <img src="app/img/sal-blanco.png" alt="icono salero">
        </div>

        <div class="icon-box">
            <h4>TEMPERATURA</h4>
            <img src="app/img/termometro-blanco.png" alt="icono termometro">
        </div>

        <div class="icon-box">
            <h4>LUMINOSIDAD</h4>
            <img src="app/img/nubes-y-sol-blanco.png" alt="icono sol y nubes">
        </div>

        <div class="icon-box">
            <h4>GPS</h4>
            <img src="app/img/mapa-blanco.png" alt="icono mapa">
        </div>

        <div class="icon-box">
            <h4>ANTIRROBO</h4>
            <img src="app/img/proteger-blanco.png" alt="icono escudo">
        </div>
    </div>

    <div class="arrow-down">
        <a href="#CONTACT"><img src="app/img/flecha-blanca.png" alt="Flecha bajar"></a> <!-- ARROW DOWN -->
    </div>
</section>
<!-- // -->

<!-- CONTACT SECTION "CONTACT" -->
<section class="contact-container" id="CONTACT">
    <div class="contact-img"></div> <!-- BACKGROUND IMG CONTAINER -->
    <div class="contact-text-container">
        <h1 class="title">Nadie nace sabiéndolo todo.</h1>
        <h3>Por eso, queremos estar ahí para ayudarte con cada paso.</h3>
        <button class="empty" onclick = "location='app/contact.php'">CONTACTAR</button>
    </div>

</section>
<!-- // -->
<footer>
    <img src="app/img/logo-white.png" alt="Logo de GTI versión blanca" > <!-- LOGO (WHITE) -->
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