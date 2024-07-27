<?php
session_start();
include '../conexion.php'; // Asegúrate de incluir tu archivo de conexión

// Verificar si el usuario está autenticado
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php"); // Redirigir a la página de inicio de sesión si no está autenticado
    exit();
}

// Obtener el id de usuario de la sesión
$usuario_id = $_SESSION['usuario_id'];

// Consulta para obtener la información del usuario incluyendo la foto de perfil
$sql = "SELECT nombre, correo, telefono, usuario, foto_perfil FROM usuarios WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $usuario_id);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($nombre, $correo, $telefono, $usuario, $foto_perfil);
$stmt->fetch();

// Cerrar el statement
$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="styles/perfil.css">
    <!-- Agregar Font Awesome CDN para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-S9b8R2zWlmhZLzl4t8+8A4n3KWuX5OZ6lJ/8H5f2XfGOuGoCkzX69I1yPT8JcJqZKRTkl82vC2dTF5qYxMXJvA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="navbar">
                <ul class="nav-menu">
                    <li><a href="homedos.php">Home</a></li>
                    <li><a href="servicios.php">Servicios</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="perfil-container">
        <h1>Perfil de Usuario</h1>
        
        <!-- Mostrar la foto de perfil -->
        <div class="perfil-picture">
            <img src="<?php echo $foto_perfil; ?>" alt="Foto de perfil">
        </div>
        
        <div class="info">
            <label>Nombre:</label>
            <p><?php echo $nombre; ?></p>
        </div>
        <div class="info">
            <label>Correo:</label>
            <p><?php echo $correo; ?></p>
        </div>
        <div class="info">
            <label>Teléfono:</label>
            <p><?php echo $telefono; ?></p>
        </div>
        <div class="info">
            <label>Usuario:</label>
            <p><?php echo $usuario; ?></p>
        </div>

        <!-- Opciones de salir, editar y eliminar cuenta -->
        <div class="perfil-options">
            <a href="editar.php" class="option"><i class="fas fa-edit" style="color: green; font-size: 24px;"></i>Editar</a>
            <a href="logout.php" class="option"><i class="fas fa-sign-out-alt" style="color: red; font-size: 24px;"></i>Salir</a>
            <a href="eliminar_cuenta.php" class="option" onclick="return confirm('¿Estás seguro de que deseas eliminar tu cuenta?');"><i class="fas fa-trash-alt" style="color: #ff0000; font-size: 24px;"></i>Eliminar cuenta</a>
        </div>
    </div>

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
</body>
</html>
<script src="https://kit.fontawesome.com/d68a5f9db4.js" crossorigin="anonymous"></script>
