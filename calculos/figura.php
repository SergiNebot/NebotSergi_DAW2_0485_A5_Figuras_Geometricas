<?php

class Figura {
    function set_figura(){
        $this->figura = $_SESSION['figura'];
    }

    function get_figura(){
        return $this->figura;
    }

    function calcular_area(){
        switch ($this->figura) {
            case 'cuadrado':
                include_once "./figuras/cuadrado.php";
                $cuadrado = new Cuadrado();
                return $cuadrado->calcular_area();
                break;
            case 'rectangulo':
                include_once "./figuras/rectangulo.php";
                $rectangulo = new Rectangulo();
                return $rectangulo->calcular_area();
                break;
            case 'triangulo':
                include_once "./figuras/triangulo.php";
                $triangulo = new Triangulo();
                return $triangulo->calcular_area();
                break;
            case 'circulo':
                include_once "./figuras/circulo.php";
                $circulo = new Circulo();
                return $circulo->calcular_area();
                break;
        }
    }

    function calcular_perimetro(){
        switch ($this->figura) {
            case 'cuadrado':
                include_once "./figuras/cuadrado.php";
                $cuadrado = new Cuadrado();
                return $cuadrado->calcular_perimetro();
                break;
            case 'rectangulo':
                include_once "./figuras/rectangulo.php";
                $rectangulo = new Rectangulo();
                return $rectangulo->calcular_perimetro();
                break;
            case 'triangulo':
                include_once "./figuras/triangulo.php";
                $triangulo = new Triangulo();
                return $triangulo->calcular_perimetro();
                break;
            case 'circulo':
                include_once "./figuras/circulo.php";
                $circulo = new Circulo();
                return $circulo->calcular_perimetro();
                break;
        }
    }
}
?>