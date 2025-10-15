<?php
class Cuadrado extends Figura {
    function calcular_area()  {
        $lado = $_SESSION['lado_cuadrado'];
        $area = $lado ** 2;
        return $area;
    }

    function calcular_perimetro() {
        $lado = $_SESSION['lado_cuadrado'];
        $perimetro = 4 * $lado;
        return $perimetro;
    }
    function __tostring() {
        return "El área del cuadrado es: " . $this->calcular_area() . "<br><br> El perímetro del cuadrado es: " . $this->calcular_perimetro();
    }
}
?>