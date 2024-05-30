<?php
include("conexion.php");

if (isset($_POST['email'])) {
    $email = trim($_POST['email']);

    // Aquí puedes agregar lógica para enviar un correo electrónico con el enlace de restablecimiento de contraseña.

    header("Location: login.php?success=Enlace de restablecimiento enviado a tu correo electrónico");
} else {
    header("Location: reset_password.php?error=Completa todos los campos");
}
?>