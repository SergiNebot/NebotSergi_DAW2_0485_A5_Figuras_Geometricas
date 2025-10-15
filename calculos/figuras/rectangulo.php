<?php
class Rectangulo extends Figura {
    function calcular_area()  {
        $base = $_SESSION['base_rectangulo'];
        $altura = $_SESSION['altura_rectangulo'];
        $area = $base * $altura;
        return $area;
    }

    function calcular_perimetro() {
        $base = $_SESSION['base_rectangulo'];
        $altura = $_SESSION['altura_rectangulo'];
        $perimetro = 2 * ($base + $altura);
        return $perimetro;
    }
    function __tostring() {
        return "El área del rectángulo es: " . $this->calcular_area() . "<br><br> El perímetro del rectángulo es: " . $this->calcular_perimetro();
    }
}
?>