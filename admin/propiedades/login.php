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

<head>
    <title>Iniciar Sesión</title>
</head>

<body class="body centrado">

    <main class="login-design">
        <div class="picture-login">
            <img src="../../src/img/login.svg" alt="Imagen de inicio de sesión">
        </div>

        <div class="login login-flex">
            <h1>Iniciar Sesión</h1>
            <span>ó <a href="signup.php">Registrarse</a></span>

            <form action="login.php" method="POST">
                <input class="text" placeholder="Correo electrónico" type="text" name="email">
                <input class="text" placeholder="Contraseña" type="password" name="password">
                <input class="bt-file bordeado max" type="submit" value="Entrar">
            </form>

            <div class="wrapper-centrado centrado">
                <div class="wrapper">
                    <div class="icon facebook">
                        <div class="tooltip">
                            Facebook
                        </div>
                        <a class="icono" href="https://www.facebook.com/solutionstechgt"><i class="fa-brands fa-facebook-f"></i></a>
                    </div>

                    <div class="icon whatsapp">
                        <div class="tooltip">
                            Whatsapp
                        </div>
                        <a class="icono" href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>

                    <div class="icon youtube">
                        <div class="tooltip">
                            Youtube
                        </div>
                        <a class="icono" href="https://www.youtube.com/channel/UC2eHENnRThn5EByEBMppB1g""><i class=" fa-brands fa-youtube"></i></a>
                    </div>

                    <div class="icon github">
                        <div class="tooltip">
                            GitHub
                        </div>
                        <a class="icono" href="https://github.com/lozp1/NewForm"><i class="fa-brands fa-github"></i></a>
                    </div>

                    <div class="icon linkedin">
                        <div class="tooltip">
                            Linkedin
                        </div>
                        <a class="icono" href="https://gt.linkedin.com/company/b-smooth-solutions?original_referer=https%3A%2F%2Fwww.google.com%2F"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

        </div>

    </main>

    <script src="https://kit.fontawesome.com/6e9377a9ac.js" crossorigin="anonymous"></script>
    <script src="../../build/js/app.js"></script>
</body>