<?php
// Database
require '../../includes/config/database.php';
$db = conectarDB();

require '../../includes/funciones.php';
incluirTemplate('headerV');
//var_dump($db); <!-- validar acceso en data

// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";

?>

<body class="body centrado">

    <h1>Ingresar</h1>

    <span>ó <a href="signup.php">Registrarse</a></span>
    <div class="acceder">

        <form action="login.php" method="POST">
            <input class="text" placeholder="Ingresa tu correo" type="text" name="email">
            <input class="text" placeholder="Ingresa tu contraseña" type="password" name="password">
            <input class="bt-file bordeado max" type="submit" value="Ingresar">
        </form>

    </div>

    <div class="wrapper">
        <div class="icon facebook">
            <div class="tooltip">
                Facebook
            </div>
            <a href="https://www.facebook.com/solutionstechgt"><i class="fa-brands fa-facebook-f"></i></a>
        </div>

        <div class="icon whatsapp">
            <div class="tooltip">
                Whatsapp
            </div>
            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
        </div>

        <div class="icon youtube">
            <div class="tooltip">
                Youtube
            </div>
            <a href="https://www.youtube.com/channel/UC2eHENnRThn5EByEBMppB1g""><i class=" fa-brands fa-youtube"></i></a>
        </div>

        <div class="icon github">
            <div class="tooltip">
                GitHub
            </div>
            <a href="https://github.com/lozp1/NewForm"><i class="fa-brands fa-github"></i></a>
        </div>

        <div class="icon linkedin">
            <div class="tooltip">
                Linkedin
            </div>
            <a href="https://gt.linkedin.com/company/b-smooth-solutions?original_referer=https%3A%2F%2Fwww.google.com%2F"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/6e9377a9ac.js" crossorigin="anonymous"></script>
    <script src="../build/js/app.js"></script>
</body>