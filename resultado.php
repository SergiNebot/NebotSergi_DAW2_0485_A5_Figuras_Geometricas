<?php
session_start();

if (!isset($_SESSION['envio_final']) || $_SESSION['envio_final'] !== true) {
    header('Location: ./index.php?errorform=Tienes que enviar el formulario');
    exit();
}

require_once "./calculos/figura.php";
require_once "./calculos/figuras/cuadrado.php";
require_once "./calculos/figuras/rectangulo.php";
require_once "./calculos/figuras/triangulo.php";
require_once "./calculos/figuras/circulo.php";

$figura_seleccionada = $_SESSION['figura'];

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Resultado calculo $figura_seleccionada</title>";
echo "</head>";
echo "<body>";
echo "<h2>Resultado de los calculos de la siguiente figura ($figura_seleccionada)</h2>";

switch($figura_seleccionada) {
    case 'cuadrado':
        $figura = new Cuadrado();
        break;
    case 'rectangulo':
        $figura = new Rectangulo();
        break;
    case 'triangulo':
        $figura = new Triangulo();
        break;
    case 'circulo':
        $figura = new Circulo();
        break;
}

echo $figura;

echo "</body>";
echo "</html>";
?>