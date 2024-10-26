<?php include 'conexion.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fuentes.css">
    <title>Fuentes de Alimentación - Byte Zone</title>
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
                    <img src="../imagenes/650portada.jpg" alt="Fuente Gigabyte 650W 80 Plus Bronze P650B" class="active">
                    <img src="../imagenes/650frente.jpg">
                    <img src="../imagenes/659costado.jpg">
                </div>
                <h4>Fuente Gigabyte 650W 80 Plus Bronze P650B</h4>
                <p>$90.000</p>
                <button onclick="redirigirALogin()">Comprar</button>
            </div>
            <div class="card">
                <div class="image-container">
                    <img src="../imagenes/750frontal.jpg" alt="Fuente Gigabyte 750W 80 Plus Gold UD750GM Full Modular PG5 ATX 3.0" class="active">
                    <img src="../imagenes/750abajo.jpg">
                    <img src="../imagenes/750atras.jpg">
                </div>
                <h4>Fuente Gigabyte 750W 80 Plus Gold UD750GM</h4>
                <p>$170.000</p>
                <button onclick="redirigirALogin()">Comprar</button>
            </div>
            <!-- Añadir más tarjetas de productos según sea necesario -->
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
