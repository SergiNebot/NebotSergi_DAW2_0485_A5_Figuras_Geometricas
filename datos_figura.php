<?php
session_start();
if (!isset($_SESSION['enviado_1']) || $_SESSION['enviado_1'] == false) {
    header('Location: ./index.php?errorform=Tienes que enviar el formulario');
    exit();
} else {
    $figura = $_SESSION['figura'];

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Datos cálculo $figura</title>";
echo "</head>";
echo "<body>";
echo "<h2>Ingresar datos para la figura: $figura</h2>";

echo "<form action='./validaciones/validacion_resultado.php' method='POST'>";

switch ($figura) {
    case 'cuadrado':
        echo "
        <label for='lado_cuadrado'>Lado del cuadrado:</label>
        <input type='number' id='lado_cuadrado' name='lado_cuadrado' onblur='validar_lado_cuadrado()'><br>
        <p id='error' class='error'></p>";
        if (isset($_GET['errorlado'])) {
            echo "<p class='error'>{$_GET['errorlado']}</p>";
        }
        break;

    case 'rectangulo':
        echo "
        <label for='base_rectangulo'>Base del rectángulo:</label>
        <input type='number' id='base_rectangulo' name='base_rectangulo' onblur='validar_base_rectangulo()'><br>
        <p id='error' class='error'></p>
        <label for='altura_rectangulo'>Altura del rectángulo:</label>
        <input type='number' id='altura_rectangulo' name='altura_rectangulo' onblur='validar_altura_rectangulo()'><br>
        <p id='error_2' class='error'></p>";
        if (isset($_GET['errorbase'])) {
            echo "<p class='error'>{$_GET['errorbase']}</p>";
        }
        break;

    case 'triangulo':
        echo "
        <label for='base_triangulo'>Base del triángulo:</label>
        <input type='number' id='base_triangulo' name='base_triangulo' onblur='validar_base_triangulo()'><br>
        <p id='error' class='error'></p>
        <label for='altura_triangulo'>Altura del triángulo:</label>
        <input type='number' id='altura_triangulo' name='altura_triangulo' onblur='validar_altura_triangulo()'><br>
        <p id='error_2' class='error'></p>
        <label for='lado_1_triangulo'>Primer lado:</label>
        <input type='number' id='lado_1_triangulo' name='lado_1_triangulo' onblur='validar_primer_lado_triangulo()'><br>
        <p id='error_3' class='error'></p>
        <label for='lado_2_triangulo'>Segundo lado:</label>
        <input type='number' id='lado_2_triangulo' name='lado_2_triangulo' onblur='validar_segundo_lado_triangulo()'><br>
        <p id='error_4' class='error'></p>";
        if (isset($_GET['errorbase'])) {
            echo "<p class='error'>{$_GET['errorbase']}</p>";
        }
        if (isset($_GET['erroraltura'])) {
            echo "<p class='error'>{$_GET['erroraltura']}</p>";
        }
        if (isset($_GET['errorlado1'])) {
            echo "<p class='error'>{$_GET['errorlado1']}</p>";
        }
        if (isset($_GET['errorlado2'])) {
            echo "<p class='error'>{$_GET['errorlado2']}</p>";
        }
        break;

    case 'circulo':
        echo "
        <label for='radio'>Radio del círculo:</label>
        <input type='number' id='radio' name='radio' onblur='validar_radio_circulo()'><br>
        <p id='error' class='error'></p>";
        if (isset($_GET['errorradio'])) {
            echo "<p class='error'>{$_GET['errorradio']}</p>";
        }
        break;
}

echo "<br><br><button type='submit' name='envio_final'>Calcular</button>";
echo "</form>";
echo "<script src='./js/validacion.js'></script>";
echo "</body>";
echo "</html>";
}
?>
