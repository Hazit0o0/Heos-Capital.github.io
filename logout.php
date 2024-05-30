<?php
session_start();

// Destruir todas las variables de sesión
$_SESSION = array();

// Si se desea destruir la cookie, se debe establecer el tiempo de caducidad a un momento en el pasado
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');
}

// Finalmente, destruir la sesión
session_destroy();

// Redirigir al usuario a la página de inicio o a donde desees
header("Location: index.php");
exit();
?>
