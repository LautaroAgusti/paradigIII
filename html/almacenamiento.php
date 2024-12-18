<?php include 'conexion.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/almacenamiento.css">
    <title>Almacenamiento - Byte Zone</title>
    <style>
        /* CSS adicional para hacer la transición de las imágenes */
        .card {
            position: relative;
            width: 250px;
            height: 400px;
            overflow: hidden;
        }

        .card img {
            position: absolute;
            width: 100%;
            height: auto;
            transition: opacity 1s ease-in-out;
            opacity: 0;
        }

        .card img.active {
            opacity: 1;
        }
    </style>
</head>
<body>

    <div>
        <h1>Byte Zone</h1>
    </div>

    <nav>
        <ul>
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="componentes.php">Componentes</a></li>
            <li><a href="sobre-nosotros.php">Sobre Nosotros</a></li>
        </ul>
    </nav>

    <main>
        <div class="product-container">
            <div class="card">
                <div class="image-container">
                    <img src="../imagenes/discom2.jpg" alt="Disco Solido SSD M.2 WD 1TB WD_Black SN770 5150MB/s" class="active">
                    <img src="../imagenes/discom2.2.jpg">
                </div>
                <h4>Disco Solido SSD M.2 WD 1TB SN770 5150MB/s</h4>
                <p>$110.000</p>
                <button onclick="redirigirALogin()">Comprar</button>
            </div>
            <div class="card">
                <div class="image-container">
                    <img src="../imagenes/ssd2.jpg" alt="Disco Solido SSD Team 2TB T-Force Vulcan Z 550MB/s" class="active">
                    <img src="../imagenes/ss2.0.jpg">
                </div>
                <h4>Disco Solido SSD Team 2TB Vulcan Z 550MB/s</h4>
                <p>$130.000</p>
                <button onclick="redirigirALogin()">Comprar</button>
            </div>
            <!-- Más tarjetas de productos -->
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
</script>s
</body>
</html>
