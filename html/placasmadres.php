<?php include 'conexion.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/placasmadres.css">
    <title>Placas Madre - Byte Zone</title>
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
            <li><a href="../html/componentes.php">Componentes</a></li>
            <li><a href="../html/armatupc.php">Arma tu PC</a></li>
        </ul>
    </nav>

    <main>
        <div class="product-container">
            <div class="card">
                <div class="image-container">
                    <img src="../imagenes/motherfrontal.jpg" alt="Mother Gigabyte B760 AORUS ELITE AX WIFI DDR5" class="active">
                    <img src="../imagenes/motherfrontal1.jpg">
                    <img src="../imagenes/mothercostado.jpg">
                    <img src="../imagenes/motheratras.jpg">
                </div>
                <h4>Mother Gigabyte B760 AORUS ELITE AX WIFI DDR5</h4>
                <p>$245.000</p>
                <button>Comprar</button>
            </div>
            <div class="card">
                <div class="image-container">
                    <img src="../imagenes/motherz790portada.jpg" alt="Mother MSI Z790 PROJECT ZERO LGA 1700" class="active">
                    <img src="../imagenes/z790frontal.jpg">
                    <img src="../imagenes/z790costado.jpg">
                    <img src="../imagenes/z790atras.jpg">
                </div>
                <h4>Mother MSI Z790 PROJECT ZERO LGA 1700</h4>
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
