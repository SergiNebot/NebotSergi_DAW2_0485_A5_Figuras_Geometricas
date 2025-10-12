<?php
session_start();
if (!isset($_POST['enviado'])){
    header('Location: ./index.php?errorform=Tienes que enviar el formulario');
} else {
    if (isset($_POST['figura'])){
        $figura=$_POST['figura'];
        $_SESSION['figura']=$figura;
    } else {
        header('Location: ./index.php?formaVacia=Tienes que seleccionar una figura');
    }
    
    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Datos calculo  $figura</title>";
    echo "</head>";
    echo "<body>";
    echo "<h2>Ingresar datos para poder hacer los calculos de la siguiente figura ($figura)</h2>";
    echo "  <form action='./resultado.php' method='POST'>";
                if ($figura == 'cuadrado'){
                    echo "
                    <label for='lado_cuadrado'>Pon el lado del cuadrado</label>
                    <input type='number' id='lado_cuadrado' name='lado_cuadrado'>";
                } else if ($figura == 'rectangulo'){
                    echo "
                    <label for='base_rectangulo'>Pon la base del rectangulo</label>
                    <input type='number' id='base_rectangulo' name='base_rectangulo'><br><br>
                    <label for='altura_rectangulo'>Pon la altura del rectangulo</label>
                    <input type='number' id='altura_rectangulo' name='altura_rectangulo'>";                    
                } else if ($figura == 'triangulo'){
                    echo "
                    <label for='base_triangulo'>Pon la base del triángulo:</label>
                    <input type='number' id='base_triangulo' name='base_triangulo'><br><br>
                    <label for='altura_triangulo'>Pon la altura del triángulo:</label>
                    <input type='number' id='altura_triangulo' name='altura_triangulo'><br><br>
                    <label for='lado_1_triangulo'>Pon el primer lado del triángulo:</label>
                    <input type='number' id='lado_1_triangulo' name='lado_1_triangulo'><br><br>
                    <label for='lado_2_triangulo'>Pon el segundo lado del triángulo:</label>
                    <input type='number' id='lado_2_triangulo' name='lado_2_triangulo'><br><br>";
                } else if ($figura == 'circulo'){
                    echo "
                    <label for='radio'>Pon el radio del circulo</label>
                    <input type='number' id='radio' name='radio'>";                    
                }
                echo "<br><br>
                <button type='submit' name='envio_final'>Calcular</button>
            </form>";
    echo "</body>";
    echo "</html>";

}
