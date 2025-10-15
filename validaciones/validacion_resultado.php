<?php
session_start();

if (!isset($_POST['envio_final'])){
    header('Location: ../datos_figura.php?errorform=Tienes que enviar el formulario');
    exit();
}

$figura = $_SESSION['figura'];

if ($figura == 'cuadrado'){
    if (isset($_POST['lado_cuadrado']) && is_numeric($_POST['lado_cuadrado']) && $_POST['lado_cuadrado'] > 0){
        $_SESSION['envio_final'] = true;
        $_SESSION['lado_cuadrado'] = $_POST['lado_cuadrado'];
        header('Location: ../resultado.php');
        exit();
    } else {
        header('Location: ../datos_figura.php?errorlado=Tienes que poner un número mayor a 0 para el lado del cuadrado');
        exit();
    }

} else if ($figura == 'rectangulo'){
    if (isset($_POST['base_rectangulo'], $_POST['altura_rectangulo']) &&
        is_numeric($_POST['base_rectangulo']) && $_POST['base_rectangulo'] > 0 &&
        is_numeric($_POST['altura_rectangulo']) && $_POST['altura_rectangulo'] > 0) {

        $_SESSION['envio_final'] = true;
        $_SESSION['base_rectangulo'] = $_POST['base_rectangulo'];
        $_SESSION['altura_rectangulo'] = $_POST['altura_rectangulo'];
        header('Location: ../resultado.php');
        exit();

    } elseif (!isset($_POST['base_rectangulo']) || !is_numeric($_POST['base_rectangulo']) || $_POST['base_rectangulo'] <= 0) {
        header('Location: ../datos_figura.php?errorbase=Tienes que poner un numero mayor a 0 para la base del rectángulo');
        exit();
    } else {
        header('Location: ../datos_figura.php?erroraltura=Tienes que poner un numero mayor a 0 para la altura del rectángulo');
        exit();
    }

} else if ($figura == 'triangulo'){
    if (!(isset($_POST['base_triangulo']) && is_numeric($_POST['base_triangulo']) && $_POST['base_triangulo'] > 0)){
        header('Location: ../datos_figura.php?errorbase=Tienes que poner un numero mayor a 0 para la base del triángulo');
        exit();
    }
    if (!(isset($_POST['altura_triangulo']) && is_numeric($_POST['altura_triangulo']) && $_POST['altura_triangulo'] > 0)){
        header('Location: ../datos_figura.php?erroraltura=Tienes que poner un numero mayor a 0 para la altura del triángulo');
        exit();
    }
    if (!(isset($_POST['lado_1_triangulo']) && is_numeric($_POST['lado_1_triangulo']) && $_POST['lado_1_triangulo'] > 0)){
        header('Location: ../datos_figura.php?errorlado1=Tienes que poner un numero mayor a 0 para el lado 1 del triángulo');
        exit();
    }
    if (!(isset($_POST['lado_2_triangulo']) && is_numeric($_POST['lado_2_triangulo']) && $_POST['lado_2_triangulo'] > 0)){
        header('Location: ../datos_figura.php?errorlado2=Tienes que poner un numero mayor a 0 para el lado 2 del triángulo');
        exit();
    } else {
        $_SESSION['envio_final'] = true;
        $_SESSION['base_triangulo'] = $_POST['base_triangulo'];
        $_SESSION['altura_triangulo'] = $_POST['altura_triangulo'];
        $_SESSION['lado_1_triangulo'] = $_POST['lado_1_triangulo'];
        $_SESSION['lado_2_triangulo'] = $_POST['lado_2_triangulo'];
        header('Location: ../resultado.php');
        exit();
    }

} else if ($figura == 'circulo'){
    if (isset($_POST['radio']) && is_numeric($_POST['radio']) && $_POST['radio'] > 0){
        $_SESSION['envio_final'] = true;
        $_SESSION['radio'] = $_POST['radio'];
        header('Location: ../resultado.php');
        exit();
    } else {
        header('Location: ../datos_figura.php?errorradio=Tienes que poner mayor a 0 para el radio del círculo');
        exit();
    }

} else {
    header('Location: ../datos_figura.php?formaVacia=Tienes que seleccionar una figura');
    exit();
}
