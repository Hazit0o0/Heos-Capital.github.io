<?php
session_start();
include("conexion.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $totalPoints = 0;
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    // Sumar los puntos de cada respuesta
    for ($i = 1; $i <= 10; $i++) {
        if (isset($_POST["question$i"])) {
            $totalPoints += (int)$_POST["question$i"];
        }
    }

    // Determinar el perfil de inversión basado en los puntos totales
    if ($totalPoints <= 10) {
        $profile = "Conservador";
    } elseif ($totalPoints <= 20) {
        $profile = "Moderado";
    } else {
        $profile = "Agresivo";
    }

    // Guardar los resultados en la base de datos
    $consulta = "INSERT INTO perfiles_inversion (nombre, email, total_puntos, perfil) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conex, $consulta);
    mysqli_stmt_bind_param($stmt, 'ssis', $nombre, $email, $totalPoints, $profile);
    mysqli_stmt_execute($stmt);

    // Obtener la descripción del perfil
    $descripcion = '';
    $recomendaciones = [];
    $descripcion_consulta = "SELECT descripcion FROM descripciones_perfiles WHERE perfil = ?";
    $stmt_desc = mysqli_prepare($conex, $descripcion_consulta);
    mysqli_stmt_bind_param($stmt_desc, 's', $profile);
    mysqli_stmt_execute($stmt_desc);
    $result_desc = mysqli_stmt_get_result($stmt_desc);
    if ($row_desc = mysqli_fetch_assoc($result_desc)) {
        $descripcion = $row_desc['descripcion'];
    }

    // Obtener las recomendaciones de inversión
    $recomendaciones_consulta = "SELECT opcion FROM recomendaciones_inversion WHERE perfil = ?";
    $stmt_recom = mysqli_prepare($conex, $recomendaciones_consulta);
    mysqli_stmt_bind_param($stmt_recom, 's', $profile);
    mysqli_stmt_execute($stmt_recom);
    $result_recom = mysqli_stmt_get_result($stmt_recom);
    while ($row_recom = mysqli_fetch_assoc($result_recom)) {
        $recomendaciones[] = $row_recom['opcion'];
    }

    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perfil de Inversión</title>
        <link rel="stylesheet" href="Perfil.css">
    </head>
    <body>
        <div class="container">
            <h2>Su perfil de inversión es: <span class="profile-name"><?php echo $profile; ?></span></h2>
            <div class="profile-description">
                <p><?php echo $descripcion; ?></p>
            </div>
            <?php if (!empty($recomendaciones)): ?>
                <div class="investment-options">
                    <h3>Mejores opciones de inversión para tu perfil.</h3>
                    <ul>
                        <?php foreach ($recomendaciones as $recomendacion): ?>
                            <li>
                                <span class="investment-option-title"><?php echo $recomendacion; ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <div class="btn-container">
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="user_dashboard.php" class="btn">Volver a la Página Principal</a>
            <?php else: ?>
                <a href="index.php" class="btn">Página Principal</a>
                <a href="login.php" class="btn">Iniciar Sesión</a>
            <?php endif; ?>
            </div>
        </div>
    </body>
    </html>
    <?php
}
?>
