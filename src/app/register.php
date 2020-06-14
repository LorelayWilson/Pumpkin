<?php

$PageTitle="Registrar usuario - Grado en Tecnologías Interactivas";//Opcional. Por defecto: GTI Tecnologias Interactivas

function customPageHeader(){?>
    
<?php }
include_once('header.php');
?>
<body>

    <section>
        <form action="../api/includes/registrar.php" method="post">
            <input type="text" name="user" placeholder="Usuario">
            <input type="number" name="role" placeholder="Rol(1,2,3)">
            <input type="text" name="nie" placeholder="NIE">
            <input type="password" name="password" placeholder="Contraseña">
            <input type="password" name="password-repeat" placeholder="Repetir contraseña">
            <button type="submit" name="register-submit">Registrar</button>
        </form>
    </section>

</body>
