<?php
session_start();
include '../conexion.php'; // Asegúrate de incluir tu archivo de conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $sql = "SELECT id, contraseña FROM usuarios WHERE usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $stored_password);
    $stmt->fetch();

    if ($stmt->num_rows > 0) {
        // Verificar la contraseña en texto plano
        if ($contraseña === $stored_password) {
            $_SESSION['usuario_id'] = $id;
            $_SESSION['usuario'] = $usuario;
            header("Location: homedos.php"); // Redirigir al usuario a la página de inicio después del inicio de sesión exitoso
            exit();
        } else {
            echo include('error404.php'); // Manejar error de contraseña incorrecta
        }
    } else {
        echo "Usuario no encontrado"; // Manejar el caso en que el usuario no exista en la base de datos
    }

    $stmt->close();
    $conn->close();
}
?>
