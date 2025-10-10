<?php

class Forma {
    $forma = $_POST['forma'];
    
    function set_forma(){
        $this->forma=$forma;
    }

    function get_forma(){
        $this->forma;
    }

    function calcular_area(){
        switch ($this->forma) {
            case 'cuadrado':
                $lado = $_POST['lado'];
                $area = $lado * $lado;
                return $area;
                break;
            case 'rectangulo':
                $base = $_POST['base'];
                $altura = $_POST['altura'];
                $area = $base * $altura;
                return $area;
                break;
            case 'triangulo':
                $base = $_POST['base'];
                $altura = $_POST['altura'];
                $area = ($base * $altura) / 2;
                return $area;
                break;
            case 'circulo':
                $radio = $_POST['radio'];
                $area = pi() * $radio ** 2
                return $area;
                break;
        }
    }
    function calcular_perimetro(){
        switch ($this->forma) {
            case 'cuadrado':
                $lado = $_POST['lado'];
                $perimetro = 
                return $area;
                break;
            case 'rectangulo':
                $base = $_POST['base'];
                $altura = $_POST['altura'];
                $perimetro = 
                return $area;
                break;
            case 'triangulo':
                $base = $_POST['base'];
                $lado_1 = $_POST['lado_1'];
                $lado_2 = $_POST['lado_2'];
                $perimetro = $base + $lado_1 + $lado_2;
                return $perimetro;
                break;
            case 'circulo':
                $radio = $_POST['radio'];
                $perimetro = 2 * pi() * $radio;
                return $perimetro;
                break;
        }
    }
}

?>