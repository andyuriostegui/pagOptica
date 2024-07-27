<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optica Centro Visual</title>
    <link rel="icon" href="img/icono.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="navbar">
                <ul class="nav-menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="pags/inicio.php">Iniciar Sesion</a></li>
                    <li><a href="pags/servicios.php">Servicios</a></li>
                    <li><a href="pags/info.php">Informacion</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="hero">
        <div class="slider">
            <div class="slide active">
                <h1>Bienvenido a Optica Centro Visual</h1>
                <p>Descubre una nueva forma de ver el mundo</p>
                <a href="pags/inicio.php" class="btn">Explorar ahora</a>
            </div>
            <div class="slide active">
                <h1>Registrate Ahora</h1>
                <p>Para no perderte nada ¡Es totalmente gratis!</p>
                <a href="pags/inicio.php" class="btn">Registrar ahora</a>
            </div>
            <div class="slide active">
                <img src="img/slider1.png" alt="">
            </div>
            <div class="slide">
               <img src="img/slider2.png" alt="">
                <a href="pags/servicios.php" class="btn">Ver Servicios</a>
            </div>
            <div class="slide">
             <img src="img/slider3.png" alt="">
                <a href="pags/inicio.php" class="btn">Contactar</a>
            </div>
            <div class="slider-controls">
                <span class="control prev">&lt;</span>
                <span class="control next">&gt;</span>
            </div>
        </div>
    </div>

    <!-- Clock Icon and Modal Trigger -->
    <div class="hours-container">
        <i class="fas fa-clock fa-2x" id="hoursIcon"></i>
    </div>

    <!-- Modal Structure -->
    <div id="hoursModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Horarios de Atención</h2>
            <p>Lunes a Viernes: 9:00 AM - 7:00 PM</p>
            <p>Sábado: 10:00 AM - 5:00 PM</p>
            <p>Domingo: Cerrado</p>
        </div>
    </div>

    <section id="services" class="services">
        <div class="container">
            <h2>Nuestros Servicios</h2>
            <div class="services-grid">
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

    <!-- Nueva Sección de Comentarios -->
    <section id="comments" class="comments">
        <div class="container">
            <h2>Esto es lo que opinan nuestros Clientes</h2>
            <div class="comments-grid">
                <?php
                include 'conexion.php'; // Incluye tu archivo de conexión

                // Selecciona los comentarios desde la base de datos
                $sql_select = "SELECT nombre, mensaje, fecha_creacion FROM sugerencias ORDER BY fecha_creacion DESC";
                $result = $conn->query($sql_select);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="comment">';
                        echo '<h3>' . htmlspecialchars($row['nombre']) . '</h3>';
                        echo '<p>' . htmlspecialchars($row['mensaje']) . '</p>';
                        echo '<small>' . htmlspecialchars($row['fecha_creacion']) . '</small>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No hay comentarios disponibles.</p>';
                }

                $conn->close();
                ?>
            </div>
        </div>
        <div class="register-container">
            <h2>Regístrate ahora para más información</h2>
            <a href="pags/inicio.php" class="btn register-btn">Registrar ahora</a>
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
    <script src="script.js"></script>
    <script>
        // JavaScript for Modal Functionality
        var modal = document.getElementById("hoursModal");
        var icon = document.getElementById("hoursIcon");
        var span = document.getElementsByClassName("close")[0];

        icon.onclick = function() {
            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>
