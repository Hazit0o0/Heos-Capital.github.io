<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Tu Empresa</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="form-container">
        <h2>Iniciar Sesión</h2>
        <form action="process_login.php" method="POST">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group checkbox-group">
                <input type="checkbox" id="rememberMe" name="rememberMe">
                <label for="rememberMe">Recuérdame</label>
            </div>
            <div class="input-group">
                <input type="submit" value="Iniciar Sesión">
            </div>
            <div class="forgot-password">
                <a href="reset_password.php">¿Olvidaste tu contraseña?</a>
            </div>
            <div class="register">
                <a href="register.php">¿No tienes una cuenta? Regístrate</a>
            </div>
        </form>
    </div>
</body>
</html>