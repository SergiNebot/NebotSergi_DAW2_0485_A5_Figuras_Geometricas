<?php
session_start();
if (!isset($_POST['enviado'])){
    header('Location: ./index.php?errorform=Tienes que enviar el formulario');
} else {
    // require_once "./calculos/formas.php";
    if (isset($_POST['figura'])){
        $figura=$_POST['figura'];
    } else {
        header('Location: ./index.php?formaVacia=Tienes que seleccionar una figura');
    }
    
    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Datos calculo  $figura</title>";
    echo "</head>";
    echo "<body>";
    echo "  <form action='./resultado.php' method='POST'>";
                if ($figura == 'cuadrado'){
                    echo "
                    <label for='lado'>Pon el lado para calcular el area del cuadrado</label>
                    <input type='number' id='lado' name='lado'>";
                } else if ($figura == 'rectangulo'){

                }
                "
                <br><br>
                <button type='submit' name='envio_final'>Calcular</button>
            </form>";
    echo "</body>";
    echo "</html>";

}
