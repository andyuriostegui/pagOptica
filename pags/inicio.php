
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optica Centro Visual - Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles/inicio.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Optica Centro Visual</h2>
            <form method="POST" action="login.php">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="usuario" placeholder="Usuario" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="contraseña" placeholder="Contraseña" required>
                </div>
                <button type="submit">Iniciar Sesión</button>
                <br><br>
                <a class="register-link" href="registro.php">¿No tienes cuenta? Regístrate aquí</a>
            </form>
        </div>
    </div>
</body>
</html>
