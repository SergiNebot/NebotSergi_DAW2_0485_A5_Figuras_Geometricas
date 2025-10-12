<?php
class Cuadrado extends Figura {
    function calcular_area()  {
        $lado = $_POST['lado_cuadrado'];
        $area = $lado ** 2;
        return $area;
    }

    function calcular_perimetro() {
        $lado = $_POST['lado_cuadrado'];
        $perimetro = 4 * $lado;
        return $perimetro;
    }
}
?>