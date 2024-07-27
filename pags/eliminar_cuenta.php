<?php
session_start();
include '../conexion.php'; // Incluye tu archivo de conexión

// Verificar si el usuario está autenticado
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php"); // Redirigir a la página de inicio de sesión si no está autenticado
    exit();
}

// Obtener el id de usuario de la sesión
$usuario_id = $_SESSION['usuario_id'];

// Consulta para eliminar al usuario de la base de datos
$sql = "DELETE FROM usuarios WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $usuario_id);

if ($stmt->execute()) {
    // Eliminación exitosa, redirigir a la página de inicio o a una página de confirmación
    session_destroy(); // Destruir todas las sesiones activas
    header("Location: ../index.php"); // Redirigir a una página de confirmación
    exit();
} else {
    // Error al eliminar, redirigir a una página de error o manejar el error según tu aplicación
    header("Location: error_eliminar.php"); // Redirigir a una página de error
    exit();
}

$stmt->close();
$conn->close();
?>
