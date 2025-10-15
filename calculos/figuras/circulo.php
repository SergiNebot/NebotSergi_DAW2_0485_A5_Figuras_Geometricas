<?php
class Circulo extends Figura {
    function calcular_area()  {
        $radio = $_SESSION['radio'];
        $area = pi() * $radio ** 2;
        return $area;
    }

    function calcular_perimetro() {
        $radio = $_SESSION['radio'];
        $perimetro = 2 * pi() * $radio;
        return $perimetro;
    }

    function __tostring() {
        return "El área del círculo es: " . $this->calcular_area() . "<br><br> El perímetro del círculo es: " . $this->calcular_perimetro();
    }
}
?>