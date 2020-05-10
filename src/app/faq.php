<?php

function customPageHeader(){?>
    <link rel="stylesheet" type="text/css" href="css/landingpage.css">
    <link rel="stylesheet" type="text/css" href="css/faq.css">
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

    <!-- Sección preguntas -->
    <section class="faq" id="faq">
        <div class="container" id="container">
            <img class="foto-preguntas" src="img/dudando-hombre-negocios.jpg" alt="Foto hombre de negocios dudando">
            <div class="preguntas" id="preguntas">
                <div class="container-titulo-seccion">
                    <h1 class="titulo-section">Preguntas más frecuentes</h1>
                </div>
                <div class="preguntas-frecuentes" id="preguntas-frecuentes">
                    <div class="pregunta-respuesta">
                        <div class="container-titulo-pregunta">
                            <h2 class="titulo-pregunta">¿Cómo puedo obtener el producto?</h2>
                        </div>
                        <div class="container-respuesta">
                            <p class="respuesta">
Lo primero que hay que hacer es ponerse en contacto con nosotros en el apartado de
                                "Contacto".
                                Después, nosotros valoraremos su situación y le daremos un presupuesto.
                            </p>
                        </div>
                    </div>
                    <div class="pregunta-respuesta">
                        <div class="container-titulo-pregunta">
                            <h2 class="titulo-pregunta">¿Es una empresa local o nacional?</h2>
                        </div>
                        <div class="container-respuesta">
                            <p class="respuesta">
Es una empresa nacional. Puede contratar nuestros servicios estando en cualquier
                                parte del país, incluidas las islas Canárias, las islas Baleares, Ceuta y Melilla.
                            </p>
                        </div>
                    </div>
                    <div class="pregunta-respuesta">
                        <div class="container-titulo-pregunta">
                            <h2 class="titulo-pregunta">¿Puedo pedir información sin compromiso?</h2>
                        </div>
                        <div class="container-respuesta">
                            <p class="respuesta">
Por supuesto. Tan solo debe contactar con nosotros y le podremos dar un presupuesto,
                                hablarle de nuestras sondas...
                            </p>
                        </div>
                    </div>
                    <div class="pregunta-respuesta">
                        <div class="container-titulo-pregunta">
                            <h2 class="titulo-pregunta">¿Cuanto me costarian "X" sondas para mi campo?</h2>
                        </div>
                        <div class="container-respuesta">
                            <p class="respuesta">
Depende del número de campos que quiera monitorizar, el número de
                                sondas que quiera adquirir, la ubicación... La mejor opción es ponerse
                                en contacto con nosotros, explicarnos su caso y le haremos un presupuesto.
                            </p>
                        </div>
                    </div>
                    <div class="pregunta-respuesta">
                        <div class="container-titulo-pregunta">
                            <h2 class="titulo-pregunta">¿Cuanto tardarán en responderme cuando me ponga en contacto?</h2>
                        </div>
                        <div class="container-respuesta">
                            <p class="respuesta">
Una vez se ponga en contacto, le responderemos durante las próximas
                                24 horas siguientes. Si no recive información sobre nosotros, asegurese
                                que nuestro correo no está en la bandeja de Spam y vuelva a intentarlo.
                            </p>
                        </div>
                    </div>
                    <div class="pregunta-respuesta">
                        <div class="container-titulo-pregunta">
                            <h2 class="titulo-pregunta">¿Cundo tendré instaladas mis sondas en mis campos?</h2>
                        </div>
                        <div class="container-respuesta">
                            <p class="respuesta">
Depende de la ubicación en la que quiera las sondas. Cuando nos pongamos en contacto
                                con usted, fijaremos una fecha para realizar la instalación. Nosotros le daremos unas posibles
                                fechas y usted decidirá cuando realizaremos la instalación.
                            </p>
                        </div>
                    </div>
                    <div class="pregunta-respuesta">
                        <div class="container-titulo-pregunta">
                            <h2 class="titulo-pregunta">¿Cómo puedo efectuar el pago?</h2>
                        </div>
                        <div class="container-respuesta">
                            <p class="respuesta">
Actualmente se puede realizar el pago en efectivo o con targeta de crédito, mediante aplicaciones
                                como PayPal.
                            </p>
                        </div>
                    </div>
                    <div class="pregunta-respuesta">
                        <div class="container-titulo-pregunta">
                            <h2 class="titulo-pregunta">¿Qué hago si ya no quiero/ necesito las sondas?</h2>
                        </div>
                        <div class="container-respuesta">
                            <p class="respuesta">
En caso de ya no querer o necesitar nuestras sondas, debe ponerse en contacto con nosotros.
Nosotros nos encargaremos de eliminar las sondas o los campos de la página web y enviaremos
                                a un equipo técnico para que se lleve las sondas de su campo. En caso de eliminar todas sus
                                sondas y campos, también eliminaremos sus datos, como el usuario o su correo.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <img src="img/logo-white.png" alt="Logo de GTI versión blanca"> <!-- LOGO (WHITE) -->
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