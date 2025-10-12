<?php

class Triangulo extends Figura {
    function calcular_area()  {
        $base = $_POST['base_triangulo'];
        $altura = $_POST['altura_triangulo'];
        $area = ($base * $altura) / 2;
        return $area;
    }

    function calcular_perimetro() {
        $base = $_POST['base_triangulo'];
        $lado_1 = $_POST['lado_1_triangulo'];
        $lado_2 = $_POST['lado_2_triangulo'];
        $perimetro = $base + $lado_1 + $lado_2;
        return $perimetro;
    }
}
?>