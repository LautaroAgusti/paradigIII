<?php include 'conexion.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/tarjetasdevideo.css">
    <title>Tarjetas de Video - Byte Zone</title>
</head>
<body>
    <header>
        <div class="titulo">
            <h1>Byte Zone</h1>
        </div>
    </header>

    <nav>
        <ul>
        <br><br>
        <ul>
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="componentes.php">Componentes</a></li>
            <li><a href="armatupc.php">Arma tu PC</a></li>
        </ul>
    </nav>

    <main>
        <div class="product-container">
            <div class="card">
                <div class="image-container">
                    <img src="../imagenes/3060portada.jpg" alt="MSI GeForce RTX 3060 12GB GDDR6 VENTUS 2X OC" class="active">
                    <img src="../imagenes/3060frontal.jpg">
                    <img src="../imagenes/3060backplate.jpg">
                </div>
                <h4>MSI GeForce RTX 3060 12GB GDDR6 VENTUS 2X OC</h4>
                <p>$395.000</p>
                <button onclick="redirigirALogin()">Comprar</button>
            </div>
            <div class="card">
                <div class="image-container">
                    <img src="../imagenes/4060tiportada.jpg" alt="MSI GeForce RTX 4060 Ti 8GB GDDR6 Ventus 3X Black OC" class="active">
                    <img src="../imagenes/4060tifrontal.jpg">
                    <img src="../imagenes/4060tibackplate.jpg">
                </div>
                <h4>MSI GeForce RTX 4060 Ti 8GB GDDR6 Ventus 3X Black OC</h4>
                <p>$565.000</p>
                <button onclick="redirigirALogin()">Comprar</button>
            </div>
            <!-- Agrega más tarjetas de productos de tarjetas de video aquí -->
        </div>
    </main>

    <script>
        // JavaScript para cambiar las imágenes automáticamente
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card');

            cards.forEach(card => {
                let images = card.querySelectorAll('img');
                let currentIndex = 0;

                setInterval(() => {
                    images[currentIndex].classList.remove('active');
                    currentIndex = (currentIndex + 1) % images.length;
                    images[currentIndex].classList.add('active');
                }, 3000); // Cambia cada 3 segundos
            });
        });
        function redirigirALogin() {
        window.location.href = "user.php";  // Cambia a la URL correcta de tu página de login
    }
</script>
</body>
</html>
