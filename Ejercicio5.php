<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<body>
<h1>Ejercicio 5 Sumatoria</h1>
<form action="ejercicio5.php" method="GET">

    <label for="numero1">Numero 1:</label><br>
    <input type="text"name="numero1"><br>

    <label for="numero2">Numero 2:</label><br>
    <input type="text"name="numero2"><br>

    <label for="numero3">Numero 3:</label><br>
    <input type="text"name="numero3"><br>

    <label for="numero4">Numero 4:</label><br>
    <input type="text"name="numero4"><br>

    <label for="numero5">Numero 5:</label><br>
    <input type="text"name="numero5"><br><br>

    <input type="radio" name="metodo" value="1">
    <label for="metodo">For</label><br>
    <input type="radio" name="metodo" value="2">
    <label for="metodo">For Each</label><br>
    <input type="radio" name="metodo" value="3">
    <label for="metodo">While</label> <br><br>

    <input type="submit" value="Enviar">
</form>
<br><br>
</body>
</html>
<?php
error_reporting(0);
$miVector = array($_GET["numero1"], $_GET["numero2"], $_GET["numero3"],$_GET["numero4"], $_GET["numero5"]);

if ($_GET["metodo"] == 1) {

    _sumatoriaFor($miVector);
}elseif ($_GET["metodo"] == 2){
    _sumatoriaForEach($miVector);
}elseif ($_GET["metodo"] == 3){
    _sumatoriaWhile($miVector);
}

function _sumatoriaForEach($vector) {
    $suma = 0;
    foreach ($vector as $valor) {
        $suma += $valor;
    }
    echo "La suma de los valores es: " . $suma;
}

function _sumatoriaFor($vector) {
    $suma = 0;

    for ($i = 0; $i < count($vector); $i++) {
        $suma += $vector[$i];
    }
    echo "La suma de los valores es: " . $suma;
}

function _sumatoriaWhile($vector)
{
    $suma = 0;
    $i = 0;

    while ($i < count($vector)) {
        $suma += $vector[$i];
        $i++;
    }
    echo "La suma de los valores es: " . $suma;
}
