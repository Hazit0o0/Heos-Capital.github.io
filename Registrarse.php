<!-- public/register.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
<div class="form-container">
        <h2>Registrarse</h2>
        <form action="registro_usuario.php" method="POST">
            <div class="input-group">
                <label for="firstname">Nombre</label>
                <input type="text" id="firstname" name="firstname" required>
            </div>
            <div class="input-group">
                <label for="lastname">Apellido</label>
                <input type="text" id="lastname" name="lastname" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <input type="checkbox" id="rememberMe" name="rememberMe">
                <label for="rememberMe">Recuérdame</label>
            </div>
            <div class="input-group">
                <input type="submit" value="Registrarse">
            </div>
            <div class="forgot-password">
                <a href="#">¿Olvidaste tu contraseña?</a>
            </div>
        </form>
    </div>
</body>
</html>