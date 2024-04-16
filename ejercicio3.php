<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<body>
<h1>Ejercicio 3 Concatenar Textos</h1>
<form action="ejercicio3.php" method="GET">
    <label for="texto1">Texto 1:</label><br>
    <input type="text"name="texto1"><br>
    <label for="texto2">Texto 2:</label><br>
    <input type="text"name="texto2"><br><br>


    <input type="submit" value="Enviar">
</form>
<br><br>
</body>
</html>
<?php

_concatenar();
function _concatenar(){echo $_GET["texto1"] . " " . $_GET["texto2"];}