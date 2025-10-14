<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Formulario Calculo Figuras Geometricas</title>
</head>
<body>
    <form action="./datos_figura.php" method="POST">
        <h1>Calcular figuras geométricas</h1>
        <label for="figura">Selecciona una figura:</label>
        <select name="figura" id="figura" onmouseleave="validar_seleccion_figura()">
            <option selected disabled>Seleccione una figura</option>
            <option value="cuadrado">Cuadrado</option>
            <option value="rectangulo">Rectángulo</option>
            <option value="triangulo">Triángulo</option>
            <option value="circulo">Círculo</option>
        </select><br>
        <p id="error" style="color: red;"></p>
        <button type="submit" name="enviado">Calcular</button>
    </form>

    <?php
        if(isset($_GET['errorform'])) {
            echo "<br><p>{$_GET['errorform']}</p>";
        }
        if(isset($_GET['formaVacia'])) {
            echo "<br><p>{$_GET['formaVacia']}</p>";
        }
    ?>
    <script src="./js/validacion.js"></script>
</body>
</html>
