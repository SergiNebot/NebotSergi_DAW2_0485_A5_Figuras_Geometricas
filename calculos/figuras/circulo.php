<?php
class Circulo extends Figura {
    function calcular_area()  {
        $radio = $_POST['radio'];
        $area = pi() * $radio ** 2;
        return $area;
    }

    function calcular_perimetro() {
        $radio = $_POST['radio'];
        $perimetro = 2 * pi() * $radio;
        return $perimetro;
    }
}
?>