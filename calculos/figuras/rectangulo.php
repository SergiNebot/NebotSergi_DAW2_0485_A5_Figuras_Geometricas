<?php
class Rectangulo extends Figura {
    function calcular_area()  {
        $base = $_POST['base_rectangulo'];
        $altura = $_POST['altura_rectangulo'];
        $area = $base * $altura;
        return $area;
    }

    function calcular_perimetro() {
        $base = $_POST['base_rectangulo'];
        $altura = $_POST['altura_rectangulo'];
        $perimetro = 2 * ($base + $altura);
        return $perimetro;
    }
}
?>