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
        </div>
    </main>

    <script src="https://kit.fontawesome.com/6e9377a9ac.js" crossorigin="anonymous"></script>
    <script src="../../build/js/app.js"></script>
</body>