<?php include 'conexion.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/memorias.css">
    <title>Memorias RAM - Byte Zone</title>
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
            <li><a href="componentes.php">Componentes</a></li>
            <li><a href="armatupc.php">Arma tu PC</a></li>
        </ul>
    </nav>

    <main>
        <div class="product-container">
            <div class="card">
                <div class="image-container">
                    <img src="../imagenes/ddr4ram.jpg" alt="Memoria Ram Fury Beast 16gb Ddr4 3200MHZ" class="active">
                    <img src="../imagenes/ddr4ram2.jpg">
                </div>
                <h4>Memoria Ram Fury Beast 16gb Ddr4 3200MHZ</h4>
                <p>$70.000</p>
                <button>Comprar</button>
            </div>
            <div class="card">
                <div class="image-container">
                    <img src="../imagenes/ddr5ram.jpg" alt="Memoria Ram Fury Beast 32GB Ddr5 5600MHZ" class="active">
                    <img src="../imagenes/ddr5ram2.jpg">
                </div>
                <h4>Memoria Kingston Fury Beast 32GB DDR5</h4>
                <p>$140.000</p>
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
