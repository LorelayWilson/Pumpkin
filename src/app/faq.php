<?php

$PageTitle="FAQ - Grado en Tecnologías Interactivas";//Opcional. Por defecto: GTI Tecnologias Interactivas

function customPageHeader(){?>
<link rel="stylesheet" type="text/css" href="css/landingpage.css">
<link rel="stylesheet" type="text/css" href="css/faq.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php }
include_once('header.php');
?>
<html>

<body>

    <!-- HEADER -->
    <header>
        <a href="../index.php"><img src="../app/img/logo.svg" alt="Logo de GTI" class="logo" /></a>
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
                <!-- 	<label for="chk" class="hide-menu-btn">
					<i class="fas fa-times"></i> 
				</label> -->
            </ul>
        </nav>
    </header>
    <!-- // -->

    <!-- Sección preguntas -->
    <section class="faq" id="faq">
        <div class="container" id="container">
            <img class="foto-preguntas" src="img/dudando-hombre-negocios.jpg" alt="Foto hombre de negocios dudando">
            <div class="preguntas" id="preguntas">
                <div class="container-titulo-seccion">
                    <h1 class="titulo-section">Preguntas más frecuentes</h1>
                </div>
                <div class="preguntas-frecuentes" id="preguntas-frecuentes">
                <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6" id="container-button1">
                <p>
                        <button class="button" type="button" data-toggle="collapse" data-target="#collapseExample"
                            aria-expanded="false" aria-controls="collapseExample" id="dropbtn">
                            <h2 id="titulo-pregunta">¿Cómo puedo obtener el producto?</h2>
                            <i class="fas fa-angle-down" id="flecha_abajo"></i>
                        </button>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body" id="respuesta">
                            Lo primero que hay que hacer es ponerse en contacto con nosotros en el apartado de
                            "Contacto".
                            Después, nosotros valoraremos su situación y le daremos un presupuesto.
                        </div>
                    </div>

                    <p>

                        <button class="button" type="button" data-toggle="collapse" data-target="#collapseExample1"
                            aria-expanded="false" aria-controls="collapseExample" id="dropbtn">
                            <h2 id="titulo-pregunta">¿Es una empresa local o nacional?</h2>
                            <i class="fas fa-angle-down" id="flecha_abajo"></i>
                        </button>
                    </p>
                    <div class="collapse" id="collapseExample1">
                        <div class="card card-body" id="respuesta">
                            Es una empresa nacional. Puede contratar nuestros servicios estando en cualquier
                            parte del país, incluidas las islas Canárias, las islas Baleares, Ceuta y Melilla.
                        </div>
                    </div>

                    <p>

                        <button class="button" type="button" data-toggle="collapse" data-target="#collapseExample2"
                            aria-expanded="false" aria-controls="collapseExample" id="dropbtn">
                            <h2 id="titulo-pregunta">¿Puedo pedir información sin compromiso?</h2>
                            <i class="fas fa-angle-down" id="flecha_abajo"></i>
                        </button>
                    </p>
                    <div class="collapse" id="collapseExample2">
                        <div class="card card-body" id="respuesta">
                            Por supuesto. Tan solo debe contactar con nosotros y le podremos dar un presupuesto,
                            hablarle de nuestras sondas...
                        </div>
                    </div>

                    <p>

                        <button class="button" type="button" data-toggle="collapse" data-target="#collapseExample3"
                            aria-expanded="false" aria-controls="collapseExample" id="dropbtn">
                            <h2 id="titulo-pregunta">¿Cuanto me costarian "X" sondas para mi campo?</h2>
                            <i class="fas fa-angle-down" id="flecha_abajo"></i>
                        </button>
                    </p>
                    <div class="collapse" id="collapseExample3">
                        <div class="card card-body" id="respuesta">
                            Depende del número de campos que quiera monitorizar, el número de
                            sondas que quiera adquirir, la ubicación... La mejor opción es ponerse
                            en contacto con nosotros, explicarnos su caso y le haremos un presupuesto.
                        </div>
                    </div>
                    </div> <!-- container-button1 -->
                    <!--<div class="offset-lg-2"></div>-->
                    <div class="col-sm-12 col-md-6 col-lg-6" id="container-button2">
                    <p>

                        <button class="button" type="button" data-toggle="collapse" data-target="#collapseExample4"
                            aria-expanded="false" aria-controls="collapseExample" id="dropbtn">
                            <h2 id="titulo-pregunta">¿Cuanto tardarán en responderme cuando me ponga en contacto?</h2>
                            <i class="fas fa-angle-down" id="flecha_abajo"></i>
                        </button>
                    </p>
                    <div class="collapse" id="collapseExample4">
                        <div class="card card-body" id="respuesta">
                            Una vez se ponga en contacto, le responderemos durante las próximas
                            24 horas siguientes. Si no recive información sobre nosotros, asegurese
                            que nuestro correo no está en la bandeja de Spam y vuelva a intentarlo.
                        </div>
                    </div>

                    <p>

                        <button class="button" type="button" data-toggle="collapse" data-target="#collapseExample5"
                            aria-expanded="false" aria-controls="collapseExample" id="dropbtn">
                            <h2 id="titulo-pregunta">¿Cundo tendré instaladas mis sondas en mis campos?</h2>
                            <i class="fas fa-angle-down" id="flecha_abajo"></i>
                        </button>
                    </p>
                    <div class="collapse" id="collapseExample5">
                        <div class="card card-body" id="respuesta">
                            Depende de la ubicación en la que quiera las sondas. Cuando nos pongamos en contacto
                            con usted, fijaremos una fecha para realizar la instalación. Nosotros le daremos unas
                            posibles fechas y usted decidirá cuando realizaremos la instalación.
                        </div>
                    </div>

                    <p>

                        <button class="button" type="button" data-toggle="collapse" data-target="#collapseExample6"
                            aria-expanded="false" aria-controls="collapseExample" id="dropbtn">
                            <h2 id="titulo-pregunta">¿Cómo puedo efectuar el pago?</h2>
                            <i class="fas fa-angle-down" id="flecha_abajo"></i>
                        </button>
                    </p>
                    <div class="collapse" id="collapseExample6">
                        <div class="card card-body" id="respuesta">
                            Actualmente se puede realizar el pago en efectivo o con tarjeta de crédito, mediante
                            aplicaciones como PayPal.
                        </div>
                    </div>

                    <p>

                        <button class="button" type="button" data-toggle="collapse" data-target="#collapseExample7"
                            aria-expanded="false" aria-controls="collapseExample" id="dropbtn">
                            <h2 id="titulo-pregunta">¿Qué hago si ya no quiero/ necesito las sondas?</h2>
                            <i class="fas fa-angle-down" id="flecha_abajo"></i>
                        </button>
                    </p>
                    <div class="collapse" id="collapseExample7">
                        <div class="card card-body" id="respuesta">
                            En caso de ya no querer o necesitar nuestras sondas, debe ponerse en contacto con
                            nosotros. Nosotros nos encargaremos de eliminar las sondas o los campos de la página
                            web y enviaremos a un equipo técnico para que se lleve las sondas de su campo. En
                            caso de eliminar todas sus sondas y campos, también eliminaremos sus datos, como
                            el usuario o su correo.
                        </div>
                    </div>
                    </div> <!-- container-button2 -->

</div> <!--row-->
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <img src="img/logo-white.png" alt="Logo de GTI versión blanca"> <!-- LOGO (WHITE) -->
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