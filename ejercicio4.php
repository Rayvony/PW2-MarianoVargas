<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<body>
<h1>Ejercicio 4 Incrementar</h1>
<form action="ejercicio4.php" method="GET">
    <label for="numero">Numero:</label><br>
    <input type="text"name="numero"><br><br>


    <input type="submit" value="Enviar">
</form>
<br><br>
</body>
</html>
<?php
error_reporting(0);

if(isset($_GET["numero"])){
    _incrementar();
}

_incrementar();
function _incrementar(){
    $resultado = $_GET["numero"]+1;
    echo $resultado;
}

