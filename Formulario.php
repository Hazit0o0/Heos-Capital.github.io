<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Inversión</title>
    <link rel="stylesheet" href="formulario.css">
</head>
<body>
    <?php
    session_start();
    $nombre = "";
    $email = "";
    if (isset($_SESSION['usuario'])) {
        $nombre = $_SESSION['usuario']['nombre'];
        $email = $_SESSION['usuario']['email'];
    }
    ?>
    <div class="form-container">
        <h2>Perfil de Inversión</h2>
        <form id="investmentForm" action="process_investment_profile.php" method="POST">
            <!-- Datos del usuario -->
            <div class="section active" data-section="0">
            <div class="question">
                <p class="user-info-label">Nombre</p>
                <label><input type="text" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>" required></label>
            </div>
            <div class="question">
                <p class="user-info-label">Email</p>
                <label><input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required></label>
            </div>
            <button type="button" class="start-next-btn">Siguiente</button>
        </div>

            <!-- Preguntas -->
            <div class="section" data-section="1">
                <div class="question">
                    <p>¿Cuál es su principal objetivo de inversión?</p>
                    <label class="option-container">
                        <input type="radio" name="question1" value="1" required>
                        <span class="option">Preservación de capital</span>
                    </label>
                    <label class="option-container">
                        <input type="radio" name="question1" value="2">
                        <span class="option">Generación de ingresos</span>
                    </label>
                    <label class="option-container">
                        <input type="radio" name="question1" value="3">
                        <span class="option">Crecimiento del capital</span>
                    </label>
                </div>
                <div class="buttons">
                    <button type="button" class="prev-btn">Anterior</button>
                    <button type="button" class="next-btn">Siguiente</button>
                </div>
            </div>

            <div class="section" data-section="2">
                <div class="question">
                    <p>¿Cómo reaccionaría si su inversión perdiera un 10% de su valor en un mes?</p>
                    <label class="option-container">
                        <input type="radio" name="question2" value="1" required>
                        <span class="option">Vendería todas mis inversiones</span>
                    </label>
                    <label class="option-container">
                        <input type="radio" name="question2" value="2">
                        <span class="option">Evaluaría la situación y consideraría hacer ajustes</span>
                    </label>
                    <label class="option-container">
                        <input type="radio" name="question2" value="3">
                        <span class="option">Mantendría o compraría más inversiones</span>
                    </label>
                </div>
                <div class="buttons">
                    <button type="button" class="prev-btn">Anterior</button>
                    <button type="button" class="next-btn">Siguiente</button>
                </div>
            </div>
            <div class="section" data-section="3">
                <div class="question">
                    <p>¿Cuál es su horizonte temporal de inversión?</p>
                    <label class="option-container">
                        <input type="radio" name="question9" value="1" required>
                        <span class="option">Corto plazo (menos de 1 año)</span>
                    </label>
                    <label class="option-container">
                        <input type="radio" name="question9" value="2">
                        <span class="option">Mediano plazo (1 a 5 años)</span>
                    </label>
                    <label class="option-container">
                        <input type="radio" name="question9" value="3">
                        <span class="option">Largo plazo (más de 5 años)</span>
                    </label>
                </div>
                <div class="buttons">
                    <button type="button" class="prev-btn">Anterior</button>
                    <button type="button" class="next-btn">Siguiente</button>
                </div>
            </div>
            <div class="section" data-section="4">
                <div class="question">
                    <p>¿Qué nivel de volatilidad puede tolerar en sus inversiones?</p>
                    <label class="option-container">
                        <input type="radio" name="question3" value="1" required>
                        <span class="option">Muy baja</span>
                    </label>
                    <label class="option-container">
                        <input type="radio" name="question3" value="2">
                        <span class="option">Moderada</span>
                    </label>
                    <label class="option-container">
                        <input type="radio" name="question3" value="3">
                        <span class="option">Alta</span>
                    </label>
                </div>
                <div class="buttons">
                    <button type="button" class="prev-btn">Anterior</button>
                    <button type="button" class="next-btn">Siguiente</button>
                </div>
            </div>

            <div class="section" data-section="5">
                <div class="question">
                    <p>¿Cuál es su nivel de experiencia en inversiones?</p>
                    <label class="option-container">
                        <input type="radio" name="question4" value="1" required>
                        <span class="option">Principiante</span>
                    </label>
                    <label class="option-container">
                        <input type="radio" name="question4" value="2">
                        <span class="option">Intermedio</span>
                    </label>
                    <label class="option-container">
                        <input type="radio" name="question4" value="3">
                        <span class="option">Avanzado</span>
                    </label>
                </div>
                <div class="buttons">
                    <button type="button" class="prev-btn">Anterior</button>
                    <button type="button" class="next-btn">Siguiente</button>
                </div>
            </div>

            <div class="section" data-section="6">
                <div class="question">
                    <p>¿Con qué frecuencia sigue las noticias y análisis financieros?</p>
                    <label class="option-container">
                        <input type="radio" name="question5" value="1" required>
                        <span class="option">Raramente</span>
                    </label>
                    <label class="option-container">
                        <input type="radio" name="question5" value="2">
                        <span class="option">Ocasionalmente</span>
                    </label>
                    <label class="option-container">
                        <input type="radio" name="question5" value="3">
                        <span class="option">Regularmente</span>
                    </label>
                </div>
                <div class="buttons">
                    <button type="button" class="prev-btn">Anterior</button>
                    <button type="button" class="next-btn">Siguiente</button>
                </div>
            </div>

            <div class="section" data-section="7">
                <div class="question">
                    <p>¿Cuál es la proporción de sus ingresos que puede invertir sin afectar su estilo de vida?</p>
                    <label class="option-container">
                        <input type="radio" name="question6" value="1" required>
                        <span class="option">Menos del 10%</span>
                    </label>
                    <label class="option-container">
                        <input type="radio" name="question6" value="2">
                        <span class="option">Entre 10% y 20%</span>
                    </label>
                    <label class="option-container">
                        <input type="radio" name="question6" value="3">
                        <span class="option">Más del 20%</span>
                    </label>
                </div>
                <div class="buttons">
                    <button type="button" class="prev-btn">Anterior</button>
                    <button type="button" class="next-btn">Siguiente</button>
                </div>
            </div>

            <div class="section" data-section="8">
                <div class="question">
                    <p>¿Cómo describiría su estabilidad financiera actual?</p>
                    <label class="option-container">
                        <input type="radio" name="question7" value="1" required>
                        <span class="option">Inestable</span>
                    </label>
                    <label class="option-container">
                        <input type="radio" name="question7" value="2">
                        <span class="option">Moderadamente estable</span>
                    </label>
                    <label class="option-container">
                        <input type="radio" name="question7" value="3">
                        <span class="option">Muy estable</span>
                    </label>
                </div>
                <div class="buttons">
                    <button type="button" class="prev-btn">Anterior</button>
                    <button type="button" class="next-btn">Siguiente</button>
                </div>
            </div>

            <div class="section" data-section="9">
                <div class="question">
                    <p>¿Qué tipo de activos prefiere en su cartera?</p>
                    <label class="option-container">
                        <input type="radio" name="question8" value="1" required>
                        <span class="option">Bonos y cuentas de ahorro</span>
                    </label>
                    <label class="option-container">
                        <input type="radio" name="question8" value="2">
                        <span class="option">Fondos de inversión mixtos</span>
                    </label>
                    <label class="option-container">
                        <input type="radio" name="question8" value="3">
                        <span class="option">Acciones y bienes raíces</span>
                    </label>
                </div>
                <div class="buttons">
                    <button type="button" class="prev-btn">Anterior</button>
                    <button type="button" class="next-btn">Siguiente</button>
                </div>
            </div>

            <div class="section" data-section="10">
                <div class="question">
                    <p>¿Cuán importante es para usted la diversificación de sus inversiones?</p>
                    <label class="option-container">
                        <input type="radio" name="question9" value="1" required>
                        <span class="option">Muy importante</span>
                    </label>
                    <label class="option-container">
                        <input type="radio" name="question9" value="2">
                        <span class="option">Moderadamente importante</span>
                    </label>
                    <label class="option-container">
                        <input type="radio" name="question9" value="3">
                        <span class="option">Muy importante</span>
                    </label>
                </div>
                <div class="buttons">
                    <button type="button" class="prev-btn">Anterior</button>
                    <button type="submit" class="submit-btn">Enviar</button>
                </div>
            </div>
            
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const sections = document.querySelectorAll('.section');
    const nextBtns = document.querySelectorAll('.next-btn');
    const startNextBtn = document.querySelector('.start-next-btn');
    const prevBtns = document.querySelectorAll('.prev-btn');
    const submitBtn = document.querySelector('.submit-btn');
  

    let currentSection = 0;

    function showSection(index) {
        sections.forEach((section, i) => {
            section.classList.toggle('active', i === index);
        });
        submitBtn.style.display = (index === sections.length - 1) ? 'block' : 'none';
    }

    startNextBtn.addEventListener('click', () => {
        currentSection++;
        showSection(currentSection);
    });

    nextBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            if (currentSection < sections.length - 1) {
                currentSection++;
                showSection(currentSection);
            }
        });
    });

    prevBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            if (currentSection > 0) {
                currentSection--;
                showSection(currentSection);
            }
        });
    });

    showSection(currentSection);
});
    </script>
</body>
</html>
