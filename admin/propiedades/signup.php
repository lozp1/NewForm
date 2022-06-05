<?php
// Database
require '../../includes/config/database.php';
$db = conectarDB();

// Arreglo - Mensajes de Errores
$errores = [];

require '../../includes/funciones.php';
incluirTemplate('headerV');
//var_dump($db); <!-- validar acceso en data

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (!$email) {
        $errores[] = "Debes colocar un correo electrónico";
    }

    if (strlen(!$password)) {
        $errores[] = "Contraseña Obligatorio para continuar";
    }

    // echo "<pre>";
    // var_dump($errores);
    // echo "</pre>";
    // exit;

    // Evaluar que el Array este vacio
    if (empty($errores)) {
        // Insertar en DataBase
        $query = " INSERT INTO users (email, password)
VALUES ('$email', '$password') ";

        // echo $query;

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            echo "Insertado Correctamente";
        }
    }
}
?>

<body class="body centrado">

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
            <!--error que será mostrado en pantalla -->
        </div class="alerta error">
    <?php endforeach; ?>

    <head>
        <title>Registrarse</title>
    </head>

    <main class="login-design">

        <div class="picture-login">
            <img src="../../src/img/sign_up.svg" alt="Imagen de inicio de sesión">
        </div>

        <div class="login login-flex">
            <h1>Registrarse</h1>
            <span>ó <a href="login.php">Iniciar Sesión</a></span>

            <form action="signup.php" method="POST">
                <input class="text" placeholder="Correo electrónico" type="text" name="email" id="email">
                <input class="text" placeholder="Contraseña" type="password" name="password" id="password">
                <input class="text" placeholder="Confirmar contraseña" type="password" name="confirm_password" id="confirm_password">
                <input class="bt-file bordeado max" type="submit" value="Registrarte">
            </form>
        </div>

    </main>

    <script src="../../build/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>