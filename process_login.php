<?php
session_start();
include("conexion.php");

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $consulta = "SELECT * FROM datos WHERE email = ?";
    $stmt = mysqli_prepare($conex, $consulta);
    mysqli_stmt_bind_param($stmt, 's', $email);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($resultado) > 0) {
        $row = mysqli_fetch_assoc($resultado);
        if (password_verify($password, $row['Contraseña'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_email'] = $row['Email'];
            $_SESSION['nombreUsuario'] = $row['Nombre'];  // Guarda el nombre del usuario en la sesión

            if (isset($_POST['rememberMe'])) {
                setcookie("user_email", $row['Email'], time() + (86400 * 30), "/");
            }

            header("Location: iniciada.php");
            exit();
        } else {
            header("Location: login.php?error=Contraseña incorrecta");
            exit();
        }
    } else {
        header("Location: login.php?error=No se encontró una cuenta con ese email");
        exit();
    }
} else {
    header("Location: login.php?error=Completa todos los campos");
    exit();
}
?>
