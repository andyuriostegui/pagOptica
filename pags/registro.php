<?php
include '../conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Datos del formulario de registro
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña']; // Contraseña en texto plano
    
    // Procesar la subida de la imagen de perfil
    $foto_perfil = $_FILES['foto_perfil']; // Obtener la información del archivo de imagen

    // Verificar que se haya seleccionado un archivo
    if ($foto_perfil['error'] === UPLOAD_ERR_OK) {
        $nombre_temporal = $foto_perfil['tmp_name'];
        $nombre_archivo = $foto_perfil['name'];
        $extension = pathinfo($nombre_archivo, PATHINFO_EXTENSION);
        $ruta_destino = "uploads/perfiles/{$usuario}_perfil.{$extension}";

        // Mover el archivo temporal a su ubicación final
        if (move_uploaded_file($nombre_temporal, $ruta_destino)) {
            // Insertar usuario en la base de datos
            $sql = "INSERT INTO usuarios (nombre, correo, telefono, usuario, contraseña, foto_perfil) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssss", $nombre, $correo, $telefono, $usuario, $contraseña, $ruta_destino);

            if ($stmt->execute()) {
                header("Location: inicio.php"); // Redirigir al usuario a la página de inicio después del registro exitoso
                exit(); // Asegurar que el script se detenga aquí después de redirigir
            } else {
                echo "Error al registrar usuario: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error al subir la foto de perfil.";
        }
    } else {
        echo "Error al seleccionar la foto de perfil.";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optica Centro Visual - Registro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles/registro.css">
    <style>
        /* Estilos para la previsualización de la imagen */
        #preview {
            width: 150px;
            height: 150px;
            border: 1px solid #ddd;
            border-radius: 50%;
            overflow: hidden;
            margin-bottom: 10px;
        }
        #preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-box">
            <h2>Registro - Optica Centro Visual</h2>
            <form method="POST" action="registro.php" enctype="multipart/form-data" id="registrationForm">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="nombre" placeholder="Nombre" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="correo" placeholder="Correo" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-phone"></i>
                    <input type="tel" name="telefono" placeholder="Teléfono" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-user-circle"></i>
                    <input type="text" name="usuario" placeholder="Usuario" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="contraseña" placeholder="Contraseña" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-image"></i>
                    <input type="file" name="foto_perfil" id="foto_perfil" required accept="image/*" onchange="previewImage(event)">
                </div>
                <div id="preview"></div> <!-- Contenedor para la previsualización de la imagen -->
                <button type="submit" name="submit">Registrarse</button>
                <br><br>
                <a class="login-link" href="inicio.php">¿Ya tienes cuenta? Inicia sesión aquí</a>
            </form>
        </div>
    </div>

    <script>
        // Función para mostrar la previsualización de la imagen seleccionada
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('preview');
                output.innerHTML = '<img src="' + reader.result + '" alt="Foto de perfil">';
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body>
</html>
