<?php
if (!isset($_POST['envio_final']) ){
    header('Location: ./index.php?errorform=Tienes que enviar el formulario');
} else {
    require_once "./calculos/formas.php";
    

}
