<?php
include 'conexion.php';

if (isset($_POST['register'])) {
    // Procesar el formulario de registro
    $nombre_usuario = $_POST['new-username'];
    $correo = $_POST['new-email'];
    $contraseña = password_hash($_POST['new-password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO usuarios (nombre_usuario, correo, contraseña) VALUES ('$nombre_usuario', '$correo', '$contraseña')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $conn->error;
    }
}

if (isset($_POST['login'])) {
    // Procesar el formulario de inicio de sesión
    $nombre_usuario = $_POST['username'];
    $contraseña = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE nombre_usuario='$nombre_usuario'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($contraseña, $row['contraseña'])) {
            echo "Inicio de sesión exitoso";
            // Aquí puedes redirigir al usuario o iniciar la sesión
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Usuario no encontrado";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Byte Zone - Inicio de Sesión y Registro</title>
    <link rel="stylesheet" href="../css/user.css">
</head>
<body>
    <header>
        <div class="titulo">
            <h1>Byte Zone</h1>
        </div>
    </header>
    
    <nav>
        <ul>
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="Componentes.php">Componentes</a></li>
            <li><a href="ArmatuPC.php">Arma tu PC</a></li>
        </ul>
    </nav>

    <main>
        <div class="contenido">
            <div class="formulario">
                <h2>Iniciar Sesión</h2>
                <form method="POST" action="user.php">
                    <label for="username">Usuario:</label>
                    <input type="text" id="username" name="username" required>
                    
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required>
                    
                    <button type="submit" name="login">Ingresar</button>
                </form>
            </div>
        </div>

        <div class="contenido">
            <div class="formulario">
                <h2>Registro</h2>
                <form method="POST" action="user.php">
                    <label for="new-username">Usuario:</label>
                    <input type="text" id="new-username" name="new-username" required>
                    
                    <label for="new-email">Correo Electrónico:</label>
                    <input type="email" id="new-email" name="new-email" required>
                    
                    <label for="new-password">Contraseña:</label>
                    <input type="password" id="new-password" name="new-password" required>
                    
                    <button type="submit" name="register">Registrarse</button>
                </form>
            </div>
        </div>
    </main>

    <footer>
        <div class="piedepagina">
            <p>Derechos Reservados</p>
        </div>
    </footer>
</body>
</html>
