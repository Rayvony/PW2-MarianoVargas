<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Ejercicio 1 Semaforo</h1>
<form action="ejercicio1.php" method="GET">
    <label for="Color">Color:</label><br>
    <input type="text" id="color" name="color"><br><br>

    <input type="radio" name="metodo" value="1">
    <label for="metodoA">Metodo A</label><br>
    <input type="radio" name="metodo" value="2">
    <label for="metodoB">Metodo B</label><br>
    <input type="radio" name="metodo" value="3">
    <label for="metodoC">Metodo C</label> <br><br>

    <input type="submit" value="Enviar">
</form>
<br><br>


</body>
</html>
<?php
error_reporting(0);
if ($_GET["metodo"] == 1) {
    _colorA();
}elseif ($_GET["metodo"] == 2){
    _colorB();
}elseif ($_GET["metodo"] == 3){
    _colorC();
}

function _colorA() {
    if ($_GET["color"] == "rojo"){
        echo "Frena Maestro!";
    } elseif ($_GET["color"] == "amarillo"){
        echo "Precaucion";
    } elseif ($_GET["color"] == "verde"){
        echo "Movete Pibe";
    } else{ echo "Estado desconocido";
    }
}

function _colorB() {
    $resultado = ($_GET["color"] == "rojo") ? "Frene" : (($_GET["color"] == "amarillo") ? "Precaucion" : (($_GET["color"] == "verde") ? "Movete" : "Estado Desconocido"));
    echo $resultado;
}

function _colorC() {
    switch ($_GET["color"]) {
        case "rojo":
            echo "Frena Pa!";
            break;
        case "amarillo":
            echo "Guarda";
            break;
        case "verde":
            echo "CORRREEEEEEEEEEE";
            break;
        default:
            echo "Estado desconocido";
    }
}



?>