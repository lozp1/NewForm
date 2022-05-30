<?php
// Database
require '../../includes/config/database.php';
$db = conectarDB();

require '../../includes/funciones.php';
incluirTemplate('headerV');
//var_dump($db); <!-- validar acceso en data

echo "<pre>";
var_dump($_POST);
echo "</pre>";

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
    <script src="../build/js/app.js"></script>
</body>