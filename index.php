<?php
$servidor = 'localhost';
$usuario = 'root';
$clave = '';
$baseDeDatos = 'formulario';

$enlace = mysqli_connect(
    $servidor, 
    $usuario, 
    $clave, 
    $baseDeDatos);

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if (!$enlace) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

if (isset($_POST['registro'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $Contrasena = $_POST['Contrasena'];

    $sql = "INSERT INTO datos (nombre, correo, contrasena) VALUES ('$nombre', '$correo', '$Contrasena')";

    if (mysqli_query($enlace, $sql)) {
        echo "Registro exitoso";
    } else {
        echo "Error al registrar: " . mysqli_error($enlace);
    }
}
mysqli_close($enlace);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Base de Datos</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="scriptjs.js"></script>
</head>
<body>
    <div class="container">
        <div class="form-content">
            <h1 id="title">Registro</h1>
            <form action="" name="formulario" method="post">
                <div class="input-group">
                    <div class="input-field" id="">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="nombre" placeholder="Nombre">
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="text" name="correo" placeholder="Correo">
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="Contrasena" placeholder="Contraseña">
                    </div>

                    <p>¿boton raro? <a href="a">####</a></p>
                </div>
                <div class="btn-field">
                    <button id="registro" type="submit" name="registro">Registrarse</button>
                    <button id="registro" type="submit" name="registro">mmm</button>

                </div>
            </form>
        </div>
    </div>
</body>
</html>
