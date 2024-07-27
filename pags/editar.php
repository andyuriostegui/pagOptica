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

// Manejar el envío del formulario de edición
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir y sanitizar los datos del formulario
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $correo = htmlspecialchars(trim($_POST['correo']));
    $telefono = htmlspecialchars(trim($_POST['telefono']));

    // Validar los datos (aquí deberías hacer validaciones más específicas según tus requisitos)

    // Actualizar los datos del usuario en la base de datos
    $sql_update = "UPDATE usuarios SET nombre = ?, correo = ?, telefono = ? WHERE id = ?";
    $stmt_update = $conn->prepare($sql_update);
    $stmt_update->bind_param("sssi", $nombre, $correo, $telefono, $usuario_id);

    if ($stmt_update->execute()) {
        // Redirigir a la página de perfil con un mensaje de éxito
        header("Location: miperfil.php");
        exit();
    } else {
        // Manejar errores de actualización de la base de datos
        echo "Error al actualizar los datos. Por favor, inténtalo de nuevo.";
    }

    // Cerrar la consulta preparada
    $stmt_update->close();
}

// Consulta para obtener la información actual del usuario
$sql_select = "SELECT nombre, correo, telefono FROM usuarios WHERE id = ?";
$stmt_select = $conn->prepare($sql_select);
$stmt_select->bind_param("i", $usuario_id);
$stmt_select->execute();
$stmt_select->store_result();
$stmt_select->bind_result($nombre_actual, $correo_actual, $telefono_actual);
$stmt_select->fetch();

// Cerrar la conexión y el statement
$stmt_select->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Perfil</title>
    <link rel="stylesheet" href="styles/editar.css">
    <!-- Agregar Font Awesome CDN para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-S9b8R2zWlmhZLzl4t8+8A4n3KWuX5OZ6lJ/8H5f2XfGOuGoCkzX69I1yPT8JcJqZKRTkl82vC2dTF5qYxMXJvA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="navbar">
                <ul class="nav-menu">
                    <li><a href="miperfil.php">Mi perfil</a></li>
                    <li><a href="servicios.php">Servicios</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="perfil-container">
        <h1>Editar Perfil</h1>
        <!-- Formulario para editar datos personales -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($nombre_actual); ?>" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" id="correo" name="correo" value="<?php echo htmlspecialchars($correo_actual); ?>" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" value="<?php echo htmlspecialchars($telefono_actual); ?>" required>
            </div>
            <div class="form-group">
                <button type="submit"><i class="fas fa-check-circle"></i> Guardar Cambios</button>
            </div>
        </form>

        <!-- Formulario para subir foto de perfil -->
        <form action="procesar_foto_perfil.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="foto_perfil">Seleccionar foto de perfil:</label>
                <input type="file" name="foto_perfil" id="foto_perfil" accept="image/*" onchange="previewImage(event)">
            </div>
            <div id="preview" class="preview-container">
                <!-- Contenedor para la previsualización de la imagen -->
                <img id="preview-image" src="#" alt="Preview">
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Subir Foto</button>
            </div>
        </form>
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
    <script>
        // Función para mostrar la previsualización de la imagen seleccionada
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('preview-image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
    <script src="https://kit.fontawesome.com/d68a5f9db4.js" crossorigin="anonymous"></script>
</body>
</html>

