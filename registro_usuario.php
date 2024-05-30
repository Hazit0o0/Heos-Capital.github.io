<?php
include("conexion.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (
        !empty($_POST['firstname']) && 
        !empty($_POST['lastname']) && 
        !empty($_POST['email']) && 
        !empty($_POST['password'])
    ) {
        $firstname = trim($_POST['firstname']);
        $lastname = trim($_POST['lastname']);
        $email = trim($_POST['email']);
        $password = password_hash(trim($_POST['password']), PASSWORD_BCRYPT); // Usar password_hash para almacenar la contraseña
        $fecha = date("Y-m-d");

        // Validar email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<h3 class='error'>El formato del email no es válido.</h3>";
            exit();
        }

        // Usar declaraciones preparadas para evitar inyección SQL
        $consulta = "INSERT INTO datos (nombre, apellido, email, contraseña, fecha)
                     VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conex, $consulta);
        mysqli_stmt_bind_param($stmt, 'sssss', $firstname, $lastname, $email, $password, $fecha);

        if (mysqli_stmt_execute($stmt)) {
            session_start();
            $_SESSION['nombreUsuario'] = $firstname;
            header("Location: iniciada.php");
            exit();
        } else {
            echo "<h3 class='error'>Tu registro no se ha completado: " . mysqli_error($conex) . "</h3>";
        }
    } else {
        echo "<h3 class='error'>Completa todos los campos</h3>";
    }
} else {
    echo "<h3 class='error'>Método de solicitud no válido</h3>";
}
?>