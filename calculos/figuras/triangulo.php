<?php
class Triangulo extends Figura {
    function calcular_area()  {
        $base = $_SESSION['base_triangulo'];
        $altura = $_SESSION['altura_triangulo'];
        $area = ($base * $altura) / 2;
        return $area;
    }

    function calcular_perimetro() {
        $base = $_SESSION['base_triangulo'];
        $lado_1 = $_SESSION['lado_1_triangulo'];
        $lado_2 = $_SESSION['lado_2_triangulo'];
        $perimetro = $base + $lado_1 + $lado_2;
        return $perimetro;
    }
    function __tostring() {
        return "El área del triángulo es: " . $this->calcular_area() . "<br><br> El perímetro es: " . $this->calcular_perimetro();
    }
}
?>