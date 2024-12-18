<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/procesadores.css">
    <title>Procesadores - Byte Zone</title>
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
                    <img src="../imagenes/i5frente.jpg" alt="Procesador Intel Core i5 12400" class="active">
                    <img src="../imagenes/i5costado.jpg">
                    <img src="../imagenes/i5costado2.jpg">
                </div>
                <h4>Procesador Intel Core i5 12400 4.4GHz Turbo</h4>
                <p>$195.000</p>
                <button>Comprar</button>
            </div>
            <div class="card">
                <div class="image-container">
                    <img src="../imagenes/i7frente.jpg" alt="Procesador Intel Core i7 12700KF" class="active">
                    <img src="../imagenes/i7costado.jpg">
                    <img src="../imagenes/i7costado2.jpg">
                </div>
                <h4>Procesador Intel Core i7 12700KF 5.0GHz Turbo</h4>
                <p>$320.000</p>
                <button>Comprar</button>
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
    </script>

</body>
</html>
