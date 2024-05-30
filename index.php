<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Empresa - Robo Advisor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Encabezado (header) -->
    <header>
        <!-- Div para el contenedor del logo -->
        <div class="logo-container">
            <a href="#">
                <img src="Logo/LogoHeos.png" alt="HEOSCAPITAL" class="logo"> <!-- Coloca la ruta correcta a tu logo -->
            </a>
        </div>
        <!-- Div para el menú de navegación -->
        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#servicios">¿Quiénes somos?</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
        <div class="header-buttons">
            <a href="registrarse.php" class="registrarse-button">Registrarse</a>
            <a href= "Login.php" class="inicia-sesion-button">Inicia Sesión</a>
        </div>
    </header>

    <!-- Sección Hero -->
    <section id= inicio class="hero">
        <!-- Imagen Overlay -->
        <div class="image-overlay">
            <img src= "Fondos/colibri.png" alt="Imagen" class="image-colibri"> <!-- Coloca la ruta correcta a tu GIF -->
        </div>
        <div class="image-overlay">
        <img src="Fondos/image2.png" alt="Imagen2" class="img-other">
    </div>
       
        <div class="hero-content">
            <h1>Vuela Hacia Tu Libertad Financiera</h1>
            <p>Descubre el poder de hacer tus sueños financieros realidad.</p>
            <a href= "Formulario.php" class="Test">Perfil de Inversor</a>
        </div>

     <!-- Sección de texto en el lado izquierdo -->
     <section id= servicios class="left-text">
        <div class="left-text-content">
            <h2>HEOS CAPITAL</h2>
            <p>Heos Capital es una plataforma innovadora que te ayuda a descubrir <em><span class="highlight">tu perfil de inversión único</span></em> y ofrece recomendaciones de <em><span class="highlight">inversión personalizadas</span></em>.
            <p>Mediante un cuestionario interactivo diseñado para evaluar tus objetivos financieros, tolerancia al riesgo y conocimientos de inversión.</p>
            <p>Al responder una serie de preguntas cuidadosamente seleccionadas, nuestro sistema analiza tu perfil de inversor, <em><span class="highlight">determina tus preferencias y aversión al riesgo</span></em>.</p>
            </ul>
        </div>
    </section>
    <div class="image-hero">
        <img src="Fondos/robot.png" alt="Inversion" class="img-inversion">
    </div>
    <footer>
        <div id= contacto class="footer-columns">
            <!-- Primera columna: Logo de la empresa -->
            <div class="footer-column">
                <img src="Logo/HeosBlanco.png" alt="Logo de la empresa" class="footer-logo">
            </div>
            <!-- Segunda columna: Servicios de diseño web -->
            <div class="footer-column">
                <h3>Servicio</h3>
                <ul>
                    <li><a href="formulario.php">Test de Idoneidad</a></li>
                    <li><a href="formulario.php">Aprendamos</a></li>
                    <li><a href="formulario.php">¿Quienes Somos?</a></li>
                </ul>
            </div>
            <!-- Tercera columna: Páginas legales -->
            <div class="footer-column">
                <h3>Páginas Legales</h3>
                <ul>
                    <li><a href="terminos.html">Términos y Condiciones</a></li>
                    <li><a href="privacidad.html">Política de Privacidad</a></li>
                    <li><a href="cookies.html">Política de Cookies</a></li>
                    <li><a href="contacto.html">Contacto</a></li>
                </ul>
            </div>
            <!-- Cuarta columna: Redes sociales -->
            <div class="footer-column">
                <div class="social-media-icons">
                    <a href="#"><img src="logo/Facebook.png" alt="Facebook" class="facebook"></a>
                    <a href="#"><img src="logo/Twitter.png" alt="Twitter" class="Twitter"></a>
                    <a href="#"><img src="logo/Instagram.png" alt="Instagram" class="Instagram"></a>
                </div>
            </div>
        </div>
    </footer>
    <script>
        window.addEventListener('scroll', function() {
            var header = document.querySelector('header');

            if (window.scrollY > 0) {
                header.classList.add('header-scrolled'); // Agregar clase cuando el header está desplazado
            } else {
                header.classList.remove('header-scrolled'); // Remover clase cuando el header está en su posición original
            }
        });
    </script>
</body>
</html>
