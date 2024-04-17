<?php include('header.php'); ?>
<!DOCTYPE html>
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

if(isset($_GET["texto1"]) && isset($_GET["texto2"])){
    _concatenar();
}
function _concatenar(){echo $_GET["texto1"] . " " . $_GET["texto2"];}

include('footer.php');
