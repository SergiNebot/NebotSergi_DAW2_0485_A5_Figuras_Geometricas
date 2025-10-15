<?php
session_start();
if (!isset($_POST['enviado'])) {
    header('Location: ../index.php?errorform=Tienes que enviar el formulario');
    exit();
} else {
    $_SESSION['enviado_1'] = true;

    if (!isset($_POST['figura']) || $_POST['figura'] === '') {
    header('Location: ../index.php?formaVacia=Tienes que seleccionar una figura');
    exit();
    } else {
        if (isset($_POST['figura']) && $_POST['figura'] !== '') {
            $_SESSION['figura'] = $_POST['figura'];
            header('Location: ../datos_figura.php');
            exit();
        }
    }
}

?>