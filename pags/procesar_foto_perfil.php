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

// Procesar la subida de la imagen de perfil
if (isset($_POST['submit'])) {
    $foto_perfil = $_FILES['foto_perfil']; // Obtener la información del archivo de imagen

    // Verificar que se haya seleccionado un archivo
    if ($foto_perfil['error'] === UPLOAD_ERR_OK) {
        $nombre_temporal = $foto_perfil['tmp_name'];
        $nombre_archivo = $foto_perfil['name'];
        $extension = pathinfo($nombre_archivo, PATHINFO_EXTENSION);
        $ruta_destino = "uploads/perfiles/{$usuario_id}_perfil.{$extension}";

        // Crea el directorio si no existe
        $directorio_destino = "uploads/perfiles/";
        if (!file_exists($directorio_destino)) {
            mkdir($directorio_destino, 0777, true);
        }

        // Mover el archivo temporal a su ubicación final
        if (move_uploaded_file($nombre_temporal, $ruta_destino)) {
            // Actualizar la base de datos con la ruta de la foto de perfil
            $sql_update = "UPDATE usuarios SET foto_perfil = ? WHERE id = ?";
            $stmt_update = $conn->prepare($sql_update);
            $stmt_update->bind_param("si", $ruta_destino, $usuario_id);
            $stmt_update->execute();
            $stmt_update->close();

            // Redirigir de vuelta al perfil del usuario
            header("Location: miperfil.php");
            exit();
        } else {
            echo "Error al subir la foto de perfil.";
        }
    } else {
        echo "Error al seleccionar la foto de perfil.";
    }
}

?>
