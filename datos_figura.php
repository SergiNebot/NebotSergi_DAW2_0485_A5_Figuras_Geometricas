<?php
if (!isset($_POST['enviado'])){
    header('Location: ./index.php?errorform=Tienes que enviar el formulario');
} else {

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
    echo "<title>Datos Caluclo $figura</title>";
    echo "</head>";
    echo "<body>";
    echo "  <form action='' method='POST'>
                <input type='text' name=''
            </form>"
    echo "</body>";
    echo "</html>";

}
