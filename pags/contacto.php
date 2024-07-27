<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="styles/contacto.css"> <!-- Enlaza tu archivo CSS externo -->
    <!-- Font Awesome para iconos (opcional) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

<header>
    <h1>Contacto</h1>
    <nav>
        <ul>
        <li><a href="homedos.php">Home</a></li>
                    <li><a href="servicios2.php">Servicios</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="miperfil.php">Mi perfil</a></li>
        </ul>
    </nav>
</header>

<main>
    <section class="contact-info">
        <div class="container">
            <h2>Información de Contacto</h2>
            <div class="contact-details">
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Dirección: Av. Principal #123, Ciudad, País</p>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <p>Email: info@tutienda.com</p>
                </div>
                <div class="contact-item">
                    <i class="fab fa-facebook-f"></i>
                    <p>Facebook: <a href="#">Tu Tienda</a></p>
                </div>
                <div class="contact-item">
                    <i class="fab fa-twitter"></i>
                    <p>Twitter: <a href="#">@TuTienda</a></p>
                </div>
                <div class="contact-item">
                    <i class="fab fa-instagram"></i>
                    <p>Instagram: <a href="#">@TuTiendaOficial</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-form">
        <div class="container">
            <h2>Buzon de sugerencias</h2>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                include '../conexion.php'; // Incluye tu archivo de conexión

                // Recibe y sanitiza los datos del formulario
                $nombre = htmlspecialchars(trim($_POST['nombre'] ?? ''));
                $email = htmlspecialchars(trim($_POST['email'] ?? ''));
                $mensaje = htmlspecialchars(trim($_POST['mensaje'] ?? ''));

                // Inserta los datos en la tabla de sugerencias
                $sql_insert = "INSERT INTO sugerencias (nombre, email, mensaje) VALUES (?, ?, ?)";
                $stmt_insert = $conn->prepare($sql_insert);
                $stmt_insert->bind_param("sss", $nombre, $email, $mensaje);

                if ($stmt_insert->execute()) {
                    // Sugerencia enviada correctamente
                    echo '<script>
                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                title: "¡Gracias!",
                                text: "Mensaje enviado correctamente.",
                                showConfirmButton: false,
                                timer: 1500
                            });
                          </script>';
                } else {
                    // Error al enviar la sugerencia
                    echo '<script>
                            Swal.fire({
                                icon: "error",
                                title: "¡Error!",
                                text: "Error al enviar el mensaje. Por favor, inténtalo de nuevo.",
                                confirmButtonText: "Aceptar"
                            });
                          </script>';
                }

                // Cierra la conexión y el statement
                $stmt_insert->close();
                $conn->close();
            }
            ?>
            <form action="contacto.php" method="POST">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="mensaje">Mensaje:</label>
                    <textarea name="mensaje" id="mensaje" rows="5" required></textarea>
                </div>
                <button type="submit">Enviar Sugerencia</button>
            </form>
        </div>
    </section>

    <!-- Mapa de Ubicación -->
    <section class="map-section">
        <div class="map-responsive">
            <!-- Aquí puedes integrar tu mapa (por ejemplo, Google Maps) -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3871.4120721371334!2d-77.04279328564943!3d-12.087677191424695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8ef4b69c34f%3A0x7f4f550c3c1c17e1!2sPlaza%20San%20Miguel!5e0!3m2!1sen!2spe!4v1634732315854!5m2!1sen!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
</main>

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

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
