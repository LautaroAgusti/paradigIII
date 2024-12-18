<?php include "html/conexion.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/index.css">
    <title>Byte Zone</title>
</head>
<body>
  <header>
        <div class="titulo">
            <h1>Byte Zone</h1>
        </div>
   </header>
    <nav>
        <br>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="./html/componentes.php">Componentes</a></li>
            <li><a href="html/armatupc.php">Arma tu PC</a></li>
            </ul>
            
            <li><a href="html/user.php">Login</a></li>
    </nav>

    <main>
     <div class="carousel-container">
            <div class="carousel-slide">
                <img src="imagenes/i5frente.jpg" alt="Producto 1" class="active">
                <img src="imagenes/i7frente.jpg" alt="Producto 2">
                <img src="imagenes/motherfrontal.jpg" alt="Producto 3">
                <img src="imagenes/motherz790portada.jpg" alt="Producto 4">
                <img src="imagenes/ddr5ram.jpg" alt="Producto 5">
                <img src="imagenes/ss2.0.jpg" alt="Producto 6">

            </div>     
        </div>
     </div>

     <div class="secundario">
    <nav>
        <ul>
            <li><a href="html/nosotros.php">Sobre Nosotros</a></li>
        </ul>
     </div>
    </main>
    <script>
        const images = document.querySelectorAll('.carousel-slide img');
        let currentIndex = 0;
    
        function changeImage() {
            images[currentIndex].classList.remove('active');
            currentIndex = (currentIndex + 1) % images.length;
            images[currentIndex].classList.add('active');
        }
    
        setInterval(changeImage, 3000); // Cambia la imagen cada 3 segundos
    </script>

 <footer>
    <div class="piedepagina">
        <p>Derechos Reservados</p>
    </div>
 </footer>
</body>
</html>
