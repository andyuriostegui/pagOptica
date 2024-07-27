<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optica Centro Visual</title>
    <link rel="stylesheet" href="../style.css">
    <!-- Agregar otros metadatos necesarios -->
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="navbar">
                <ul class="nav-menu">
                    <li><a href="homedos.php">Home</a></li>
                    <li><a href="servicios2.php">Servicios</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="miperfil.php">Mi perfil</a></li>


                </ul>
            </nav>
        </div>
    </header>
    <div class="hero">
        <div class="slider">

        <div class="slide active">
                <h1>Bienvenido a Optica Centro Visual</h1>
                <p>Descubre una nueva forma de ver el mundo</p>
                <a href="productos.php" class="btn">Explorar ahora</a>
            </div>

            <div class="slide active">
                <img src="../img/slider1.png" alt="">
            </div>
            <div class="slide">
               <img src="../img/slider2.png" alt="">
                <a href="servicios.php" class="btn">Ver Servicios</a>
            </div>
            <div class="slide">
             <img src="../img/slider3.png" alt="">
                <a href="contacto.php" class="btn">Contactar</a>
            </div>
            <div class="slider-controls">
                <span class="control prev">&lt;</span>
                <span class="control next">&gt;</span>
            </div>
        </div>
    </div>
    <section id="services" class="services">
        <div class="container">
            <h2>Nuestros Servicios</h2>
            <div class="services-grid">
                <!-- Grid de servicios -->
                <div class="service-section" id="servicio1">
                    <h3>Examen de la vista</h3>
                    <p>Descubre la mejor manera de ver el mundo con precisión y comodidad.</p>
                </div>
                <div class="service-section" id="servicio2">
                    <h3>Venta de gafas y lentes</h3>
                    <p>Encuentra tu estilo con nuestra exclusiva colección de gafas y lentes de sol.</p>
                </div>
                <div class="service-section" id="servicio3">
                    <h3>Adaptación de lentes de Contacto</h3>
                    <p>No dejes que unas gafas rotas te detengan.</p>
                </div>
                <div class="service-section" id="servicio4">
                    <h3>Asesoramiento y recomendaciones</h3>
                    <p>Somos tu guía para el cuidado ocular.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="products" class="products">
        <div class="container">
            <h2>Nuestros Productos</h2>
            <div class="products-grid">
                <div class="product-section" id="mas-vendidos">
                    <h3>Más Vendidos</h3>
                </div>
                <div class="product-section" id="recomendados">
                    <h3>Recomendados</h3>
                </div>
                <div class="product-section" id="mujeres">
                    <h3>Mujeres</h3>
                </div>
                <div class="product-section" id="hombres">
                    <h3>Hombres</h3>
                </div>
            </div>
        </div>
    </section>
    <footer>
    <div class="container">
        <div class="footer-content">
            <div class="social-icons">
                <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
            </div>
            <div class="footer-text">
                <p>Derechos Reservados &copy; 2024 Optica Centro Visual</p>
                <p>Hecho por CowyC0de</p>
            </div>
        </div>
    </div>
</footer>
    <script src="../script.js"></script>
</body>
</html>
